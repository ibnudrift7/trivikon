<?php

/**
 * Test Contorller
 */
class RestController extends Controller
{
	// PROFILE
	public function actionChecklogin()
	{
		// http://localhost/backend-community/api/rest/checklogin
		// $this->_checkAuth($_POST['session_id']);		
		
		$username = htmlspecialchars($_POST['MeMember']['username']);
		$password = sha1($_POST['MeMember']['password']);
		$model = MeMember::model()->find('t.aktif = "1" and t.username = :username', array(':username'=>$username));

		if($model===null) {
			$error_ar = [
							'result'=>false, 
							'error'=>'Login is invalid',
						];
			$this->_sendResponse(200, CJSON::encode($error_ar));
		} else {
			$pass_mod = $model->pass;

			if ($password == $pass_mod) {
				$this->_sendResponse(200, CJSON::encode($model));
			} else {
				$error_ar = [
							'result'=>false, 
							'error'=>'Login Password is invalid',
						];
				$this->_sendResponse(200, CJSON::encode($error_ar));
			}
			
		}
		

		$this->_sendResponse(200, CJSON::encode($model));
	}

	public function actionViewProfile()
	{
		$this->_checkAuth($_POST['session_id']);

		$username = htmlspecialchars($_POST['MeMember']['username']);

		$data = Yii::app()->db->createCommand()
	    ->select('a.*, b.nama_mitra, c.nama as nama_usaha, CASE WHEN a.foto_usaha != ""
					THEN CONCAT("https://salingtemu.com/systemlog/images/customer/", a.foto_usaha)
					ELSE CONCAT("https://salingtemu.com/systemlog/images/customer/", a.foto_diri)
					END AS foto_diri')
	    ->from('me_member a')
	    ->leftJoin('tb_mitra b', 'a.mitra_id=b.id')
	    ->leftJoin('tb_kategori_usaha c', 'a.bidang_usaha=c.id')
	    ->where('a.username = :username', array(':username'=>$username))
	    ->queryRow();

		$this->_sendResponse(200, CJSON::encode($data));
	}

	public function actionEditprofile()
	{
	    // http://localhost/backend-community/api/rest/editProfile
		$this->_checkAuth($_POST['session_id']);

		$username = htmlspecialchars($_POST['MeMember']['username']);
		$model = MeMember::model()->find('t.username = :username', array(':username'=>$username));
		// to change password
		$model->attributes=$_POST['MeMember'];
		if (isset($_POST['MeMember']['pass'])) {				
			$model->pass = sha1($_POST['MeMember']['pass']);
		}
		$model->save(false);
		$datas = ['result'=> true, 'message'=>'success input'];

		$this->_sendResponse(200, CJSON::encode($datas));
	}

	// PROMO
	/*
	public function actionListpromo()
	{
		// http://localhost/backend-community/api/rest/viewProfile
		$this->_checkAuth($_POST['session_id']);

		$criteria = new CDbCriteria;
		if (isset($_POST['bidang_id'])) {
			$criteria->addCondition('t.bidang_id = :bidang_id');
			$criteria->params[':bidang_id'] = intval($_POST['bidang_id']);
		}
		$criteria->addCondition('t.aktif = "1"');
		$criteria->order = 't.id DESC';
		$data = PromoMember::model()->findAll($criteria);

		
		$this->_sendResponse(200, CJSON::encode($data));
	}

	public function actionViewpromo()
	{
		// http://localhost/backend-community/api/rest/viewProfile
		$this->_checkAuth($_POST['session_id']);
		$promo_id = intval($_POST['promo_id']);

		$criteria = new CDbCriteria;
		$criteria->addCondition('t.id = :id_promo');
		$criteria->params[':id_promo'] = $promo_id;

		$criteria->addCondition('t.aktif = "1"');
		$data = PromoMember::model()->find($criteria);

		$this->_sendResponse(200, CJSON::encode($data));
	}

	public function actionAddpromo()
	{
		// http://localhost/backend-community/api/rest/viewProfile
		$this->_checkAuth($_POST['session_id']);
		
		$gets_user = MeMember::model()->find('session_token = :session_token', array(':session_token'=>$_POST['session_id']));

		$datas = ['result'=> false, 'message'=>''];
		$model=new PromoMember;
		if(isset($_POST['PromoMember']))
		{
			$model->attributes=$_POST['PromoMember'];

			$model->user_id = $gets_user->id;
			$model->bidang_id = $gets_user->bidang_usaha;
			$model->aktif = 1;
			$model->date_input = date("Y-m-d H:i:s");

			// proc save images
			$upload_dir = Yii::getPathOfAlias('webroot').'/images/promo/';
			if ( isset($_POST['PromoMember']['image']) ) {
				$img = $_POST['PromoMember']['image'];
				$img = str_replace('data:image/jpeg;base64,', '', $img);
				$img = str_replace(' ', '+', $img);
				$data = base64_decode($img);
				$names_image = uniqid() . '.jpeg';
				$file = $upload_dir . $names_image;
				$success = file_put_contents($file, $data);

				$model->image = Yii::app()->request->hostInfo . Yii::app()->request->baseUrl . '/images/promo/' . $names_image;
			}

			$model->save(false);
			$datas = ['result'=> true, 'message'=>'success input'];
		}
		
		$this->_sendResponse(200, CJSON::encode($datas));
	}
	*/

	// VIEW EVENT MEMBER
	public function actionListevent()
	{
		// http://localhost/backend-community/api/rest/viewProfile
		$this->_checkAuth($_POST['session_id']);

		$criteria = new CDbCriteria;
		$criteria->addCondition('t.aktif = "1"');
		$criteria->order = "t.tgl_event DESC";
		$criteria->addCondition('t.tgl_event >= CURDATE()');
		$data = TbEventMember::model()->findAll($criteria);

		$this->_sendResponse(200, CJSON::encode($data));
	}

	public function actionViewevent()
	{
		// http://localhost/backend-community/api/rest/viewProfile
		$this->_checkAuth($_POST['session_id']);
		$event_id = intval($_POST['event_id']);

		$criteria = new CDbCriteria;
		$criteria->addCondition('t.id = :id_event');
		$criteria->params[':id_event'] = $event_id;

		$criteria->addCondition('t.aktif = "1"');
		$data = TbEventMember::model()->find($criteria);

		$this->_sendResponse(200, CJSON::encode($data));
	}

	// VIEW BIDANG USAHA
	public function actionListkategori()
	{
		// http://localhost/backend-community/api/rest/viewProfile
		$this->_checkAuth($_POST['session_id']);

		$criteria = new CDbCriteria;
		$criteria->addCondition('t.aktif = "1"');
		$data = KategoriUsaha::model()->findAll($criteria);

		$this->_sendResponse(200, CJSON::encode($data));
	}

	// VIEW Komunitas
	public function actionListkomunitas()
	{
		// http://localhost/backend-community/api/rest/viewProfile
		$this->_checkAuth($_POST['session_id']);

		$criteria = new CDbCriteria;
		$criteria->addCondition('t.aktif = "1"');
		$data = TbMitra::model()->findAll($criteria);

		$this->_sendResponse(200, CJSON::encode($data));
	}

	// VIEW List Satuan
	public function actionListsatuanunit()
	{
		// http://localhost/backend-community/api/rest/viewProfile
		$this->_checkAuth($_POST['session_id']);
		$data = SatuanUnit::model()->findAll();

		$this->_sendResponse(200, CJSON::encode($data));
	}


	// VIEW MARKET
	public function actionListmarket()
	{
		// http://localhost/backend-community/api/rest/viewProfile
		$this->_checkAuth($_POST['session_id']);
		$tipe_data = intval($_POST['tipe_data']);

		// $criteria = new CDbCriteria;
		// $criteria->with = array('data_details');
		// $criteria->addCondition('t.aktif = "1"');
		// if (isset($_POST['kategori'])) {
		// 	$criteria->addCondition('t.kategori_id = :kats_id');
		// 	$criteria->params[':kats_id'] = intval($_POST['kategori']);
		// }
		// $criteria->order = "t.tgl_input DESC";
		// $data = TbMarket::model()->findAll($criteria);
		$kategoris_id = intval($_POST['kategori']);
		$keywords = $_POST['keyword'];

		if (isset($kategoris_id) and $kategoris_id != '') {

			// escape % and _ characters
			// $keywords=strtr($keywords, array('%'=>'\%', '_'=>'\_'));
			if ($keywords != '') {
				$data = Yii::app()->db->createCommand()
			    ->select('a.*, b.nama_mitra, c.nama as nama_bidang')
			    ->from('tb_market a')
			    ->join('tb_mitra b', 'a.mitra_id=b.id')
			    ->join('tb_kategori_usaha c', 'a.kategori_id=c.id')
			    ->andWhere('a.aktif="1" and a.arsip != "1" and a.hide_apk != "1" and ( DATE_FORMAT(a.tgl_expired, "%Y-%m-%d") >= curdate() ) and a.tipe_data=:tipe_dat and a.kategori_id = :kat_id', 
			    	array(
			    		':tipe_dat'=>$tipe_data,
			    		':kat_id'=>$kategoris_id,
			    		 )
			    	)
				->andWhere(array('like', 'a.nama_post', '%'.$keywords.'%'))
				->order(array('a.tgl_input desc'))
			    ->queryAll();
			} else {
				$data = Yii::app()->db->createCommand()
			    ->select('a.*, b.nama_mitra, c.nama as nama_bidang')
			    ->from('tb_market a')
			    ->join('tb_mitra b', 'a.mitra_id=b.id')
			    ->join('tb_kategori_usaha c', 'a.kategori_id=c.id')
			    ->where('a.aktif="1" and a.arsip != "1" and a.hide_apk != "1" and ( DATE_FORMAT(a.tgl_expired, "%Y-%m-%d") >= curdate() ) and a.tipe_data=:tipe_dat and a.kategori_id = :kat_id', 
			    	array(
			    		':tipe_dat'=>$tipe_data,
			    		':kat_id'=>$kategoris_id,
			    		 )
			    	)
			    ->order(array('a.tgl_input desc'))
			    ->queryAll();
			}
		}elseif($keywords != '' and $kategoris_id == ''){
			
			$data = Yii::app()->db->createCommand()
			    ->select('a.*, b.nama_mitra, c.nama as nama_bidang')
			    ->from('tb_market a')
			    ->join('tb_mitra b', 'a.mitra_id=b.id')
			    ->join('tb_kategori_usaha c', 'a.kategori_id=c.id')
			    ->andWhere('a.aktif="1" and a.arsip != "1" and a.hide_apk != "1" and ( DATE_FORMAT(a.tgl_expired, "%Y-%m-%d") >= curdate() ) and a.tipe_data=:tipe_dat', 
			    	array(
			    		':tipe_dat'=>$tipe_data,
			    		 )
			    	)
				->andWhere(array('like', 'a.nama_post', '%'.$keywords.'%'))
				->order(array('a.tgl_input desc'))
			    ->queryAll();

		}else{

			$data = Yii::app()->db->createCommand()
		    ->select('a.*, b.nama_mitra, c.nama as nama_bidang')
		    ->from('tb_market a')
		    ->join('tb_mitra b', 'a.mitra_id=b.id')
		    ->join('tb_kategori_usaha c', 'a.kategori_id=c.id')
		    ->where('a.aktif="1" and a.arsip != "1" and a.hide_apk != "1" and ( DATE_FORMAT(a.tgl_expired, "%Y-%m-%d") >= curdate() ) and a.tipe_data=:tipe_dat', array(':tipe_dat'=>$tipe_data))
		    ->order(array('a.tgl_input desc'))
		    ->queryAll();
		    // ->where('a.session_token=:se_tok', array(':se_tok'=>$_POST['session_id']))
		}

		$this->_sendResponse(200, CJSON::encode($data));
	}

	// VIEW MARKET
	public function actionListmarketanda()
	{
		// http://localhost/backend-community/api/rest/viewProfile
		$this->_checkAuth($_POST['session_id']);
		$data_users = MeMember::model()->find('t.session_token = :session_token', array(':session_token'=>$_POST['session_id']));

		$tipe_data = $_POST['tipe_data'];

		if ($tipe_data == "1" or $tipe_data == "2") {
		
			$data = Yii::app()->db->createCommand()
		    ->select("a.*, b.nama_mitra, c.user_tawar_id as user_tawar_id,  COUNT(c.nama) as jumlah_nawar, IF(c.user_tawar_id = '".$data_users->id."' , '#00000000', '#80ffffff') as warna, d.username as user_deal")
		    ->from('tb_market a')
		    ->leftJoin('tb_mitra b', 'a.mitra_id=b.id')
		    ->leftJoin('tb_penawaran_list c', 'c.market_id=a.id') 
		    ->leftJoin('me_member d', 'd.id=a.user_id_deal') 
		    ->group('a.id')
		    ->where('(a.user_id_post = :post_id ) and a.tipe_data = :tipe_dat and a.aktif="1" and a.hide_apk != "1"', 
		    		array( 
		    			':post_id' => $data_users->id, 
		    			':tipe_dat' => $tipe_data,
		    			// ':n_user_id' => $data_users->id,
		    			 )
		    		)
		    ->order(array('a.tgl_input desc'))
		    ->queryAll();

		} elseif($tipe_data = "3") {
			
			// query beli
			$data = Yii::app()->db->createCommand()
		    ->select("a.*, b.nama_mitra, c.user_tawar_id as user_tawar_id, COUNT(c.nama) as jumlah_nawar, d.username as user_post")
		    ->from('tb_market a')
		    ->leftJoin('tb_mitra b', 'a.mitra_id=b.id')
		    ->join('tb_penawaran_list c', 'c.market_id=a.id') 
		    ->leftJoin('me_member d', 'd.id=a.user_id_post') 
		    ->group('a.id')
		    ->where('c.user_tawar_id = :n_user_id and a.aktif="1" and a.hide_apk != "1"', 
		    		array( 
		    			// ':tipe_dat' => $tipe_data,
		    			':n_user_id' => $data_users->id,
		    			 )
		    		)
		    ->order(array('a.tgl_input desc'))
		    ->queryAll();
		}

	    $datas = array();
	    foreach ($data as $key => $value) {
	    	$datas[$key] = $value;
	    	if ($value['jumlah_nawar'] > 0) {
	    		if ($value['deal'] == 1) {
	    			$datas[$key]['disable_list_btn'] = 'true';
	    			$datas[$key]['star_btn'] = 'true';
	    		} else {
	    			$datas[$key]['disable_list_btn'] = 'false';
	    			$datas[$key]['star_btn'] = 'false';
	    		}
	    	} else { 
	    		$datas[$key]['disable_list_btn'] = 'true';
	    		$datas[$key]['star_btn'] = 'false';
	    	}	    
	    } 

		$this->_sendResponse(200, CJSON::encode($datas));
	}

	public function actionViewmarket()
	{
		// http://localhost/backend-community/api/rest/viewProfile
		$this->_checkAuth($_POST['session_id']);
		$market_id = $_POST['market_id'];
		$market_invoice_no = $_POST['invoice_no'];
		$tipe_data = $_POST['tipe_data'];

		$data = Yii::app()->db->createCommand()
	    ->select('a.*, b.nama as nama_kategori, 
	    	CONCAT(c.first_name, " ", c.last_name) as nama_lengkap, c.nama_perusahaan, d.nama as bidang_usaha, c.alamat_perusahaan, e.nama_mitra, c.url_instagram')
	    ->from('tb_market a')
	    ->join('tb_kategori_usaha b', 'a.kategori_id = b.id')
	    ->leftJoin('me_member c', 'a.user_id_post=c.id')
	    ->leftJoin('tb_kategori_usaha d', 'd.id=c.bidang_usaha')
	    ->leftJoin('tb_mitra e', 'e.id=c.mitra_id')
	    ->where('a.id=:sn_id AND a.invoice_no = :inoic_no AND a.tipe_data = :tipe_dat', array(
			    	':sn_id'=>intval($_POST['market_id']), 
			    	':inoic_no'=>($_POST['invoice_no']),
			    	':tipe_dat'=>intval($tipe_data)
			    ))
	    ->queryRow();

	    $data['disable_penawaran'] = false;
	    
	    $model_user = MeMember::model()->find('t.session_token = :sess_tok', array(':sess_tok'=>$_POST['session_id']));

	    $md_penawaran = PenawaranList::model()->find('t.market_id = :n_markid and t.invoice_no = :invoice_no and t.user_tawar_id = :user_tawar', array(
	    	':n_markid'=>$data['id'],
	    	':invoice_no'=>$data['invoice_no'],
	    	':user_tawar'=>$model_user->id,
	    ));

	    if ( ($model_user->id == $data['user_id_post']) OR ($model_user->id == $md_penawaran->user_tawar_id) ) {
	    	$data['disable_penawaran'] = true;
	    } elseif ($data['deal'] == 1) {
	    	$data['disable_penawaran'] = true;
	    }

	    if ($data['user_id_post'] == $model_user->id && $data['deal'] == 1) {
			$member_deal2 = MeMember::model()->findByPk($data['user_id_deal']);
			$alamatn1 = ($member_deal2->alamat_perusahaan != '')? $member_deal2->alamat_perusahaan : $member_deal2->address;
			$data['telpon_pihak'] = [
					'nama_user'=> $member_deal2->first_name. ' '. $member_deal2->last_name,
					'phone'=>$member_deal2->hp,
					'tipe_transaksi'=>'Kontak Penawar',
					'nama_perusahaan'=>$member_deal2->nama_perusahaan,
					'email'=>$member_deal2->email,
					'alamat'=>$alamatn1,
					'back_warna'=>'#4DFFFFFF',
					];
	    } elseif($data['user_id_deal'] == $model_user->id && $data['deal'] == 1) {
			$member_deal1 = MeMember::model()->findByPk($data['user_id_post']);
			$alamatn = ($member_deal1->alamat_perusahaan != '')? $member_deal1->alamat_perusahaan : $member_deal1->address;
			$data['telpon_pihak'] = [
					'nama_user'=> $member_deal1->first_name. ' '. $member_deal1->last_name,
					'phone'=>$member_deal1->hp,
					'tipe_transaksi'=>'Kontak Perusahaan',
					'nama_perusahaan'=>$member_deal1->nama_perusahaan,
					'email'=>$member_deal1->email,
					'alamat'=> $alamatn,
					'back_warna'=>'#4DFFFFFF',
					];
	    }

		$this->_sendResponse(200, CJSON::encode($data));
	}

	public function actionViewchildmarket()
	{
		// http://localhost/backend-community/api/rest/viewProfile
		$this->_checkAuth($_POST['session_id']);
		$market_id = $_POST['market_id'];
		$market_invoice_no = $_POST['invoice_no'];

		$data = Yii::app()->db->createCommand()
	    ->select('a.*, b.nama as nama_satuan_unit')
	    ->from('tb_market_detail a')
	    ->join('tb_satuan_unit b', 'a.sat_unit = b.id')
	    ->where('a.market_id=:sn_id AND a.invoice_no = :inoic_no', array(
			    	':sn_id'=>intval($_POST['market_id']), 
			    	':inoic_no'=>($_POST['invoice_no']) 
			    ))
	    ->queryAll();

		$this->_sendResponse(200, CJSON::encode($data));
	}

	public function actionPostmarket()
	{
		// http://localhost/backend-community/api/rest/viewProfile
		$this->_checkAuth($_POST['session_id']);

		$gets_user = MeMember::model()->find('session_token = :session_token', array(':session_token'=>$_POST['session_id']));

		$datas = ['result'=> false, 'message'=>''];

		$model=new TbMarket;
		if(isset($_POST['TbMarket']))
		{
			$transaction=$model->dbConnection->beginTransaction();
			try
			{
				$model->attributes=$_POST['TbMarket'];

				$model->invoice_no = 'ST-'.date("Ymd").'-No-'.rand(150, 9999);

				$model->user_id_post = $gets_user->id;
				$model->nama = $gets_user->first_name.' '.$gets_user->last_name;
				$model->nama_perusahaan = $gets_user->nama_perusahaan;
				$model->telp_perusahaan = $gets_user->hp;
				$model->mitra_id = $gets_user->mitra_id;
				$model->aktif = 1;
				$model->tgl_input = date("Y-m-d H:i:s");

				// proc save images
				$upload_dir = Yii::getPathOfAlias('webroot').'/images/market/';
				if ( isset($_POST['TbMarket']['image']) ) {
					$img = $_POST['TbMarket']['image'];
					$img = str_replace('data:image/jpeg;base64,', '', $img);
					$img = str_replace(' ', '+', $img);
					$data = base64_decode($img);
					$names_image = uniqid() . '.jpeg';
					$file = $upload_dir . $names_image;
					$success = file_put_contents($file, $data);

					$model->image = Yii::app()->request->hostInfo . Yii::app()->request->baseUrl . '/images/market/' . $names_image;
				}

				// Check gambar tidak filesize 0
				if (filesize($upload_dir.$names_image) <= 0) {
					$datas = ['result'=> false, 'message'=>'maaf, gambar anda tidak mendukung'];
				}else{

					// Checking date add market
					if ( strtotime($model->tgl_expired) > strtotime('+1 month') ) {
						$datas = ['result'=> false, 'message'=>'maaf, data tidak boleh melebihi 1 bulan'];				
					}else{

						$model->tgl_expired = $model->tgl_expired;
						$model->save(false);

						if (count($_POST['TbMarketDetail']['number_unit']) > 0) {
							foreach ($_POST['TbMarketDetail']['number_unit'] as $key => $value) {
								if ($value != '') {
									$models = new TbMarketDetail;
									$models->market_id = $model->id;
									$models->invoice_no = $model->invoice_no;
									$models->number_unit = $value;
									$models->keterangan_unit = $_POST['TbMarketDetail']['keterangan_unit'][$key];
									$models->qty_unit = $_POST['TbMarketDetail']['qty_unit'][$key];
									$models->sat_unit = $_POST['TbMarketDetail']['sat_unit'][$key];
									$models->harga_satuan = $_POST['TbMarketDetail']['harga_satuan'][$key];
									$models->jumlah_harga = $_POST['TbMarketDetail']['jumlah_harga'][$key];
									$models->save(false);
								}
							}
						}
						$model->save(false);

						$datas = ['result'=> true, 'message'=>'success input'];
					}

				}

				$transaction->commit();
			}
			catch(Exception $e)
			{
			   $transaction->rollback();
			}
		}
		

		$this->_sendResponse(200, CJSON::encode($datas));
	}

	public function actionPostmarket2()
	{
		// http://localhost/backend-community/api/rest/viewProfile
		$this->_checkAuth($_POST['session_id']);

		$gets_user = MeMember::model()->find('session_token = :session_token', array(':session_token'=>$_POST['session_id']));

		$datas = ['result'=> false, 'message'=>''];

		$model=new TbMarket;
		if(isset($_POST['TbMarket']))
		{
			$transaction=$model->dbConnection->beginTransaction();
			try
			{
				$model->attributes=$_POST['TbMarket'];

				$model->invoice_no = 'ST-'.date("Ymd").'-No-'.rand(150, 9999);

				$model->user_id_post = $gets_user->id;
				$model->nama = $gets_user->first_name.' '.$gets_user->last_name;
				$model->nama_perusahaan = $gets_user->nama_perusahaan;
				$model->telp_perusahaan = $gets_user->hp;
				$model->mitra_id = $gets_user->mitra_id;
				$model->aktif = 1;
				$model->tgl_input = date("Y-m-d H:i:s");

				// proc save images
				$upload_dir = Yii::getPathOfAlias('webroot').'/images/market/';
				$image = CUploadedFile::getInstance($model,'image');
				if ($image->name != '') {
					$model->image = uniqid().'-'.$image->name;
					$image->saveAs(Yii::getPathOfAlias('webroot').'/images/market/'.$model->image);
					$model->image = Yii::app()->request->hostInfo . Yii::app()->request->baseUrl . '/images/market/' . $model->image;
				}

				// Check gambar tidak filesize 0
				if (filesize($upload_dir.$names_image) <= 0) {
					$datas = ['result'=> false, 'message'=>'maaf, gambar anda tidak mendukung'];
				}else{

					// Checking date add market
					if ( strtotime($model->tgl_expired) > strtotime('+1 month') ) {
						$datas = ['result'=> false, 'message'=>'maaf, data tidak boleh melebihi 1 bulan'];				
					}else{
						if($model->nama_post == 'Jual' or $model->nama_post == 'Jual'){
							$datas = ['result'=> false, 'message'=>'maaf, judul tidak boleh kosong'];	
							$this->_sendResponse(200, CJSON::encode($datas));
							die();
						}

						$model->tgl_expired = $model->tgl_expired;
						$model->save(false);

						if (count($_POST['TbMarketDetail']['number_unit']) > 0) {
							foreach ($_POST['TbMarketDetail']['number_unit'] as $key => $value) {
								if ($value != '') {
									$models = new TbMarketDetail;
									$models->market_id = $model->id;
									$models->invoice_no = $model->invoice_no;
									$models->number_unit = $value;
									$models->keterangan_unit = $_POST['TbMarketDetail']['keterangan_unit'][$key];
									$models->qty_unit = $_POST['TbMarketDetail']['qty_unit'][$key];
									$models->sat_unit = $_POST['TbMarketDetail']['sat_unit'][$key];
									$models->harga_satuan = $_POST['TbMarketDetail']['harga_satuan'][$key];
									$models->jumlah_harga = $_POST['TbMarketDetail']['jumlah_harga'][$key];
									$models->save(false);
								}
							}
						}
						$model->save(false);

						$datas = ['result'=> true, 'message'=>'success input'];
					}

				}

				$transaction->commit();
			}
			catch(Exception $e)
			{
			   $transaction->rollback();
			}
		}
		

		$this->_sendResponse(200, CJSON::encode($datas));
	}

	public function actionEditmarket2()
	{
		// http://localhost/backend-community/api/rest/viewProfile
		$this->_checkAuth($_POST['session_id']);

		$gets_user = MeMember::model()->find('session_token = :session_token', array(':session_token'=>$_POST['session_id']));

		$datas = ['result'=> false, 'message'=>''];

		$data_nid = intval($_POST['TbMarket']['id']);

		$model=TbMarket::model()->findByPk($data_nid);
		if(isset($_POST['TbMarket']))
		{
			$transaction=$model->dbConnection->beginTransaction();
			try
			{
				$model->attributes=$_POST['TbMarket'];
				$model->edited_data = 1;
				$model->save();

				$models_ch = TbMarketDetail::model()->find('market_id = :mark_id', array(':mark_id'=> $model->id ));
				$models_ch->qty_unit = $_POST['TbMarketDetail']['qty_unit'][0];
				$models_ch->harga_satuan = $_POST['TbMarketDetail']['harga_satuan'][0];
				$models_ch->jumlah_harga = $_POST['TbMarketDetail']['jumlah_harga'][0];
				$models_ch->save(false);

				$datas = ['result'=> true, 'message'=>'success update'];
				$transaction->commit();
			}
			catch(Exception $e)
			{
			   $transaction->rollback();
			}
		}
		

		$this->_sendResponse(200, CJSON::encode($datas));
	}

	public function actionPostpenawarandeal()
	{
		// http://localhost/backend-community/api/rest/viewProfile
		$this->_checkAuth($_POST['session_id']);
		
		$gets_user = MeMember::model()->find('session_token = :session_token', array(':session_token'=>$_POST['session_id']));

		$model=new PenawaranList;
		if(isset($_POST['PenawaranList']))
		{
			$transaction=$model->dbConnection->beginTransaction();
			try
			{
				$model->attributes=$_POST['PenawaranList'];

				$model->market_id = $model->market_id;
				$model->invoice_no = $model->invoice_no;
				$model->user_tawar_id = $gets_user->id;
				$model->deal = 1;
				$model->tgl_input = date("Y-m-d H:i:s");

				$n_market = TbMarket::model()->find('t.invoice_no = :inov_no AND t.id = :id_mark', array(':inov_no'=>$model->invoice_no, ':id_mark'=> $model->market_id));
				$model->user_post_id = $n_market->user_id_post;
				$model->nama = $gets_user->first_name;
				$model->save(false);

				// Add notifikasi market yg di post
				$find_nmember = MeMember::model()->findByPk($n_market->user_id_post)->first_name;

				$mod_komen = new TbNotifikasi;
				$mod_komen->nama = 'anda memiliki penawar baru "'.$n_market->nama_post.'" dari user '. $find_nmember;
				$mod_komen->tipe_notif = 'penawar';
				$mod_komen->deleted = 0;
				$mod_komen->notes = '';
				$mod_komen->date_input = date("Y-m-d H:i:s");
				$mod_komen->user_id = $n_market->user_id_post;
				$mod_komen->market_id = $n_market->id;
				$mod_komen->market_tipe_id = $n_market->tipe_data;
				$mod_komen->invoice_no = $n_market->invoice_no;
				$mod_komen->save(false);

				$mod_komen2 = new TbNotifikasi;
				$mod_komen2->nama = 'anda telah menawar "'.$n_market->nama_post.'" dari user '. $find_nmember;
				$mod_komen2->tipe_notif = 'penawar';
				$mod_komen2->deleted = 0;
				$mod_komen2->notes = '';
				$mod_komen2->date_input = date("Y-m-d H:i:s");
				$mod_komen2->user_id = $gets_user->id;
				$mod_komen2->market_id = $n_market->id;
				$mod_komen2->market_tipe_id = $n_market->tipe_data;
				$mod_komen2->invoice_no = $n_market->invoice_no;
				$mod_komen2->save(false);

				$transaction->commit();
			}
			catch(Exception $e)
			{
			   $transaction->rollback();
			}
		}
		
		$data = ['result'=> true, 'message'=>'success input'];
		$this->_sendResponse(200, CJSON::encode($data));
	}

	// VIEW LIST MEMBER
	public function actionListmember()
	{
		// http://localhost/backend-community/api/rest/viewProfile
		$this->_checkAuth($_POST['session_id']);

		$gets_user = MeMember::model()->find('session_token = :session_token', array(':session_token'=>$_POST['session_id']));

		$f_kom_id = $_POST['komunitas_id'];
		if (isset($f_kom_id) && $f_kom_id != 0) {
			
			$data = Yii::app()->db->createCommand()
		    ->select('a.*, b.nama_mitra, c.nama as nama_bidangusaha, CASE WHEN a.foto_usaha != ""
					THEN CONCAT("https://salingtemu.com/systemlog/images/customer/", a.foto_usaha)
					ELSE CONCAT("https://salingtemu.com/systemlog/images/customer/", a.foto_diri)
					END AS foto_diri_full')
		    ->from('me_member a')
		    ->leftJoin('tb_kategori_usaha c', 'a.bidang_usaha=c.id')
		    ->leftJoin('tb_mitra b', 'a.mitra_id=b.id') 
		    ->where('a.mitra_id=:mitras_id', array(':mitras_id'=>$f_kom_id))
		    ->order(array('a.id asc'))
		    ->queryAll();

		} else {

			$data = Yii::app()->db->createCommand()
		    ->select('a.*, b.nama_mitra, c.nama as nama_bidangusaha, CASE WHEN a.foto_usaha != "" 
					THEN CONCAT("https://salingtemu.com/systemlog/images/customer/", a.foto_usaha)
					ELSE CONCAT("https://salingtemu.com/systemlog/images/customer/", a.foto_diri)
					END AS foto_diri_full')
		    ->from('me_member a')
		    ->leftJoin('tb_kategori_usaha c', 'a.bidang_usaha=c.id')
		    ->leftJoin('tb_mitra b', 'a.mitra_id=b.id') 
		    ->order('RAND()')
		    ->queryAll();

		}
		

		$this->_sendResponse(200, CJSON::encode($data));
	}

	// VIEW List Nofitikasi Barang
	public function actionNotifikasi_barang()
	{
		$this->_checkAuth($_POST['session_id']);

		$gets_user = MeMember::model()->find('session_token = :session_token', array(
					':session_token'=>$_POST['session_id']
					));
		
		$data = Yii::app()->db->createCommand()
	    ->select('a.*')
	    ->from('tb_market a')
	    ->where('a.kategori_id=:kat_id and a.user_id_post <> :usr_id', array(
	    	':kat_id'=>$gets_user->bidang_usaha, 
	    	':usr_id'=>$gets_user->id
	    ))
	    ->queryAll();

	    // if( count($data) <= 0 ){
	    // 	$data = array();
	    // }

		$this->_sendResponse(200, CJSON::encode($data));
	}

	public function actionNotifikasi_penawaran()
	{
		// http://localhost/backend-community/api/rest/viewProfile
		$this->_checkAuth($_POST['session_id']);

		$gets_user = MeMember::model()->find('t.session_token = :ses_tok', array(':ses_tok'=>$_POST['session_id']));

		$data = Yii::app()->db->createCommand()
	    ->select('a.nama as nama_penawar, a.deal as deal_penawar, a.tgl_input as tgl_input_tawar, b.id as markets_id, b.*')
	    ->from('tb_penawaran_list a')
	    ->rightJoin('tb_market b', 'a.market_id=b.id')
	    ->where('a.user_tawar_id = :usr_id', array(':usr_id'=>$gets_user->id))
	    ->queryAll();

		$this->_sendResponse(200, CJSON::encode($data));
	}

	// View List Penawar Member dari market yang di Upload
	public function actionListmarkettawar()
	{
		// http://localhost/backend-community/api/rest/viewProfile
		$this->_checkAuth($_POST['session_id']);
		$market_id = $_POST['market_id'];
		$invoices_no = $_POST['invoice_no'];

		$gets_user = MeMember::model()->find('session_token = :session_token', array(':session_token'=>$_POST['session_id']));

		$data = Yii::app()->db->createCommand()
	    ->select('a.market_id, a.invoice_no, a.user_post_id, a.tgl_input as tgl_input_penawar, b.*, CONCAT("https://salingtemu.com/systemlog/images/customer/", b.foto_diri) as foto_diri_full, c.nama_mitra, d.nama as nama_bidangusaha')
	    ->from('tb_penawaran_list a')
	    ->rightJoin('me_member b', 'a.user_tawar_id=b.id') 
	    ->rightJoin('tb_mitra c', 'b.mitra_id=c.id') 
	    ->rightJoin('tb_kategori_usaha d', 'b.bidang_usaha=d.id')
	    ->where('a.market_id=:mark_id and a.invoice_no=:invos_no', array(':mark_id'=>$market_id, ':invos_no'=>$invoices_no))
	    ->queryAll();

		$this->_sendResponse(200, CJSON::encode($data));
	}

	// View List Penawar Member dari market yang di Upload
	public function actionPostmarkettawar_deal()
	{
		// http://localhost/backend-community/api/rest/viewProfile
		$this->_checkAuth($_POST['session_id']);
		$market_id = $_POST['market_id'];
		$invoices_no = $_POST['invoice_no'];
		$user_tawar_id = $_POST['user_tawar_id'];

		$gets_user = MeMember::model()->find('session_token = :session_token', array(':session_token'=>$_POST['session_id']));

		Yii::app()->db->createCommand()
        ->update(
            'tb_market', 
            array(
                'user_id_deal'=> $user_tawar_id,
                'deal'=>'1',
                'arsip'=>'1',
                'tgl_deal'=>date("Y-m-d H:i:s"),
            ), 
            'invoice_no=:invoice_no and id = :mark_id', 
            array(':invoice_no'=> $invoices_no, ':mark_id'=> $market_id)
        );

        Yii::app()->db->createCommand()
        ->delete('tb_penawaran_list', 'market_id=:market_id and user_tawar_id <> :user_tawar_id', array(':market_id'=> $market_id, ':user_tawar_id'=> $user_tawar_id));

        // add notifikasi deal penawaran di deal.
        $find_market = TbMarket::model()->findByPk($market_id);
		$find_nmember = MeMember::model()->findByPk($user_tawar_id)->first_name;

        $mod_komen = new TbNotifikasi;
		$mod_komen->nama = 'penawaran anda telah deal "'.$find_market->nama_post.'" dari penawar '. $find_nmember;
		$mod_komen->tipe_notif = 'market_deal';
		$mod_komen->deleted = 0;
		$mod_komen->notes = '';
		$mod_komen->date_input = date("Y-m-d H:i:s");
		$mod_komen->user_id = $find_market->user_id_post;
		$mod_komen->market_id = $find_market->id;
		$mod_komen->market_tipe_id = $find_market->tipe_data;
		$mod_komen->invoice_no = $find_market->invoice_no;
		$mod_komen->save(false);

		// untuk penawar
		$find_nmember = MeMember::model()->findByPk($find_market->user_id_post)->first_name;
		$mod_komen = new TbNotifikasi;
		$mod_komen->nama = 'penawaran anda telah deal "'.$find_market->nama_post.'" oleh '. $find_nmember;
		$mod_komen->tipe_notif = 'market_deal';
		$mod_komen->deleted = 0;
		$mod_komen->notes = '';
		$mod_komen->date_input = date("Y-m-d H:i:s");
		$mod_komen->user_id = $find_market->user_id_deal;
		$mod_komen->market_id = $find_market->id;
		$mod_komen->market_tipe_id = $find_market->tipe_data;
		$mod_komen->invoice_no = $find_market->invoice_no;
		$mod_komen->save(false);

		// delete penawar yg tidak jadi deal.
		Yii::app()->db->createCommand()
        ->delete('tb_penawaran_list', 'market_id=:markid and user_tawar_id != :usr_tawar', 
        	array(
        		':markid'=>$market_id,
        		':usr_tawar'=>$user_tawar_id,
        		)
        );

        $datas = ['results'=>true, 'message'=>'success process'];

		$this->_sendResponse(200, CJSON::encode($datas));
	}

	// View List All Transaksi - Market
	public function actionListtransaksi_market()
	{
		// http://localhost/backend-community/api/rest/viewProfile
		$this->_checkAuth($_POST['session_id']);

		$data_users = MeMember::model()->find('t.session_token = :session_token', array(':session_token'=>$_POST['session_id']));

		$data = Yii::app()->db->createCommand()
	    ->select('a.*, b.nama_mitra, COUNT(c.nama) as jumlah_nawar, c.deal as deal_penawaran_list')
	    ->from('tb_market a')
	    ->rightJoin('tb_penawaran_list c', 'c.market_id=a.id') 
	    ->leftJoin('tb_mitra b', 'a.mitra_id=b.id')
	    ->where('a.user_id_post = :post_id and a.deal="1"', array( ':post_id' => $data_users->id))
	    ->queryAll();

	    if ( empty($data) or $data[0]['id'] === null) { 
	    	$data = array();
	    }

		$this->_sendResponse(200, CJSON::encode($data));
	}

	// View List All Transaksi - Penawar
	public function actionListtransaksi_penawar()
	{
		// http://localhost/backend-community/api/rest/viewProfile
		$this->_checkAuth($_POST['session_id']);

		$data_users = MeMember::model()->find('t.session_token = :session_token', array(':session_token'=>$_POST['session_id']));

		$data = Yii::app()->db->createCommand()
	    ->select('a.*, b.nama_mitra, COUNT(c.nama) as jumlah_nawar, c.deal as deal_penawaran_list')
	    ->from('tb_market a')
	    ->leftJoin('tb_mitra b', 'a.mitra_id=b.id')
	    ->leftJoin('tb_penawaran_list c', 'c.market_id=a.id') 
	    ->where('a.user_id_deal = :post_id and a.deal="1"', array( ':post_id' => $data_users->id))
	    ->queryAll();

	    if ( empty($data) or $data[0]['id'] === null) { 
	    	$data = array();
	    }

		$this->_sendResponse(200, CJSON::encode($data));
	}

	// View List All Transaksi - Penawar
	public function actionListkomen()
	{
		// http://localhost/backend-community/api/rest/viewProfile
		$this->_checkAuth($_POST['session_id']);
		$markets_id = $_POST['market_id'];

		$data_users = MeMember::model()->find('t.session_token = :session_token', array(':session_token'=>$_POST['session_id']));

		$data = Yii::app()->db->createCommand()
	    ->select('a.*, CONCAT(b.first_name, " ", b.last_name) as nama_lengkap')
	    ->from('tb_komen a')
	    ->leftJoin('me_member b', 'a.user_id_post=b.id')
	    ->where('a.market_id = :mark_id', array( ':mark_id' => $markets_id))
	    ->queryAll();

		$this->_sendResponse(200, CJSON::encode($data));
	}

	public function actionPostkomen()
	{
		// http://localhost/backend-community/api/rest/viewProfile
		$this->_checkAuth($_POST['session_id']);
		$markets_id = $_POST['market_id'];
		$user_market_post = $_POST['market_post_id'];
		$user_id_post = $_POST['user_id_post'];
		$user_nama_post = $_POST['user_nama_post'];
		$content = $_POST['content'];

		$datan = new TbKomen;
		$datan->market_id = $markets_id;
		$datan->market_id_member = $user_market_post;
		$datan->user_id_post = $user_id_post;
		$datan->post_user_nama = $user_nama_post;
		$datan->content = $content;
		$datan->date_input = date("Y-m-d H:i:s");
		$datan->save(false);

		// Add notifikasi market yg user posting market
		$find_market = TbMarket::model()->findByPk($markets_id);
		$find_nmember = MeMember::model()->findByPk($user_id_post)->first_name;

		$mod_komen = new TbNotifikasi;
		$mod_komen->nama = 'anda memiliki komentar baru "'.$find_market->nama_post.'" dari user '. $find_nmember;
		$mod_komen->tipe_notif = 'komentar';
		$mod_komen->deleted = 0;
		$mod_komen->notes = '';
		$mod_komen->date_input = date("Y-m-d H:i:s");
		$mod_komen->user_id = $find_market->user_id_post;
		$mod_komen->market_id = $find_market->id;
		$mod_komen->market_tipe_id = $find_market->tipe_data;
		$mod_komen->invoice_no = $find_market->invoice_no;
		$mod_komen->save(false);

		// Sent notif to user ever commented
		$res_komen_not = Yii::app()->db->createCommand()
	    ->select("a.*")
	    ->from('tb_komen a')
	    // ->where('a.market_id = :mark_id and a.user_id_post != :user_id_p', 
	    ->where('a.market_id = :mark_id', 
	    		array( 
	    			':mark_id' => $markets_id,
	    			// ':user_id_p' => $user_id_post,
	    			 )
	    		)
	    ->group('a.user_id_post')
	    ->queryAll();

	    foreach ($res_komen_not as $key => $value) {

	    	if ($value['user_id_post'] != $find_market->user_id_post) {
		    	// $ff_member = MeMember::model()->findByPk( $value['user_id_post'] )->first_name;

		    	$mod_komen = new TbNotifikasi;
				$mod_komen->nama = 'anda memiliki komentar baru "'. $find_market->nama_post.'" dari user '. $find_nmember;
				$mod_komen->tipe_notif = 'komentar';
				$mod_komen->deleted = 0;
				$mod_komen->notes = '';
				$mod_komen->date_input = date("Y-m-d H:i:s");
				$mod_komen->user_id = $value['user_id_post'];
				$mod_komen->market_id = $find_market->id;
				$mod_komen->market_tipe_id = $find_market->tipe_data;
				$mod_komen->invoice_no = $find_market->invoice_no;
				$mod_komen->save(false);
	    	}

	    }

		$data = ['results'=> true, 'message'=> 'success input'];

		$this->_sendResponse(200, CJSON::encode($data));
	}

	/*
	public function actionListprovinsi()
	{
		$this->_checkAuth($_POST['session_id']);

		// get province
		$criteria=new CDbCriteria;
		$criteria->group = 'province_id';
		$data = City::model()->findAll($criteria);

		$datas = array();
		foreach ($data as $key => $value) {
			$datas[$value->province] = $value->province;
		}

		$this->_sendResponse(200, CJSON::encode($datas));	
	}
	
	public function actionListcity()
	{
		$this->_checkAuth($_POST['session_id']);

		$province_id = $_POST['province_name'];
		// get province
		$criteria=new CDbCriteria;
		$criteria->addCondition('t.province = :prov_name');
		$criteria->params[':prov_name'] = $province_id;
		$data = City::model()->findAll($criteria);

		$datas = array();
		foreach ($data as $key => $value) {
			$datas[$value->city_name] = $value->city_name;
		}

		$this->_sendResponse(200, CJSON::encode($datas));	
	}
	*/

	public function actionGetpengumuman()
	{
		$this->_checkAuth($_POST['session_id']);

		// get data
		// $data = array();
		// $data['content'] = $this->setting['pengumuman_content'];
		$criteria = new CDbCriteria;
		$criteria->order = 't.urutan ASC';
		$data = TbPengumuman::model()->findAll($criteria);

		$this->_sendResponse(200, CJSON::encode($data));	
	}

	public function actionGetnotifikasi()
	{
		$this->_checkAuth($_POST['session_id']);

		$model_user = MeMember::model()->find('t.session_token = :ses_tok', array(':ses_tok'=>$_POST['session_id']));

		// get data
		$var_ter = 1;
		$data = Yii::app()->db->createCommand()
	    ->select("a.*, IF(a.terbaca = '".$var_ter."' , '#00000000', '#80ffffff') as warna")
	    ->from('tb_notif a')
	    ->where('a.user_id = :n_user_id and a.deleted="0"', 
	    		array( 
	    			':n_user_id' => $model_user->id,
	    			 )
	    		)
	    ->order(array('a.date_input desc'))
	    ->queryAll();

		$this->_sendResponse(200, CJSON::encode($data));	
	}

	public function actionDelnotifikasi()
	{
		$this->_checkAuth($_POST['session_id']);

		$model_user = MeMember::model()->find('t.session_token = :ses_tok', array(':ses_tok'=>$_POST['session_id']));
		$notif_id = $_POST['notif_id'];

		$data_notif = TbNotifikasi::model()->findByPk($notif_id);
		$data_notif->deleted = 1;
		$data_notif->save(false); 

		$data = ['results'=> true, 'message'=> 'notifikasi sukses deleted'];

		$this->_sendResponse(200, CJSON::encode($data));	
	}

	public function actionSetnotifikasi_terbaca()
	{
		$this->_checkAuth($_POST['session_id']);

		$model_user = MeMember::model()->find('t.session_token = :ses_tok', array(':ses_tok'=>$_POST['session_id']));
		$notif_id = $_POST['notif_id'];

		$data_notif = TbNotifikasi::model()->findByPk($notif_id);
		$data_notif->terbaca = 1;
		$data_notif->save(false);

		$data_res = Yii::app()->db->createCommand()
	    ->select('a.*')
	    ->from('tb_market a')
	    ->where('a.aktif="1" and a.arsip != "1" and ( DATE_FORMAT(a.tgl_expired, "%Y-%m-%d") < CURDATE() ) and a.invoice_no=:invo_no and a.id=:market_id',
	    	array( ':invo_no'=>$data_notif->invoice_no, ':market_id'=> $data_notif->market_id )
	    )
	    ->queryAll();

	    if ( count($data_res) > 0 ) {
	    	$data = ['results'=> true, 'message'=> 'Maaf, market ini sudah kadaluarsa!'];
	    } else {
			$data = ['results'=> true, 'message'=> 'notifikasi sukses terbaca'];
	    }	    

		$this->_sendResponse(200, CJSON::encode($data));	
	}

	public function actionGetnotifikasi_totalbelum()
	{
		$this->_checkAuth($_POST['session_id']);

		$model_user = MeMember::model()->find('t.session_token = :ses_tok', array(':ses_tok'=>$_POST['session_id']));

		// get data
		$datas = Yii::app()->db->createCommand()
	    ->select("a.*")
	    ->from('tb_notif a')
	    ->where('a.user_id = :n_user_id and a.deleted="0" and a.terbaca="0"', 
	    		array( 
	    			':n_user_id' => $model_user->id,
	    			 )
	    		)
	    ->order(array('a.date_input desc'))
	    ->queryAll();

	    $data['jumlah'] = count($datas);

		$this->_sendResponse(200, CJSON::encode($data));	
	}

	private function _sendResponse($status = 200, $body = '', $content_type = 'text/html')
	{
	    // set the status
	    $status_header = 'HTTP/1.1 ' . $status . ' ' . $this->_getStatusCodeMessage($status);
	    header($status_header);
	    // and the content type
	    header('Content-type: ' . $content_type);

	    // pages with body are easy
	    if($body != '')
	    {
	        // send the body
	        echo $body;
	    }
	    // we need to create the body if none is passed
	    else
	    {
	        // create some body messages
	        $message = '';

	        // this is purely optional, but makes the pages a little nicer to read
	        // for your users.  Since you won't likely send a lot of different status codes,
	        // this also shouldn't be too ponderous to maintain
	        switch($status)
	        {
	            case 401:
	                $message = 'You must be authorized to view this page.';
	                break;
	            case 404:
	                $message = 'The requested URL ' . $_SERVER['REQUEST_URI'] . ' was not found.';
	                break;
	            case 500:
	                $message = 'The server encountered an error processing your request.';
	                break;
	            case 501:
	                $message = 'The requested method is not implemented.';
	                break;
	        }

			        // servers don't always have a signature turned on 
			        // (this is an apache directive "ServerSignature On")
			        $signature = ($_SERVER['SERVER_SIGNATURE'] == '') ? $_SERVER['SERVER_SOFTWARE'] . ' Server at ' . $_SERVER['SERVER_NAME'] . ' Port ' . $_SERVER['SERVER_PORT'] : $_SERVER['SERVER_SIGNATURE'];

			        // this should be templated in a real-world solution
			        $body = '
			<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
			<html>
			<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			    
			    <title>' . $status . ' ' . $this->_getStatusCodeMessage($status) . '</title>
			</head>
			<body>
			    <h1>' . $this->_getStatusCodeMessage($status) . '</h1>
			    <p>' . $message . '</p>
			    <hr />
			    <address>' . $signature . '</address>
			</body>
			</html>';

			        echo $body;
			    }
			    Yii::app()->end();
		}

		private function _getStatusCodeMessage($status)
		{
		    // these could be stored in a .ini file and loaded
		    // via parse_ini_file()... however, this will suffice
		    // for an example
		    $codes = Array(
		        200 => 'OK',
		        400 => 'Bad Request',
		        401 => 'Unauthorized',
		        402 => 'Payment Required',
		        403 => 'Forbidden',
		        404 => 'Not Found',
		        500 => 'Internal Server Error',
		        501 => 'Not Implemented',
		    );
		    return (isset($codes[$status])) ? $codes[$status] : '';
		}

	private function _checkAuth($session_id)
	{
	    // Check if we have the USERNAME and PASSWORD HTTP headers set?
	    if($session_id == '') {
	        // Error: Unauthorized
	        $error_ar = [
							'result'=>false, 
							'error'=>'Unauthorized',
						];
	        $this->_sendResponse(200, CJSON::encode($error_ar));
	    }

	    // Find the user
	    $user = MeMember::model()->find('t.aktif = "1" and session_token = :ses_tok', array(':ses_tok'=>$session_id));
	    if($user === null) {
	        // Error: Unauthorized
	        $error_ar = [
							'result'=>false, 
							'error'=>'Session is invalid',
						];
			$this->_sendResponse(200, CJSON::encode($error_ar));
	    }else{
	    	return true;
	    }

	}

}