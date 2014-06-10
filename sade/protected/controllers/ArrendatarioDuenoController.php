<?php

class ArrendatarioduenoController extends Controller
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
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','adminEliminados','pdf','restaurar'),
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
			'persona'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Arrendatariodueno;
		$persona = new Persona;

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation(array($model,$persona));

		if(isset($_POST['Arrendatariodueno'], $_POST['Persona']))
		{
			$model->attributes=$_POST['Arrendatariodueno'];
			$persona->attributes=$_POST['Persona'];
			$persona->peRut=$model->adRut;
			$model->adEstado = 1;
			$persona->peActivo = 1;
			$persona->peTipo = 2;
			$valid = $model->validate();
			$valid = $persona->validate() && $valid;

		$values = array(
  			'username' => $persona->peNombresApellidos,
  			'email' => $persona->peEmail,
  			);

  			$usuario = Yii::app()->user->um->createNewUser($values,$model->adClave);

				if ($valid){
				if ($persona->save()){
					if($model->save())
						$this->redirect(array('view','id'=>$model->adRut));
					}
				}

			
		}

		$this->render('create',array(
			'model'=>$model,
			'persona' =>$persona,
		));
	

	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$persona = Persona::model()->findByPk($id);
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation(array($model,$persona));
		
		if(isset($_POST['Arrendatariodueno'], $_POST['Persona']))
		{
			$model->attributes=$_POST['Arrendatariodueno'];
			$persona->attributes=$_POST['Persona'];
			$persona->peRut=$model->adRut;
			$valid = $model->validate();
			$valid = $persona->validate() && $valid;
			
			if ($valid){
				if ($persona->save()){
					if($model->save())
						$this->redirect(array('view','id'=>$model->adRut));
				}
			}
		}

		$this->render('update',array(
			'model'=>$model,
			'persona' =>$persona,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		//$this->loadModel($id)->delete();
		$model=Arrendatariodueno::model()->findByPk($id);
		$persona=Persona::model()->findByPk($id);
		if ($persona->peActivo== 1){ 
		$persona->peActivo = 0;
		}
		else {
		$persona->peActivo = 1;			
		}
		$persona->save();

		//if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	public function actionRestaurar($id)
	{
		//$this->loadModel($id)->delete();
		$model=Arrendatariodueno::model()->findByPk($id);
		$persona=Persona::model()->findByPk($id);
		if ($persona->peActivo== 0){ 
		$persona->peActivo = 1;
		}
		else {
		$persona->peActivo = 0;			
		}
		$persona->save();

		//if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}


	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
			$dataProvider=new CActiveDataProvider('Arrendatariodueno');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Arrendatariodueno('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Arrendatariodueno']))
			$model->attributes=$_GET['Arrendatariodueno'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function actionAdminEliminados()
	{
		$model=new Arrendatariodueno('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Arrendatariodueno']))
			$model->attributes=$_GET['Arrendatariodueno'];

		$this->render('adminEliminados',array(
			'model'=>$model,
		));
	}


	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Arrendatariodueno the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Arrendatariodueno::model()->findByPk($id);
		$persona=Persona::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Arrendatariodueno $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='arrendatariodueno-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
