<?php
    require_once('../config.php');
    require_once('vendor/autoload.php');
    header("Content-type:application/pdf");

    use mPDF;
    
    $mpdf = new Mpdf();
    $mpdf->WriteHTML($_REQUEST['dadosPDF']);
    $mpdf->Output();
?>