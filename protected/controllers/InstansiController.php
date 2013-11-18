<?php

class InstansiController extends Controller
{
	public $layout='instansi';
	public $identitas;
	public function actionIndex()
	{
		$this->identitas = Instansi::model()->findByPk(Yii::app()->user->id);
		$this->render('index');
	}

	public function actionInput()
	{
		if (Yii::app()->user->isGuest){
			$this->redirect(Yii::app()->request->baseUrl );
		}
		$this->identitas = Instansi::model()->findByPk(Yii::app()->user->id);
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
		$this->identitas = Instansi::model()->findByPk(Yii::app()->user->id);
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