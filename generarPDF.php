<?php

require('fpdf/fpdf.php');


$fpdf= new FPDF();

class pdf extends FPDF{
    public function header(){
        $this->SetFont('Arial', 'B', 8);
        $this->Write(3, '___________________________________________________________________________________________________________________________');
        $this->Ln();
        $this->Ln();
    }
}


$fpdf = new pdf();
$fpdf->AddPage('portrait', 'letter');


// config document
$fpdf->SetTitle('Comprobante de inscripción');