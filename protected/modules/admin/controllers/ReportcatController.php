<?php

class ReportcatController extends ControllerAdmin
{
	public $type = 'reportcat';
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
		$model=new PrdCategory2;
		$modelDesc = array();
		foreach (Language::model()->getLanguage() as $key => $value) {
			$modelDesc[$value->code] = PrdCategory2::model()->getDataDesc($model->id, $value->id);
			$modelDesc[$value->code] = ($modelDesc[$value->code]==null) ? new PrdCategory2Description : $modelDesc[$value->code];
			// echo CHtml::errorSummary($modelDesc[$value->code]);
		}

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		$model->parent_id = $_GET['parent'];

		if(isset($_POST['PrdCategory2Description']))
		{
			$model->attributes=$_POST['PrdCategory2'];

			unset($modelDesc);
			$valid=true;
			foreach ($_POST['PrdCategory2Description'] as $j => $mod) {
	            if (isset($_POST['PrdCategory2Description'][$j])) {
	                $modelDesc[$j]=new PrdCategory2Description;
	                $modelDesc[$j]->attributes=$mod;
	                $lang = Language::model()->getName($j);
					$modelDesc[$j]->language_id = $lang->id;
	                $valid=$modelDesc[$j]->validate() && $valid;
	            }
	        }

			// $image = CUploadedFile::getInstance($model,'image');
			// if ($image->name != '') {
			// 	$model->image = substr(md5(time()),0,5).'-'.$image->name;
			// }

			if($model->validate() AND $valid){
				$transaction=$model->dbConnection->beginTransaction();
				try
				{
					// if ($image->name != '') {
					// 	$image->saveAs(Yii::getPathOfAlias('webroot').'/images/category/'.$model->image);
					// }
					$model->type = $this->type;

					$model->save();

					PrdCategory2Description::model()->deleteAll('category_id = :id', array(':id'=>$model->id));
					foreach ($modelDesc as $key => $value) {
						$value->category_id=$model->id;
						$value->save();
					}

					Log::createLog("PrdCategory2Controller Create $model->id");
					Yii::app()->user->setFlash('success','Data has been inserted');
				    $transaction->commit();
					$this->redirect(array('update','id'=>$model->id,'parent'=>$model->parent_id));
				}
				catch(Exception $ce)
				{
					echo $ce;
					exit;
				    $transaction->rollback();
				}
			}
		}

    	$categoryModel = new PrdCategory2;
		$categoryModelDesc = array();
		foreach (Language::model()->getLanguage() as $key => $value){
			$categoryModelDesc[$value->code] = new PrdCategory2Description;
		}
		if ($_GET['type'] == '') {
			$_GET['type'] = 'reportcat';
		}
		$dataNestedCategory = PrdCategory2::model()->getData(array(
			'limit'=>'',
			'addCondition'=>array(
				array(
					'criteria'=>'type = :type',
					'params'=>array(
						':type'=>$_GET['type'],
					)
				)
			),
		), $this->languageID);

		$nestedCategory = PrdCategory2::model()->nested($dataNestedCategory['data'], 'reportcat');

		$this->render('create',array(
			'model'=>$model,
			'modelDesc'=>$modelDesc,
			'categoryModel'=>$categoryModel,
			'categoryModelDesc'=>$categoryModelDesc,
			'nestedCategory'=>$nestedCategory,
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
			$modelDesc[$value->code] = PrdCategory2::model()->getDataDesc2($model->id, $value->id);
			$modelDesc[$value->code] = ($modelDesc[$value->code]==null) ? new PrdCategory2Description : $modelDesc[$value->code];
			// echo CHtml::errorSummary($modelDesc[$value->code]);
		}

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['PrdCategory2Description'])) {
			$model->attributes=$_POST['PrdCategory2'];//setting semua nilai

			unset($modelDesc);
			$valid=true;
			foreach ($_POST['PrdCategory2Description'] as $j => $mod) {
	            if (isset($_POST['PrdCategory2Description'][$j])) {
	                $modelDesc[$j]=new PrdCategory2Description;
	                $modelDesc[$j]->attributes=$mod;
	                $lang = Language::model()->getName($j);
					$modelDesc[$j]->language_id = $lang->id;
	                $valid=$modelDesc[$j]->validate() && $valid;
	            }
	        }

			if($model->validate() AND $valid){
				$transaction=$model->dbConnection->beginTransaction();
				try
				{
					$model->save();

					PrdCategory2Description::model()->deleteAll('category_id = :id', array(':id'=>$model->id));
					foreach ($modelDesc as $key => $value) {
						$value->category_id=$model->id;
						$value->save();
					}

					Log::createLog("Create Category $model->id");
					Yii::app()->user->setFlash('success','Data Edited');
				    $transaction->commit();
					$this->redirect(array('update', 'id'=>$id, 'parent'=>$_GET['parent']));
				}
				catch(Exception $ce)
				{
					echo $ce;
					exit;
				    $transaction->rollback();
				}
			}

		}

    	$categoryModel = new PrdCategory2;
		$categoryModelDesc = array();
		foreach (Language::model()->getLanguage() as $key => $value){
			$categoryModelDesc[$value->code] = new PrdCategory2Description;
		}
		if ($_GET['type'] == '') {
			$_GET['type'] = 'reportcat';
		}
		$dataNestedCategory = PrdCategory2::model()->getData(array(
			'limit'=>'',
			'addCondition'=>array(
				array(
					'criteria'=>'type = :type',
					'params'=>array(
						':type'=>$_GET['type'],
					)
				)
			),
		), $this->languageID);

		$nestedCategory = PrdCategory2::model()->nested($dataNestedCategory['data'], 'reportcat');

		$this->render('update',array(
			'model'=>$model,
			'modelDesc'=>$modelDesc,
			'categoryModel'=>$categoryModel,
			'categoryModelDesc'=>$categoryModelDesc,
			'nestedCategory'=>$nestedCategory,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
			$data = $this->loadModel($id);
			PrdCategory2Description::model()->deleteAll('category_id = :category_id', array(':category_id'=>$data->id));
			$data->delete();

			$this->redirect(array('index', 'parent'=>$_GET['parent']));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$model=new PrdCategory2('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['PrdCategory2']))
			$model->attributes=$_GET['PrdCategory2'];
			$model->parent_id=($_GET['parent']=='')?'0':$_GET['parent'];
			$model->type=$this->type;

    	$categoryModel = new PrdCategory2;
		$categoryModelDesc = array();
		foreach (Language::model()->getLanguage() as $key => $value){
			$categoryModelDesc[$value->code] = new PrdCategory2Description;
		}

		if (isset($_POST['PrdCategory2Description'])) {
			$categoryModel->attributes=$_POST['PrdCategory2'];//setting semua nilai

			unset($categoryModelDesc);
			$valid=true;
			foreach ($_POST['PrdCategory2Description'] as $j => $mod) {
	            if (isset($_POST['PrdCategory2Description'][$j])) {
	                $categoryModelDesc[$j]=new PrdCategory2Description;
	                $categoryModelDesc[$j]->attributes=$mod;
	                $lang = Language::model()->getName($j);
					$categoryModelDesc[$j]->language_id = $lang->id;
	                $valid=$categoryModelDesc[$j]->validate() && $valid;
	            }
	        }
            if (isset($_POST['ajax']) && $_POST['ajax']==='category-form') {
				echo(json_encode(array(json_decode(CActiveForm::validate($categoryModel)), json_decode(CActiveForm::validateTabular($categoryModelDesc)))));
				Yii::app()->end();
            }
			if($categoryModel->validate() AND $valid){
				$transaction=$categoryModel->dbConnection->beginTransaction();
				try
				{
					$categoryModel->type = 'reportcat';
					$categoryModel->save();

					PrdCategory2Description::model()->deleteAll('category_id = :id', array(':id'=>$categoryModel->id));
					foreach ($categoryModelDesc as $key => $value) {
						$value->category_id=$categoryModel->id;
						$value->save();
					}

					Log::createLog("Create Category $categoryModel->id");
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

		$dataNestedCategory = PrdCategory2::model()->getData(array(
			'limit'=>'',
			'addCondition'=>array(
				array(
					'criteria'=>'type = :type',
					'params'=>array(
						':type'=>'reportcat',
					)
				)
			),
		), $this->languageID);

		$nestedCategory = PrdCategory2::model()->nested($dataNestedCategory['data'], 'reportcat');

		$json_result = file_get_contents('php://input');
		if ($json_result != '') {
			$result = json_decode($json_result, true);
			PrdCategory2::model()->saveSortNested($result);
			Yii::app()->end();
		}
		
		$this->render('index',array(
			'model'=>$model,
			'categoryModel'=>$categoryModel,
			'categoryModelDesc'=>$categoryModelDesc,
			'nestedCategory'=>$nestedCategory,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new PrdCategory2('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['PrdCategory2']))
			$model->attributes=$_GET['PrdCategory2'];

		$this->render('admin',array(
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
		$model=PrdCategory2::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='category-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
