<?php

/**
 * This is the model class for table "tb_market".
 *
 * The followings are the available columns in table 'tb_market':
 * @property string $id
 * @property string $invoice_no
 * @property string $nama
 * @property integer $kategori_id
 * @property string $keyword
 * @property string $nama_perusahaan
 * @property string $telp_perusahaan
 * @property string $image
 * @property string $nama_post
 * @property string $deskripsi
 * @property string $provinsi
 * @property string $kota
 * @property integer $harga_total
 * @property string $tgl_input
 * @property string $tgl_expired
 * @property string $foto
 * @property string $detail_info
 * @property integer $user_id_post
 * @property integer $admin_id
 * @property integer $user_id_deal
 * @property integer $deal
 * @property string $tgl_deal
 * @property integer $aktif
 */
class TbMarket extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TbMarket the static model class
	 */
	// public $market_id, $user_post_id, $nama;

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tb_market';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('invoice_no', 'required'),
			array('kategori_id, harga_total, user_id_post, admin_id, user_id_deal, deal, aktif', 'numerical', 'integerOnly'=>true),
			array('invoice_no, nama, nama_perusahaan, image, nama_post, provinsi, kota', 'length', 'max'=>225),
			array('deskripsi, tgl_input, detail_info, tgl_deal, telp_perusahaan, mitra_id, arsip, tipe_data, keyword, provinsi, tgl_expired, hide_apk, edited_data', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, invoice_no, nama, kategori_id, keyword, nama_perusahaan, image, nama_post, deskripsi, provinsi, kota, harga_total, tgl_input, tgl_expired, detail_info, user_id_post, admin_id, user_id_deal, deal, tgl_deal, aktif', 'safe', 'on'=>'search'),
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
			'data_details'=>array(self::HAS_ONE, 'TbMarketDetail', 'market_id'),
			'data_penawar'=>array(self::HAS_MANY, 'PenawaranList', 'market_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'invoice_no' => 'Invoice No',
			'nama' => 'Nama Post User',
			'kategori_id' => 'Kategori',
			'keyword' => 'Keyword',
			'nama_perusahaan' => 'Nama Perusahaan',
			'telp_perusahaan' => 'Telp Perusahaan',
			'image' => 'Image',
			'nama_post' => 'Judul Post',
			'deskripsi' => 'Deskripsi',
			'provinsi' => 'Provinsi',
			'kota' => 'Kota',
			'harga_total' => 'Harga Total',
			'tgl_input' => 'Tgl Input',
			'tgl_expired' => 'Tgl Expired',
			'detail_info' => 'Detail Info',
			'user_id_post' => 'User Id Post',
			'admin_id' => 'Admin',
			'user_id_deal' => 'User Id Deal',
			'deal' => 'Deal',
			'tgl_deal' => 'Tgl Deal',
			'aktif' => 'Aktif',
			'mitra_id' => 'Mitra',
			'arsip' => 'Arsip',
			'hide_apk' => 'Hide Apps',
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
		// if (isset($_GET['tipe']) and $_GET['tipe'] == 'market') {
		// 	$criteria->addCondition('tipe_data = :tipe_data');
		// 	$criteria->params[':tipe_data'] = 1;
		// } else {
		// 	$criteria->addCondition('tipe_data = :tipe_data');
		// 	$criteria->params[':tipe_data'] = 2;
		// }

		$criteria->compare('id',$this->id,true);
		$criteria->compare('invoice_no',$this->invoice_no,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('kategori_id',$this->kategori_id);
		$criteria->compare('keyword',$this->keyword,true);
		$criteria->compare('nama_perusahaan',$this->nama_perusahaan,true);
		$criteria->compare('telp_perusahaan',$this->telp_perusahaan,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('nama_post',$this->nama_post,true);
		$criteria->compare('deskripsi',$this->deskripsi,true);
		$criteria->compare('provinsi',$this->provinsi,true);
		$criteria->compare('kota',$this->kota,true);
		$criteria->compare('harga_total',$this->harga_total);
		$criteria->compare('tgl_input',$this->tgl_input,true);
		$criteria->compare('tgl_expired',$this->tgl_expired,true);
		$criteria->compare('detail_info',$this->detail_info,true);
		$criteria->compare('user_id_post',$this->user_id_post);
		$criteria->compare('admin_id',$this->admin_id);
		$criteria->compare('user_id_deal',$this->user_id_deal);
		$criteria->compare('deal',$this->deal);
		$criteria->compare('tgl_deal',$this->tgl_deal,true);
		$criteria->compare('aktif',$this->aktif);
		$criteria->compare('mitra_id',$this->mitra_id);
		$criteria->compare('arsip',$this->arsip);
		$criteria->compare('tipe_data',$this->tipe_data);

		$criteria->order = 't.tgl_input DESC';		

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}