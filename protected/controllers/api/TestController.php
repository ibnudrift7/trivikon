<?php

/**
 * Test Contorller
 */
class TestController extends Controller
{

	public function actionIndex()
	{
		// from base64 to save JPG
		$upload_dir = Yii::getPathOfAlias('webroot').'/images/market/';
		$img = $_POST['img'];
		$img = str_replace('data:image/jpeg;base64,', '', $img);
		$img = str_replace(' ', '+', $img);
		$data = base64_decode($img);
		$file = $upload_dir . uniqid() . '.jpeg';
		$success = file_put_contents($file, $data);
		print $success ? $file : 'Unable to save the file.';
	}

}