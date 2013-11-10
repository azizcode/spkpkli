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
		if(isset($_POST['ProgramPkli'])){
			$program_pkli->Bidang_Keahlian=$_POST['ProgramPkli']['Bidang_Keahlian'];
			$program_pkli->Jumlah_peserta=$_POST['ProgramPkli']['Jumlah_peserta'];
			$program_pkli->Waktu_pelaksanaan=$_POST['ProgramPkli']['Waktu_pelaksanaan'];
			$program_pkli->keterangan=$_POST['ProgramPkli']['keterangan'];
		}
		$this->render('input',array('program_pkli'=>$program_pkli, 'b_keahlian'=>$b_keahlian));
	}

	public function actionView()
	{
		$this->identitas = Instansi::model()->findByPk(Yii::app()->user->id);
		$this->render('view');
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