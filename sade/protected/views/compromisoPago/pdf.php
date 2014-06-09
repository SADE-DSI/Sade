<?php
    ob_start();
 ?> 

 <page backtop="10mm" backbottom="10mm" backleft="10mm" backright="10mm"> 
<page_header backimg="/images/tick.png" > 
</page_header>
 </page> 
<?php
    $content = ob_get_clean();

    Yii::import('application.extensions.tcpdf.HTML2PDF');

        $html2pdf = new HTML2PDF('P', 'A4', 'es');
//      $html2pdf->setModeDebug();
        $html2pdf->setDefaultFont('Arial');
         $html2pdf->writeHTML($content,false);
        $html2pdf->writeHTML("YESSSSSSS");
        $html2pdf->Output("pdfdemo.pdf", 'I');
    ?> 