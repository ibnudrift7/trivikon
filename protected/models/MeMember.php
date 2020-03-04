<?php

/**
 * This is the model class for table "me_member".
 *
 * The followings are the available columns in table 'me_member':
 * @property integer $id
 * @property string $email
 * @property string $first_name
 * @property string $last_name
 * @property string $pass
 * @property string $login_terakhir
 * @property integer $aktivasi
 * @property integer $aktif
 * @property string $image
 * @property string $hp
 * @property string $address
 * @property string $city
 * @property string $province
 * @property string $postcode
 * @property string $username
 */
class MeMember extends CActiveRecord
{
	public $pass2;
	public $passold;
	
	public $del_fotodiri, $del_fotoperusahaan;

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MeMember the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'me_member';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('email', 'unique', 'className' => 'MeMember', 'attributeName' => 'email', 'message'=>'This Email is already in use', 'on'=>'createMember'),
			array('pass, pass2, email, first_name, hp', 'required', 'on'=>'createMember'),
			array('pass', 'compare', 'compareAttribute'=>'pass2', 'on'=>array('createMember', 'updatePass', 'editMember')),

			array('first_name', 'required', 'on'=>'update'),

			array('pass, pass2, first_name', 'required', 'on'=>'updatePass'),

			// array('email, first_name, last_name, pass, login_terakhir, aktivasi, aktif, image, hp, address, city, province, postcode', 'required'),
			array('aktivasi, aktif', 'numerical', 'integerOnly'=>true),
			array('email, first_name, last_name, image', 'length', 'max'=>200),
			array('pass', 'length', 'max'=>100),
			array('hp, city, province', 'length', 'max'=>50),
			array('postcode', 'length', 'max'=>5),
			array('postcode', 'length', 'min'=>3),
			array('hp', 'length', 'max'=>20),
			array('hp', 'length', 'min'=>9),
			array('email', 'email'),
			array('address, pass2, passold, jenis_kelamin, tanggal_lahir, no_ktp, nama_perusahaan, alamat_perusahaan, username, session_token, foto_diri, foto_ktp, tgl_masuk, jabatan, telp_saudara, nick_name', 'safe'),

			// array('image', 'file', 'types'=>'jpg, gif, png', 'allowEmpty'=>FALSE, 'on'=>'insert', 'except'=>array('createTemp', 'copy')),
			// array('image', 'file', 'types'=>'jpg, gif, png', 'allowEmpty'=>TRUE, 'on'=>'update', 'except'=>array('createTemp', 'copy')),

			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, email, first_name, last_name, pass, login_terakhir, aktivasi, aktif, image, hp, address, city, province, postcode', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'email' => 'Email',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'passold' => 'Old Password',
			'pass' => 'Password',
			'pass2' => 'Confirm Password',
			'login_terakhir' => 'Last Login',
			'aktivasi' => 'Aktivasi',
			'aktif' => 'Active',
			'image' => 'Image',
			'hp' => 'Telp',
			'address' => 'Address',
			'city' => 'City',
			'province' => 'State / province',
			'postcode' => 'Zip Code',
			'mitra_id' => 'Komunitas',
			'session_token' => 'Session Token',
			'nama_perusahaan' => 'Nama Kontraktor',
			'foto_diri' => 'Foto',
			'foto_ktp' => 'Foto KTP',
			'no_ktp' => 'No KTP',
			// 'referal' => 'Diajak oleh Member',
			// 'gp_point' => 'GP Point',

			// 'del_fotodiri'=>'Delete Foto Diri',
			'del_fotoperusahaan'=>'Delete Foto KTP',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('pass',$this->pass,true);
		$criteria->compare('login_terakhir',$this->login_terakhir,true);
		$criteria->compare('aktivasi',$this->aktivasi);
		$criteria->compare('aktif',$this->aktif);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('hp',$this->hp,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('province',$this->province,true);
		$criteria->compare('postcode',$this->postcode,true);
		
		$criteria->compare('jenis_kelamin',$this->jenis_kelamin);
		$criteria->compare('tanggal_lahir',$this->tanggal_lahir);
		$criteria->compare('no_ktp',$this->no_ktp);
		$criteria->compare('session_token',$this->session_token);
		$criteria->compare('nama_perusahaan',$this->nama_perusahaan);
		// $criteria->compare('sejarah_singkat',$this->sejarah_singkat);
		// $criteria->compare('gp_point',$this->gp_point);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


	public function views_image($foto_diri)
	{
		$str = '';
		if ($foto_diri != '') {
			$str .= '<img src="'. Yii::app()->baseUrl.'/images/customer/'. $foto_diri .'" class="img img-rounded">';
		}
		return $str;
	}

}