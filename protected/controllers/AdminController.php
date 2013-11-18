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