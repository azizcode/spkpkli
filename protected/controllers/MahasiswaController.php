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
	
	public function actionMandiri()
	{
		$this->load();
		$kuisioner =  BidangKeahlian::model()->findByAttributes(array('NIM'=>$this->identitas->NIM));
		if(!$kuisioner){
			$cekKuisioner="true";
				$this->redirect('mahasiswa/kuisioner');
		}
		$instansi    					=  new Instansi;
		$program_pkli 					=  new ProgramPkli;
		$b_keahlian 					=  array('1'=>'Pemrogramman', '2'=>'Jaringan', '3'=>'Hardware', '4' => 'Sistem Informasi','5'=>'Multimedia');
		$user       					=  new User;
		$j_instansi  					=  array('1'=>'Sekolah', '2'=>'Perusahaan', '3'=>'Pemerintah', '4' => 'Lain-lain');
		if(isset($_POST['Instansi'])){
			$instansi->Nama_instansi = $_POST['Instansi']['Nama_instansi'];
			$instansi->Jenis_instasni = $_POST['Instansi']['Jenis_instasni'];
			$instansi->Alamat = $_POST['Instansi']['Alamat'];
			$instansi->No_tlp = $_POST['Instansi']['No_tlp'];
			$instansi->email = $_POST['Instansi']['email'];
			if($instansi->save()){
				$program_pkli->Bidang_Keahlian	=	$_POST['ProgramPkli']['Bidang_Keahlian'];
				$program_pkli->Jumlah_peserta	=	$_POST['ProgramPkli']['Jumlah_peserta'];
				$date 							=	date_create($_POST['ProgramPkli']['awal']);  
				$program_pkli->awal 			=	date_format($date, 'Y-m-d');
				$date 							=	date_create($_POST['ProgramPkli']['akhir']);  
				$program_pkli->akhir 			=	date_format($date, 'Y-m-d');
				$program_pkli->keterangan		=	$_POST['ProgramPkli']['keterangan'];
				$program_pkli->Id_instansi		=	$instansi->Id_instansi;
				if($program_pkli->save()){
					$daftar = new PesertaPkli;
					$daftar->NIM = $this->identitas->NIM;
					$daftar->Id_program 		=	$program_pkli->Id_program_pkli;
					if($daftar->save()){
						Yii::app()->user->setFlash('status','<div class="alert alert-success">Anda telah Mendaftar PKLI secara mandiri</div>');
					}
				}
			}else{
				Yii::app()->user->setFlash('status','<div class="alert alert-danger">Error! silahkan cek form login Anda lagi </div>');
			}
		}
		$this->render('mandiri',array('instansi'=>$instansi, 'user'=>$user,'j_instansi'=>$j_instansi,'program_pkli'=>$program_pkli, 'b_keahlian'=>$b_keahlian));
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
		$kuisioner =  BidangKeahlian::model()->findByAttributes(array('NIM'=>$this->identitas->NIM));
		if(!$kuisioner){
			$cekKuisioner="true";
				$this->redirect('mahasiswa/kuisioner');
		}
		$pkli		=	ProgramPkli::model()->findAll();
		if(isset($_GET['id'])){
			$pkli		=	ProgramPkli::model()->findAllByAttributes(array('Bidang_Keahlian'=>$_GET['id']));
		}
		$tempatpkli	=	PesertaPkli::model()->findByAttributes(array('NIM' => $this->identitas->NIM));
		if(!$tempatpkli){ $tempatpkli = "Anda Belum Mendaftar Silakan Mendaftar"; $idx = ('-1'); }else{
			$id = ProgramPkli::model()->findByPk(PesertaPkli::model()->findByAttributes(array('NIM'=>$this->identitas->NIM))->Id_program);
			$tempatpkli	=	Instansi::model()->findByPk($id->Id_instansi)->Nama_instansi;
			$idx		=	$id->Id_program_pkli;
		}
		$av=false;
		$i=1; 
		foreach($pkli as $value){ 
			$instansi   = Instansi::model()->findByPk($value->Id_instansi);
			$terdaftar	=  count(PesertaPkli::model()->findAllByAttributes(array('Id_program'=>$value->Id_program_pkli))); 
			$tersedia	=	$value->Jumlah_peserta - $terdaftar;
			$from = strtotime($value->awal);
			$to = strtotime($value->akhir);
			$now = time();
			if($tersedia>0 && $now < $from){ $av=true; } 
			$i++; 
		}
		if($av==false){ $tempatpkli = 'Semua Program Sudah Terisi Silakan Mendaftar Lewat <a href="'.Yii::app()->request->baseUrl.'/mahasiswa/mandiri">Jalur Mandiri'; $idx = ('-1'); }
		$this->render('pkli',array('pkli' => $pkli, 'tempatpkli' => $tempatpkli, 'id_tempat_pkli' => $idx));
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
			$awal							=	date_create($pkli->awal);
			$akhir							=	date_create($pkli->akhir);
			$result['pelaksanaan']			=	date_format($awal, 'd-m-Y').' s.d. '.date_format($akhir, 'd-m-Y');
			$result['kuota']				=	$pkli->Jumlah_peserta.' Orang';
			$result['terdaftar']			=	count(PesertaPkli::model()->findAllByAttributes(array('Id_program'=>$pkli->Id_program_pkli))).' Orang';
			$tersedia						=	$result['kuota'] - $result['terdaftar'];
			if($tersedia==0){ $result['tersedia'] 	=	'Kuota Penuh'; }else { $result['tersedia'] = $tersedia.' Orang'; };
			$result['telepon']				=	$instansi->No_tlp;
			$result['keterangan']			=	$pkli->keterangan;
			echo json_encode($result);
		}
	}

	public function actionProfil()
	{
		$this->load();
		if(!Yii::app()->user->isGuest) {
			$result['nama']					=	$this->identitas->Nama_lengkap;
			$result['nim']					=	$this->identitas->NIM;
			$result['alamat']				=	$this->identitas->Alamat_dmalang;
			$result['telepon']				=	$this->identitas->No_tlp;
			$result['email']				=	$this->identitas->Email;
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
		$kuisioner =  BidangKeahlian::model()->findByAttributes(array('NIM'=>$this->identitas->NIM));
		if(!$kuisioner){
			$cekKuisioner="true";
				$this->redirect('mahasiswa/kuisioner');
		}
		$nilai          =   Nilai::model()->findAllByAttributes(array('NIM'=>$this->identitas->NIM));
		$rekomendasi	=	BidangKeahlian::model()->findByAttributes(array('NIM' => $this->identitas->NIM));
		$bidang			=	explode(";", $rekomendasi->bidang_keahlian);
		$this->render('rekomendasi',array('rekomendasi' => $bidang,'nilai'=>$nilai));
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
			foreach($prioritas as $bidang => $value){
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
		date_default_timezone_set("Asia/Jakarta");
	}
	
	public function huruf($angka){
		if($angka=='4'){ $huruf='A'; }
		else if($angka=='3.5'){ $huruf='B+'; }
		else if($angka=='3'){ $huruf='B'; }
		else if($angka=='2.5'){ $huruf='C+'; }
		else if($angka=='2'){ $huruf='C'; }
		else if($angka=='1'){ $huruf='D'; }
		else { $huruf='E'; }
		return $huruf;
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