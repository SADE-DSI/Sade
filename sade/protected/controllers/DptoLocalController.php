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
				'actions'=>array('create','update','admin','pdf','fecha','pdf2'),
				'users'=>array('@'),
			),
			/*array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','pdf','fecha','pdf2'),
				'users'=>array('admin'),
			),*/
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

	public function actionPdf()
	 {
	 	ob_clean();
 		$html2pdfPath = Yii::getPathOfAlias('application.extensions.tcpdf');
  		require_once($html2pdfPath.'\tcpdf\tcpdf.php');

  		$mes = date("m");
  		$meses = array('Diciembre','Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
  		$meses2 = array('12','1','2','3','4','5','6','7','8','9','10','11','12');
  		$month=$meses2[$mes-1];
  		$año = date("Y");
  		$fecha = date("d/m/Y");
  		$fecha2 = date("Y/m/d");
  		$color = 0;

  		if (Yii::app()->user->name == 'admin' || Yii::app()->user->checkAccess('Conserje')){
  			$id=$_GET['id'];
        	$sql6 = "select adRut from residedpto where dlDireccion='$id'
        	and (date_add(rdFechaInicio, interval 1 month)<'$fecha2')
        	and (date_add(rdFechaFin, interval 1 month)>='$fecha2')";
        	$data6 = Yii::app()->db->createCommand($sql6)->queryAll();
        	$usuario = $data6[0]['adRut'];
  		}
  		else {
  			$usuario=Yii::app()->user->name; 
  		}
 

        $pdf = new TCPDF();
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('SADE');
        $pdf->SetTitle('Informe de Gastos Mensuales');
        //$image_file = K_PATH_IMAGES.'logo.jpg';
        //$pdf->Image($image_file, 10, 10, 15, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
       // $pdf->SetSubject('TCPDF Tutorial');
      //  $pdf->SetKeywords('TCPDF, PDF, example, test, guide');
        $pdf->SetHeaderData('', 60, 'Informe de Gastos Mensuales', 'Correspondiente a '.$meses[$mes-1]. ' de ' .$año);
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
        $sql = "select * from compromisopago where month(cpFechaRealPago)='$month' and year(cpFechaRealPago)='$año'";
        $data = Yii::app()->db->createCommand($sql)->queryAll(); 

		$pdf->Cell(0.1,5,'');		
		$pdf->Cell(25,5,'Descripción',1,'','C',true);
		$pdf->Cell(35,5,'Número de Boleta',1,'','C',true);
		$pdf->Cell(25,5,'Monto',1,'','C',true);
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
			$pdf->Cell(25,5,$data[$i]['cpDescripcion'],1,'','C',true);
			$pdf->Cell(35,5,$data[$i]['cpNumeroBoleta'],1,'','C',true);
			$pdf->Cell(25,5,$data[$i]['cpMonto'],1,'','C',true);
			$pdf->Cell(35,5,$data[$i]['cpFechaRealPago'],1,'','C',true);
			$pdf->Cell(60,5,$data[$i]['cpObs'],1,1,'C',true);    
        }
        	$pdf->ln(5);
        $dptos=$direccion=$totalMetros=$total=0;
        $metros=$coeficiente=1;
        $sql2 = "select * from residedpto where (date_add(rdFechaInicio, interval 1 month)<'$fecha2')
        and (date_add(rdFechaFin, interval 1 month)>='$fecha2')";
       	$data2 = Yii::app()->db->createCommand($sql2)->queryAll();
        $dptos = count($data2); 

        $pdf->SetFont('','',11);

        $sql3 = "select sum(cpMonto) as total from compromisopago where month(cpFechaRealPago)='$mes'-1 and year(cpFechaRealPago)='$año'";
        $data3 = Yii::app()->db->createCommand($sql3)->queryAll();
        $total = $data3[0]['total'];
        $pdf->writeHTML('* El monto total de gastos comunes es = $'.$total);
        $pdf->ln(1);

        $sql4 = "select D.dlDireccion,D.dlMts2Construidos from residedpto R, dptolocal D
        where R.adRut='$usuario' and R.dlDireccion=D.dlDireccion and 
        date_add(R.rdFechaInicio, interval 1 month)<'$fecha2'
        and date_add(R.rdFechaFin, interval 1 month)>='$fecha2'";
        $data4 = Yii::app()->db->createCommand($sql4)->queryAll();
        $direccion = $data4[0]['dlDireccion'];
        $metros = $data4[0]['dlMts2Construidos'];

        $sql5 = "select sum(D.dlMts2Construidos) as totalMetros from residedpto R, dptolocal D
        where R.dlDireccion=D.dlDireccion and 
        date_add(R.rdFechaInicio, interval 1 month)<'$fecha2'
        and date_add(R.rdFechaFin, interval 1 month)>='$fecha2'";
        $data5 = Yii::app()->db->createCommand($sql5)->queryAll();
        $totalMetros = $data5[0]['totalMetros'];

        $pdf->SetTextColor(180,0,0);
        $coeficiente=$totalMetros/$metros;
        $apagar=ceil($total/$coeficiente);
         $pdf->writeHTML('* El monto a pagar por el Dpto "'.$direccion.'" es = $'.$apagar);
        

        $pdf->Output("Informe de Gastos.pdf", "I");
        Yii::app()->end();
	 }

	public function actionFecha()
	{
		$model=new ArrendatarioDueno;
		$fecha=0;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Arrendatariodueno']))
		{
			$model->adFechaLiberacion=$_POST['Arrendatariodueno'];
			$fecha = $model->adFechaLiberacion;
			if($model->save())
				$this->redirect(array('pdfFecha'));
		}

		$this->render('fecha',array(
			'model'=>$model,
		));
	}
}
