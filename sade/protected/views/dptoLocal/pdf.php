<?php
	//conectar con la base de datos

  $connection = Yii::app()->db;
   $query=$connection->createCommand()->select('dlDireccion')->from('dptolocal')->queryAll();
// fin_conectar con la base de datos
//    ob_start();
        $variable= $_GET["id"];
          set_time_limit(0);
$html2pdfPath = Yii::getPathOfAlias('application.extensions.tcpdf');
require_once($html2pdfPath.'\tcpdf\tcpdf.php');



/*     echo "PDF ";
     echo $variable;
    $connection = Yii::app()->db;
    $query=$connection->createCommand()->select('dlDireccion')->from('dptolocal')->queryAll();

$totalRows = count($query);
   echo "<br>";
   echo "Numero de columnas=";
    echo $totalRows;

 for ($i=0; $i < $totalRows ; $i++) { 
 	$row[] = $query['dlDireccion'];
 }
  */  
class pdf extends TCPDF{

public function Header(){
   $this->Cell(0, 0, 'PDF', 0, 1, 'C', 0, '', 1);
        $this->Cell(15);
}
    $pdf->Cell(0, 0, 'PDF', 0, 1, 'C', 0, '', 1);

}

 $pdf = new pdf('L', PDF_UNIT, 'Legal', true, 'UTF-8', false);
$totalRows = count($query);

	

    $pdf->SetAutoPageBreak(TRUE, 0);
     $pdf->Output('ListaMiembros.pdf','I');
    exit;

  /*  $connection = Yii::app()->db;
$sqlProvider = mysql_query("select dlValorArriendo from dptolocal");
    $variable= $_GET["id"];*/
 ?> 

<?php
 

 //   Yii::import('application.extensions.tcpdf.HTML2PDF');
   // echo $this->renderPartial('contenidoPDF');
   //    $content = ob_get_clean();
     //   $html2pdf = new HTML2PDF('P', 'A4', 'es');
//      $html2pdf->setModeDebug();
   //    $html2pdf->setDefaultFont('Arial');
     //    $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
       // $html2pdf->writeHTML("DATO = ");
     //   $html2pdf->writeHTML($variable);
       // $html2pdf->writeHTML($sqlProvider);
       // $html2pdf->Output("Informe Gastos.pdf", 'I');
    ?> 