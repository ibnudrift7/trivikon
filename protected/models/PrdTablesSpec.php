<?php

/**
 * This is the model class for table "prd_tables_spec".
 *
 * The followings are the available columns in table 'prd_tables_spec':
 * @property string $id
 * @property integer $product_id
 * @property integer $id_str
 * @property string $type
 * @property string $thickness
 * @property string $mvtr
 * @property string $o2tr
 * @property string $key_features
 * @property string $data
 */
class PrdTablesSpec extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PrdTablesSpec the static model class
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
		return 'prd_tables_spec';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('product_id', 'required'),
			array('product_id, id_str', 'numerical', 'integerOnly'=>true),
			array('type, thickness', 'length', 'max'=>225),
			array('mvtr, o2tr, key_features, data, data_sheet', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, product_id, id_str, type, thickness, mvtr, o2tr, key_features, data', 'safe', 'on'=>'search'),
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
			'product_id' => 'Product',
			'id_str' => 'Id Str',
			'type' => 'Type',
			'thickness' => 'Thickness',
			'mvtr' => 'Mvtr',
			'o2tr' => 'O2tr',
			'data_sheet' => 'Data Sheet',
			'key_features' => 'Applications',
			'data' => 'Data',
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
		$criteria->compare('product_id',$this->product_id);
		$criteria->compare('id_str',$this->id_str);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('thickness',$this->thickness,true);
		$criteria->compare('mvtr',$this->mvtr,true);
		$criteria->compare('o2tr',$this->o2tr,true);
		$criteria->compare('data_sheet',$this->data_sheet,true);
		$criteria->compare('key_features',$this->key_features,true);
		$criteria->compare('data',$this->data,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}