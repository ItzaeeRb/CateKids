<?php
require('fpdf/fpdf.php');

// Crear una instancia de la clase FPDF
$pdf = new FPDF();
$pdf->AddPage();

// Configurar el título del documento
$pdf->SetTitle('Comprobante de Inscripcion');

// Configurar la fuente
$pdf->SetFont('Arial', 'B', 12);

// Título del comprobante
$pdf->Cell(0, 10, 'Comprobante de Inscripcion', 0, 1, 'C');

// Espacio
$pdf->Ln(10);

// Información del estudiante
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(0, 10, 'Nombre del alumno: Itzae Guadalupe Rivera Barrera', 0, 1);
$pdf->Cell(0, 10, 'Curso: Confirmacion', 0, 1);
$pdf->Cell(0, 10, 'Fecha de Inscripcion: 09 de febrero de 2025', 0, 1);

// Espacio
$pdf->Ln(10);

// Información adicional
$pdf->SetFont('Arial', '', 12);
$pdf->MultiCell(0, 10, 'Este documento certifica que el alumno/a: Itzae Guadalupe Rivera Barrera, se encuentra inscrito en el curso de preparacion para el sacramento de: Confirmacion, en la Catedral Metropolitana de la Ciudad de Xalapa, Veracruz, a partir del dia 09 de febrero de 2025.', 0, 'J');

// Espacio
$pdf->Ln(10);

// Firma
$pdf->Cell(0, 10, 'Firma del Responsable:', 0, 1);
$pdf->Cell(0, 10, '_____________________________', 0, 1);
$pdf->Cell(0, 10, 'Nombre del Responsable', 0, 1);

// Salida del PDF al navegador
$pdf->Output();
?>
