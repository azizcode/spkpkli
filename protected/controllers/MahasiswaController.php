<?php

class MahasiswaController extends Controller
{
	public $layout="mahasiswa";
	
	public $identitas;
	
	public function actionIndex()
	{
		if(Yii::app()->user->isGuest) {
			$this->redirect(Yii::app()->request->baseUrl);
		}
		$this->identitas 	= Mahasiswa::model()->findByPk(Yii::app()->user->id);
		$kuisioner =  BidangKeahlian::model()->findByAttributes(array('NIM'=>$this->identitas->NIM));
		if(!$kuisioner){
			$cekKuisioner="true";
				$this->redirect('mahasiswa/kuisioner');
		}
		$this->render('index');
	}
	
	public function actionPkli()
	{
		$this->render('pkli');
	}
	
	public function actionView()
	{
		$this->render('view');
	}
	
	public function actionDetilView()
	{
		$this->render('detilview');
	}
	
	public function actionKuisioner()
	{
		if(Yii::app()->user->isGuest) {
			$this->redirect(Yii::app()->request->baseUrl);
		}
		$matkul 				=	Matakuliah::model()->findAll();
		$this->identitas 		=	Mahasiswa::model()->findByPk(Yii::app()->user->id);
		if(isset($_POST['soal1'])){
			$hardware			=	false;
			$data				=	Nilai::model()->findAllByAttributes(array('NIM'=>$this->identitas->NIM));
			$nilaihardware		=	array();
			foreach($data as $value){
				if($value->kode_mk<=21&&$value->kode_mk>18){
					$indeks[$value->kode_mk]		=	$value->Nilai;
					$nilaihardware					+=	$indeks;
				}
			}
			$hardware			=	Nilai::model()->hardware($nilaihardware);
			$this->redirect(Yii::app()->request->baseUrl.'/mahasiswa/pkli');
		}
		$this->render('kuisioner',array("matkul"=>$matkul));
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}