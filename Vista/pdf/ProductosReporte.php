<?php
require('fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('../img/escudo.png',10,8,22);
    // Arial bold 15
    $this->SetFont('Arial','B',20);
    //
    $this->SetFillColor(200,220,255);
    $this->SetTextColor(27, 160, 199);
    $this->SetDrawColor(128,0,0);
    $this->SetLineWidth(.3);
    $this->SetFont('','B');
    //ancho de borde
    //$this->SetLineWidth(1);
    //nombre de marca    
    $this->Cell(55,10,'AYT',0,0,'C',0);
    // Movernos a la derecha
    $this->Cell(40);
    
    // Título
    $this->Cell(1,10,'Reporte de productos',0,0,'C',0);
    // Salto de línea
    $this->Ln(20);
    //


    $this->SetFont('Arial','B',12);
    $this->SetTextColor(255, 66, 0);
    $this->SetDrawColor(128,0,0);
    $this->SetLineWidth(.3);
    $this->SetFont('','B');


    $this->cell(25,10,utf8_decode('Código'),1,0,'C',0);
    $this->cell(75,10,'Nombre',1,0,'C',0);
    $this->cell(30,10,'Cantidad',1,0,'C',0);
    $this->cell(25,10,'Precio',1,0,'C',0);
    $this->cell(30,10,'Fecha',1,1,'C',0);

}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página '.$this->PageNo().'/{nb}'),0,0,'C');
}
}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);

include("abre_conexion.php");
$sql="select * from producto;";
$query=mysqli_query($conexion,$sql); 


while ($row=$query->fetch_assoc()) {
	$pdf->cell(25,10,$row['CodProducto'],1,0,'C',0);
	$pdf->cell(75,10,$row['nombreP'],1,0,'C',0);
	$pdf->cell(30,10,$row['Cantidad'],1,0,'C',0);
	$pdf->cell(25,10,$row['Precio'],1,0,'C',0);
	$pdf->cell(30,10,$row['Fecha'],1,1,'C',0);

	# code...
}
$pdf->Output();

?>