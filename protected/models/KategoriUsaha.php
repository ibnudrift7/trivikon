<?php

/**
 * This is the model class for table "tb_kategori_usaha".
 *
 * The followings are the available columns in table 'tb_kategori_usaha':
 * @property integer $id
 * @property string $nama
 * @property integer $jenis_usaha_id
 * @property string $jenis_usaha_nama
 */
class KategoriUsaha extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return KategoriUsaha the static model class
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
		return 'tb_kategori_usaha';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('jenis_usaha_id', 'numerical', 'integerOnly'=>true),
			array('nama', 'length', 'max'=>225),
			array('jenis_usaha_nama', 'length', 'max'=>100),
			// The following rule is used by search().
			array('aktif', 'safe'),
			// Please remove those attributes that should not be searched.
			array('id, nama, jenis_usaha_id, jenis_usaha_nama', 'safe', 'on'=>'search'),
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
			'nama' => 'Nama',
			'jenis_usaha_id' => 'Jenis Usaha',
			'jenis_usaha_nama' => 'Jenis Usaha Nama',
			'aktif' => 'aktif',
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
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('jenis_usaha_id',$this->jenis_usaha_id);
		$criteria->compare('jenis_usaha_nama',$this->jenis_usaha_nama,true);
		$criteria->compare('aktif',$this->aktif,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}