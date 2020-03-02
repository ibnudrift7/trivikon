<?php

class StaticController extends ControllerAdmin
{
	public $layout='//layoutsAdmin/column2';

	public function filters()
	{
		return array(
			//'accessControl', // perform access control for CRUD operations
			array('admin.filter.AuthFilter'),
		);
	}

	public function actionIndex($page, $title)
	{
		$model = Setting::model()->getModelSetting('data');

		$model = $this->loadData($model);

		$this->render('index',array(
			'model'=>$model,
			'page'=>$page,
			'title'=>$title,
		));
	}

	public function actionHome()
	{
		$model = Setting::model()->getModelSetting('data');

		$model = $this->loadData($model);

		$this->render('home',array(
			'model'=>$model,
		));
	}

	public function actionAbout()
	{
		$model = Setting::model()->getModelSetting('data');

		$model = $this->loadData($model);

		$this->render('about',array(
			'model'=>$model,
		));
	}

	public function actionPengumuman()
	{
		$model = Setting::model()->getModelSetting('data');

		$model = $this->loadData($model);

		$this->render('pengumuman',array(
			'model'=>$model,
		));
	}

	public function actionArtikel()
	{
		$model = Setting::model()->getModelSetting('data');

		$model = $this->loadData($model);

		$this->render('artikel',array(
			'model'=>$model,
		));
	}

	public function actionKarir()
	{
		$model = Setting::model()->getModelSetting('data');

		$model = $this->loadData($model);

		$this->render('karir',array(
			'model'=>$model,
		));
	}

	public function actionProcess()
	{
		$model = Setting::model()->getModelSetting('data');

		$model = $this->loadData($model);

		$this->render('process',array(
			'model'=>$model,
		));
	}

	public function actionContact()
	{
		$model = Setting::model()->getModelSetting('data');

		$model = $this->loadData($model);

		$this->render('contact',array(
			'model'=>$model,
		));
	}

	public function actionCareer()
	{
		$model = Setting::model()->getModelSetting('data');

		$model = $this->loadData($model);

		$this->render('career',array(
			'model'=>$model,
		));
	}

	public function actionProducts()
	{
		$model = Setting::model()->getModelSetting('data');

		$model = $this->loadData($model);

		$this->render('products',array(
			'model'=>$model,
		));
	}

	public function actionProduct()
	{
		$model = Setting::model()->getModelSetting('data');

		$model = $this->loadData($model);

		// if(isset($_POST['Setting']))
		// {
		// 	$model2 = new Setting;
		// 	$stsError = 0;

		// 	$setting = $_FILES['Setting'];
		// 	if (count($setting['name'])>0) {
		// 		foreach ($setting['name'] as $key => $value) {
		// 			if (
		// 				!(
		// 					$setting['type'][$key] == 'image/jpg'
		// 					|| $setting['type'][$key] == 'image/jpeg'
		// 					|| $setting['type'][$key] == 'image/pjpeg'
		// 					|| $setting['type'][$key] == 'image/png'
		// 					|| $setting['type'][$key] == ''
		// 				) 
		// 			)
		// 			{
		// 				$stsError = 1;
		// 			}
		// 		}
		// 	}

		// 	if ($stsError == 0) {
		// 		$transaction=$model2->dbConnection->beginTransaction();
		// 		try
		// 		{
		// 			$setting = $_POST['Setting'];
		// 			foreach ($setting as $key => $value) {
		// 				if ( ! is_array($value)) {
		// 					$modelSetting = Setting::model()->getSettingByName($key);
		// 					$modelSetting->value = $value;
		// 					$modelSetting->save();
		// 				}else{
		// 					foreach ($value as $k => $v) {
		// 						$modelSetting = SettingDescription::model()->getSettingModel($key,$k);
		// 						if ($modelSetting==null) {
		// 							$modelSetting = new SettingDescription;
		// 							$setting_id = Setting::model()->find('name = :name',array(':name'=>$key))->id;
		// 							$language_id = Language::model()->find('code = :code',array(':code'=>$k))->id;
		// 							$modelSetting->setting_id = $setting_id;
		// 							$modelSetting->language_id = $language_id;
		// 						}
		// 						$modelSetting->value = $v;
		// 						$modelSetting->save();
		// 					}
		// 				}
		// 			}

		// 			$setting = $_FILES['Setting'];
		// 			if (count($setting)>0) {
		// 			foreach ($setting['name'] as $key => $value) {
		// 				if ($setting['tmp_name'][$key] != '') {
		// 				$dir = Yii::getPathOfAlias('webroot').'/images/static/';

		// 			    // setting file's mysterious name
		// 			    $file = substr(md5(date('YmdHis').rand(0,10000000000000)), 0, 10).$setting['name'][$key];
					   
		// 			    // copying
		// 			    move_uploaded_file($setting['tmp_name'][$key], $dir.$file);

		// 				$modelSetting = Setting::model()->getSettingByName($key);
		// 				$modelSetting->value = $file;
		// 				$modelSetting->save();
		// 				}
		// 			}
		// 			}

		// 			foreach (Language::model()->findAll() as $key => $value) {
		// 				Yii::app()->cache->delete('setting_'.$value->code);
		// 			}

		// 			Log::createLog("Setting Update");
		// 			Yii::app()->user->setFlash('success','Prices has been updated');


		// 			// $dataProduct = 

		// 		    $transaction->commit();

		// 			if ($_GET['lang']) {
		// 				Yii::app()->language = $_GET['lang'];
		// 			}
		// 			$this->languageID = Language::model()->find('code = :code', array(':code'=>Yii::app()->language))->id;
		// 			// $this->idController = $this->id;
		// 			$this->setting=Yii::app()->cache->get('setting_'.Yii::app()->language);
		// 			if($this->setting===false)
		// 			{
		// 			    // regenerate $value because it is not found in cache
		// 			    // and save it in cache for later use:
		// 				$this->setting = Setting::model()->getSetting(Yii::app()->language);
		// 			    Yii::app()->cache->set('setting_'.Yii::app()->language,$this->setting);
		// 			}

		// 			$discount = $this->setting['product_discount'];
		// 			if (is_numeric($discount)) {
		// 				$dataProduct = PrdProduct::model()->findAll();
		// 				foreach ($dataProduct as $key => $value) {
		// 					if ($value->harga > $value->harga_coret) {
		// 						$temp = $value->harga;
		// 						$value->harga = $value->harga - ($value->harga * $discount/100);
		// 						$value->harga_coret = $temp;
		// 						$value->save(false);
		// 					}else{
		// 						$value->harga = $value->harga_coret - ($value->harga_coret * $discount/100);
		// 						$value->save(false);
		// 					}
		// 				}
		// 			}
		// 			$this->refresh();
		// 		}
		// 		catch(Exception $ce)
		// 		{
		// 		    $transaction->rollback();
		// 		    echo $ce;
		// 	exit;
		// 		}
		// 	}
		// }
		$this->render('product',array(
			'model'=>$model,
		));
	}

	public function loadData($model='')
	{
		if(isset($_POST['Setting']))
		{
			$model2 = new Setting;
			$stsError = 0;

			$setting = $_FILES['Setting'];
			if (count($setting['name'])>0) {
				foreach ($setting['name'] as $key => $value) {
					if (
						!(
							$setting['type'][$key] == 'image/jpg'
							|| $setting['type'][$key] == 'image/jpeg'
							|| $setting['type'][$key] == 'image/pjpeg'
							|| $setting['type'][$key] == 'image/png'
							|| $setting['type'][$key] == ''
						) 
					)
					{
						$stsError = 1;
					}
				}
			}

			if ($stsError == 0) {
				$transaction=$model2->dbConnection->beginTransaction();
				try
				{
					$setting = $_POST['Setting'];
					foreach ($setting as $key => $value) {
						if ( ! is_array($value)) {
							$modelSetting = Setting::model()->getSettingByName($key);
							$modelSetting->value = $value;
							$modelSetting->save();
						}else{
							foreach ($value as $k => $v) {
								$modelSetting = SettingDescription::model()->getSettingModel($key,$k);
								if ($modelSetting==null) {
									$modelSetting = new SettingDescription;
									$setting_id = Setting::model()->find('name = :name',array(':name'=>$key))->id;
									$language_id = Language::model()->find('code = :code',array(':code'=>$k))->id;
									$modelSetting->setting_id = $setting_id;
									$modelSetting->language_id = $language_id;
								}
								$modelSetting->value = $v;
								$modelSetting->save();
							}
						}
					}

					$setting = $_FILES['Setting'];
					if (count($setting)>0) {
					foreach ($setting['name'] as $key => $value) {
						if ($setting['tmp_name'][$key] != '') {
						$dir = Yii::getPathOfAlias('webroot').'/images/static/';

					    // setting file's mysterious name
					    $file = substr(md5(date('YmdHis').mt_rand(100,1000000)), 0, 10).$setting['name'][$key];
					   
					    // copying
					    move_uploaded_file($setting['tmp_name'][$key], $dir.$file);

						$modelSetting = Setting::model()->getSettingByName($key);
						$modelSetting->value = $file;
						$modelSetting->save();
						}
					}
					}

					foreach (Language::model()->findAll() as $key => $value) {
						Yii::app()->cache->delete('setting_'.$value->code);
					}

					Log::createLog("Setting Update");
					Yii::app()->user->setFlash('success','Data has been updated');
				    $transaction->commit();
					$this->refresh();
				}
				catch(Exception $ce)
				{
				    $transaction->rollback();
				    echo $ce;
			exit;
				}
			}
		}

		return $model;
	}


}
