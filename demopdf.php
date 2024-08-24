<?php
require('fpdf/fpdf.php');

// Create a new PDF instance
$pdf = new FPDF();
$pdf->AddPage();

// Set font
$pdf->SetFont('Arial','B',16);

// Add title
$pdf->Cell(0,10,'Booking Details',0,1,'C');

// Add booking details (replace with your actual data)
$pdf->SetFont('Arial','',12);
$pdf->Cell(0,10,'Booking ID: 123',0,1);
$pdf->Cell(0,10,'Customer Name: John Doe',0,1);
$pdf->Cell(0,10,'Package: Goa',0,1);

// Output the PDF as a file
if (!$pdf->Output('booking_details.pdf', 'D')) {
    echo "PDF generation failed: " . $pdf->Error();
} else {
    echo "PDF generated successfully!";
}
