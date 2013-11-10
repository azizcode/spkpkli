<?php

/**
 * This is the model class for table "program_pkli".
 *
 * The followings are the available columns in table 'program_pkli':
 * @property integer $Id_program_pkli
 * @property integer $Id_instansi
 * @property string $Bidang_Keahlian
 * @property integer $Jumlah_peserta
 * @property string $awal
 * @property string $akhir
 * @property string $keterangan
 */
class ProgramPkli extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ProgramPkli the static model class
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
		return 'program_pkli';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Id_instansi, Bidang_Keahlian, Jumlah_peserta, awal, akhir, keterangan', 'required'),
			array('Id_instansi, Jumlah_peserta', 'numerical', 'integerOnly'=>true),
			array('Bidang_Keahlian', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Id_program_pkli, Id_instansi, Bidang_Keahlian, Jumlah_peserta, awal, akhir, keterangan', 'safe', 'on'=>'search'),
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
			'Id_program_pkli' => 'Id Program Pkli',
			'Id_instansi' => 'Id Instansi',
			'Bidang_Keahlian' => 'Bidang Keahlian',
			'Jumlah_peserta' => 'Jumlah Peserta',
			'awal' => 'Awal',
			'akhir' => 'Akhir',
			'keterangan' => 'Keterangan',
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

		$criteria->compare('Id_program_pkli',$this->Id_program_pkli);
		$criteria->compare('Id_instansi',$this->Id_instansi);
		$criteria->compare('Bidang_Keahlian',$this->Bidang_Keahlian,true);
		$criteria->compare('Jumlah_peserta',$this->Jumlah_peserta);
		$criteria->compare('awal',$this->awal,true);
		$criteria->compare('akhir',$this->akhir,true);
		$criteria->compare('keterangan',$this->keterangan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}