<?php

/**
 * This is the model class for table "tb_pengumuman".
 *
 * The followings are the available columns in table 'tb_pengumuman':
 * @property string $id
 * @property string $titles
 * @property string $contents
 * @property integer $aktif
 * @property string $date_input
 * @property integer $urutan
 */
class TbPengumuman extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TbPengumuman the static model class
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
		return 'tb_pengumuman';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('titles', 'required'),
			array('titles', 'length', 'max'=>225),
			array('contents, date_input, aktif, urutan', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('titles, contents, aktif, date_input, urutan', 'safe', 'on'=>'search'),
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
			'id' => 'Id',
			'titles' => 'Titles',
			'contents' => 'Contents',
			'aktif' => 'Aktif',
			'date_input' => 'Date Input',
			'urutan' => 'Urutan',
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
		$criteria->compare('titles',$this->titles,true);
		$criteria->compare('contents',$this->contents,true);
		$criteria->compare('aktif',$this->aktif);
		$criteria->compare('date_input',$this->date_input,true);
		$criteria->compare('urutan',$this->urutan);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}