<?php
session_start();
require('fpdf/fpdf.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullname = $_POST['fullname'];

    $pdf = new FPDF();
    $pdf->AddPage();

    // Add border for a formal look
    $pdf->SetLineWidth(1);
    $pdf->Rect(10, 10, 190, 120, 'D');

    // Title styling
    $pdf->SetFont('Arial', 'B', 24);
    $pdf->SetTextColor(0, 51, 102); // Dark blue color for the title
    $pdf->Cell(0, 30, 'Certificate of Achievement', 0, 1, 'C');
    $pdf->Ln(0);
    
    // Subtitle
    $pdf->SetFont('Arial', '', 16);
    $pdf->SetTextColor(128, 128, 128); // Gray color for the subtitle
    $pdf->Cell(0, 10, 'Presented to', 0, 1, 'C');
    $pdf->Ln(5);

    // Recipient name with styling
    $pdf->SetFont('Arial', 'B', 20);
    $pdf->SetTextColor(0, 0, 0); // Black color for recipient name
    $pdf->Cell(0, 10, $fullname, 0, 1, 'C');
    $pdf->Ln(5);

    // Achievement statement
    $pdf->SetFont('Arial', '', 12);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->MultiCell(0, 10, 'This certificate is awarded to ' . $fullname . ' in recognition of successfully completing the quiz.', 0, 'C');
    $pdf->Ln(5);

    // Score details
    $pdf->SetFont('Arial', '', 12);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(0, 10, 'Score: ' . $_SESSION['mark'] . ' / ' . $_SESSION['questions'], 0, 1, 'C');
    $pdf->Ln(5);

    // Footer for date
    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell(0, 10, 'Date: ' . date('d-m-Y'), 0, 1, 'C');

    // Output the PDF as a downloadable file
    $pdf->Output('D', 'certificate_'.$fullname.'.pdf');
}
?>
