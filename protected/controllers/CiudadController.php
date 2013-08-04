<?php

class CiudadController extends Controller
{
	
	public function actionIndex()
	{
		$ciudad = Ciudad::model()->findAll();
		$this->render('index', array('ciudad' => $ciudad));
	}

	public function actionView($id)
	{
		$ciudad = Ciudad::model()->findByPk($id);
		$this->render('view', array('ciudad' => $ciudad));
	}

	public function actionEdit($id)
	{
		$model = Ciudad::model()->findByPk($id);
		if(!$model)
			throw new CException(404);
		/*
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";
		Yii::app()->end();
		*/
		
		if(isset($_POST['Ciudad']))
		{
			$model->attributes=$_POST['Ciudad'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
			
		}
		

		$this->render('edit', array('ciudad'=>$model));
	}


}