<?php

/**
 * This is the model class for table "nilai".
 *
 * The followings are the available columns in table 'nilai':
 * @property integer $NIM
 * @property integer $kode_mk
 * @property double $Nilai
 */
class Nilai extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Nilai the static model class
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
		return 'nilai';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NIM, kode_mk, Nilai', 'required'),
			array('NIM, kode_mk', 'numerical', 'integerOnly'=>true),
			array('Nilai', 'numerical'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('NIM, kode_mk, Nilai', 'safe', 'on'=>'search'),
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
			'NIM' => 'Nim',
			'kode_mk' => 'Kode Mk',
			'Nilai' => 'Nilai',
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

		$criteria->compare('NIM',$this->NIM);
		$criteria->compare('kode_mk',$this->kode_mk);
		$criteria->compare('Nilai',$this->Nilai);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function hardware($nilai){
		$cocok		=	false;
		if($nilai['20']>=3.5){
			$cocok	= true;
		}else if($nilai['20']>=2.5 && $nilai['20']<3.5){
			if($nilai['21']>=3.5){
				$cocok	= true;
			}else if($nilai['21']>=2.5 && $nilai['21']<3.5){
				if($nilai['19']>=2.5){
					$cocok	= true;
				}
			}
		}
		return $cocok;
	}
	
	public function multimedia($nilai){
		$cocok		=	false;
		if($nilai['16']>=3.5){
			$cocok	= true;
		}else{
			if($nilai['17']>=3.5){
				$cocok	= true;
			}else if($nilai['17']>=2.5 && $nilai['17']<3.5){
				if($nilai['18']>=2.5){
					$cocok	= true;
				}
			}
		}
		return $cocok;
	}
	
	public function si($nilai){
		$cocok		=	false;
		if($nilai['11']>=3.5){
			$cocok	= true;
		}else if($nilai['11']>=2.5 && $nilai['11']<3.5){
			if($nilai['13']>=2.5){
				$cocok	= true;
			}else{
				if($nilai['12']>=3.5){
					$cocok	= true;
				}else if($nilai['12']>=2.5 && $nilai['12']<3.5){
					if($nilai['14']>=3.5){
						$cocok	= true;
					}else if($nilai['14']>=2.5 && $nilai['14']<3.5){
						if($nilai['15']>=3.5){
							$cocok	= true;
						}
					}
				}
			}
		}
		return $cocok;
	}
	
	public function jaringan($nilai){
		$cocok		=	false;
		if($nilai['8']>=2.5){
			$cocok	= true;
		}else{
			if($nilai['10']>=2.5){
				$cocok	= true;
			}else{
				if($nilai['7']>=2.5){
					$cocok	= true;
				}else{
					if($nilai['9']>=2.5){
						$cocok	= true;
					}
				}
			}
		}
		return $cocok;
	}
	
	public function pemrograman($nilai){
		$cocok		=	false;
		if($nilai['2']>=3.5){
			$cocok	= true;
		}else if($nilai['2']>=2.5 && $nilai['2']<3.5){
			if($nilai['1']>=3.5){
				$cocok	= true;
			}else if($nilai['1']>=2.5 && $nilai['1']<3.5){
				if($nilai['4']>=3.5){
					$cocok	= true;
				}else if($nilai['4']>=2.5 && $nilai['4']<3.5){
					if($nilai['5']>=3.5){
						$cocok	= true;
					}
				}
			}
		}else{
			if($nilai['3']>=2.5){
				$cocok	= true;
			}else{
				if($nilai['6']>=2.5){
					$cocok	= true;
				}
			}
		}
		return $cocok;
	}
	
}