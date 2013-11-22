<?php

class AdminController extends Controller
{
	public $layout="admin";
	public function actionIndex()
	{
		$this->render('index');
	}
	
	public function actionDataMahasiswa()
	{
		$user= User::model()->findAllByAttributes(array('Level'=>'mahasiswa'));
		if(isset($_POST['status'])) {
			foreach($_POST['status'] as $status => $value){
				$konvirmasi=User::model()->findByPk($status);
				if($value == 'on'){
					$konvirmasi->status = '1';
				}else {
					$konvirmasi->status = '0';
				}
				if($konvirmasi->save()){
				Yii::app()->user->setFlash('status','<div class="alert alert-success">Data telah Tersimpan</div>');
				}else{
				Yii::app()->user->setFlash('status','<div class="alert alert-success">Data Gagal Tersimpan</div>');
				}
			}
		}
		$this->render('datamahasiswa',array('user'=>$user));
	}
	
	public function actionDataInstansi()
	{
		$user= User::model()->findAllByAttributes(array('Level'=>'instansi'));
		if(isset($_POST['status'])) {
			foreach($_POST['status'] as $status => $value){
				$konvirmasi=User::model()->findByPk($status);
				if($value == 'on'){
					$konvirmasi->status = '1';
				}else {
					$konvirmasi->status = '0';
				}
				if($konvirmasi->save()){
				Yii::app()->user->setFlash('status','<div class="alert alert-success">Data telah Tersimpan</div>');
				}else{
				Yii::app()->user->setFlash('status','<div class="alert alert-success">Data Gagal Tersimpan</div>');
				}
			}
		}
		$this->render('datainstansi',array('user'=>$user));
	}
	
	public function actionPengumuman()
	{
	 $this->render('pengumuman');
	}

	public function actionInput()
	{
			$pengumuman = new Pengumuman;
		if(isset($_GET['id']))
		{
			$pengumuman= $pengumuman->findByPk($_GET['id']);
		}
		if(isset($_POS['Pengumuman']))
		{
			$pengumuman->judul = $_POST['Pengumuman']['judul'];
			$pengumuman->isi = $_POST['Pengumuman']['isi'];
			$pengumuman->cover = $_POST['Pengumuman']['cover'];
			if(isset($_POST['Pengumuman']['tanggal'])){
				$pengumuman->tanggal = $_POST['Pengumuman']['tanggal'];
			}else{
				$pengumuman->tanggal = '2013-11-17';
			}
			if($pengumuman->save()){
				Yii::app()->user->setFlash('status','<div class="alert alert-success">Data telah Tersimpan</div>');
				}else{
				Yii::app()->user->setFlash('status','<div class="alert alert-success">Data Gagal Tersimpan</div>');
				}
		}
		$this->render('input',array('pengumuman'=>$pengumuman));
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