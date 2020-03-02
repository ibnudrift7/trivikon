<?php

class PenawaranListController extends ControllerAdmin
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
		$model=new PenawaranList;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['PenawaranList']))
		{
			$model->attributes=$_POST['PenawaranList'];
			if($model->validate()){
				$transaction=$model->dbConnection->beginTransaction();
				try
				{
					$model->save();
					Log::createLog("PenawaranListController Create $model->id");
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

		if(isset($_POST['PenawaranList']))
		{
			$model->attributes=$_POST['PenawaranList'];
			if($model->validate()){
				$transaction=$model->dbConnection->beginTransaction();
				try
				{
					$model->save();
					Log::createLog("PenawaranListController Update $model->id");
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
			$nxs_data = $this->loadModel($id);
			$find_markets = TbMarket::model()->findByPk($nxs_data->market_id);

			$datans->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			// if(!isset($_GET['ajax']))

			$this->redirect(array('index', 'tipe'=> ($find_markets->tipe_data == 1)? 'market': 'promo' ));
		// }
		// else
		// 	throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	public function actionDelete_apk($id)
	{
		$nxs_penawaran_dt = $this->loadModel($id);

		// Find market
		$model_mark = TbMarket::model()->findByPk($nxs_penawaran_dt->market_id);
		$model_mark->hide_apk = 1;
		$model_mark->save(false);

		$this->redirect(array('index', 'tipe'=> ($model_mark->tipe_data == 1)? 'market': 'promo' ));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		// $model=new TbMarket('search');
		// $model->unsetAttributes();  // clear any default values
		// if(isset($_GET['TbMarket']))
		// 	$model->attributes=$_GET['TbMarket'];

		// $criteria = new CDbCriteria;
		// $criteria->with = array('data_penawar');
		// $criteria->select = 't.*';
		// $criteria->order = 't.tgl_input DESC';

		// $dataProvider = new CActiveDataProvider('TbMarket', array(
		// 			    'criteria'=> $criteria,
		// 			    'pagination'=>array(
		// 			        'pageSize'=>10,
		// 			    ),
		// 			));

		$int_tipe = 1;
		if ($_GET['tipe'] == 'market') {
			$int_tipe = 1;
		} else {
			$int_tipe = 2;
		}

		$model = Yii::app()->db->createCommand()
			    ->select('b.*, a.deal as deal_data')
			    ->from('tb_penawaran_list b')
			    ->leftJoin('tb_market a', 'b.market_id=a.id')
			    ->where('a.tipe_data=:ntipe_data and a.hide_apk != "1"', array(':ntipe_data'=> $int_tipe))
			    ->order(array('b.tgl_input desc'))
			    ->queryAll();


		$this->render('index',array(
			// 'dataProvider'=>$dataProvider,
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
		$model=PenawaranList::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='penawaran-list-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
