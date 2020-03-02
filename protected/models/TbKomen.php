<?php

/**
 * This is the model class for table "tb_komen".
 *
 * The followings are the available columns in table 'tb_komen':
 * @property string $id
 * @property integer $market_id
 * @property integer $market_id_member
 * @property integer $user_id_post
 * @property string $content
 * @property string $date_input
 */
class TbKomen extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TbKomen the static model class
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
		return 'tb_komen';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('market_id, market_id_member, user_id_post, content', 'required'),
			array('market_id, market_id_member, user_id_post', 'numerical', 'integerOnly'=>true),
			array('date_input, post_user_nama', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, market_id, market_id_member, user_id_post, content, date_input', 'safe', 'on'=>'search'),
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
			'market_id_member' => 'Market Id Member',
			'user_id_post' => 'User Id Post',
			'content' => 'Content',
			'date_input' => 'Date Input',
			'post_user_nama' => 'Nama Posting',
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
		$criteria->compare('market_id_member',$this->market_id_member);
		$criteria->compare('user_id_post',$this->user_id_post);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('date_input',$this->date_input,true);
		$criteria->compare('post_user_nama',$this->post_user_nama,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}