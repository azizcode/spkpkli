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
		$this->render('laporan');
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

	public function actionDetailinstansi()
	{
		$this->load();
		if(!Yii::app()->user->isGuest) {
			$instansi = Instansi::model()->findAllByAttributes;
			$result['nama']					=	$this->$instansi->Nama_instansi;
			$jenis= array('1'=>'Sekolah', '2'=>'Perusahaan', '3'=>'Pemerintah', '4' => 'Lain-lain');
			$result['jenis']				=	$jenis[$this->$instansi->Jenis_instasni];
			$result['alamat']				=	$this->$instansi->Alamat;
			$result['telepon']				=	$this->$instansi->No_tlp;
			$result['email']				=	$this->$instansi->email;
			echo json_encode($result);
		}
	}
	public function actionDetailMahasiswa()
	{
		$this->load();
		if(!Yii::app()->user->isGuest) {
			$identitas = Mahasiswa::model()->findByPk($_GET['id_mahasiswa']);
			$result['nama']					=	$this->identitas->Nama_lengkap;
			$result['nim']					=	$this->identitas->NIM;
			$result['alamat']				=	$this->identitas->Alamat_dmalang;
			$result['telepon']				=	$this->identitas->No_tlp;
			$result['email']				=	$this->identitas->Email;
			echo json_encode($result);
		}
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