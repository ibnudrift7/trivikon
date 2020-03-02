<?php

/**
 * This is the model class for table "tb_promo_member".
 *
 * The followings are the available columns in table 'tb_promo_member':
 * @property string $id
 * @property integer $user_id
 * @property integer $bidang_id
 * @property string $nama
 * @property string $content
 * @property string $image
 * @property integer $aktif
 * @property string $date_input
 * @property string $date_berakhir
 */
class PromoMember extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PromoMember the static model class
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
		return 'tb_promo_member';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, bidang_id, aktif', 'numerical', 'integerOnly'=>true),
			array('nama, image', 'length', 'max'=>225),
			array('content, date_input, date_berakhir, harga, lokasi_kota', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_id, bidang_id, nama, content, image, aktif, date_input, date_berakhir', 'safe', 'on'=>'search'),
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
			'user_id' => 'User',
			'bidang_id' => 'Bidang',
			'nama' => 'Nama',
			'content' => 'Content',
			'image' => 'Image',
			'aktif' => 'Aktif',
			'date_input' => 'Date Input',
			'date_berakhir' => 'Date Berakhir',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('bidang_id',$this->bidang_id);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('aktif',$this->aktif);
		$criteria->compare('date_input',$this->date_input,true);
		$criteria->compare('date_berakhir',$this->date_berakhir,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}