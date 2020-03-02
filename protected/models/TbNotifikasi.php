<?php

/**
 * This is the model class for table "tb_notif".
 *
 * The followings are the available columns in table 'tb_notif':
 * @property string $id
 * @property string $nama
 * @property string $tipe_notif
 * @property integer $deleted
 */
class TbNotifikasi extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TbNotifikasi the static model class
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
		return 'tb_notif';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama', 'required'),
			array('deleted', 'numerical', 'integerOnly'=>true),
			array('nama, tipe_notif', 'length', 'max'=>225),
			// The following rule is used by search().
			array('notes, date_input, user_id, market_id, market_tipe_id, invoice_no, terbaca', 'safe'),
			// Please remove those attributes that should not be searched.
			array('id, nama, tipe_notif, deleted', 'safe', 'on'=>'search'),
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
			'tipe_notif' => 'Tipe Notif',
			'deleted' => 'Deleted',
			'notes' => 'Notes',
			'date_input' => 'Date Input',
			'user_id' => 'User Id',
			'market_id' => 'Market Id',
			'market_tipe_id' => 'Market Tipe Id',
			'invoice_no' => 'Invoice No',
			'terbaca' => 'Terbaca',
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
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('tipe_notif',$this->tipe_notif,true);
		$criteria->compare('deleted',$this->deleted);
		$criteria->compare('notes',$this->notes);
		$criteria->compare('date_input',$this->date_input);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('market_id',$this->market_id);
		$criteria->compare('market_tipe_id',$this->market_tipe_id);
		$criteria->compare('invoice_no',$this->invoice_no);
		$criteria->compare('terbaca',$this->terbaca);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}