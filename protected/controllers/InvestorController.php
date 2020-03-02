<?php

class InvestorController extends Controller
{

	public function actionIndex()
	{
		$this->layout='//layouts/column2';
		$this->pageTitle = 'Investor - '.$this->pageTitle;
		
		$criteria = new CDbCriteria;
        $criteria->with = array('description');
        $criteria->addCondition('description.language_id = :language_id');
        $criteria->params[':language_id'] = $this->languageID;
        $criteria->group = 't.id';
        $criteria->order = 't.sort ASC';
        $Categorys = PrdCategory2::model()->findAll($criteria);

        $criteria = new CDbCriteria;
        $criteria->with = array('description');
        $criteria->addCondition('description.language_id = :language_id');
        $criteria->params[':language_id'] = $this->languageID;
        if (isset($_GET['category'])) {
			$category = intval($_GET['category']);

	        $criteria->addCondition('t.id = :idsn');
	        $criteria->params[':idsn'] = $category;
        }

        $criteria->group = 't.id';
        $criteria->order = 't.sort ASC';
        $model = PrdCategory2::model()->find($criteria);

        $model_pdf = Pdf::model()->findAll('t.category_id = :categorys_id', array(':categorys_id'=>$model->id));

		$this->render('index', array(
		'all_cat'=> $Categorys,
		'model'=> $model,
		'model_pdf'=> $model_pdf,
		));
	}

	public function actionDetail($id)
	{
		$data = ViewGallery::model()->find('id = :id', array(':id'=>$id));
		$this->layout='//layouts/column1';
		$this->render('detail', array(
			'data'=>$data,
		));
	}

	

}

