<?php

/**
 * This is the model class for table "tb_list_products".
 *
 * The followings are the available columns in table 'tb_list_products':
 * @property string $id
 * @property integer $category_id
 * @property integer $sub_cat1
 * @property integer $sub_cat2
 * @property integer $sub_cat3
 * @property string $film_grade
 * @property string $technical_data
 * @property string $film_description
 * @property integer $actives
 * @property integer $sortings
 */
class ListProducts extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ListProducts the static model class
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
		return 'tb_list_products';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('category_id', 'required'),
			array('category_id, sub_cat1, sub_cat2, sub_cat3, actives, sortings', 'numerical', 'integerOnly'=>true),
			array('film_grade, technical_data, film_description', 'length', 'max'=>225),
			// The following rule is used by search().
			array('sub_cat1, sub_cat2, sub_cat3, actives, sortings', 'safe'),
			// Please remove those attributes that should not be searched.
			array('id, category_id, sub_cat1, sub_cat2, sub_cat3, film_grade, technical_data, film_description, actives, sortings', 'safe', 'on'=>'search'),
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
			'category_id' => 'Category',
			'sub_cat1' => 'Sub Cattegory 1',
			'sub_cat2' => 'Sub Cattegory 2',
			'sub_cat3' => 'Sub Cattegory 3',
			'film_grade' => 'Film Grade',
			'technical_data' => 'Technical Data',
			'film_description' => 'Film Description',
			'actives' => 'Actives',
			'sortings' => 'Sorting Data',
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
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('sub_cat1',$this->sub_cat1);
		$criteria->compare('sub_cat2',$this->sub_cat2);
		$criteria->compare('sub_cat3',$this->sub_cat3);
		$criteria->compare('film_grade',$this->film_grade,true);
		$criteria->compare('technical_data',$this->technical_data,true);
		$criteria->compare('film_description',$this->film_description,true);
		$criteria->compare('actives',$this->actives);
		$criteria->compare('sortings',$this->sortings);

		$criteria->order = 't.category_id ASC';

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function Getsubdata($data)
	{
		// call category sub
		$criteria=new CDbCriteria;
		$criteria->with = array('description');
		$criteria->addCondition('description.language_id = :language_id');
		$criteria->params[':language_id'] = 2;
		$criteria->addCondition('parent_id = :ncs_id');
		$criteria->params[':ncs_id'] = intval($data);
		$criteria->order = 't.sort ASC';
		$model = PrdCategory::model()->findAll($criteria);

		return $model;
	}

}