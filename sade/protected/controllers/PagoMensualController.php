<?php

class PagomensualController extends Controller
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
				'actions'=>array('admin','pdf',),
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
		$model=new Pagomensual;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Pagomensual']))
		{
			$model->attributes=$_POST['Pagomensual'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->pmCodigo));
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

		if(isset($_POST['Pagomensual']))
		{
			$model->attributes=$_POST['Pagomensual'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->pmCodigo));
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
		$dataProvider=new CActiveDataProvider('Pagomensual');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Pagomensual('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Pagomensual']))
			$model->attributes=$_GET['Pagomensual'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Pagomensual the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Pagomensual::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Pagomensual $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='pagomensual-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

		public function actionPdf()
	 {
	 	ob_clean();
 		$html2pdfPath = Yii::getPathOfAlias('application.extensions.tcpdf');
  		require_once($html2pdfPath.'\tcpdf\tcpdf.php');


  		$mes = date("m");
  		$meses = array('Diciembre','Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
  		$año = date("Y");
  		$fecha = date("d/m/Y");
  		$fecha2= date("Y/m/d");
  		$color = 0;

        $pdf = new TCPDF();
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('SADE');
        $pdf->SetTitle('Informe de Pagos Mensuales');
       // $pdf->SetSubject('TCPDF Tutorial');
      //  $pdf->SetKeywords('TCPDF, PDF, example, test, guide');
        $pdf->SetHeaderData('', 60, 'Informe de Pagos Mensuales', 'Correspondiente a '.$meses[$mes-1]. ' de ' .$año);
        $pdf->setHeaderFont(Array('helvetica', '', 12));
        $pdf->setFooterFont(Array('helvetica', '', 8));
        $pdf->SetMargins(15, 18, 15);
        $pdf->SetHeaderMargin(5);
        $pdf->SetFooterMargin(10);
        $pdf->SetAutoPageBreak(TRUE, 0);
        $pdf->SetFont('dejavusans', '', 7);
        $pdf->AddPage();
        //$pdf->Image('/images/logo.jpeg', 218 ,4, 26 , 18,'JPEG','http://www.ubiobio.cl');
        $pdf->SetFillColor(242, 226, 140);
        $pdf->SetTextColor(0);
        $pdf->SetDrawColor(10,63,122);
        $pdf->SetLineWidth(0);
        $pdf->SetFont('','',10);
        $pdf->writeHTML('Informe generado el '.$fecha);
        $pdf->ln(5);
        // Data        
        $sql = "select * from pagomensual where month(pmFechaRealPago)='$mes'-1
         and year(pmFechaRealPago)='$año'";
        $data = Yii::app()->db->createCommand($sql)->queryAll(); 
   
   		$pdf->SetFont('','',12);
   		$pdf->Cell(0.1,5,'');
   		$pdf->Cell(180,1,'Gastos Comunes Pagados',1,1,'C',true);   

   		$pdf->SetFont('','',10);
		$pdf->Cell(0.1,5,'');		
		$pdf->Cell(25,5,'Dirección',1,'','C',true);
		$pdf->Cell(35,5,'Fecha Vencimiento',1,'','C',true);
		$pdf->Cell(25,5,'Monto $',1,'','C',true);
		$pdf->Cell(35,5,'Fecha de Pago',1,'','C',true);
		$pdf->Cell(60,5,'Observación',1,1,'C',true);              

		$pdf->SetFont('','',8);

        for ($i = 0; $i < count($data); $i++) {
			if ($color==0){
				$pdf->SetFillColor(230,230,230);
				$color++;
			}
			else{
				$pdf->SetFillColor(205,205,205);
				$color--;
			}
        	$pdf->Cell(0.1,5,'');		
			$pdf->Cell(25,5,$data[$i]['dlDireccion'],1,'','C',true);
			$pdf->Cell(35,5,$data[$i]['pmFechaPago'],1,'','C',true);
			$pdf->Cell(25,5,$data[$i]['pmMonto'],1,'','C',true);
			$pdf->Cell(35,5,$data[$i]['pmFechaRealPago'],1,'','C',true);
			$pdf->Cell(60,5,$data[$i]['pmObs'],1,1,'C',true);    
        }
        	$pdf->ln(8);

        $sql2 = "select * from residedpto R where rdFechaInicio<='$fecha2' and rdFechaFin>='$fecha2'
        		 and not exists( select * from pagomensual P where R.dlDireccion=P.dlDireccion)";
       	$data2 = Yii::app()->db->createCommand($sql2)->queryAll();
        $dptos = count($data2); 

       	$pdf->SetFillColor(242, 226, 140);
        $pdf->SetFont('','',12);
   		$pdf->Cell(50,5,'');
   		$pdf->Cell(85,1,'Gastos Comunes sin Pagar',1,1,'C',true);   

   		$pdf->SetFont('','',10);
		$pdf->Cell(50,5,'');		
		$pdf->Cell(25,5,'Dirección',1,'','C',true);
		$pdf->Cell(35,5,'Fecha Vencimiento',1,'','C',true);
		$pdf->Cell(25,5,'Monto $',1,1,'C',true);

		for ($i = 0; $i < count($data2); $i++) {
			if ($color==0){
				$pdf->SetFillColor(230,230,230);
				$color++;
			}
			else{
				$pdf->SetFillColor(205,205,205);
				$color--;
			}
        	$pdf->Cell(50,5,'');
        	$pdf->SetTextColor(180,0,0);		
			$pdf->Cell(25,5,$data[$i]['dlDireccion'],1,'','C',true);
			$pdf->Cell(35,5,$data[$i]['pmFechaPago'],1,'','C',true);
			$pdf->Cell(25,5,$data[$i]['pmMonto'],1,1,'C',true); 
        }
        $pdf->ln(5);

        $pdf->SetFont('','',11);

        $sql3 = "select sum(pmMonto) as total from pagomensual P where not exists( select * from  residedpto R 
        			where R.dlDireccion=P.dlDireccion and rdFechaInicio<='$fecha2' and rdFechaFin>='$fecha2')";
        $data3 = Yii::app()->db->createCommand($sql3)->queryAll();
        $total = $data3[0]['total'];
        $pdf->writeHTML('* El monto total de gastos comunes sin pagar es = $'.$total);
        $pdf->ln(1);
/*
        $gastos = ceil($total/$dptos);
        $pdf->SetTextColor(180,0,0);
        $pdf->writeHTML('* El valor a pagar para el dpto '.$id.' es = $'  .$gastos);
*/
        $pdf->Output("Informe de Gastos.pdf", "I");
        Yii::app()->end();
	 }

}
