<?php

class AdminController extends Controller
{
	public $layout="admin";
	public function actionIndex()
	{
		$this->render('index');
	}
	
	public function actionDataUser()
	{
		$user= User::model()->findAll();
		$this->render('datauser',array('user'=>$user));
	}
	
	public function actionDataMahasiswa()
	{
		$mahasiswa= Mahasiswa::model()->findAll();
		$this->render('datamahasiswa',array('mahasiswa'=>$mahasiswa));
	}
	
	public function actionDataInstansi()
	{
		$instansi= Instansi::model()->findAll();
		$this->render('datainstansi',array('instansi'=>$instansi));
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
		if(isset($_POST['Pengumuman']))
		{
			$pengumuman->judul = $_POST['Pengumuman']['judul'];
			$pengumuman->isi = $_POST['Pengumuman']['isi'];

			$pengumuman->cover	=	CUploadedFile::getInstance($pengumuman,'cover');
			if($pengumuman->cover){
				$gambar		=	rand(10000000,100000000).'_'.$pengumuman->cover;
				while(is_file($gambar)){
					$gambar	=	rand(10000000,100000000).'_'.$pengumuman->cover;
				}
			}	
			$pengumuman->cover->saveAs(Yii::getPathOfAlias('webroot') . '/gambar/'.$gambar);

			if(isset($_POST['Pengumuman']['tanggal'])){
				$pengumuman->tanggal = $_POST['Pengumuman']['tanggal'];
			}else{
				$pengumuman->tanggal = date("Y/m/d");
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