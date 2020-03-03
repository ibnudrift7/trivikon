<?php

class DirectorsController extends ControllerAdmin
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
		$model=new Directors;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Directors']))
		{
			$model->attributes=$_POST['Directors'];

			$images = CUploadedFile::getInstance($model,'images');
			if ($images->name != '') {
				$model->images = 'director/'.substr(md5(time()),0,5).'-'.$images->name;
			}

			if($model->validate()){
				$transaction=$model->dbConnection->beginTransaction();
				try
				{
					if ($images->name != '') {
						$images->saveAs(Yii::getPathOfAlias('webroot').'/images/'.$model->images);
					}

					$model->save();
					Log::createLog("DirectorsController Create $model->id");
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

		$this->render('create',array(
			'model'=>$model,
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

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Directors']))
		{
			$images = $model->images;//mengamankan nama file
			$model->attributes=$_POST['Directors'];
			$model->images = $images;//mengembalikan nama file

			$images = CUploadedFile::getInstance($model,'images');
			if ($images->name != '') {
				$model->images = 'director/'.substr(md5(time()),0,5).'-'.$images->name;
			}

			if($model->validate()){
				$transaction=$model->dbConnection->beginTransaction();
				try
				{
					if ($images->name != '') {
						$images->saveAs(Yii::getPathOfAlias('webroot').'/images/'.$model->images);
					}
					
					$model->save();
					Log::createLog("DirectorsController Update $model->id");
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

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		// if(Yii::app()->request->isPostRequest)
		// {
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			// if(!isset($_GET['ajax']))
				$this->redirect( array('index') );
		// }
		// else
		// 	throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$model=new Directors('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Directors']))
			$model->attributes=$_GET['Directors'];

		$dataProvider=new CActiveDataProvider('Directors');
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
		$model=Directors::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='directors-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}