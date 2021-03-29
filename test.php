<?php 
include 'function php/conn.php';
include 'fpdf/fpdf.php';



class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('images/attachedagency_dilgcentral.png',3,3,25);
    // Arial bold 15
    $this->SetFont('Times','B',12);
    // Move to the right
    // $this->Cell(50);
    // Title
    $this->Cell(88,-5,'Republic of the Philippines',0,0,'C');
    // Line break
    // $this->Ln(20);
    $this->SetFont('Times','',10);
    $this->Cell(50);	
    $this->setFillColor(0,0,0); 
    $this->SetTextColor(255,255,255);
    $this->Cell(55,-5,'Document Code',0,1,1,'C');





    $this->SetTextColor(0,0,0);
    $this->SetFont('Times','B',12);
    $this->Cell(131,14,'Department of the Interior and Local Government',0,0,'C');

    $this->SetFont('Times','B',10);
    $this->Cell(7);	
    $this->setFillColor(255,255,255); 
    $this->SetTextColor(0,0,0);
    // $this->Cell(5,5,'',0,1,'C');
    $this->Cell(55,15,'FM-QP-R4A-LGCDD-31-03',1,1,'L');


    // $this->Ln();


    $this->Cell(87,-5,'Region IV-A (CALABARZON)',0,1,'C');

    $this->SetFont('Times','',9);
    $this->Cell(150,15,'3/F Andenson Bldg. 1, National Highway, Brgy. Parian, City of Calamba, Laguna 4027',0,1,'C');
    $this->Cell(107,-8,'827-4745; 827-4560; 827-4587; 827-3143  827-4745',0,1,'C');
    $this->Cell(118,14,'dilg4a.calabarzon@gmail.com at www.calabarzon.dilg.gov.ph',0,0,'C');


    $this->SetFont('Times','B',8);
    $this->Cell(20);	
    $this->setFillColor(128,128,128); 
    $this->SetTextColor(255,255,255);
    $this->Cell(17,5,'Rev. No.',1,0,1,'C');
    $this->Cell(21,5,'Eff. Date',1,0,1,'C');
    $this->Cell(17,5,'Page',1,1,1,'C');

    $this->SetFont('Times','',8);
    $this->Cell(138);	
    $this->setFillColor(255,255,255); 
    $this->SetTextColor(0,0,0);
    $this->Cell(17,5,'00',1,0,1,'C');
    $this->Cell(21,5,'10.01.17',1,0,1,'C');
    $this->Cell(17,5,'1 of 1',1,1,1,'C');

	$this->Ln();

    $this->SetFont('Times','B',15);
    $this->Cell(19);	
    $this->Cell(10,10,'LGRRC Services Borrowers Card',0,0,1,'C');


    $this->SetFont('Times','',12);

    $this->setFillColor(128,128,128); 
    $this->SetTextColor(255,255,255);
    $this->Cell(97);
    $this->Cell(40,10,'Control Number:',1,0,0,'C');

    $this->setFillColor(255,255,255); 
    $this->SetTextColor(0,0,0);
    $this->Cell(27,10,'2018-001',1,0,0,'C');

	$this->Ln();

    $this->SetFont('Times','B',15);
    $this->setFillColor(192,192,192); 
    $this->Cell(193.2,2,'',1,1,1,'C');

}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
// for($i=1;$i<=40;$i++)
//     $pdf->Cell(0,10,'Printing line number '.$i,0,1);


$pdf->Output();

 ?>
