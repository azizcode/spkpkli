<?php

class MahasiswaController extends Controller
{
	public $layout="front";
	public function actionIndex()
	{
		$this->render('index');
	}
	
	public function actionRekomendasi()
	{
		$this->render('rekomendasi');
	}
	
	public function actionView()
	{
		$this->render('view');
	}
	
	public function actionDetilView()
	{
		$this->render('detilview');
	}
	
	public function actionKuisioner()
	{
		$this->render('kuisioner');
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