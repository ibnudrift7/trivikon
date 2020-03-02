<?php

/**
 * This is the model class for table "tb_mitra".
 *
 * The followings are the available columns in table 'tb_mitra':
 * @property integer $id
 * @property string $nama_mitra
 */
class TbMitra extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TbMitra the static model class
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
		return 'tb_mitra';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_mitra', 'length', 'max'=>225),
			array('ketua, kota, tempat_pertemuan, jumlah_member', 'safe'),
			// Please remove those attributes that should not be searched.
			array('aktif', 'safe'),
			array('id, nama_mitra', 'safe', 'on'=>'search'),
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
			'nama_mitra' => 'Nama Komunitas',
			'ketua' => 'Ketua',
			'kota' => 'Kota',
			'tempat_pertemuan' => 'Tempat Pertemuan',
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
		$criteria->compare('nama_mitra',$this->nama_mitra,true);
		$criteria->compare('ketua',$this->ketua,true);
		$criteria->compare('kota',$this->kota,true);
		$criteria->compare('tempat_pertemuan',$this->tempat_pertemuan,true);
		$criteria->compare('aktif',$this->aktif,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}