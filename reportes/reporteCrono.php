<?php

    session_start();

    if (!$_SESSION['sesion']){
        header("location:../index.php");
    }

require ("../fpdf/fpdf.php");

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('../img/senasoft.png',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(70);
    // Título
    $this->Cell(65,10,'Reporte del cronograma',1,0,'C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

$pdf = new PDF();
$pdf->AddPage();
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',12);
$pdf->Cell(15);
$pdf->Cell(170,10,'Lista de turnos',1,0,'C');
$pdf->Ln(10);
$pdf->Cell(15);
$pdf->Cell(50,10,'Turno',1,0);
$pdf->Cell(60,10,'Letra identificadora',1,0);
$pdf->Cell(60,10,'Horas',1,0);
$pdf->Ln(10);
$pdf->Cell(15);
$pdf->Cell(50,10,utf8_decode('Mañana'),1,0);
$pdf->Cell(60,10,'m',1,0);
$pdf->Cell(60,10,'7 A.M - 1 P.M',1,0);
$pdf->Ln(10);
$pdf->Cell(15);
$pdf->Cell(50,10,'Tarde',1,0);
$pdf->Cell(60,10,'t',1,0);
$pdf->Cell(60,10,'1 P.M - 7 P.M',1,0);
$pdf->Ln(10);
$pdf->Cell(15);
$pdf->Cell(50,10,'Noche',1,0);
$pdf->Cell(60,10,'n',1,0);
$pdf->Cell(60,10,'7 P.M - 1 A.M',1,0);
$pdf->Ln(10);
$pdf->Cell(15);
$pdf->Cell(50,10,'Libre',1,0);
$pdf->Cell(60,10,'l',1,0);
$pdf->Cell(60,10,'Sin turno',1,0);
$pdf->Ln(20);
$pdf->SetFont('Arial','B',10);

require ("../modelo/usuario_sentencias.php");

$sentencias = new usuario_sentencias();
$resultado = $sentencias->verCronograma();

$pdf->Cell(45,10,'Numero de identificacion',1,0);
$pdf->cell(4,10,'1',1,0);
$pdf->cell(4,10,'2',1,0);
$pdf->cell(4,10,'3',1,0);
$pdf->cell(4,10,'4',1,0);
$pdf->cell(4,10,'5',1,0);
$pdf->cell(4,10,'6',1,0);
$pdf->cell(4,10,'7',1,0);
$pdf->cell(4,10,'8',1,0);
$pdf->cell(4,10,'9',1,0);
$pdf->cell(5,10,'10',1,0);
$pdf->cell(5,10,'11',1,0);
$pdf->cell(5,10,'12',1,0);
$pdf->cell(5,10,'13',1,0);
$pdf->cell(5,10,'14',1,0);
$pdf->cell(5,10,'15',1,0);
$pdf->cell(5,10,'16',1,0);
$pdf->cell(5,10,'17',1,0);
$pdf->cell(5,10,'18',1,0);
$pdf->cell(5,10,'19',1,0);
$pdf->cell(5,10,'20',1,0);
$pdf->cell(5,10,'21',1,0);
$pdf->cell(5,10,'22',1,0);
$pdf->cell(5,10,'23',1,0);
$pdf->cell(5,10,'24',1,0);
$pdf->cell(5,10,'25',1,0);
$pdf->cell(5,10,'26',1,0);
$pdf->cell(5,10,'27',1,0);
$pdf->cell(5,10,'28',1,0);
$pdf->cell(5,10,'29',1,0);
$pdf->cell(5,10,'30',1,0);

foreach ($resultado as $valor){
    $pdf->Ln(10);
    $pdf->Cell(45,10,$valor['id_personal'],1,0,'C');
    $pdf->cell(4,10,$valor['1'],1,0);
    $pdf->cell(4,10,$valor['2'],1,0);
    $pdf->cell(4,10,$valor['3'],1,0);
    $pdf->cell(4,10,$valor['4'],1,0);
    $pdf->cell(4,10,$valor['5'],1,0);
    $pdf->cell(4,10,$valor['6'],1,0);
    $pdf->cell(4,10,$valor['7'],1,0);
    $pdf->cell(4,10,$valor['8'],1,0);
    $pdf->cell(4,10,$valor['9'],1,0);
    $pdf->cell(5,10,$valor['10'],1,0);
    $pdf->cell(5,10,$valor['11'],1,0);
    $pdf->cell(5,10,$valor['12'],1,0);
    $pdf->cell(5,10,$valor['13'],1,0);
    $pdf->cell(5,10,$valor['14'],1,0);
    $pdf->cell(5,10,$valor['15'],1,0);
    $pdf->cell(5,10,$valor['16'],1,0);
    $pdf->cell(5,10,$valor['17'],1,0);
    $pdf->cell(5,10,$valor['18'],1,0);
    $pdf->cell(5,10,$valor['19'],1,0);
    $pdf->cell(5,10,$valor['20'],1,0);
    $pdf->cell(5,10,$valor['21'],1,0);
    $pdf->cell(5,10,$valor['22'],1,0);
    $pdf->cell(5,10,$valor['23'],1,0);
    $pdf->cell(5,10,$valor['24'],1,0);
    $pdf->cell(5,10,$valor['25'],1,0);
    $pdf->cell(5,10,$valor['26'],1,0);
    $pdf->cell(5,10,$valor['27'],1,0);
    $pdf->cell(5,10,$valor['28'],1,0);
    $pdf->cell(5,10,$valor['29'],1,0);
    $pdf->cell(5,10,$valor['30'],1,0);
}

$pdf->Output();
?>