<?php
$nombre = $_POST["nombre"];
require('./FPDF/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','BI',18);
$pdf->Cell(40,10,'Bienvenido de vuelta: '.$nombre);
$pdf->Output();
?>