<?php

class AboutController extends Controller
{

	public function actionIndex()
	{
		$this->pageTitle = 'About Us - '.$this->pageTitle;
		$this->layout='//layouts/column2';

		$data = array(
			'title'=>$this->setting['about_whoweare_title'],
			'content'=>$this->setting['about_whoweare_content'],
			);

		$this->render('index', array(	
			'data' => $data,
		));
	}

	public function actionDetail($pagename='')
	{
		$this->pageTitle = 'About Us - '.$this->pageTitle;
		$this->layout='//layouts/column2';

		$this->render('detail', array(	
			// 'data' => $data,
		));
	}

	public function actionRegistration()
	{
		$this->pageTitle = 'Registration on New Members - '.$this->pageTitle;
		$this->layout='//layouts/column2';

		$this->render('registration', array(	
			// 'data' => $data,
		));
	}

}

