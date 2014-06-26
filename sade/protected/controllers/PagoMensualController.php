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
				'actions'=>array('index','view','Obtenerprecio'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','pdf'),
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
			$model->pmFechaPago=$model->pmFechaPago."-01";

			if($model->save())
				$this->redirect(array('view','id'=>$model->pmId));
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
				$this->redirect(array('view','id'=>$model->pmId));
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

	public function actionObtenerprecio(){
 		
			$direccion=$_POST['Pagomensual']['dlDireccion'];
			$fecha=$_POST['Pagomensual']['pmFechaPago'];
			


			//dividir la fecha del formulario en año y mes
			$porciones = explode("-", $fecha);
			$año=$porciones[0];
			$mes=$porciones[1];
			
			
			//OBTENER M2 DEPARTAMENTO
			$sql1 = "select dlMts2Construidos from dptolocal where dlDireccion='$direccion'";
       		$data1 = Yii::app()->db->createCommand($sql1)->queryAll();
       		$mDepartamento = $data1[0]['dlMts2Construidos'];
			echo CHtml::tag('option',array('value'=>'10'),CHtml::encode('tiene '.$mDepartamento.' m2'),true);

			//OBTENER TOTAL DE M2 DEPARTAMENTOS ARRENDADOS EN ESA FECHA
			$sql5 = "select sum(D.dlMts2Construidos) as totalMetros from residedpto R, dptolocal D where R.dlDireccion=D.dlDireccion";
        	$data5 = Yii::app()->db->createCommand($sql5)->queryAll();
        	$totalMetros = $data5[0]['totalMetros'];
			echo CHtml::tag('option',array('value'=>'10'),CHtml::encode('total de metros '.$totalMetros),true);

			//OBTENER TOTAL DE GASTOS EN ESA FECHA
       		$sql2 = "select sum(cpMonto) as total from compromisopago where month(cpFechaVencimiento)='$mes' and year(cpFechaVencimiento)='$año'";
       		$data2 = Yii::app()->db->createCommand($sql2)->queryAll();
       		$totalGastos = $data2[0]['total'];
			echo CHtml::tag('option',array('value'=>'10'),CHtml::encode('gastos mes '.$totalGastos),true);       		

			
			//MOSTRAR LA CANTIDAD TOTAL
			$cantidad=ceil(($mDepartamento*$totalGastos)/$totalMetros);
			echo CHtml::tag('option',array('value'=>'10'),CHtml::encode('gastos para el '.$cantidad),true);
					 	
 			//echo CHtml::tag('option',array('value'=>'10'),CHtml::encode($mDepartamento),true);
 		
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
        $sql = "select * from pagomensual where month(pmFechaPago)=(month(date_sub('$fecha2', interval 1 month)))
         and year(pmFechaPago)='$año'";
        $data = Yii::app()->db->createCommand($sql)->queryAll(); 

        if (count($data)>0){
   		$pdf->SetFont('','',11);
   		$pdf->Cell(0.1,5,'');
   		$pdf->Cell(180,1,'Gastos Comunes Pagados',1,1,'C',true);   

   		$pdf->SetFont('','',9);
		$pdf->Cell(0.1,5,'');		
		$pdf->Cell(60,5,'Dirección',1,'','C',true);
		$pdf->Cell(25,5,'Monto $',1,'','C',true);
		$pdf->Cell(35,5,'Fecha de Pago',1,'','C',true);
		$pdf->Cell(60,5,'Observación',1,1,'C',true);              

		$pdf->SetFont('','',7);

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
			$pdf->Cell(60,5,$data[$i]['dlDireccion'],1,'','C',true);
			$pdf->Cell(25,5,$data[$i]['pmMonto'],1,'','C',true);
			$pdf->Cell(35,5,$data[$i]['pmFechaRealPago'],1,'','C',true);
			$pdf->Cell(60,5,$data[$i]['pmObs'],1,1,'C',true);    
        }
        	$pdf->ln(8);

        $sql2 = "select D.dlDireccion,D.dlMts2Construidos
        from residedpto R, dptolocal D where D.dlDireccion=R.dlDireccion and
        not exists (select * from pagomensual P where R.dlDireccion=P.dlDireccion
          and (date_add(rdFechaInicio, interval 1 month)<'$fecha2')
        and (date_add(rdFechaFin, interval 1 month)>='$fecha2'))";
       	$data2 = Yii::app()->db->createCommand($sql2)->queryAll();
        $dptos = count($data2);


/////////CALCULAR EL VALOR DE GASTOS COMUNES POR DPTO
        $sql4 = "select sum(cpMonto) as total from compromisopago where month(cpFechaRealPago)='$mes'-1 and year(cpFechaRealPago)='$año'";
        $data4 = Yii::app()->db->createCommand($sql4)->queryAll();
        $total = $data4[0]['total'];
        
         for ($i = 0; $i < count($data2); $i++) {
        	$direccion[$i]=$data2[$i]['dlDireccion'];
        	$metros[$i] = $data2[$i]['dlMts2Construidos'];
        	
        $sql5 = "select sum(D.dlMts2Construidos) as totalMetros from residedpto R, dptolocal D
        where R.dlDireccion=D.dlDireccion and 
        date_add(R.rdFechaInicio, interval 1 month)<'$fecha2'
        and date_add(R.rdFechaFin, interval 1 month)>='$fecha2'";
        $data5 = Yii::app()->db->createCommand($sql5)->queryAll();
        $totalMetros = $data5[0]['totalMetros'];

        $coeficiente[$i]=$totalMetros/$metros[$i];
        $apagar[$i]=ceil($total/$coeficiente[$i]);
}

/////////FIN CALCULAR EL VALOR DE GASTOS COMUNES POR DPTO
       	$pdf->SetFillColor(242, 226, 140);
        $pdf->SetFont('','',11);
   		$pdf->Cell(40,5,'');
   		$pdf->Cell(100,1,'Gastos Comunes sin Pagar',1,1,'C',true);   

   		$pdf->SetFont('','',9);
		$pdf->Cell(40,5,'');		
		$pdf->Cell(60,5,'Dirección',1,'','C',true);
		$pdf->Cell(40,5,'Monto $',1,1,'C',true);

		for ($j = 0; $j < count($data2); $j++) {
			if ($color==0){
				$pdf->SetFillColor(230,230,230);
				$color++;
			}
			else{
				$pdf->SetFillColor(205,205,205);
				$color--;
			}
        	$pdf->Cell(40,5,'');
        	$pdf->SetTextColor(180,0,0);		
			$pdf->Cell(60,5,$data2[$j]['dlDireccion'],1,'','C',true);
			$pdf->Cell(40,5,$apagar[$j],1,1,'C',true);
        }

		$suma=0;
        foreach ($apagar as $key) $suma = $suma +$key;
     
     $pdf->ln(5);
     $pdf->SetFont('','',10);
     $pdf->writeHTML('* El monto total de gastos comunes sin pagar es = $'.$suma);
     }
     
     else  $pdf->writeHTML('No hay pagos realizados para el mes específicado');
        $pdf->Output("Informe de Gastos.pdf", "I");
        Yii::app()->end();
	 }
}
