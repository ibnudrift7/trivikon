<?php

/**
 * This is the model class for table "tb_penawaran_list".
 *
 * The followings are the available columns in table 'tb_penawaran_list':
 * @property string $id
 * @property integer $market_id
 * @property integer $user_post_id
 * @property integer $user_tawar_id
 * @property string $nama
 * @property integer $deal
 * @property string $tgl_input
 */
class PenawaranList extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PenawaranList the static model class
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
		return 'tb_penawaran_list';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('market_id', 'required'),
			array('market_id, user_post_id, user_tawar_id, deal', 'numerical', 'integerOnly'=>true),
			array('nama', 'length', 'max'=>225),
			array('tgl_input, invoice_no', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, market_id, user_post_id, user_tawar_id, nama, deal, tgl_input, invoice_no', 'safe', 'on'=>'search'),
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
			// 'paren_data'=>array(self::HAS_ONE, 'TbMarket', 'id'),
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
			'user_post_id' => 'User Post',
			'user_tawar_id' => 'User Tawar',
			'nama' => 'Nama',
			'deal' => 'Deal',
			'tgl_input' => 'Tgl Input',
			'invoice_no' => 'Invoice No',
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
		// $criteria->with = array('paren_data');
		// $criteria->addCondition('paren_data.tipe_data = :tipe_data');
		// $criteria->params[':tipe_data'] = $_GET['tipe'];

		$criteria->compare('id',$this->id,true);
		$criteria->compare('market_id',$this->market_id);
		$criteria->compare('user_post_id',$this->user_post_id);
		$criteria->compare('user_tawar_id',$this->user_tawar_id);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('deal',$this->deal);
		$criteria->compare('invoice_no',$this->invoice_no);
		$criteria->compare('tgl_input',$this->tgl_input,true);

		$criteria->order = 't.tgl_input DESC';		

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}