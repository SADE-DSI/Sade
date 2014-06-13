<?php

class DptolocalController extends Controller
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
				'actions'=>array('admin','pdf'),
				'users'=>array('admin'),
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
		$model=new Dptolocal;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Dptolocal']))
		{
			$model->attributes=$_POST['Dptolocal'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->dlDireccion));
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

		if(isset($_POST['Dptolocal']))
		{
			$model->attributes=$_POST['Dptolocal'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->dlDireccion));
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
		$dataProvider=new CActiveDataProvider('Dptolocal');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Dptolocal('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Dptolocal']))
			$model->attributes=$_GET['Dptolocal'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Dptolocal the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Dptolocal::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Dptolocal $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='dptolocal-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionPdf($id)
	 {
	 	ob_clean();
 $html2pdfPath = Yii::getPathOfAlias('application.extensions.tcpdf');
  require_once($html2pdfPath.'\tcpdf\tcpdf.php');


  		$mes = date("m");
  		$fecha = date("d/m/Y");

        $pdf = new TCPDF();
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('SADE');
        $pdf->SetTitle('Informe de Gastos Mensuales');
       // $pdf->SetSubject('TCPDF Tutorial');
      //  $pdf->SetKeywords('TCPDF, PDF, example, test, guide');
        $pdf->SetHeaderData('', 60, 'Informe de Gastos Mensuales', 'Para el mes '.$mes);
        $pdf->setHeaderFont(Array('helvetica', '', 12));
        $pdf->setFooterFont(Array('helvetica', '', 8));
        $pdf->SetMargins(15, 18, 15);
        $pdf->SetHeaderMargin(5);
        $pdf->SetFooterMargin(10);
        $pdf->SetAutoPageBreak(TRUE, 0);
        $pdf->SetFont('dejavusans', '', 7);
        $pdf->AddPage();
        $pdf->SetFillColor(255, 0, 0);
        $pdf->SetTextColor(0);
        $pdf->SetDrawColor(0, 0, 0);
        $pdf->SetLineWidth(0.3);
        $pdf->SetFont('');
        $pdf->writeHTML('Informe generado el '.$fecha);
        $pdf->ln(5);
        // Header
        $tbl_header = '<table border="1">';
        $tbl_footer = '</table>';
        // Data        
        $tbl = '';
        $sql = "select * from compromisopago where month(cpFechaRealPago)='$mes'";
        $data = Yii::app()->db->createCommand($sql)->queryAll(); 
    
   $tbl .= '<tr>' .
   					'<td>' . 'Descripción' . '</td>' .
                    '<td>' . 'Número de Boleta' .'</td>' .
                    '<td>' .'Monto' . '</td>' .
                    '<td>' .'Fecha de Pago' . '</td>'.
                    '<td>' .'Observación' . '</td>'.
                    '</tr>'; 
                    


        for ($i = 0; $i < count($data); $i++) {
            $tbl .= '<tr>' .
                    '<td>' . $data[$i]['cpDescripcion'] . '</td>' .
                    '<td>' . $data[$i]['cpNumeroBoleta'] . '</td>' .
                    '<td>' . $data[$i]['cpMonto'] . '</td>' .
                    '<td>' . $data[$i]['cpFechaRealPago'] . '</td>' .
                    '<td>' . $data[$i]['cpObs'] . '</td>' .
                    '</tr>';
        }

        $sql2 = "select * from dptolocal where dlActivo='Si'";
        $data2 = Yii::app()->db->createCommand($sql2)->queryAll();
        $dptos = count($data2); 

        $pdf->writeHTML($tbl_header . $tbl . $tbl_footer, true, false, false, false, '');

        $sql3 = "select sum(cpMonto) as total from compromisopago where month(cpFechaRealPago)='$mes'";
        $data3 = Yii::app()->db->createCommand($sql3)->queryAll();
        $total = $data3[0]['total'];
        $pdf->writeHTML('El monto total de gastos es = $'.$total);

        $gastos = ceil($total/$dptos);

        $pdf->writeHTML('El valor a pagar por el dpto '.$id.' es = $'  .$gastos);
       
        $pdf->Output("Informe de Gastos.pdf", "I");
        Yii::app()->end();
	 }
}
