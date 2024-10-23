<?php
session_start();
require('fpdf/fpdf.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullname=$_POST['fullname'];

    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(0,0,'Certificate of Achievement',0,1,'c') ; // title
    $pdf->Ln(20);

    $pdf->SetFont('Arial','',12);
    $pdf->Cell(190, 10, 'This certifies that ' . $fullname . ' has successfully completed the quiz.', 0, 1, 'C');
    $pdf->Cell(190, 10, 'Score: ' . $_SESSION['mark'] . ' / ' . $_SESSION['questions'], 0, 1, 'C');

    $pdf->Output('D','certificate_'.$fullname);


}


?>