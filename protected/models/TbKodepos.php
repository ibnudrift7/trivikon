<?php

/**
 * This is the model class for table "tbl_kodepos".
 *
 * The followings are the available columns in table 'tbl_kodepos':
 * @property integer $id
 * @property string $kelurahan
 * @property string $kecamatan
 * @property string $kabupaten
 * @property string $provinsi
 * @property string $kodepos
 */
class TbKodepos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TbKodepos the static model class
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
		return 'tbl_kodepos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kelurahan, kecamatan, kabupaten, provinsi, kodepos', 'required'),
			array('kelurahan, kecamatan, kabupaten, provinsi', 'length', 'max'=>100),
			array('kodepos', 'length', 'max'=>5),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, kelurahan, kecamatan, kabupaten, provinsi, kodepos', 'safe', 'on'=>'search'),
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
			'kelurahan' => 'Kelurahan',
			'kecamatan' => 'Kecamatan',
			'kabupaten' => 'Kabupaten',
			'provinsi' => 'Provinsi',
			'kodepos' => 'Kodepos',
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
		$criteria->compare('kelurahan',$this->kelurahan,true);
		$criteria->compare('kecamatan',$this->kecamatan,true);
		$criteria->compare('kabupaten',$this->kabupaten,true);
		$criteria->compare('provinsi',$this->provinsi,true);
		$criteria->compare('kodepos',$this->kodepos,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}