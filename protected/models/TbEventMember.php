<?php

/**
 * This is the model class for table "tb_event_member".
 *
 * The followings are the available columns in table 'tb_event_member':
 * @property string $id
 * @property integer $admin_id
 * @property string $nama
 * @property string $image
 * @property string $content
 * @property string $tgl_event
 * @property integer $aktif
 */
class TbEventMember extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TbEventMember the static model class
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
		return 'tb_event_member';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('aktif', 'numerical', 'integerOnly'=>true),
			array('nama', 'length', 'max'=>225),
			array('admin_id, image, content, tgl_event, ticket_price', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, admin_id, nama, image, content, tgl_event, aktif', 'safe', 'on'=>'search'),
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
			'admin_id' => 'Admin',
			'nama' => 'Nama',
			'image' => 'Image',
			'content' => 'Content',
			'tgl_event' => 'Tgl Event',
			'aktif' => 'Status Aktif',
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
		$criteria->compare('admin_id',$this->admin_id);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('tgl_event',$this->tgl_event,true);
		$criteria->compare('aktif',$this->aktif);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}