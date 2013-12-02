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
	
	public function actionDatamahasiswa()
	{

		$mahasiswa = new Mahasiswa;
		if(isset($_POST['Mahasiswa'])){
			$mahasiswa->NIM = $_POST['Mahasiswa']['NIM'];
			$mahasiswa->Nama_lengkap 		= $_POST['Mahasiswa']['Nama_lengkap'];
			$mahasiswa->Jenis_kelamin 		= $_POST['Mahasiswa']['Jenis_kelamin'];
			$mahasiswa->Tempat_lahir 		= $_POST['Mahasiswa']['Tempat_lahir'];
			$date 							= date_create($_POST['Mahasiswa']['Tanggal_lahir']);
			$mahasiswa->Tanggal_lahir 		= date_format($date, 'Y-m-d');
			$mahasiswa->Nama_orangtua 		= $_POST['Mahasiswa']['Nama_orangtua'];
			$mahasiswa->Pekerjaan_orangtua 	= $_POST['Mahasiswa']['Pekerjaan_orangtua'];
			$mahasiswa->Alamat_orangtua 	= $_POST['Mahasiswa']['Alamat_orangtua'];
			$mahasiswa->Kota_orangtua 		= $_POST['Mahasiswa']['Kota_orangtua'];
			$mahasiswa->Profinsi_orangtua 	= $_POST['Mahasiswa']['Profinsi_orangtua'];
			$mahasiswa->Tahun_masuk 		= $_POST['Mahasiswa']['Tahun_masuk'];
			$mahasiswa->Jurusan 			= "Teknik Informatika";
			$mahasiswa->Pendidikan_terakhir = $_POST['Mahasiswa']['Pendidikan_terakhir'];
			$mahasiswa->Alamat_dmalang 		= $_POST['Mahasiswa']['Alamat_dmalang'];
			$mahasiswa->Alamat_asal 		= $_POST['Mahasiswa']['Alamat_asal'];
			$mahasiswa->No_tlp 				= $_POST['Mahasiswa']['No_tlp'];
			$mahasiswa->Email 				= $_POST['Mahasiswa']['Email'];
			if($mahasiswa->save()){
				$user = new User;
				$user->username = $mahasiswa->NIM;
				$user->password = md5($mahasiswa->NIM);
				$user->Level = 'mahasiswa';
				$user->status = '1';
				$user->id_user=$mahasiswa->id_mahasiswa;
				if($user->save()){
					Yii::app()->user->setFlash('status','<div class="alert alert-success">Data telah Tersimpan</div>');
				}else{
					Yii::app()->user->setFlash('status','<div class="alert alert-danger">gagal jadi mahasiswa </div>');
				}				
			}else{
				Yii::app()->user->setFlash('status','<div class="alert alert-danger">gagal jadi mahasiswa </div>');
			}
		}
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
		$this->render('datamahasiswa',array('user'=>$user,'mahasiswa'=>$mahasiswa));
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
			if($_GET['fungsi']=='delete'){
				$pengumuman->delete();
				Yii::app()->user->setFlash('status','<div class="alert alert-success">Data telah dihapus</div>');
				$this->redirect(Yii::app()->request->baseUrl.'/admin/pengumuman');
			}
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
	public function actionNilai(){
		$this->render('nilai');
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