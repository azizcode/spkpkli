<?php

class AdminController extends Controller
{
	public $layout="admin";
	public function actionIndex()
	{
		$this->render('index');
	}
	
	public function actionLaporan()
	{
		$laporan=PesertaPkli::model()->findAll();
		$this->render('laporan',array('laporan'=>$laporan));
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
		$umum = Pengumuman::model()->findAll();
		$this->render('pengumuman',array('umum'=>$umum));
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
			$pengumuman->judul 	= $_POST['Pengumuman']['judul'];
			$pengumuman->isi 	= $_POST['Pengumuman']['isi'];
			if(isset($_POST['Pengumuman']['tanggal'])){
				$date 				= date_create($_POST['Pengumuman']['tanggal']);  
            $pengumuman->tanggal = date_format($date, 'Y-m-d');
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

	public function actionProfilinstansi()
	{
		if(!Yii::app()->user->isGuest) {
			$instansi = Instansi::model()->findByAttributes(array('Id_instansi'=>$_GET['id']));
			$result['nama']					=	$instansi->Nama_instansi;
			$jenis= array('1'=>'Sekolah', '2'=>'Perusahaan', '3'=>'Pemerintah', '4' => 'Lain-lain');
			$result['jenis']				=	$jenis[$instansi->Jenis_instasni];
			$result['alamat']				=	$instansi->Alamat;
			$result['telepon']				=	$instansi->No_tlp;
			$result['email']				=	$instansi->email;
			echo json_encode($result);
		}
	}
	public function actionProfilmahasiswa()
	{
		if(!Yii::app()->user->isGuest) {
			$identitas = Mahasiswa::model()->findByAttributes(array('NIM' => $_GET['id']));
			$result['nama']					=	$identitas->Nama_lengkap;
			$result['nim']					=	$identitas->NIM;
			$result['alamat']				=	$identitas->Alamat_dmalang;
			$result['telepon']				=	$identitas->No_tlp;
			$result['email']				=	$identitas->Email;
			echo json_encode($result);
		}
	}
	public function actionPrint()
	{
		$peserta	=	PesertaPkli::model()->findAllByAttributes(array('Id_program'=>$_GET['id']));
		$i			=	0;
		foreach($peserta as $mahasiswa){
			$value	=	Mahasiswa::model()->findByAttributes(array('NIM' => $mahasiswa->NIM));
			$result[$i]['nim']		=	$value->NIM;
			$result[$i]['nama']		=	$value->Nama_lengkap;
			$result[$i]['alamat']	=	$value->Alamat_dmalang;
			$result[$i]['telp']		=	$value->No_tlp;
			$result[$i]['email']	=	$value->Email;
			$i++;
		}
		echo json_encode($result);
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