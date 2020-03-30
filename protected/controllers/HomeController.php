<?php

class HomeController extends Controller
{

	public function actions()
	{
		return array(
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
		);
	}	

	public function actionDummy()
	{
		Dummy::createDummyProduct();
		echo '<META http-equiv="refresh" content="0;URL=http://localhost/dv-computers/home/dummy">';
	}

	public function actionLanding()
	{

		$this->layout='//layouts/columnKosong';
		$this->render('landing', array(
		));
	}

	public function actionBlankpage()
	{
		$sn_title = ucwords($_GET['title']);
		$this->pageTitle = $sn_title.' - '.$this->pageTitle;
		$this->layout='//layouts/column1';

		$this->render('blank_page', array(
		));
	}

	public function actionIndex()
	{
		$check_log = MeMember::model()->checkLogin();
		if ($check_log ===  true) {
			$this->redirect(array('logged'));
		}

		$session = new CHttpSession;
		$session->open();

		$modelLogin = new LoginForm2;
		if(isset($_POST['LoginForm2']))
		{
			$modelLogin->attributes=$_POST['LoginForm2'];
			// validate user input and redirect to the previous page if valid
			if($modelLogin->validate()){
				$data = MeMember::model()->find('t.username = :username', array(':username'=>$modelLogin->username));
				$session['login_member'] = $data->attributes;

				$this->redirect(array('logged'));
			}else{
			    $this->redirect(array('index'));
			}
		}

		$this->layout='//layouts/column1';
		$this->render('index', array(
			'modelLogin'=>$modelLogin,
		));
	}

	public function actionLogged()
	{
		$check_log = MeMember::model()->checkLogin();
		if ($check_log ===  false) {
			$this->redirect(array('index'));
		}

		$this->layout='//layouts/column2';
		$this->pageTitle = Yii::app()->name.' - '.$this->pageTitle;

		$this->render('home_dashboard', array(	
		));
	}

	public function actionEditProfile()
	{
		$check_log = MeMember::model()->checkLogin();
		if ($check_log ===  false) {
			$this->redirect(array('index'));
		}

		$session = new CHttpSession;
		$session->open();
		$model = MeMember::model()->findByPk($session['login_member']['id']);
		if(isset($_POST['MeMember'])) {
			$pass = $model->pass;
			$model->attributes = $_POST['MeMember'];
			if ($_POST['MeMember']['passold'] != '') {
				$model->scenario = 'updatePass';
				$model->pass = sha1($model->pass);
				$model->pass2 = sha1($model->pass2);
			}else{
				$model->scenario = 'update';
				$model->pass = $pass;
			}
			if ($model->validate()) {
				if ($_POST['MeMember']['passold'] != '') {
					if (sha1($model->passold) != $pass) {
						$model->addError('passold','Password lama tidak valid');
					}
				}
				if(!$model->hasErrors())
				{
					$model->save();
					$this->redirect(array());
				}
			}
		}

		$model->pass = '';
		$model->pass2 = '';
		$model->passold = '';

		$this->layout='//layouts/column2';

		$this->render('edit_profile', array(	
			'model'=> $model,
		));	
	}

	public function actionLogout()
	{
		$session = new CHttpSession;
		$session->open();
		unset($session['login_member']);

		$this->redirect(array('index'));
	}

	public function actionSubject()
	{
		$this->layout='//layouts/column2';
		$this->pageTitle = Yii::app()->name.' - '.$this->pageTitle;

		$model = array();
		$criteria = new CDbCriteria;
		$criteria->order = 't.id DESC';
		$data1 =  TugasKepentingan::model()->findAll($criteria);
		foreach($data1 as $key => $value) {
			$tugas_data = TugasLists::model()->findAll('t.subject_kepentingan = :subject_kepentingan order by t.id DESC', array(':subject_kepentingan'=>$value->id));
			$n_total = count($tugas_data);
			$n_selesai_{$key} = 0;
			$n_belum_{$key} = 0;
			foreach ($tugas_data as $ke => $val) {
					if ($val->status == 'selesai'):
                    $n_selesai_{$key} = $n_selesai_{$key} + 1;
                    endif;

                    if ($val->status == 'belum'):
                    $n_belum_{$key} = $n_belum_{$key} + 1;
                    endif;
			}

			$model[] = [
						'id' => $value->id,
						'kepentingan' => $value->kepentingan,
						'nama_kepentingan' => $value->nama_kepentingan,
						'total_tugas' => $n_total,
						'n_selesai' => $n_selesai_{$key},
						'n_belum' => $n_belum_{$key},
						];
		}

		$this->render('//subject/index', array(	
			'model'=> $model,
		));	
	}

	public function actionSubject_list()
	{
		$this->layout='//layouts/column2';
		$this->pageTitle = Yii::app()->name.' - '.$this->pageTitle;
		
		$kep_id = intval($_GET['kepentingan_id']);

		$session = new CHttpSession;
		$session->open();
		$model_user = MeMember::model()->findByPk($session['login_member']['id']);


		$data_model = Yii::app()->db->createCommand()
	    ->select('t.*')
	    ->from('tb_tugas_lists t')
	    ->where('(t.subject_kepentingan=:subj) and (t.member_id=:member_id or t.admin_id=:admin_id)', 
		    		array( 
		    			':subj' => $kep_id,
		    			':member_id' => $model_user->id,
		    			':admin_id' => $model_user->id,
		    			 )
		    		)
		->order(array('t.date_input desc'))
	    ->queryAll();

	    // echo "<pre>"; print_r($data_model); exit;

		$this->render('//subject/listing', array(	
			'mod_listdata' => $data_model,
		));	
	}

	public function actionSubject_update()
	{
		if (isset($_GET['data_id']) && $_GET['data_id'] != '') {
			$id_data = intval($_GET['data_id']);
			$model = TugasLists::model()->findByPk($id_data);

			// selesai pemberi
			if (isset($_GET['flex_selesai_pemberi']) && $_GET['flex_selesai_pemberi'] == 1) {
				$model->flex_selesai_pemberi = 1;
				$model->date_selesai_pemberi = date("Y-m-d H:i:s");

				$model->status = 'selesai';
				$model->lock_selesai = 1; 
				
				$model->date_selesai_user =  date("Y-m-d H:i:s");

				$date1 = date("Y-m-d", strtotime($model->date_finish));
				$date2 = date("Y-m-d", strtotime($model->date_selesai_user));

				$now_finish = strtotime($date1);
				$your_date = strtotime($date2);
				$datediff = $now_finish - $your_date;

				$results_time = round($datediff / (60 * 60 * 24));

				if ($results_time >= 0) {
					$model->status_selesai = 'under';
				}else{
					$model->status_selesai = 'over';
				}
				$model->save(false);	
			}

			if (isset($_GET['lock_start']) && $_GET['lock_start'] == 1) {
				$model->lock_start = 1;
				$model->date_start_user = date("Y-m-d H:i:s");
				$model->save(false);	
			}

			if (isset($_GET['flex_selesai_pelaksana']) && $_GET['flex_selesai_pelaksana'] == 1) {
				$model->flex_selesai_pelaksana = 1;
				$model->date_selesai_user = date("Y-m-d H:i:s");
				$model->save(false);
			}

			Yii::app()->user->setFlash('success','Data Edited');

			$this->redirect(array('subject_list', 'kepentingan_id'=> $model->subject_kepentingan));
		}
	}

	public function actionSubject_addtugas()
	{
		$this->layout='//layouts/column2';
		$this->pageTitle = Yii::app()->name.' - '.$this->pageTitle;

		$model=new TugasLists;

		$this->render('//subject/add_tugas', array(	
			'model' => $model,
		));	
	}	

	public function actionMusik()
	{

		$criteria = new CDbCriteria;
		$criteria->with = array('description');
		$criteria->addCondition('active = "1"');
		$criteria->addCondition('type = "musik"');
		$criteria->addCondition('description.language_id = :language_id');
		$criteria->params[':language_id'] = $this->languageID;
		$criteria->order = 'description.title ASC';
		$dataBlog = new CActiveDataProvider('Blog', array(
			'criteria'=>$criteria,
		    'pagination'=>array(
		        'pageSize'=>50,
		    ),
		));

		$this->pageTitle = 'Musik - '.$this->pageTitle;
		$this->layout='//layouts/column1';

		$this->render('musik', array(
			'dataBlog'=>$dataBlog,
		));
	}

	public function actionMusikdetail($id)
	{
		$criteria = new CDbCriteria;
		$criteria->with = array('description');
		$criteria->addCondition('active = "1"');
		$criteria->addCondition('type = "musik"');
		$criteria->addCondition('description.language_id = :language_id');
		$criteria->params[':language_id'] = $this->languageID;
		$criteria->addCondition('t.id = :id');
		$criteria->params[':id'] = $id;
		$criteria->order = 'date_input DESC';
		$detail = Blog::model()->find($criteria);
		if($detail===null)
			throw new CHttpException(404,'The requested page does not exist.');

		$this->pageTitle = $detail->description->title.' - '.$this->pageTitle;
		$this->layout='//layouts/column2';

		$this->render('musik_detail', array(	
			'detail'=>$detail,
		));
	}

	public function actionLiterasi()
	{

		$criteria = new CDbCriteria;
		$criteria->with = array('description');
		$criteria->addCondition('t.parent_id = :parent_id');
		$criteria->params[':parent_id'] = 0;
		$criteria->addCondition('description.language_id = :language_id');
		$criteria->params[':language_id'] = $this->languageID;
		$criteria->addCondition('t.type = :type');
		$criteria->params[':type'] = 'filterliterasi';
		$criteria->order = 'sort ASC';
		$categories = PrdCategory::model()->findAll($criteria);

		$this->pageTitle = 'Literasi - '.$this->pageTitle;
		$this->layout='//layouts/column1';

		$this->render('literasi', array(
			'categories'=>$categories,
		));
	}

	public function actionLiterasidetail($id)
	{
		$criteria = new CDbCriteria;
		$criteria->with = array('description');
		$criteria->addCondition('active = "1"');
		$criteria->addCondition('type = "literasi"');
		$criteria->addCondition('description.language_id = :language_id');
		$criteria->params[':language_id'] = $this->languageID;
		$criteria->addCondition('t.id = :id');
		$criteria->params[':id'] = $id;
		$criteria->order = 'date_input DESC';
		$detail = Blog::model()->find($criteria);
		if($detail===null)
			throw new CHttpException(404,'The requested page does not exist.');

		$criteria = new CDbCriteria;
		$criteria->with = array('description');
		$criteria->addCondition('t.id = :id');
		$criteria->params[':id'] = $detail->topik_id;
		$criteria->addCondition('description.language_id = :language_id');
		$criteria->params[':language_id'] = $this->languageID;
		$criteria->addCondition('t.type = :type');
		$criteria->params[':type'] = 'filterliterasi';
		$criteria->order = 'sort ASC';
		$category = PrdCategory::model()->find($criteria);

		$criteria = new CDbCriteria;
		$criteria->with = array('description');
		$criteria->addCondition('active = "1"');
		$criteria->addCondition('type = "literasiprofile"');
		$criteria->addCondition('t.topik_id = :topik_id');
		$criteria->params[':topik_id'] = $detail->id;
		$criteria->addCondition('description.language_id = :language_id');
		$criteria->params[':language_id'] = $this->languageID;
		$criteria->order = 'date_input DESC';
		$dataProfile = Blog::model()->findAll($criteria);

		$this->pageTitle = $detail->description->title.' - '.$this->pageTitle;
		$this->layout='//layouts/column2';

		$this->render('literasi_detail', array(
			'detail'=>$detail,
			'dataProfile'=>$dataProfile,
			'category'=>$category,
		));
	}

	public function actionLiterasiprofile($id)
	{
		$criteria = new CDbCriteria;
		$criteria->with = array('description');
		$criteria->addCondition('active = "1"');
		$criteria->addCondition('type = "literasiprofile"');
		$criteria->addCondition('description.language_id = :language_id');
		$criteria->params[':language_id'] = $this->languageID;
		$criteria->addCondition('t.id = :id');
		$criteria->params[':id'] = $id;
		$criteria->order = 'date_input DESC';
		$detail = Blog::model()->find($criteria);
		if($detail===null)
			throw new CHttpException(404,'The requested page does not exist.');

		$criteria = new CDbCriteria;
		$criteria->with = array('description');
		$criteria->addCondition('t.id = :id');
		$criteria->params[':id'] = $detail->topik_id;
		$criteria->addCondition('description.language_id = :language_id');
		$criteria->params[':language_id'] = $this->languageID;
		$criteria->addCondition('t.type = :type');
		$criteria->params[':type'] = 'filterliterasi';
		$criteria->order = 'sort ASC';
		$category = PrdCategory::model()->find($criteria);

		$criteria = new CDbCriteria;
		$criteria->with = array('description');
		$criteria->addCondition('active = "1"');
		$criteria->addCondition('type = "literasiprofile"');
		$criteria->addCondition('t.topik_id = :topik_id');
		$criteria->params[':topik_id'] = $detail->id;
		$criteria->addCondition('description.language_id = :language_id');
		$criteria->params[':language_id'] = $this->languageID;
		$criteria->order = 'date_input DESC';
		$dataProfile = Blog::model()->findAll($criteria);

		$this->pageTitle = $detail->description->title.' - '.$this->pageTitle;
		$this->layout='//layouts/column2';

		$this->render('literasi_profile', array(
			'detail'=>$detail,
			'dataProfile'=>$dataProfile,
			'category'=>$category,
		));
	}

	public function actionBlog()
	{

		$criteria = new CDbCriteria;
		$criteria->with = array('description');
		$criteria->addCondition('active = "1"');
		$criteria->addCondition('type = ""');
		$criteria->addCondition('description.language_id = :language_id');
		$criteria->params[':language_id'] = $this->languageID;
		$criteria->order = 'date_input DESC';
		$dataBlog = new CActiveDataProvider('Blog', array(
			'criteria'=>$criteria,
		    'pagination'=>array(
		        'pageSize'=>9,
		    ),
		));

		$this->pageTitle = 'Musik - '.$this->pageTitle;
		$this->layout='//layouts/column1';

		$this->render('blog', array(
			'dataBlog'=>$dataBlog,
		));
	}

	public function actionBlogdetail($id)
	{
		$criteria = new CDbCriteria;
		$criteria->with = array('description');
		$criteria->addCondition('active = "1"');
		$criteria->addCondition('type = ""');
		$criteria->addCondition('description.language_id = :language_id');
		$criteria->params[':language_id'] = $this->languageID;
		$criteria->addCondition('t.id = :id');
		$criteria->params[':id'] = $id;
		$criteria->order = 'date_input DESC';
		$detail = Blog::model()->find($criteria);
		if($detail===null)
			throw new CHttpException(404,'The requested page does not exist.');

		$this->pageTitle = $detail->description->title.' - '.$this->pageTitle;
		$this->layout='//layouts/column2';

		$this->render('blog_detail', array(	
			'detail'=>$detail,
		));
	}

	public function actionHubungi()
	{
		$this->pageTitle = $this->setting['contact_hero_title'].' - '.$this->pageTitle;
		$this->layout='//layouts/column2';

		$this->render('hubungi', array(	
		));
	}

	public function actionProfil()
	{
		$this->pageTitle = 'Profil - '.$this->pageTitle;
		$this->layout='//layouts/column2';

		$this->render('profil', array(	
		));
	}

	public function actionKarir()
	{
		$this->pageTitle = $this->setting['career_hero_title'].' - '.$this->pageTitle;
		$this->layout='//layouts/column2';

		$karirs = Career::model()->findAll();

		$this->render('karir', array(	
			'list_karir' => $karirs,
		));
	}

	public function actionOpen()
	{
		$this->layout='//layouts/column2';

		$criteria = new CDbCriteria;
		$criteria->with = array('description');
		$criteria->addCondition('active = "1"');
		$criteria->addCondition('description.language_id = :language_id');
		$criteria->params[':language_id'] = $this->languageID;
		$criteria->addCondition('t.id = :ids');
		$criteria->params[':ids'] = intval($_GET['id']);
		$criteria->order = 'date_input DESC';
		$model = Solusi::model()->find( $criteria );

		$criteria = new CDbCriteria;
		$criteria->with = array('description');
		$criteria->addCondition('active = "1"');
		$criteria->addCondition('description.language_id = :language_id');
		$criteria->params[':language_id'] = $this->languageID;
		// $criteria->addCondition('t.id != :ids');
		// $criteria->params[':ids'] = intval($_GET['id']);
		$criteria->order = 'date_input DESC';
		$others = Solusi::model()->findAll( $criteria );

		$this->pageTitle = $model->description->title.' - Open - '.$this->pageTitle;

		$this->render('open', array(	
			'model' => $model,
			'other' => $others,
		));
	}

	public function actionArtikel()
	{
		$this->pageTitle = $this->setting['artikel_hero_title'].' - '.$this->pageTitle;
		$this->layout='//layouts/column2';

		$criteria = new CDbCriteria;
		$criteria->with = array('description');
		$criteria->addCondition('active = "1"');
		$criteria->addCondition('description.language_id = :language_id');
		$criteria->params[':language_id'] = $this->languageID;
		$criteria->order = 'date_input DESC';
		$dataBlog = new CActiveDataProvider('Blog', array(
			'criteria'=>$criteria,
		    'pagination'=>array(
		        'pageSize'=>9,
		    ),
		));

		$this->render('artikel', array(	
			'dataBlog'=>$dataBlog,
		));
	}

	public function actionArtikel_detail($id)
	{
		$this->pageTitle = 'Artikel detail - '.$this->pageTitle;
		$this->layout='//layouts/column2';

		$id = intval($id);
		$criteria = new CDbCriteria;
		$criteria->with = array('description');
		$criteria->addCondition('active = "1"');
		$criteria->addCondition('description.language_id = :language_id');
		$criteria->params[':language_id'] = $this->languageID;
		$criteria->addCondition('t.id = :id');
		$criteria->params[':id'] = $id;
		$criteria->order = 'date_input DESC';
		$detail = Blog::model()->find($criteria);
		if($detail===null)
			throw new CHttpException(404,'The requested page does not exist.');


		$criteria = new CDbCriteria;
		$criteria->with = array('description');
		$criteria->addCondition('active = "1"');
		$criteria->addCondition('description.language_id = :language_id');
		$criteria->params[':language_id'] = $this->languageID;
		$criteria->addCondition('t.id != :id');
		$criteria->params[':id'] = $id;
		$criteria->order = 'date_input DESC';
		$criteria->limit = 3;
		$others = Blog::model()->findAll($criteria);

		$this->render('artikel_detail', array(
			'detail' => $detail,
			'others' => $others,
		));
	}

	public function actionTahun()
	{
		$this->pageTitle = 'Tahun - '.$this->pageTitle;
		$this->layout='//layouts/column1';

		$this->render('tahun', array(	
		));
	}

	// --------------------------- GAK KEPAKEK -----------------------------

	public function actionSolution()
	{
		$criteria = new CDbCriteria;
		$criteria->with = array('description');
		$criteria->addCondition('description.language_id = :language_id');
		$criteria->params[':language_id'] = $this->languageID;
		$dataBrand = Brand::model()->findAll($criteria);

		$this->pageTitle = 'Solutions - '. $this->pageTitle;

		$this->render('solution', array(	
			'dataBrand'=>$dataBrand,
		));
	}

	public function actionProducts()
	{
		$criteria=new CDbCriteria;
		$criteria->with = array('description', 'categories');
		$criteria->order = 'date DESC';
		$criteria->addCondition('status = "1"');
		// $criteria->addCondition('terlaris = "1"');
		$criteria->addCondition('description.language_id = :language_id');
		$criteria->params[':language_id'] = $this->languageID;

		$category = null;
		if ($_GET['category']) {
			$criteria->addCondition('t.category_id = :category_id');
			$criteria->params[':category_id'] = $_GET['category'];

			$criteria2 = new CDbCriteria;
			$criteria2->with = array('description');
			$criteria2->addCondition('t.id = :id');
			$criteria2->params[':id'] = $_GET['category'];
			$criteria2->addCondition('description.language_id = :language_id');
			$criteria2->params[':language_id'] = $this->languageID;
			$category = PrdCategory::model()->find($criteria2);
		}
		if ($_GET['solution']) {
			$criteria->addCondition('categories.category_id = :categories');
			$criteria->params[':categories'] = $_GET['solution'];
		}
		if ($_GET['q']) {
			$criteria->addCondition('description.name LIKE :q OR description.desc LIKE :q OR t.tag LIKE :q');
			$criteria->params[':q'] = '%'.$_GET['q'].'%';
		}
		$pageSize = 12;
		$criteria->group = 't.id';
		$product = new CActiveDataProvider('PrdProduct', array(
			'criteria'=>$criteria,
		    'pagination'=>array(
		        'pageSize'=>$pageSize,
		    ),
		));

		$this->pageTitle = 'Products - '. $this->pageTitle;
		$this->render('product', array(	
			'product'=>$product,
			'category'=>$category,
		));
	}
	
	public function actionProductDetail($id)
	{
		$criteria=new CDbCriteria;
		$criteria->with = array('description', 'category');
		$criteria->addCondition('status = "1"');
		$criteria->addCondition('description.language_id = :language_id');
		$criteria->params[':language_id'] = $this->languageID;
		$criteria->addCondition('t.id = :id');
		$criteria->params[':id'] = $id;
		$data = PrdProduct::model()->find($criteria);
		if($data===null)
			throw new CHttpException(404,'The requested page does not exist.');

		$criteria=new CDbCriteria;
		$criteria->with = array('description', 'category', 'alternateImage');
		$criteria->order = 'date DESC';
		$criteria->addCondition('status = "1"');
		// $criteria->addCondition('terlaris = "1"');
		$criteria->addCondition('description.language_id = :language_id');
		$criteria->params[':language_id'] = $this->languageID;

			$criteria->addCondition('t.category_id = :category_id');
			$criteria->params[':category_id'] = $data->category_id;

		$pageSize = 3;
		$criteria->group = 't.id';
		$criteria->order = 'RAND()';
		$criteria->limit = 4;
		$product = PrdProduct::model()->findAll($criteria);

		$criteria=new CDbCriteria;
		$criteria->with = array('description', 'category', 'alternateImage');
		$criteria->order = 'date DESC';
		$criteria->addCondition('status = "1"');
		// $criteria->addCondition('terlaris = "1"');
		$criteria->addCondition('description.language_id = :language_id');
		$criteria->params[':language_id'] = $this->languageID;

		$pageSize = 3;
		$criteria->group = 't.id';
		$criteria->order = 'RAND()';
		$product2 = PrdProduct::model()->findAll($criteria);

		$this->pageTitle = 'Product Detail - '. $this->pageTitle;
		// detail product stumble	
		$this->render('product_detail', array(	
			'data'=>$data,
			'product'=>$product,
			'product2'=>$product2,
		));	

	}

	// ------------------------------- GAK DI PAKAI ------------------------------------
	public function actionCategory()
	{
		$this->layout='//layouts/column2';

		$this->render('category', array(
		));
	}

	public function actionPCart()
	{
		$this->layout='//layouts/column3';

		$this->render('carts', array(
		));
	}

	public function actionPCart2()
	{
		$this->layout='//layouts/column3';

		$this->render('carts2', array(
		));
	}

	public function actionPsuccesscart()
	{
		$this->layout='//layouts/column3';

		$this->render('success_cart', array(
		));
	}

	public function actionCaraBelanja()
	{
		$this->layout='//layouts/column3';

		$this->render('cara_belanja', array(
		));
	}

	public function actionInfoPengiriman()
	{
		$this->layout='//layouts/column3';

		$this->render('info_pengiriman', array(
		));
	}

	

	public function actionSyarat()
	{
		$this->layout='//layouts/column3';

		$this->render('syarat_ketentuan', array(
		));
	}

	public function actionFaq()
	{
		$this->layout='//layouts/column2';

		$this->render('faq', array(
		));
	}

	public function actionPmyaccount()
	{
		$this->layout='//layouts/column3';

		$this->render('mydashboard', array(
		));
	}

	public function actionPcontact()
	{
		$model = new ContactForm;
		$model->scenario = 'insert';
		
		if(isset($_POST['ContactForm']))
		{
			if (!isset($_POST['g-recaptcha-response'])) {
				$this->redirect(array('home/career'));
	        }
	        

				$model->attributes=$_POST['ContactForm'];
				if($model->validate())
				{
			        $secret_key = "6Lc5ExQUAAAAAHgV4U_6krEDyf-ykhlx08mEgJek";
			        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret_key."&response=".$_POST['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']);
			        $response = json_decode($response);
			        if($response->success==false)
			        {
			          $model->addError('verifyCode','Pastikan anda sudah menyelesaikan captcha');
			        }else{
						// config email
						$messaged = $this->renderPartial('//mail/contact',array(
							'model'=>$model,
						),TRUE);
						$config = array(
							'to'=>array($model->email, $this->setting['email'], $this->setting['contact_email']),
							'subject'=>'[Victory Toys] Contact from '.$model->email,
							'message'=>$messaged,
						);
						if ($this->setting['contact_cc']) {
							$config['cc'] = array($this->setting['contact_cc']);
						}
						if ($this->setting['contact_bcc']) {
							$config['bcc'] = array($this->setting['contact_bcc']);
						}
						// kirim email
						Common::mail($config);

						Yii::app()->user->setFlash('success','Trimakasih telah mengirimkan pesan kepada kami, kami akan segera membalas pesan anda');
						$this->refresh();
					}
				}


		}

		$this->layout='//layouts/column3';
		$this->pageTitle = 'Contact Us - '.$this->pageTitle;
		$this->render('pcontact', array(
			'model'	=>$model,
		));
	}

	public function actionPsaler()
	{
		
		$model = new ContactForm;
		$model->scenario = 'insert';
		
		if(isset($_POST['ContactForm']))
		{
			if (!isset($_POST['g-recaptcha-response'])) {
				$this->redirect(array('home/career'));
	        }
	        

				$model->attributes=$_POST['ContactForm'];
				if($model->validate())
				{
			        $secret_key = "6Lfhyf8SAAAAABJ2p1sV8mV790VW7LAVOsy2qile";
			        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret_key."&response=".$_POST['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']);
			        $response = json_decode($response);
			        // print_r($response);
			        // exit;
			        if($response->success==false)
			        {
			          $model->addError('verifyCode','Pastikan anda sudah menyelesaikan captcha');
			        }else{
						// config email
						$messaged = $this->renderPartial('//mail/saler',array(
							'model'=>$model,
						),TRUE);
						$config = array(
							'to'=>array($model->email, $this->setting['email'], $this->setting['contact_email']),
							'subject'=>'Hi, Ada pendaftaran wholesaler '.$model->email,
							'message'=>$messaged,
						);
						if ($this->setting['contact_cc']) {
							$config['cc'] = array($this->setting['contact_cc']);
						}
						if ($this->setting['contact_bcc']) {
							$config['bcc'] = array($this->setting['contact_bcc']);
						}
						// kirim email
						Common::mail($config);

						Yii::app()->user->setFlash('success','Trimakasih telah mengirimkan pesan kepada kami, kami akan segera membalas pesan anda');
						$this->refresh();
					}

				}

		}
		$this->layout='//layouts/column1';
		$this->render('psaler', array(
			'model'	=>$model,
		));
	}

	public function actionSugest()
	{

		if ($_POST['q'] != '') {
			$str = '<p id="searchresults">';
	            $criteria=New CDbCriteria ; 
	            $criteria->addCondition('(name LIKE :q OR tag LIKE :q)');
	            $criteria->params[':q'] = '%'.$_POST['q'].'%';
	            $criteria->addCondition('language_id = :language_id');
	            $criteria->params[':language_id'] = $this->languageID;

	            $criteria->order = 'date_input DESC';
	            $criteria->limit = 5;
	            $list = ViewProduct::model()->findAll($criteria);
	            
				$str .= '<span class="category">Search: '.$_POST['q'].'</span>';
	            foreach($list as $value)
	            {
					$str .= '<a href="'.CHtml::normalizeUrl(array('/product/detail', 'id'=>$value->id)).'">
						<span class="searchheading">'.$value->name.'</span>
					</a>';
				}
			// }
			$str .= '<span class="seperator"><a href="'.CHtml::normalizeUrl(array('/product/index', 'q'=>$_POST['q'])).'" title="Sitemap">See other result for '.$_POST['q'].' &gt;</a></span>
			<br class="break">
			</p>
			';
			echo $str;
		}
	}

	public function actionError()
	{
		$this->layout = '//layouts/error';
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else{

				$criteria=new CDbCriteria;
				$criteria->with = array('description', 'category', 'categories');
				$criteria->order = 'date DESC';
				$criteria->addCondition('status = "1"');
				$criteria->addCondition('terlaris = "1"');
				$criteria->addCondition('description.language_id = :language_id');
				$criteria->params[':language_id'] = $this->languageID;
				$pageSize = 12;
				$criteria->group = 't.id';
				$product = new CActiveDataProvider('PrdProduct', array(
					'criteria'=>$criteria,
				    'pagination'=>array(
				        'pageSize'=>$pageSize,
				    ),
				));


				$criteria = new CDbCriteria;
				$criteria->with = array('description');
				$criteria->addCondition('t.parent_id = :parent_id');
				$criteria->params[':parent_id'] = 0;
				$criteria->addCondition('t.type = :type');
				$criteria->params[':type'] = 'category';
				$criteria->limit = 3;
				$criteria->order = 'sort ASC';
				$categories = PrdCategory::model()->findAll($criteria);

				$this->layout='//layouts/column2';

				$this->pageTitle = 'Error '.$error['code'].': '. $error['message'] .' - '.$this->pageTitle;
				$this->render('error', array(
					'error'=>$error,
					'product'=>$product,
					'categories'=>$categories,
				));
			}
		}

	}

	public function actionWarranty()
	{
		$this->pageTitle = 'Warranty & Quality - '.$this->pageTitle;
		$this->layout='//layouts/column2';

		$this->render('warranty', array(	
		));
	}

	public function actionBrands()
	{
		$this->pageTitle = 'Brands - '.$this->pageTitle;
		$this->layout='//layouts/column2';

		$this->render('brands', array(	
		));
	}

	public function actionEvent()
	{
		$this->pageTitle = 'Event - '.$this->pageTitle;
		$this->layout='//layouts/column2';

		// $criteria = new CDbCriteria;
		// $criteria->with = array('description');
		// $criteria->addCondition('active = "1"');
		// $criteria->addCondition('topik_id = "public events"');
		// $criteria->addCondition('description.language_id = :language_id');
		// $criteria->params[':language_id'] = $this->languageID;
		// $criteria->order = 't.date_input DESC';
		// $criteria->limit = 4;
		// $model = Blog::model()->findAll($criteria);

		$criteria = new CDbCriteria;
		$criteria->with = array('description');
		$criteria->addCondition('active = "1"');
		$criteria->addCondition('language_id = :language_id');
		$criteria->params[':language_id'] = $this->languageID;

		if ($_GET['year'] != '' AND $_GET['month'] != '') {
			$criteria->addCondition('YEAR(`date_input`) = :year AND MONTH(`date_input`) = :month');
			$criteria->params[':year'] = $_GET['year'];
			$criteria->params[':month'] = $_GET['month'];
		}
		
		// $criteria->addCondition('topik_id = "public events"');

		$criteria->order = 't.date_input DESC';
		$model = new CActiveDataProvider('Blog', array(
			'criteria'=>$criteria,
		    'pagination'=>array(
		        'pageSize'=>8,
		    ),
		));

		$criteria = new CDbCriteria;
        // $criteria->addCondition('active = "1"');
        $criteria->order = 't.date_input DESC';
        $criteria->addCondition('status = "1"');
        $bulletin = Pdf::model()->findAll($criteria);

		$this->render('event', array(
			// 'model'=>$model,
			'gallery'=>$model,
			'bulletin'=>$bulletin,
		));
	}

	public function actionEventdetail($id)
	{
		$this->pageTitle = 'Events - '.$this->pageTitle;
		$this->layout='//layouts/column2';

		$criteria = new CDbCriteria;
		$criteria->with = array('description');
		$criteria->addCondition('active = "1"');
		$criteria->addCondition('description.language_id = :language_id');
		$criteria->params[':language_id'] = $this->languageID;
		$criteria->addCondition('t.id = :id');
		$criteria->params[':id'] = $id;
		$criteria->order = 'date_input DESC';
		$detail = Blog::model()->find($criteria);
		if($detail===null)
			throw new CHttpException(404,'The requested page does not exist.');

		$criteria = new CDbCriteria;
		$criteria->with = array('description');
		$criteria->addCondition('active = "1"');
		$criteria->addCondition('t.id != '. $id);
		$criteria->addCondition('language_id = :language_id');
		$criteria->params[':language_id'] = $this->languageID;

		$criteria->addCondition('topik_id = "public events"');

		$criteria->order = 't.date_input DESC';
		$blogs = new CActiveDataProvider('Blog', array(
			'criteria'=>$criteria,
		    'pagination'=>array(
		        'pageSize'=>4,
		    ),
		));

		$this->render('eventdetail', array(
			'detail'=>$detail,
			'blog'=>$blogs,
		));
	}

	public function actionWhereto()
	{
		$this->pageTitle = 'Where To Buy - '. $this->pageTitle;

		$criteria = new CDbCriteria;
		if ($_GET['kota'] != '') {
			$criteria->addCondition('kota = :kota');
			$criteria->params[':kota'] = $_GET['kota'];
		}
		if ($_GET['provinsi'] != '') {
			$criteria->addCondition('provinsi = :provinsi');
			$criteria->params[':provinsi'] = $_GET['provinsi'];
			$dataAddres = Address::model()->findAll($criteria);
		}

		$criteria = new CDbCriteria;
		$criteria->select = 'kota';
		$criteria->group = 'kota';
		$criteria->order = 'kota ASC';
		$kota = Address::model()->findAll($criteria);

		$criteria = new CDbCriteria;
		$criteria->select = 'provinsi';
		$criteria->group = 'provinsi';
		$criteria->order = 'provinsi ASC';
		$provinsi = Address::model()->findAll($criteria);

		$this->render('where_to', array(
			'dataAddres'=>$dataAddres,
			'kota'=>$kota,
			'provinsi'=>$provinsi,
		));
	}

	public function actionGetkota()
	{
		$criteria = new CDbCriteria;
		$criteria->select = 'kota';
		$criteria->group = 'kota';
		$criteria->order = 'kota ASC';
		if ($_POST['provinsi'] != '') {
			$criteria->addCondition('provinsi = :provinsi');
			$criteria->params[':provinsi'] = $_POST['provinsi'];
		}
		$kota = Address::model()->findAll($criteria);
		foreach ($kota as $key => $value) {
			?>
			<option value="<?php echo $value->kota ?>"><?php echo $value->kota ?></option>
			<?php
		}
	}

	public function actionHowto()
	{
		$this->pageTitle = 'How To Order - '.$this->pageTitle;
		$this->layout='//layouts/column2';

		$this->render('howto', array(	
		));
	}

	public function actionLandingproduct()
	{
		$this->pageTitle = 'Products - '. $this->pageTitle;

		$this->render('landing_product', array(	
		));
	}
	
	public function actionProductCategory()
	{
		$this->pageTitle = 'Products - '. $this->pageTitle;

		$this->render('product_category', array(	
		));
	}

	public function actionProducts2()
	{
		$this->pageTitle = 'Products - '. $this->pageTitle;

		$this->render('product2', array(	
		));
	}

	public function actionListInquiry()
	{
		$this->pageTitle = 'Daftar Inquiry - '. $this->pageTitle;
		$this->layout='//layouts/column1';

		$this->render('inquiry', array(	
		));
	}

	public function actionDetailInquiry()
	{
		$this->pageTitle = 'Daftar Inquiry - '. $this->pageTitle;
		$this->layout='//layouts/column1';

		$this->render('detail_inquiry', array(	
		));
	}

	public function actionJadiagen()
	{
		$this->pageTitle = 'Jadi Agen - '.$this->pageTitle;
		$this->layout='//layouts/column1';

		$model = new ContactForm;
		$model->scenario = 'insert';

		if(isset($_POST['ContactForm']))
		{
			// if (!isset($_POST['g-recaptcha-response'])) {
			// 	$this->redirect(array('/home/jadiagen'));
	  //       }
	        
	        $secret_key = "6LfaqgkUAAAAAEGhdM7GVk6o-jNbidJ9t3xgc0wn";
	        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret_key."&response=".$_POST['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']);
	        $response = json_decode($response);
	        if($response->success==false)
	        {
	          $model->addError('verifyCode', 'Silahkan verifikasi captcha yang tersedia');
	        }

			$model->attributes=$_POST['ContactForm'];
			if(!$model->hasErrors() AND $model->validate())
			{
				// config email
				$messaged = $this->renderPartial('//mail/contact',array(
					'model'=>$model,
				),TRUE);
				$config = array(
					'to'=>array($model->email, $this->setting['email']),
					'subject'=>'Hi, '.$model->email.' Ingin Jadi Agen',
					'message'=>$messaged,
				);
				if ($this->setting['contact_cc']) {
					$config['cc'] = array($this->setting['contact_cc']);
				}
				if ($this->setting['contact_bcc']) {
					$config['bcc'] = array($this->setting['contact_bcc']);
				}
				// kirim email
				Common::mail($config);

				Yii::app()->user->setFlash('success','Terima Kasih Atas Minat Anda Bergabung Bersama kami
Staff dari perabotplastik.com akan menghubungi anda untuk konfirmasi dan penjelasan berbagai langkah selanjutnya untuk secara resmi menjadi agen distribusi produk kami.
');
				$this->refresh();
			}


		}

		$this->render('jadi_agen', array(
			'model' => $model,
		));
	}

	public function actionKatalog()
	{
		$this->pageTitle = 'Katalog - '. $this->pageTitle;

		$this->layout='//layouts/column1';

		$dataPdf = Pdf::model()->findAll();

		$this->render('katalog', array(	
			'dataPdf'=>$dataPdf,
		));
	}

	public function actionLokasitoko()
	{
		$this->pageTitle = 'Lokasi Penjualan Kami - '. $this->pageTitle;

		$this->layout='//layouts/column1';
		$dataAddress = Address::model()->findAll();
		$dataAddress2 = array();
		foreach ($dataAddress as $key => $value) {
			$dataAddress2[$value->kota][] = $value;
		}

		$this->render('lokasi_toko', array(	
			'dataAddress'=>$dataAddress2,
		));
	}

	public function actionCarabeli()
	{
		$this->pageTitle = 'Cara Membeli - '. $this->pageTitle;

		$this->layout='//layouts/column1';

		$this->render('cara_beli', array(	
		));
	}

	public function actionContactus()
	{
		$this->pageTitle = 'Contact - '.$this->pageTitle;
		$this->layout='//layouts/column2';
		
		$model = new ContactForm;
		$model->scenario = 'insert';

		if(isset($_POST['ContactForm']))
		{
			if (!isset($_POST['g-recaptcha-response'])) {
				$this->redirect(array('/home/contactus'));
	        }
	        
	        $secret_key = "6LfaqgkUAAAAAEGhdM7GVk6o-jNbidJ9t3xgc0wn";
	        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret_key."&response=".$_POST['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']);
	        $response = json_decode($response);
	        if($response->success==false)
	        {
	          $model->addError('verifyCode', 'Silahkan verifikasi captcha yang tersedia');
	        }

			$model->attributes=$_POST['ContactForm'];
			if(!$model->hasErrors() AND $model->validate())
			{
				// config email
				$messaged = $this->renderPartial('//mail/contact',array(
					'model'=>$model,
				),TRUE);
				$config = array(
					'to'=>array($model->email, $this->setting['email']),
					'subject'=>'Hi, Contact from '.$model->email,
					'message'=>$messaged,
				);
				if ($this->setting['contact_cc']) {
					$config['cc'] = array($this->setting['contact_cc']);
				}
				if ($this->setting['contact_bcc']) {
					$config['bcc'] = array($this->setting['contact_bcc']);
				}
				// kirim email
				Common::mail($config);

				Yii::app()->user->setFlash('success','Thank you for sending application career us. We will respond to you as soon as possible.');
				$this->refresh();
			}

		}

		$this->render('contact', array(	
			'model'=>$model,
		));
	}

	// public function actionCareer()
	// {
	// 	$this->pageTitle = 'Career - '.$this->pageTitle;
	// 	$this->layout='//layouts/column2';

	// 	$model = new ContactForm;
	// 	$model->scenario = 'insert';

	// 	if(isset($_POST['ContactForm']))
	// 	{
	// 		if (!isset($_POST['g-recaptcha-response'])) {
	// 			$this->redirect(array('home/career'));
	//         }
	        
	//         $secret_key = "6Lfhyf8SAAAAABJ2p1sV8mV790VW7LAVOsy2qile";
	//         $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret_key."&response=".$_POST['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']);
	//         $response = json_decode($response);
	//         if($response->success==false)
	//         {
	//           $this->redirect(array('home/career'));
	//         }else{

	// 			$model->attributes=$_POST['ContactForm'];
	// 			if($model->validate())
	// 			{
	// 				// config email
	// 				$messaged = $this->renderPartial('//mail/contact',array(
	// 					'model'=>$model,
	// 				),TRUE);
	// 				$config = array(
	// 					'to'=>array($model->email, $this->setting['email'], $this->setting['contact_email']),
	// 					'subject'=>'Hi, Contact from '.$model->email,
	// 					'message'=>$messaged,
	// 				);
	// 				if ($this->setting['contact_cc']) {
	// 					$config['cc'] = array($this->setting['contact_cc']);
	// 				}
	// 				if ($this->setting['contact_bcc']) {
	// 					$config['bcc'] = array($this->setting['contact_bcc']);
	// 				}
	// 				// kirim email
	// 				Common::mail($config);

	// 				Yii::app()->user->setFlash('success','Thank you for sending application career us. We will respond to you as soon as possible.');
	// 				$this->refresh();
	// 			}

	// 		}

	// 	}

	// 	$this->render('career', array(
	// 		'model'	=>$model,
	// 	));
	// }

	public function actionNews()
	{
		$this->pageTitle = 'News & Article - '.$this->pageTitle;
		// $this->layout='//layouts/column1';

		$this->render('news', array(	
		));
	}

	public function actionNewsDetail()
	{
		$this->pageTitle = 'News & Article - '.$this->pageTitle;
		$this->layout='//layouts/column1';

		$this->render('news_detail', array(	
		));
	}

	public function actionTermsofuse()
	{
		$this->pageTitle = 'Terms of Use - '.$this->pageTitle;

		$this->render('termsofuse', array(	
		));
	}

	public function actionShippinginfo()
	{
		$this->render('shipinfo', array(	
		));
	}

	public function actionCartsuccess()
	{
		$this->render('cartsucess', array(	
		));
	}

	public function actionCareer()
	{
		$this->layout='//layouts/column2';

		$this->pageTitle = 'Career - '.$this->pageTitle;

		$this->render('career', array(
			// 'model'=>$model,
		));
	}

	public function actionBrands_detail()
	{
		$this->layout='//layouts/column2';

		$this->pageTitle = 'Brands - '.$this->pageTitle;

		$this->render('brands_detail', array(
			// 'model'=>$model,
		));
	}

	public function actionAgent()
	{
		$this->layout='//layouts/column2';

		$this->pageTitle = 'Agent - '.$this->pageTitle;

		$this->render('agent', array(
			// 'model'=>$model,
		));
	}

	public function actionContact()
	{
		$this->layout='//layouts/column2';

		$this->pageTitle = 'Contact Us - '.$this->pageTitle;

		$model = new ContactForm;
		$model->scenario = 'insert';

		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];

	        $secret_key = "6Lfhyf8SAAAAABJ2p1sV8mV790VW7LAVOsy2qile";
	        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret_key."&response=".$_POST['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']);
	        $response = json_decode($response);
	        if($response->success==false)
	        {
	          	$model->addError('verifyCode','Pastikan anda sudah menyelesaikan captcha');
	        }else{

				if(!$model->hasErrors() && $model->validate())
				{
					// config email
					$messaged = $this->renderPartial('//mail/contact',array(
						'model'=>$model,
					),TRUE);
					$config = array(
						'to'=>array($model->contact_email, $this->setting['email']),
						'subject'=>'['.Yii::app()->name.'] Contact from '.$model->email,
						'message'=>$messaged,
					);
					if ($this->setting['contact_cc']) {
						$config['cc'] = array($this->setting['contact_cc']);
					}
					if ($this->setting['contact_bcc']) {
						$config['bcc'] = array($this->setting['contact_bcc']);
					}
					// kirim email
					Common::mail($config);

					Yii::app()->user->setFlash('success','Thank you for contact us. We will respond to you as soon as possible.');
					$this->refresh();
				}
			}

		}

		$this->render('contact', array(
			'model'=>$model,
		));
	}

	public function actionContact2()
	{
		$this->layout='//layouts/columnIframe';

		$this->pageTitle = 'Contact Us - '.$this->pageTitle;

		$model = new ContactForm;
		$model->scenario = 'insert';

		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];

			if($model->validate())
			{
				// config email
				$messaged = $this->renderPartial('//mail/contact2',array(
					'model'=>$model,
				),TRUE);
				$config = array(
					'to'=>array($model->email, $this->setting['email'], $this->setting['contact_email'], 'renndh2003@hotmail.com', 'dvcomputers.website@outlook.com'),
					'subject'=>'Hi, DV Computers Contact from '.$model->email,
					'message'=>$messaged,
				);
				if ($this->setting['contact_cc']) {
					$config['cc'] = array($this->setting['contact_cc']);
				}
				if ($this->setting['contact_bcc']) {
					$config['bcc'] = array($this->setting['contact_bcc']);
				}
				// kirim email
				Common::mail($config);

				Yii::app()->user->setFlash('success','Thank you for contact us. We will respond to you as soon as possible.');
				$this->refresh();
			}

		}

		$this->render('contact2', array(
			'model'=>$model,
		));
	}
	public function actionContact3()
	{
		$this->layout='//layouts/columnIframe';

		$this->pageTitle = 'Report Bugs & Error - '.$this->pageTitle;

		$model = new ContactForm2;
		$model->scenario = 'insert';

		if(isset($_POST['ContactForm2']))
		{
			$model->attributes=$_POST['ContactForm2'];

			if($model->validate())
			{
				// config email
				$messaged = $this->renderPartial('//mail/contact3',array(
					'model'=>$model,
				),TRUE);
				$config = array(
					'to'=>array($model->email, $this->setting['email'], $this->setting['contact_email'], 'renndh2003@hotmail.com', 'dvcomputers.website@outlook.com'),
					'subject'=>'Report Bugs & Error from '.$model->email,
					'message'=>$messaged,
				);
				if ($this->setting['contact_cc']) {
					$config['cc'] = array($this->setting['contact_cc']);
				}
				if ($this->setting['contact_bcc']) {
					$config['bcc'] = array($this->setting['contact_bcc']);
				}
				// kirim email
				Common::mail($config);

				Yii::app()->user->setFlash('success','Thank you for contact us. We will respond to you as soon as possible.');
				$this->refresh();
			}

		}

		$this->render('contact3', array(
			'model'=>$model,
		));
	}

}

