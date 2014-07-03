<?php

class Reservaespaciocomun_resController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','obtenerHoras','ObtenerHoraFin'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('*'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('*'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Reservaespaciocomun_res;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Reservaespaciocomun_res']))
		{
			$model->attributes=$_POST['Reservaespaciocomun_res'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->reId));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Reservaespaciocomun_res']))
		{
			$model->attributes=$_POST['Reservaespaciocomun_res'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->reId));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Reservaespaciocomun_res');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Reservaespaciocomun_res('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Reservaespaciocomun_res']))
			$model->attributes=$_GET['Reservaespaciocomun_res'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}


		public function actionObtenerHoras(){

			$rut=$_POST['Reservaespaciocomun_res']['adRut'];
			$codigo=$_POST['Reservaespaciocomun_res']['ecCodigo'];
			$fecha=$_POST['Reservaespaciocomun_res']['reFecha'];
			
			//OBTENER LOS MINUTOS DE RECERVA DEL ESPACIO COMUN
			$sql1 = "select ecFrecuencia from espaciocomun where ecCodigo='$codigo'";
       		$data1 = Yii::app()->db->createCommand($sql1)->queryAll();
       		$frecuencia = $data1[0]['ecFrecuencia'];
			echo CHtml::tag('option',array('value'=>'10'),CHtml::encode('frecuencia '.$frecuencia.' m'),true);

			//GENERAR LAS OPCIONES DE HORA
			
			$hora=date('08:00');
			$horaFin = date("H:i", strtotime($hora)+(60*$frecuencia));
			$periodos=round(720/$frecuencia, 0, PHP_ROUND_HALF_DOWN);//$periodos=720/$frecuencia;

			for ($i=0; $i <$periodos ; $i++) { 

				if($i==0 ){
       			//obtener si la hora esta reservada						
				$sql2 = "select * from reservaespaciocomun where ecCodigo='$codigo' and reFecha='$fecha' and reHoraInicio='$hora'";
       			$data2 = Yii::app()->db->createCommand($sql2)->queryAll();
       			$estaReservado=count($data2);
       			
       			if ($estaReservado==0) {
       				echo CHtml::tag('option',array('value'=>$hora),CHtml::encode($hora.' a '.$horaFin),true);		
       			}
					
				}

				else{
				
				$hora=date("H:i", strtotime($horaFin));
				$horaFin = date("H:i", strtotime($hora)+(60*$frecuencia));
				//obtener si la hora esta reservada					
				$sql2 = "select * from reservaespaciocomun where ecCodigo='$codigo' and reFecha='$fecha' and reHoraInicio='$hora'";
       			$data2 = Yii::app()->db->createCommand($sql2)->queryAll();
       			$estaReservado=count($data2);

				if($i>0 && $estaReservado==0){
					echo CHtml::tag('option',array('value'=>$hora),CHtml::encode($hora.' a '.$horaFin),true);	
				}	
				}
					
				
				

				// if($estaReservado!=0){

				// echo CHtml::tag('option',array('value'=>$hora),CHtml::encode('esta reservado '.$hora.' a '.$horaFin),true);		
				// }
				
			}

			//echo CHtml::tag('option',array('value'=>'10'),CHtml::encode($mDepartamento),true);
 		
	}


public function actionObtenerHoraFin(){
 		
 			

			//obtener hora inicio del formulario
			$horaInicio=$_POST['Reservaespaciocomun_res']['reHoraInicio'];
			


			//sumarle el intervalo
			$codigo=$_POST['Reservaespaciocomun_res']['ecCodigo'];
			$sql1 = "select ecFrecuencia from espaciocomun where ecCodigo='$codigo'";
       		$data1 = Yii::app()->db->createCommand($sql1)->queryAll();
       		$frecuencia = $data1[0]['ecFrecuencia'];
			$horaFin2 = date("H:i", strtotime($horaInicio)+(60*$frecuencia));

			//enviar al dropdownlist
			echo CHtml::tag('option',array('value'=>$horaFin2),CHtml::encode($horaFin2),true);
			
			
			
 		
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Reservaespaciocomun_res the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Reservaespaciocomun_res::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Reservaespaciocomun_res $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='reservaespaciocomun-res-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
