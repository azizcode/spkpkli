<?php

class MahasiswaController extends Controller
{
	public $layout="mahasiswa";
	public $action="home";
	
	public $identitas;
	
	public function actionIndex()
	{
		$this->load();
		$kuisioner =  BidangKeahlian::model()->findByAttributes(array('NIM'=>$this->identitas->NIM));
		if(!$kuisioner){
			$cekKuisioner="true";
				$this->redirect('mahasiswa/kuisioner');
		}
		$this->render('index');
	}
	
	public function actionAbout()
	{
		$this->load();
		$this->action					=	'about';
		$this->setPageTitle(' - About');
		$this->render('about');
	}
	
	public function actionPengumuman()
	{
		$this->load();
		$this->action					=	'pengumuman';
		$this->setPageTitle(' - Pengumuman');
		$this->render('pengumuman');
	}
	
	public function actionPkli()
	{
		$this->load();
		$pkli		=	ProgramPkli::model()->findAll();
		$tempatpkli	=	PesertaPkli::model()->findByAttributes(array('NIM' => $this->identitas->NIM));
		if(!$tempatpkli){ $tempatpkli = "Anda Belum Mendaftar Silakan Mendaftar"; }else{
			$id = ProgramPkli::model()->findByAttributes(array('Id_program_pkli'=>'5'))->Id_instansi;
			$tempatpkli	=	Instansi::model()->findByPk($_GET[$id]);
		}
		$this->render('pkli',array('instansi' => $pkli, 'tempatpkli' => $tempatpkli));
	}
	
	public function actionDetailpkli()
	{
		if(!Yii::app()->user->isGuest) {
			$pkli 							=	ProgramPkli::model()->findByPk($_GET['id']);
			$instansi						=	Instansi::model()->findByPk($pkli->Id_instansi);
			$b_keahlian 					=	array('1'=>'Pemrogramman', '2'=>'Jaringan', '3'=>'Hardware', '4' => 'Sistem Informasi','5'=>'Multimedia');
			$result['nama']					=	$instansi->Nama_instansi;
			$result['alamat']				=	$instansi->Alamat;
			$result['bidang']				=	$b_keahlian[$pkli->Bidang_Keahlian];
			$result['jumlah']				=	$pkli->Jumlah_peserta;
			$result['telepon']				=	$instansi->No_tlp;
			$result['keterangan']			=	$pkli->keterangan;
			echo json_encode($result);
		}
	}

	public function actionProfil()
	{
		if(!Yii::app()->user->isGuest) {
			$identitas 						=	Mahasiswa::model()->findByPk(Yii::app()->user->id);
			$result['nama']					=	$identitas->Nama_lengkap;
			$result['nim']					=	$identitas->NIM;
			$result['alamat']				=	$identitas->Alamat_dmalang;
			$result['telepon']				=	$identitas->No_tlp;
			$result['email']				=	$identitas->Email;
			echo json_encode($result);
		}
	}

	public function actionDaftar()
	{
		$this->load();
		$daftar = new PesertaPkli;
				$daftar->NIM = $this->identitas->NIM;
				$daftar->Id_program = $_GET['id'];
				if($daftar->save()){
					Yii::app()->user->setFlash('status','<div class="alert alert-success">Berhasil</div>');
					$this->redirect(Yii::app()->request->baseUrl.'/mahasiswa/pkli');
				}
	}
	
	public function actionRekomendasi()
	{
		$this->load();
		$rekomendasi	=	BidangKeahlian::model()->findByAttributes(array('NIM' => $this->identitas->NIM));
		$bidang			=	explode(";", $rekomendasi->bidang_keahlian);
		$this->render('rekomendasi',array('rekomendasi' => $bidang));
	}
	
	public function actionKuisioner()
	{
		$this->load();
		$matkul 				=	Matakuliah::model()->findAll();
		if(BidangKeahlian::model()->findByAttributes(array('NIM' => $this->identitas->NIM))){ $this->redirect(Yii::app()->request->baseUrl.'/mahasiswa/rekomendasi'); }
		$prioritas				=	array();
		if(isset($_POST['soal1'])){
			$hardware			=	false;
			$data				=	Nilai::model()->findAllByAttributes(array('NIM'=>$this->identitas->NIM));
			$nilai				=	array();
			foreach($data as $value){
				$indeks[$value->kode_mk]		=	$value->Nilai;
				$nilai							+=	$indeks;
			}
			$hardware			=	Nilai::model()->hardware($nilai);
			$si					=	Nilai::model()->si($nilai);
			$jaringan			=	Nilai::model()->jaringan($nilai);
			$pemrograman		=	Nilai::model()->pemrograman($nilai);
			$multimedia			=	Nilai::model()->multimedia($nilai);
			$prioritas			=	array('1'=>$_POST['soal1'], '2'=>$_POST['soal2'], '3'=>$_POST['soal3'], '4'=>$_POST['soal4'], '5'=>$_POST['soal5']);
			$suka				=	$_POST['suka'];
			$benci				=	$_POST['benci'];
			
			if($suka<7){
				$prioritas['1']	=	'5';
				$like						=	'1';
			} else if($suka>=7 && $suka<11){
				$prioritas['2']	=	'5';
				$like						=	'2';
			} else if($suka>=11 && $suka<16){
				$prioritas['5']	=	'5';
				$like						=	'5';
			} else if($suka>=16 && $suka<19){
				$prioritas['3']	=	'5';
				$like						=	'3';
			} else{
				$prioritas['4']	=	'5';
				$like						=	'4';
			}
			
			foreach($prioritas as $bidang => $indeks){
				if($bidang!=$like && $indeks=='5'){
					$prioritas[$bidang]	=	'4';
				}
			}
			
			if($benci<7){
				$prioritas['1']	=	'1';
			} else if($benci>=7 && $benci<11){
				$prioritas['2']	=	'1';
			} else if($benci>=11 && $benci<16){
				$prioritas['5']	=	'1';
			} else if($benci>=16 && $benci<19){
				$prioritas['3']	=	'1';
			} else{
				$prioritas['4']	=	'1';
			}
			
			if($_POST['soal6']=='ya'){
				if(!$hardware){
					unset($prioritas['4']);
				}
				if(!$jaringan){
					unset($prioritas['2']);
				}
				if(!$si){
					unset($prioritas['5']);
				}
				if(!$pemrograman){
					unset($prioritas['1']);
				}
				if(!$multimedia){
					unset($prioritas['3']);
				}
			}
			arsort($prioritas);
			
			$keahlian					=	new BidangKeahlian;
			$keahlian->NIM				=	$this->identitas->NIM;
			$keahlian->bidang_keahlian	=	'';
			$i							=	1;
			foreach($prioritas as $bidang){
				if($i<=2){ $keahlian->bidang_keahlian .= $bidang; if($i==1){ $keahlian->bidang_keahlian .= ';'; } $i++; }
			}
			if($keahlian->save()){ $this->redirect(Yii::app()->request->baseUrl.'/mahasiswa/rekomendasi'); }
		}
		
		$this->render('kuisioner',array("matkul"=>$matkul));
	}
	
	public function load(){
		if(Yii::app()->user->isGuest) {
			$this->redirect(Yii::app()->request->baseUrl);
		}
		$this->identitas 		=	Mahasiswa::model()->findByPk(Yii::app()->user->id);
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