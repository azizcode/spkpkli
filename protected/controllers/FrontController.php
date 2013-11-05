<?php

class FrontController extends Controller
{
	public $layout	=	'front';
	public $action	=	'home';
	public $user;
	
	public function actionIndex()
	{
		$this->user		=	new LoginForm;	
		$this->render('index');
	}
	
	public function actionLogin()
	{
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			if($model->validate() && $model->login()){
				$this->redirect('admin');
			}	
		}
	}

	public function actionAbout()
	{
		$this->action = 'about';
		$this->render('about');
	}
	
	public function actionPengumuman()
	{
		$this->action = 'pengumuman';
		$this->render('pengumuman');
	}
	
	public function actionMahasiswa()
	{
		$this->render('mahasiswa');
	}

	public function actionDaftar()
	{
		
		$instansi    =  new Instansi;
		$user        =  new User;
		$j_instansi  =  array('1'=>'Sekolah', '2'=>'Perusahaan', '3'=>'Pemerintah', '4' => 'Lain-lain');
		if(isset($_POST['Instansi'])){
			$instansi->Nama_instansi = $_POST['Instansi']['Nama_instansi'];
			$instansi->Jenis_instasni = $_POST['Instansi']['Jenis_instasni'];
			$instansi->Alamat = $_POST['Instansi']['Alamat'];
			$instansi->No_tlp = $_POST['Instansi']['No_tlp'];
			$instansi->email = $_POST['Instansi']['email'];
			if($instansi->save()){
				$user->username=$_POST['User']['username'];
				$user->password= md5($_POST['User']['password']);
				$user->Level='instansi';
				$user->status='0';
				$user->id_user=$instansi->Id_instansi;
				$user->save();
				Yii::app()->user->setFlash('status','<div class="alert alert-success">Silahkan menunggu konfirmasi dari Admin</div>');
			}else{
				Yii::app()->user->setFlash('status','<div class="alert alert-danger">Error! silahkan cek form login Anda lagi </div>');
			}
		}
		$this->render('daftar',array('instansi'=>$instansi, 'user'=>$user,'j_instansi'=>$j_instansi));
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