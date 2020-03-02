<?php

/**
 * This is the model class for table "tb_market_penawaran_list".
 *
 * The followings are the available columns in table 'tb_market_penawaran_list':
 * @property string $id
 * @property integer $market_id
 * @property integer $user_market_id
 * @property string $nama_lengkap
 * @property string $nama_panggilan
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $bidang_usaha
 * @property string $telp_pribadi
 * @property string $telp_kantor
 * @property string $telp_rumah
 * @property string $alamat_kantor
 * @property string $alamat_rumah
 * @property string $date_input
 * @property integer $deal_status
 */
class TbMPenawaranList extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TbMPenawaranList the static model class
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
		return 'tb_market_penawaran_list';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('market_id, user_market_id, deal_status', 'numerical', 'integerOnly'=>true),
			array('nama_lengkap, nama_panggilan, tempat_lahir, bidang_usaha', 'length', 'max'=>150),
			array('telp_pribadi, telp_kantor, telp_rumah', 'length', 'max'=>50),
			array('tanggal_lahir, alamat_kantor, alamat_rumah, date_input', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, market_id, user_market_id, nama_lengkap, nama_panggilan, tempat_lahir, tanggal_lahir, bidang_usaha, telp_pribadi, telp_kantor, telp_rumah, alamat_kantor, alamat_rumah, date_input, deal_status', 'safe', 'on'=>'search'),
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
			'user_market_id' => 'User Market',
			'nama_lengkap' => 'Nama Lengkap',
			'nama_panggilan' => 'Nama Panggilan',
			'tempat_lahir' => 'Tempat Lahir',
			'tanggal_lahir' => 'Tanggal Lahir',
			'bidang_usaha' => 'Bidang Usaha',
			'telp_pribadi' => 'Telp Pribadi',
			'telp_kantor' => 'Telp Kantor',
			'telp_rumah' => 'Telp Rumah',
			'alamat_kantor' => 'Alamat Kantor',
			'alamat_rumah' => 'Alamat Rumah',
			'date_input' => 'Date Input',
			'deal_status' => 'Deal Status',
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
		$criteria->compare('user_market_id',$this->user_market_id);
		$criteria->compare('nama_lengkap',$this->nama_lengkap,true);
		$criteria->compare('nama_panggilan',$this->nama_panggilan,true);
		$criteria->compare('tempat_lahir',$this->tempat_lahir,true);
		$criteria->compare('tanggal_lahir',$this->tanggal_lahir,true);
		$criteria->compare('bidang_usaha',$this->bidang_usaha,true);
		$criteria->compare('telp_pribadi',$this->telp_pribadi,true);
		$criteria->compare('telp_kantor',$this->telp_kantor,true);
		$criteria->compare('telp_rumah',$this->telp_rumah,true);
		$criteria->compare('alamat_kantor',$this->alamat_kantor,true);
		$criteria->compare('alamat_rumah',$this->alamat_rumah,true);
		$criteria->compare('date_input',$this->date_input,true);
		$criteria->compare('deal_status',$this->deal_status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}