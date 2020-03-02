<?php

/**
 * This is the model class for table "tb_comment_deal".
 *
 * The followings are the available columns in table 'tb_comment_deal':
 * @property string $id
 * @property integer $user_post_market
 * @property integer $user_post_deal
 * @property string $message
 * @property string $file_attachment
 * @property string $tgl_input
 * @property string $tgl_reply
 * @property integer $answered
 */
class TbCommentDeal extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TbCommentDeal the static model class
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
		return 'tb_comment_deal';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_post_market, user_post_deal, answered', 'numerical', 'integerOnly'=>true),
			array('file_attachment', 'length', 'max'=>225),
			array('message, tgl_input, tgl_reply', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_post_market, user_post_deal, message, file_attachment, tgl_input, tgl_reply, answered', 'safe', 'on'=>'search'),
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
			'user_post_market' => 'User Post Market',
			'user_post_deal' => 'User Post Deal',
			'message' => 'Message',
			'file_attachment' => 'File Attachment',
			'tgl_input' => 'Tgl Input',
			'tgl_reply' => 'Tgl Reply',
			'answered' => 'Answered',
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
		$criteria->compare('user_post_market',$this->user_post_market);
		$criteria->compare('user_post_deal',$this->user_post_deal);
		$criteria->compare('message',$this->message,true);
		$criteria->compare('file_attachment',$this->file_attachment,true);
		$criteria->compare('tgl_input',$this->tgl_input,true);
		$criteria->compare('tgl_reply',$this->tgl_reply,true);
		$criteria->compare('answered',$this->answered);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}