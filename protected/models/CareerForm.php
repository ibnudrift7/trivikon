<?php

/**
 * ContactForm class.
 * ContactForm is the data structure for keeping
 * contact form data. It is used by the 'contact' action of 'SiteController'.
 */
class CareerForm extends CFormModel
{
	public $name;
	public $date;
	public $nationality;
	public $phone;

	public $subject;
	public $email;
	public $address;
	public $city;
	public $country;
	public $files;
	public $store_name;
	public $website;

	public $company;

	public $posisi, $pendidikan;

	public $body;
	public $joblevel, $joblocation;
	public $verifyCode;
	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			// name, email, subject and body are required
			array('name, email', 'required', 'on'=>'insert'),

			array('name, email, phone, company, address, city, body', 'required', 'on'=>'in_agen'),
			// email has to be a valid email address
			array('email', 'email'),
			array('first_name, last_name, phone, email, address, city, country, files, body, store_name, website, subject, company, date, nationality, posisi, pendidikan, joblevel, joblocation', 'safe'),
			// verifyCode needs to be entered correctly
			// array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
		);
	}

	/**
	 * Declares customized attribute labels.
	 * If not declared here, an attribute would have a label that is
	 * the same as its name with the first letter in upper case.
	 */
	public function attributeLabels()
	{
		return array(
			'verifyCode'=>Yii::t('main', 'Verification Code'),
			// 'name'=>Yii::t('main', 'Name'),
			'email'=>Yii::t('main', 'Email Address'),
			// 'subject'=>Yii::t('main', 'Subject'),
			'body'=>Yii::t('main', 'Messages'),
			'joblevel'=>Yii::t('main', 'Job Level'),
			'joblocation'=>Yii::t('main', 'Location'),
		);
	}
}