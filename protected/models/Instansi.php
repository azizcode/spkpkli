<?php

/**
 * This is the model class for table "instansi".
 *
 * The followings are the available columns in table 'instansi':
 * @property integer $Id_instansi
 * @property string $Nama_instansi
 * @property string $Jenis_instasni
 * @property string $Alamat
 * @property string $No_tlp
 */
class Instansi extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Instansi the static model class
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
		return 'instansi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Id_instansi, Nama_instansi, Jenis_instasni, Alamat, No_tlp, email', 'required'),
			array('Id_instansi', 'numerical', 'integerOnly'=>true),
			array('Nama_instansi, Jenis_instasni', 'length', 'max'=>1000),
			array('No_tlp', 'length', 'max'=>40),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Id_instansi, Nama_instansi, Jenis_instasni, Alamat, No_tlp, email', 'safe', 'on'=>'search'),
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
			'Id_instansi' => 'Id Instansi',
			'Nama_instansi' => 'Nama Instansi',
			'Jenis_instasni' => 'Jenis Instasni',
			'Alamat' => 'Alamat',
			'No_tlp' => 'No Tlp',
			'email' => 'Email',
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

		$criteria->compare('Id_instansi',$this->Id_instansi);
		$criteria->compare('Nama_instansi',$this->Nama_instansi,true);
		$criteria->compare('Jenis_instasni',$this->Jenis_instasni,true);
		$criteria->compare('Alamat',$this->Alamat,true);
		$criteria->compare('No_tlp',$this->No_tlp,true);
		$criteria->compare('email',$this->email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}