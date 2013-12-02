<?php

/**
 * This is the model class for table "mahasiswa".
 *
 * The followings are the available columns in table 'mahasiswa':
 * @property integer $id_mahasiswa
 * @property integer $NIM
 * @property string $Nama_lengkap
 * @property string $Jenis_kelamin
 * @property string $Tempat_lahir
 * @property string $Tanggal_lahir
 * @property string $Nama_orangtua
 * @property string $Pekerjaan_orangtua
 * @property string $Alamat_orangtua
 * @property string $Kota_orangtua
 * @property string $Profinsi_orangtua
 * @property integer $Tahun_masuk
 * @property string $Jurusan
 * @property string $Pendidikan_terakhir
 * @property string $Alamat_dmalang
 * @property string $Alamat_asal
 * @property integer $No_tlp
 * @property string $Email
 */
class Mahasiswa extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Mahasiswa the static model class
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
		return 'mahasiswa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NIM, Nama_lengkap, Jenis_kelamin, Tempat_lahir, Tanggal_lahir, Nama_orangtua, Pekerjaan_orangtua, Alamat_orangtua, Kota_orangtua, Profinsi_orangtua, Tahun_masuk, Jurusan, Pendidikan_terakhir, Alamat_dmalang, Alamat_asal, No_tlp, Email', 'required'),
			array('NIM, Tahun_masuk, No_tlp', 'numerical', 'integerOnly'=>true),
			array('Nama_lengkap', 'length', 'max'=>1000),
			array('Jenis_kelamin, Tempat_lahir, Nama_orangtua, Pekerjaan_orangtua, Kota_orangtua, Profinsi_orangtua, Jurusan', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_mahasiswa, NIM, Nama_lengkap, Jenis_kelamin, Tempat_lahir, Tanggal_lahir, Nama_orangtua, Pekerjaan_orangtua, Alamat_orangtua, Kota_orangtua, Profinsi_orangtua, Tahun_masuk, Jurusan, Pendidikan_terakhir, Alamat_dmalang, Alamat_asal, No_tlp, Email', 'safe', 'on'=>'search'),
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
			'id_mahasiswa' => 'Id Mahasiswa',
			'NIM' => 'Nim',
			'Nama_lengkap' => 'Nama Lengkap',
			'Jenis_kelamin' => 'Jenis Kelamin',
			'Tempat_lahir' => 'Tempat Lahir',
			'Tanggal_lahir' => 'Tanggal Lahir',
			'Nama_orangtua' => 'Nama Orangtua',
			'Pekerjaan_orangtua' => 'Pekerjaan Orangtua',
			'Alamat_orangtua' => 'Alamat Orangtua',
			'Kota_orangtua' => 'Kota Orangtua',
			'Profinsi_orangtua' => 'Profinsi Orangtua',
			'Tahun_masuk' => 'Tahun Masuk',
			'Jurusan' => 'Jurusan',
			'Pendidikan_terakhir' => 'Pendidikan Terakhir',
			'Alamat_dmalang' => 'Alamat Dmalang',
			'Alamat_asal' => 'Alamat Asal',
			'No_tlp' => 'No Tlp',
			'Email' => 'Email',
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

		$criteria->compare('id_mahasiswa',$this->id_mahasiswa);
		$criteria->compare('NIM',$this->NIM);
		$criteria->compare('Nama_lengkap',$this->Nama_lengkap,true);
		$criteria->compare('Jenis_kelamin',$this->Jenis_kelamin,true);
		$criteria->compare('Tempat_lahir',$this->Tempat_lahir,true);
		$criteria->compare('Tanggal_lahir',$this->Tanggal_lahir,true);
		$criteria->compare('Nama_orangtua',$this->Nama_orangtua,true);
		$criteria->compare('Pekerjaan_orangtua',$this->Pekerjaan_orangtua,true);
		$criteria->compare('Alamat_orangtua',$this->Alamat_orangtua,true);
		$criteria->compare('Kota_orangtua',$this->Kota_orangtua,true);
		$criteria->compare('Profinsi_orangtua',$this->Profinsi_orangtua,true);
		$criteria->compare('Tahun_masuk',$this->Tahun_masuk);
		$criteria->compare('Jurusan',$this->Jurusan,true);
		$criteria->compare('Pendidikan_terakhir',$this->Pendidikan_terakhir,true);
		$criteria->compare('Alamat_dmalang',$this->Alamat_dmalang,true);
		$criteria->compare('Alamat_asal',$this->Alamat_asal,true);
		$criteria->compare('No_tlp',$this->No_tlp);
		$criteria->compare('Email',$this->Email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}