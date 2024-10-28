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
    $pdf->SetDrawColor(0, 51, 102);
    $pdf->SetLineWidth(0.5);
    $pdf->Rect(12, 12, 186, 116, 'D');

    // Title styling
    $pdf->SetFont('Arial', 'B', 24);
    $pdf->SetTextColor(0, 51, 102); // Dark blue color for the title
    $pdf->Cell(0, 30, 'Certificate of Achievement', 0, 1, 'C');
    
    // Subtitle
    $pdf->SetFont('Arial', '', 14);
    $pdf->SetTextColor(0, 0, 0); 
    $pdf->Cell(0, 8, 'This Certificate is proudly presented to', 0, 1, 'C');
    $pdf->Ln(10);

    // Recipient name with styling
    // Add the handwritten font (assuming 'Pacifico-Regular' is the correct font family name)
    $pdf->AddFont('Pacifico-Regular', '', 'Pacifico-Regular.php'); // Path should be relative to 'fpdf/font/'
    $pdf->SetFont('Pacifico-Regular', '', 20); // Set handwritten font for recipient's name
    $pdf->SetTextColor(0, 0, 0); // Black color for recipient name
    $pdf->Cell(0, 10, $fullname, 0, 1, 'C');

    $startX = 60; // Adjust X position as needed
    $endX = 150;  // Adjust width as needed
    $currentY = $pdf->GetY(); // Get current Y position right below the name
    $pdf->Line($startX, $currentY + 1, $endX, $currentY + 1); // Draw line 2 units below the name

    $pdf->Ln(8);


    // Achievement statement
    $pdf->SetFont('Arial', '', 10);
    $pdf->SetTextColor(0, 0, 0);
    // Start the sentence
    $pdf->Cell(0, 5, 'This certificate is awarded to ', 0, 1, 'C');

    // Set bold font for the recipient's name
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(0, 5, $fullname, 0, 1, 'C');

    // Return to regular font for the rest of the sentence
    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell(0, 5, ' in recognition of successfully completing the quiz.', 0, 1, 'C');

    $pdf->Ln(5);

    // Score details
    $pdf->SetFont('Arial', '', 12);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(0, 10, 'Score: ' . $_SESSION['mark'] . ' / ' . $_SESSION['questions'], 0, 1, 'C');
    $pdf->Ln(5);

    $startX = 90; // Adjust X position as needed
    $endX = 120;  // Adjust width as needed
    $currentY = $pdf->GetY(); // Get current Y position right below the name
    $pdf->Line($startX, $currentY , $endX, $currentY ); // Draw line 1 
    // Footer for date
    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell(0, 10, 'Date: ' . date('d-m-Y'), 0, 1, 'C');
    $pdf->Line($startX, $currentY + 10, $endX, $currentY + 10); // Draw line 2 

    // Output the PDF as a downloadable file
    $pdf->Output('D', 'certificate_'.$fullname.'.pdf');
}
?>
