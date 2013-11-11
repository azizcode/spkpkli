<?php

/**
 * This is the model class for table "matakuliah".
 *
 * The followings are the available columns in table 'matakuliah':
 * @property integer $kode_mk
 * @property string $nama_mk
 * @property integer $jumlah_sks
 */
class Matakuliah extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Matakuliah the static model class
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
		return 'matakuliah';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kode_mk, nama_mk, jumlah_sks', 'required'),
			array('kode_mk, jumlah_sks', 'numerical', 'integerOnly'=>true),
			array('nama_mk', 'length', 'max'=>40),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('kode_mk, nama_mk, jumlah_sks', 'safe', 'on'=>'search'),
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
			'kode_mk' => 'Kode Mk',
			'nama_mk' => 'Nama Mk',
			'jumlah_sks' => 'Jumlah Sks',
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

		$criteria->compare('kode_mk',$this->kode_mk);
		$criteria->compare('nama_mk',$this->nama_mk,true);
		$criteria->compare('jumlah_sks',$this->jumlah_sks);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}