<?php

/**
 * This is the model class for table "list_careers".
 *
 * The followings are the available columns in table 'list_careers':
 * @property integer $id
 * @property string $nama_perusahaan
 * @property string $lokasi_perusahaan
 * @property string $gaji_sekitar
 * @property string $min_pendidikan
 * @property string $min_pengalaman
 * @property string $deskripsi_pekerjaan
 * @property string $date_input
 * @property integer $status
 */
class ListCareers extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ListCareers the static model class
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
		return 'list_careers';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_perusahaan, lokasi_perusahaan, min_pendidikan, min_pengalaman, deskripsi_pekerjaan', 'required'),
			array('status', 'numerical', 'integerOnly'=>true),
			array('nama_perusahaan, lokasi_perusahaan, gaji_sekitar, min_pendidikan', 'length', 'max'=>225),
			array('min_pengalaman', 'length', 'max'=>100),
			// The following rule is used by search().
			array('date_input, status, posisi, gaji_sekitar','safe'),
			// Please remove those attributes that should not be searched.
			array('id, nama_perusahaan, posisi, lokasi_perusahaan, gaji_sekitar, min_pendidikan, min_pengalaman, deskripsi_pekerjaan, date_input, status', 'safe', 'on'=>'search'),
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
			'posisi' => 'Posisi Pekerjaan',
			'nama_perusahaan' => 'Nama Perusahaan',
			'lokasi_perusahaan' => 'Lokasi Perusahaan',
			'gaji_sekitar' => 'Job Level',
			'min_pendidikan' => 'Min Pendidikan',
			'min_pengalaman' => 'Min Pengalaman',
			'deskripsi_pekerjaan' => 'Deskripsi Pekerjaan',
			'date_input' => 'Date Input',
			'status' => 'Status',
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
		$criteria->compare('posisi',$this->posisi,true);
		$criteria->compare('nama_perusahaan',$this->nama_perusahaan,true);
		$criteria->compare('lokasi_perusahaan',$this->lokasi_perusahaan,true);
		$criteria->compare('gaji_sekitar',$this->gaji_sekitar,true);
		$criteria->compare('min_pendidikan',$this->min_pendidikan,true);
		$criteria->compare('min_pengalaman',$this->min_pengalaman,true);
		$criteria->compare('deskripsi_pekerjaan',$this->deskripsi_pekerjaan,true);
		$criteria->compare('date_input',$this->date_input,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}