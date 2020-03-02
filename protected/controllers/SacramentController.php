<?php

class SacramentController extends Controller
{

	public function actionIndex()
	{
		$this->pageTitle = 'Sacraments - '.$this->pageTitle;
		$this->layout='//layouts/column2';

		// $data = array(
		// 	'title'=>$this->setting['about_whoweare_title'],
		// 	'content'=>$this->setting['about_whoweare_content'],
		// 	);

		$this->render('index', array(	
			'data' => $data,
		));
	}

	public function actionDetail($pagename='')
	{
		$this->pageTitle = 'Sacraments - '.$this->pageTitle;
		$this->layout='//layouts/column2';

		$this->render('detail', array(	
			// 'data' => $data,
		));
	}

}

