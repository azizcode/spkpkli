<?php

/**
 * This is the model class for table "bidang_keahlian".
 *
 * The followings are the available columns in table 'bidang_keahlian':
 * @property integer $id
 * @property integer $NIM
 * @property integer $bidang_keahlian
 */
class BidangKeahlian extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return BidangKeahlian the static model class
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
		return 'bidang_keahlian';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NIM, bidang_keahlian', 'required'),
			array('NIM, bidang_keahlian', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, NIM, bidang_keahlian', 'safe', 'on'=>'search'),
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
			'NIM' => 'Nim',
			'bidang_keahlian' => 'Bidang Keahlian',
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
		$criteria->compare('NIM',$this->NIM);
		$criteria->compare('bidang_keahlian',$this->bidang_keahlian);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}