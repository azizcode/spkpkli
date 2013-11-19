<?php

class InstansiController extends Controller
{
	public $layout='instansi';
	public $identitas;
	public $action="home";
	
	public function load(){
		if (Yii::app()->user->isGuest){
			$this->redirect(Yii::app()->request->baseUrl );
		}
		$this->identitas = Instansi::model()->findByPk(Yii::app()->user->id);
	}
	
	public function actionAbout()
	{
		$this->load();
		$this->action					=	'about';
		$this->setPageTitle(' - About');
		$this->render('about');
	}
	public function actionProfil()
	{
		$this->load();
		if(!Yii::app()->user->isGuest) {
			$result['nama']					=	$this->identitas->Nama_instansi;
			$jenis= array('1'=>'Sekolah', '2'=>'Perusahaan', '3'=>'Pemerintah', '4' => 'Lain-lain');
			$result['jenis']				=	$jenis[$this->identitas->Jenis_instasni];
			$result['alamat']				=	$this->identitas->Alamat;
			$result['telepon']				=	$this->identitas->No_tlp;
			$result['email']				=	$this->identitas->email;
			echo json_encode($result);
		}
	}
	public function actionDetailview()
	{
		$this->load();
		$peserta	=	PesertaPkli::model()->findAllByAttributes(array('Id_program'=>$_GET['id']));
		$i			=	0;
		foreach($peserta as $mahasiswa){
			$value	=	Mahasiswa::model()->findByAttributes(array('NIM' => $mahasiswa->NIM));
			$result[$i]['nim']	=	$value->NIM;
			$result[$i]['nama']			=	$value->Nama_lengkap;
			$result[$i]['alamat']	=	$value->Alamat_dmalang;
			$result[$i]['telp']		=	$value->No_tlp;
			$result[$i]['email']		=	$value->Email;
			$i++;
		}
		echo json_encode($result);
	}
	
	public function actionPengumuman()
	{
		$this->load();
		$this->action					=	'pengumuman';
		$this->setPageTitle(' - Pengumuman');
		$this->render('pengumuman');
	}
	
	public function actionIndex()
	{
		$this->load();
		$this->render('index');
	}

	public function actionInput()
	{
		$this->load();
		$program_pkli = new ProgramPkli;
		$b_keahlian = array('1'=>'Pemrogramman', '2'=>'Jaringan', '3'=>'Hardware', '4' => 'Sistem Informasi','5'=>'Multimedia');

		if(isset($_GET['fungsi']) && isset($_GET['id'])){
			$program_pkli = $program_pkli->findByPk($_GET['id']);
			if($_GET['fungsi']=='delete'){
				$program_pkli->delete();
				Yii::app()->user->setFlash('status','<div class="alert alert-success">Data telah dihapus</div>');
				$this->redirect(Yii::app()->request->baseUrl.'/instansi/view');
			}
			$program_pkli = $program_pkli->findByPk($_GET['id']);
		}

		if(isset($_POST['ProgramPkli'])){
			$program_pkli->Bidang_Keahlian=$_POST['ProgramPkli']['Bidang_Keahlian'];
			$program_pkli->Jumlah_peserta=$_POST['ProgramPkli']['Jumlah_peserta'];
			$date 				= date_create($_POST['ProgramPkli']['awal']);  
            $program_pkli->awal = date_format($date, 'Y-m-d');
			$date 				= date_create($_POST['ProgramPkli']['akhir']);  
            $program_pkli->akhir = date_format($date, 'Y-m-d');
			$program_pkli->keterangan=$_POST['ProgramPkli']['keterangan'];
			$program_pkli->Id_instansi=Yii::app()->user->id;
			if($program_pkli->save()){
				Yii::app()->user->setFlash('status','<div class="alert alert-success">Data telah Tersimpan</div>');
			}else{
				Yii::app()->user->setFlash('status','<div class="alert alert-danger">Error! silahkan cek form login Anda lagi </div>');
			}
		}
		$this->render('input',array('program_pkli'=>$program_pkli, 'b_keahlian'=>$b_keahlian));
	}	

	public function actionView()
	{
		$this->load();
		$program= ProgramPkli::model()->findAllByAttributes(array('Id_instansi'=>$this->identitas->Id_instansi));
		$this->render('view',array('program'=>$program));
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