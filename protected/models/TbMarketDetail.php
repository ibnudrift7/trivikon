<?php

/**
 * This is the model class for table "tb_market_detail".
 *
 * The followings are the available columns in table 'tb_market_detail':
 * @property string $id
 * @property integer $market_id
 * @property string $invoice_no
 * @property integer $number_unit
 * @property string $keterangan_unit
 * @property integer $qty_unit
 * @property integer $sat_unit
 * @property integer $harga_satuan
 * @property integer $jumlah_harga
 */
class TbMarketDetail extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TbMarketDetail the static model class
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
		return 'tb_market_detail';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('market_id, number_unit, qty_unit, sat_unit, harga_satuan, jumlah_harga', 'numerical', 'integerOnly'=>true),
			array('invoice_no, keterangan_unit', 'length', 'max'=>225),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, market_id, invoice_no, number_unit, keterangan_unit, qty_unit, sat_unit, harga_satuan, jumlah_harga', 'safe', 'on'=>'search'),
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
			'market_id' => 'Market',
			'invoice_no' => 'Invoice No',
			'number_unit' => 'Number Unit',
			'keterangan_unit' => 'Keterangan Unit',
			'qty_unit' => 'Qty Unit',
			'sat_unit' => 'Sat Unit',
			'harga_satuan' => 'Harga Satuan',
			'jumlah_harga' => 'Jumlah Harga',
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
		$criteria->compare('market_id',$this->market_id);
		$criteria->compare('invoice_no',$this->invoice_no,true);
		$criteria->compare('number_unit',$this->number_unit);
		$criteria->compare('keterangan_unit',$this->keterangan_unit,true);
		$criteria->compare('qty_unit',$this->qty_unit);
		$criteria->compare('sat_unit',$this->sat_unit);
		$criteria->compare('harga_satuan',$this->harga_satuan);
		$criteria->compare('jumlah_harga',$this->jumlah_harga);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}