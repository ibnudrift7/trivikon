<?php

/**
 * This is the model class for table "tb_tugas_lists".
 *
 * The followings are the available columns in table 'tb_tugas_lists':
 * @property string $id
 * @property string $dari
 * @property string $kepada
 * @property string $prioritas
 * @property integer $subject_kepentingan
 * @property string $deskripsi
 * @property string $status
 * @property string $status_selesai
 * @property integer $member_id
 * @property integer $admin_id
 * @property string $date_input
 * @property string $date_finish
 * @property string $data
 */
class TugasLists extends CActiveRecord
{
	public $flex_page, $start_project;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TugasLists the static model class
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
		return 'tb_tugas_lists';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('subject_kepentingan, member_id', 'numerical', 'integerOnly'=>true),
			array('dari, kepada', 'length', 'max'=>225),
			array('prioritas, status', 'length', 'max'=>7),
			array('status_selesai', 'length', 'max'=>5),
			array('deskripsi, date_input, date_finish, data, date_start_user, date_selesai_user, admin_id, date_selesai_pemberi, lock_selesai, lock_start, flex_selesai_pelaksana, flex_selesai_pemberi, start_project', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, dari, kepada, prioritas, subject_kepentingan, deskripsi, status, status_selesai, member_id, admin_id, date_input, date_finish, data', 'safe', 'on'=>'search'),
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
			'dari' => 'Dari',
			'kepada' => 'Kepada',
			'prioritas' => 'Prioritas',
			'subject_kepentingan' => 'Subject Kepentingan',
			'deskripsi' => 'Deskripsi',
			'status' => 'Status',
			'status_selesai' => 'Status Selesai',
			'member_id' => 'Member',
			'admin_id' => 'Admin',
			'date_input' => 'Date Input',
			'date_finish' => 'Berakhir Pada',
			'data' => 'Data',
			'date_start_user' => 'Tanggal Mulai',
			'lock_start' => 'Mulai Tugas',

			'date_selesai_user' => 'Tanggal Member Selesai',

			'flex_selesai_pelaksana' => 'Tugas Member Selesai',
			'flex_selesai_pemberi' => 'ACC Tugas Selesai',
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
		$criteria->compare('dari',$this->dari,true);
		$criteria->compare('kepada',$this->kepada,true);
		$criteria->compare('prioritas',$this->prioritas,true);
		$criteria->compare('subject_kepentingan',$this->subject_kepentingan);
		$criteria->compare('deskripsi',$this->deskripsi,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('status_selesai',$this->status_selesai,true);
		$criteria->compare('member_id',$this->member_id);
		$criteria->compare('admin_id',$this->admin_id);
		$criteria->compare('date_input',$this->date_input,true);
		$criteria->compare('date_finish',$this->date_finish,true);
		$criteria->compare('data',$this->data,true);

		$criteria->compare('date_start_user',$this->date_start_user,true);
		$criteria->compare('date_selesai_user',$this->date_selesai_user,true);
		$criteria->compare('date_selesai_pemberi',$this->date_selesai_pemberi,true);
		$criteria->compare('lock_selesai',$this->lock_selesai,true);
		$criteria->compare('lock_start',$this->lock_start,true);
		$criteria->compare('flex_selesai_pelaksana',$this->flex_selesai_pelaksana,true);
		$criteria->compare('flex_selesai_pemberi',$this->flex_selesai_pemberi,true);

		$criteria->order = "t.date_input DESC";

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function search2()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('dari',$this->dari,true);
		$criteria->compare('kepada',$this->kepada,true);
		$criteria->compare('prioritas',$this->prioritas,true);
		$criteria->compare('subject_kepentingan',$this->subject_kepentingan);
		$criteria->compare('deskripsi',$this->deskripsi,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('status_selesai',$this->status_selesai,true);
		$criteria->compare('member_id',$this->member_id);
		$criteria->compare('admin_id',$this->admin_id);
		$criteria->compare('date_input',$this->date_input,true);
		$criteria->compare('date_finish',$this->date_finish,true);
		$criteria->compare('data',$this->data,true);

		$criteria->compare('date_start_user',$this->date_start_user,true);
		$criteria->compare('date_selesai_user',$this->date_selesai_user,true);
		$criteria->compare('date_selesai_pemberi',$this->date_selesai_pemberi,true);
		$criteria->compare('lock_selesai',$this->lock_selesai,true);
		$criteria->compare('lock_start',$this->lock_start,true);
		$criteria->compare('flex_selesai_pelaksana',$this->flex_selesai_pelaksana,true);
		$criteria->compare('flex_selesai_pemberi',$this->flex_selesai_pemberi,true);

		$criteria->order = "t.date_input DESC";

		return new CActiveDataProvider($this, array(
				'criteria'=>$criteria,
				'pagination'=>false,
		));
	}

	public static function get_coundDown($date_selesai='')
	{
		date_default_timezone_set('Asia/Jakarta');

		// $year = intval( date("Y", $date_selesai) );
		// $month = intval( date("M", $date_selesai) );
		// $days = intval( date("d", $date_selesai) );
		// $target = mktime(0, 0, 0, 4, 10, 2020) ; 
		// $today = time() ; 
		// $difference =($target-$today) ; 
		// $days =(int) ($difference/86400) ; 

		$dn_selesai = date("Y/m/d", strtotime($date_selesai));

		$time1 = time();
        $time2 = strtotime($date_selesai);

        $res_22 = $time2 - $time1;
        $juml_echo =  round($res_22 / (60 * 60 * 24));

        if ($res_22 < 0) {
        	$n_str = '<span class="countddown_ls2">'. $juml_echo . ' hari' .'</span>';
        } else {
			$n_str = '<span class="countddown_ls" data-countdown="'.$dn_selesai.'"></span>';
        }

		return $n_str;
	}

}