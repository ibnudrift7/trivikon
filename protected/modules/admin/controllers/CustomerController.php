<?php

class CustomerController extends ControllerAdmin
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layoutsAdmin/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			//'accessControl', // perform access control for CRUD operations
			array('admin.filter.AuthFilter'),
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			(!Yii::app()->user->isGuest)?
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('delete','index','view','create','update'),
				'users'=>array(Yii::app()->user->name),
			):array(),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new MeMember;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['MeMember']))
		{
			$model->attributes=$_POST['MeMember'];

			$foto_diri = CUploadedFile::getInstance($model,'foto_diri');
			if ($foto_diri->name != '') {
				$model->foto_diri = substr(md5(time()),0,5).'-'.$foto_diri->name;
			}

			$foto_diri = CUploadedFile::getInstance($model,'foto_diri');
			if ($foto_diri->name != '') {
				$model->foto_diri = substr(md5(time()),0,5).'-'.$foto_diri->name;
			}

			if($model->validate()){
				$transaction=$model->dbConnection->beginTransaction();
				try
				{
					if ($foto_diri->name != '') {
						// process foto usaha
						$orig_filen = Yii::getPathOfAlias('webroot').'/images/customer/original/'.$model->foto_diri;
						$foto_diri->saveAs($orig_filen);
						
						$full_file = $orig_filen;
						$full_thumb = Yii::getPathOfAlias('webroot').'/images/customer/'. 'thumb_'.$model->foto_diri;
						$this->Thumbnail($full_file, $full_thumb, 256);
						$model->foto_diri = 'thumb_'.$model->foto_diri;
					}

					if ($foto_diri->name != '') {
						// process foto diri
						$orig_filen2 = Yii::getPathOfAlias('webroot').'/images/customer/original/'.$model->foto_diri;
						$foto_diri->saveAs($orig_filen2);
						
						$full_file2 = $orig_filen2;
						$full_thumb2 = Yii::getPathOfAlias('webroot').'/images/customer/'. 'thumb_'.$model->foto_diri;
						$this->Thumbnail($full_file2, $full_thumb2, 256);
						$model->foto_diri = 'thumb_'.$model->foto_diri;
					}

					$model->pass2 = sha1($model->pass);
					$model->pass = sha1($model->pass);
					$model->session_token = sha1($model->first_name.'-'.$model->pass);
					$model->tgl_masuk = date("Y-m-d H:i:s");
					
					$model->save();

					Log::createLog("CustomerController Create $model->id");
					Yii::app()->user->setFlash('success','Data has been inserted');
				    $transaction->commit();
					$this->redirect(array('index'));
				}
				catch(Exception $ce)
				{
				    $transaction->rollback();
				}
			}
		}

		// $sql="SELECT * FROM `tb_provinsi` where `provinsi` != '' group by `provinsi` order by `id` ASC";

		$provinsi = Yii::app()->db->createCommand()
        ->select('tb1.*')
        ->from('tb_provinsi tb1')
        ->group('provinsi') 
        ->where('provinsi != ""')
        ->queryAll();

		$this->render('create',array(
			'model'=>$model,
			'provinsi'=>$provinsi,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		$model->scenario = 'update';

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['MeMember']))
		{
			$pass = $model->pass;

			$foto_diri = $model->foto_diri;//mengamankan nama file
			$foto_diri = $model->foto_diri;//mengamankan nama file
			$model->attributes=$_POST['MeMember'];
			$model->foto_diri = $foto_diri;//mengembalikan nama file
			$model->foto_diri = $foto_diri;//mengembalikan nama file

			if ($model->pass != '') {
				$model->scenario = 'updatePass';
			}
			
			$foto_diri = CUploadedFile::getInstance($model,'foto_diri');
			if ($foto_diri->name != '') {
				$model->foto_diri = substr(md5(time()),0,5).'-'.$foto_diri->name;
			}

			$foto_diri = CUploadedFile::getInstance($model,'foto_diri');
			if ($foto_diri->name != '') {
				$model->foto_diri = substr(md5(time()),0,5).'-'.$foto_diri->name;
			}

			if($model->validate()){
				$transaction=$model->dbConnection->beginTransaction();
				try
				{
				
					if ($foto_diri->name != '') {
						// process foto usaha
						$orig_filen = Yii::getPathOfAlias('webroot').'/images/customer/original/'.$model->foto_diri;
						$foto_diri->saveAs($orig_filen);
						
						$full_file = $orig_filen;
						$full_thumb = Yii::getPathOfAlias('webroot').'/images/customer/'. 'thumb_'.$model->foto_diri;
						$this->Thumbnail($full_file, $full_thumb, 256);
						$model->foto_diri = 'thumb_'.$model->foto_diri;
					}

					if ($foto_diri->name != '') {
						// process foto diri
						$orig_filen2 = Yii::getPathOfAlias('webroot').'/images/customer/original/'.$model->foto_diri;
						$foto_diri->saveAs($orig_filen2);
						
						$full_file2 = $orig_filen2;
						$full_thumb2 = Yii::getPathOfAlias('webroot').'/images/customer/'. 'thumb_'.$model->foto_diri;
						$this->Thumbnail($full_file2, $full_thumb2, 256);
						$model->foto_diri = 'thumb_'.$model->foto_diri;
					}

					if ($model->pass != '') {
						$model->pass2 = sha1($model->pass);
						$model->pass = sha1($model->pass);
					}else{
						$model->pass = $pass;
					}

					if ($model->session_token == '') {
						$model->session_token = sha1($model->first_name.'-'.$model->pass);
					}

					if ($model->del_fotoperusahaan == "1") {
						@unlink(Yii::getPathOfAlias('webroot').'/images/customer/'.$model->foto_diri);
						@unlink(Yii::getPathOfAlias('webroot').'/images/customer/original/'.$model->foto_diri);
						$model->foto_diri = '';
					}

					$model->save();

					Log::createLog("CustomerController Update $model->id");
					Yii::app()->user->setFlash('success','Data Edited');
				    $transaction->commit();
					$this->redirect(array('index'));
				}
				catch(Exception $ce)
				{
				    $transaction->rollback();
				}
			}
		}

		$model->pass = '';

		$provinsi = false;

		$this->render('update',array(
			'model'=>$model,
			'provinsi'=>$provinsi,
		));
	}

	private function _ListKota()
	{	
		exit;
		$models_provinsi = TbProvinsi::model()->findAll();
		foreach ($models_provinsi as $key => $value) {
			$curl = curl_init();
			$api_key = 'd8c0793b1556781c7e835399f5cc599c';
			curl_setopt_array($curl, array(
			  CURLOPT_URL => "https://pro.rajaongkir.com/api/city?province=". $value->id,
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => "",
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 30,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_CUSTOMREQUEST => "GET",
			  CURLOPT_HTTPHEADER => array(
			    "key: ".$api_key 
			  ),
			));
			$response = curl_exec($curl);
			$err = curl_error($curl);
			$response = json_decode($response);
			$data = $response->rajaongkir->results;

			foreach ($data as $ke => $val) {
				$news_data = new TbKota;
				$news_data->provinsi_id = $value->id;
				$news_data->nama = $val->city_name;
				$news_data->save(false);
			}
		}
		echo "done input";
		exit;

	}

	public function actionGetcity()
	{
		$in_prov = htmlspecialchars($_GET['provinsi']);

		$data_prov = TbProvinsi::model()->find('provinsi = :provs', array(':provs'=> $in_prov));

		$models_kota = TbKota::model()->findAll('provinsi_id = :prov_id', array(':prov_id'=> $data_prov->id ));

        $str = '';
        foreach ($models_kota as $key => $value) {
        	$str .= '<option value="'. $value->nama .'">'. $value->nama .'</option>';
        }

        echo $str;
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		// we only allow deletion via POST request
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		$this->redirect(array('index'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$model=new MeMember('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['MeMember']))
			$model->attributes=$_GET['MeMember'];

		$dataProvider=new CActiveDataProvider('MeMember');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=MeMember::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function actionTestthumbnail()
	{
		echo "done tests";
		die();
		$models_d = MeMember::model()->findAll();
		foreach ($models_d as $key => $value) {
			if ($value->foto_diri != '') {
				$n_paths = Yii::getPathOfAlias('webroot').'/images/customer/';
				$this->Thumbnail($n_paths.$value->foto_diri, $n_paths.$value->foto_diri, 256);
			}
			if ($value->foto_diri != '') {
				$this->Thumbnail($n_paths.$value->foto_diri, $n_paths.$value->foto_diri, 256);
			}
		}
	}

	public function Thumbnail($url, $destination, $width = 300, $height = true) {

	 // download and create gd image
	 $image = ImageCreateFromString(file_get_contents($url));

	 // calculate resized ratio
	 // Note: if $height is set to TRUE then we automatically calculate the height based on the ratio
	 $height = $height === true ? (ImageSY($image) * $width / ImageSX($image)) : $height;

	 // create image 
	 $output = ImageCreateTrueColor($width, $height);
	 ImageCopyResampled($output, $image, 0, 0, 0, 0, $width, $height, ImageSX($image), ImageSY($image));

	 // save image
	 ImageJPEG($output, $destination, 90); 

	 return $output; // if you need to use it
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='cs-customer-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
