<?php

class LiterasiController extends ControllerAdmin
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
			array('admin.filter.AuthFilter', 
				'params'=>array(
					'actionAllowOnLogin'=>array('upload'),
				)
			),
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
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Literasi;
		$modelDesc = array();
		foreach (Language::model()->getLanguage() as $key => $value) {
			$modelDesc[$value->code] = new LiterasiDescription;
		}

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Literasi']))
		{
			$model->attributes=$_POST['Literasi'];

			//validation Layanan Description
			unset($modelDesc);
			$valid=true;

			$model->image = $session['upload_foto'][1];

			foreach ($_POST['LiterasiDescription'] as $j => $mod) {
	            if (isset($_POST['LiterasiDescription'][$j])) {
	                $modelDesc[$j]=new LiterasiDescription; // if you had static model only
	                $modelDesc[$j]->attributes=$mod;
	                $lang = Language::model()->getName($j);
					$modelDesc[$j]->language_id = $lang->id;
	                $valid=$modelDesc[$j]->validate() && $valid;
	            }
	        }

			$model->date_input = $_POST['Date']['year'].'-'.$_POST['Date']['month'].'-'.$_POST['Date']['date'].' '.$_POST['Date']['hours'].':'.$_POST['Date']['minute'].'-'.$_POST['Date']['second'];
			// $model->date_input = date("Y-m-d H:i:s");

			$image = CUploadedFile::getInstance($model,'image');
			$model->image = substr(md5(time()),0,5).'-'.$image->name;

			$image2 = CUploadedFile::getInstance($model,'image2');
			$model->image2 = substr(md5(time()),0,5).'-'.$image2->name;

			$model->data = $_POST['Literasi']['data'];

			if($model->validate() AND $valid){
				$transaction=$model->dbConnection->beginTransaction();
				try
				{
					$model->type = 'literasi';
					$image->saveAs(Yii::getPathOfAlias('webroot').'/images/blog/'.$model->image);
					$image2->saveAs(Yii::getPathOfAlias('webroot').'/images/blog/'.$model->image2);
					// $model->date_input = date("Y-m-d H:i:s");
					$model->date_update = date("Y-m-d H:i:s");
					$model->insert_by = Yii::app()->user->name;
					$model->last_update_by = Yii::app()->user->name;
					$model->data = serialize($model->data);

					$model->save();

					foreach ($modelDesc as $key => $value) {
						$value->blog_id=$model->id;
						$value->save();
					}

					Log::createLog("Literasi Controller Create $model->id");
					Yii::app()->user->setFlash('success','Data has been inserted');
				    $transaction->commit();
					$this->redirect(array('update','id'=>$model->id));
				}
				catch(Exception $ce)
				{
				    $transaction->rollback();
				}
			}
		}

		if ($model->writer == '') {
			$dataLogin = User::model()->getDataLogin();
			$model->writer = $dataLogin['initial'];
		}
		if ($model->date_input == '') {
			$model->date_input = date('Y-m-d H:i:s');
		}

		$this->render('create',array(
			'model'=>$model,
			'modelDesc'=>$modelDesc,
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
		$modelDesc = array();
		foreach (Language::model()->getLanguage() as $key => $value) {
			$modelDesc[$value->code] = Literasi::model()->getDataDesc($model->id, $value->id);
			$modelDesc[$value->code] = ($modelDesc[$value->code]==null) ? new LiterasiDescription : $modelDesc[$value->code];
			// echo CHtml::errorSummary($modelDesc[$value->code]);
		}

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Literasi']))
		{
			$image = $model->image;//mengamankan nama file
			$image2 = $model->image2;//mengamankan nama file
			// $file = $model->file;//mengamankan nama file
			$model->attributes=$_POST['Literasi'];//setting semua nilai
			$model->image = $image;//mengembalikan nama file
			$model->image2 = $image2;//mengembalikan nama file

			unset($modelDesc);
			$valid=true;
			foreach ($_POST['LiterasiDescription'] as $j => $mod) {
	            if (isset($_POST['LiterasiDescription'][$j])) {
	                $modelDesc[$j]=new LiterasiDescription; // if you had static model only
	                $modelDesc[$j]->attributes=$mod;
	                $lang = Language::model()->getName($j);
					$modelDesc[$j]->language_id = $lang->id;
	                $valid=$modelDesc[$j]->validate() && $valid;
	            }
	        }

			$image = CUploadedFile::getInstance($model,'image');
			if ($image->name != '') {
				$model->image = substr(md5(time()),0,5).'-'.$image->name;
			}
			$image2 = CUploadedFile::getInstance($model,'image2');
			if ($image2->name != '') {
				$model->image2 = substr(md5(time()),0,5).'-'.$image2->name;
			}

			$model->data = $_POST['Literasi']['data'];

			$model->date_input = $_POST['Date']['year'].'-'.$_POST['Date']['month'].'-'.$_POST['Date']['date'].' '.$_POST['Date']['hours'].':'.$_POST['Date']['minute'].'-'.$_POST['Date']['second'];

			if($model->validate() AND $valid){
				$transaction=$model->dbConnection->beginTransaction();
				try
				{
					$model->type = 'literasi';
					if ($image->name != '') {
						$image->saveAs(Yii::getPathOfAlias('webroot').'/images/blog/'.$model->image);
					}
					if ($image2->name != '') {
						$image2->saveAs(Yii::getPathOfAlias('webroot').'/images/blog/'.$model->image2);
					}

					$model->date_update = date("Y-m-d H:i:s");
					$model->last_update_by = Yii::app()->user->name;
					$model->data = serialize($model->data);

					$model->save();

					LiterasiDescription::model()->deleteAll('blog_id = :id', array(':id'=>$model->id));
					foreach ($modelDesc as $key => $value) {
						$value->blog_id=$model->id;
						$value->save();
					}

					Log::createLog("LiterasiController Update $model->id");
					Yii::app()->user->setFlash('success','Data Edited');
				    $transaction->commit();
					$this->redirect(array('update','id'=>$model->id));
				}
				catch(Exception $ce)
				{
				    $transaction->rollback();
				}
			}
		}

		if ( ! is_array($model->data)) {
			$model->data = unserialize($model->data);
		}else{
			$model->data = ($model->data);
		}

		$this->render('update',array(
			'model'=>$model,
			'modelDesc'=>$modelDesc,
		));
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
		$model=new Literasi('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Literasi']))
			$model->attributes=$_GET['Literasi'];

		$model->type = 'literasi';

		$dataProvider=new CActiveDataProvider('Literasi');
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
		$model=Literasi::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='blog-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
