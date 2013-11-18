<?php

/**
 * This is the model class for table "peserta_pkli".
 *
 * The followings are the available columns in table 'peserta_pkli':
 * @property integer $Id_peserta
 * @property integer $Id_program
 * @property integer $NIM
 */
class PesertaPkli extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PesertaPkli the static model class
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
		return 'peserta_pkli';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Id_program, NIM', 'required'),
			array('Id_program, NIM', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Id_peserta, Id_program, NIM', 'safe', 'on'=>'search'),
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
			'Id_peserta' => 'Id Peserta',
			'Id_program' => 'Id Program',
			'NIM' => 'Nim',
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

		$criteria->compare('Id_peserta',$this->Id_peserta);
		$criteria->compare('Id_program',$this->Id_program);
		$criteria->compare('NIM',$this->NIM);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}