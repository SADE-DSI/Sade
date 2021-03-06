<?php

class VisitadptoController extends Controller
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
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'salidaVisita'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
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
		$model=new Visitadpto;
		$visita = new Visita;
		
		date_default_timezone_set('America/Mendoza');		
		$model->vdFechaIngreso = date('Y-m-d h:i:s');
		$model->caRut = Yii::app()->user->name;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Visitadpto'], $_POST['Visita']))
		{	
			$model->attributes=$_POST['Visitadpto'];
			if(!$model->rutExiste($model->viRut)){
				//Se insertan primero los datos en la tabla visita si es que no se encuentran
				$visita->viRut = $model->viRut;
				if($visita->save()){
					$model->attributes=$_POST['Visita'];
					//luego se insertan los datos en la tabla visitaDpto
					if($model->save()){
						$this->redirect(array('view','id'=>$model->vdCodigo));
					}
				}
			}
			else {
				$model->attributes=$_POST['Visitadpto'];
				$visita->viRut = $model->viRut;
				if($model->save()){
					$this->redirect(array('view','id'=>$model->vdCodigo));
				}
			}
		}

		$this->render('create',array(
			'model'=>$model, 'visita'=>$visita,
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

		if(isset($_POST['Visitadpto']))
		{
			$model->attributes=$_POST['Visitadpto'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->vdCodigo));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	public function actionSalidaVisita($id)
	{
		date_default_timezone_set('America/Mendoza');	
		$model=$this->loadModel($id);


		if($model->vdFechaSalida=='0000-00-00 00:00:00' || $model->vdFechaSalida==''){
			$model->vdFechaSalida = date('Y-m-d h:i:s');
			if($model->save())
				$this->render('view',array('model'=>$this->loadModel($id),
					));
			else throw new CHttpException('La Salida de la visita no fue registrada');
		}
		else throw new CHttpException('La Salida de esta visita ya estaba registrada');
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
		$dataProvider=new CActiveDataProvider('Visitadpto');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Visitadpto('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Visitadpto']))
			$model->attributes=$_GET['Visitadpto'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Visitadpto the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Visitadpto::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Visitadpto $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='visitadpto-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}

