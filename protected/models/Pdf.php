<?php

/**
 * This is the model class for table "pdf".
 *
 * The followings are the available columns in table 'pdf':
 * @property integer $id
 * @property integer $category_id
 * @property string $nama
 * @property string $image
 * @property string $file
 * @property string $size
 * @property integer $sort
 */
class Pdf extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pdf the static model class
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
		return 'pdf';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('category_id, nama_id, nama_en, size', 'required'),
			array('category_id, sort', 'numerical', 'integerOnly'=>true),
			array('nama_id, nama_en', 'length', 'max'=>100),
			array('image, file', 'length', 'max'=>200),
			array('size', 'length', 'max'=>10),

			array('file', 'file', 'types'=>'pdf', 'allowEmpty'=>FALSE, 'on'=>'insert'),
			array('file', 'file', 'types'=>'pdf', 'allowEmpty'=>TRUE, 'on'=>'update'),

			array('date_input', 'safe'),

			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, category_id, nama_id, nama_en, image, file, size, sort', 'safe', 'on'=>'search'),
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
			'category_id' => 'Kategori',
			'nama_id' => 'Judul Indonesia',
			'nama_en' => 'Judul Inggris',
			'image' => 'Image',
			'file' => 'File',
			'size' => 'Size',
			'sort' => 'Sort',
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
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('nama_en',$this->nama_en,true);
		$criteria->compare('nama_id',$this->nama_id,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('file',$this->file,true);
		$criteria->compare('size',$this->size,true);
		$criteria->compare('sort',$this->sort);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}