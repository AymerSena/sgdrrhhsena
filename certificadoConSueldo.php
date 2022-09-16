<?php
session_start();

require('classphp/fpdf/fpdf.php');

    
    require("conexionBD.php");
    $documento=$_SESSION["idUs"];
    $querySql = "SELECT * FROM tblusuario WHERE UsuCedula=$documento";
    $resultados = $conexion -> query($querySql);
    foreach ($resultados as $row) {
        $namePersonJob=$row['UsuNombre']; 
        $lastNamePerJob=$row['UsuApellido'];
        $fechaContrato=$row['UsuFechaContrato'];
        $cargoJobFun=$row['UsuCargo'];
        $tipoContrato=$row['UsuTipoContra'];
        $jobsueldo=$row['UsuSalario'];
    }

// Informacion del firmante y que certifica.
    $nameFirmante="AYMER YESID CRUZ SUESCUN"; // Variable que se debe traer de la base de datos y se pone de manera manual.
    $cargoFirmante="LIDER DE UNIX"; //Variable que se debe traer de la base de datos y se pone de manera manual.
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('https://1.bp.blogspot.com/-nNS8P3RkkaM/YT5yRKlqa5I/AAAAAAAAAHE/cATU1oWOVOcE8r1RrfberpZ1haJ5vywvgCNcBGAsYHQ/s320/Logo.png',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'Certificado laboral con sueldo',0,0,'C');
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
//cuerpovar

$bod5=utf8_decode("Atentamente,");
$bod6=utf8_decode("$nameFirmante");
$bod7=utf8_decode("$cargoFirmante");

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->Cell(70);
$pdf->Cell(0,10,'UNIX STRONGEST S.A.S',0,1);
$pdf->Ln(1);
$pdf->Cell(78);
$pdf->Cell(0,50,'CERTIFICA QUE:',0,1);
$pdf->Ln(10);
$pdf->MultiCell(0,7,utf8_decode("El (la) Señor(a) $namePersonJob $lastNamePerJob, identificado(a) con CC No. $documento de BOGOTA D.C., está vinculad(a) a la compañía desde el día $fechaContrato con un contrato de trabajo a $tipoContrato. Actualmente se desempeña en el cargo de $cargoJobFun. Devengando un salario Básico de $ $jobsueldo El presente certificado se expide a solicitud del interesado(a) el 03 de marzo de 2022, en la ciudad de BOGOTA D.C"));
$pdf->Cell(0,90,$bod5,0,1,"L");
$pdf->Ln(3);
$pdf->Image('https://vapor-us-east-1-dev-uploads-1603425924.s3.amazonaws.com/sample/8fccc6014f64d1cadd296467befcb17a-Firma-8.png');
$pdf->Ln(5);
$pdf->Cell(0,1,$bod6,0,1,"L");
$pdf->Cell(0,7,$bod7,0,1,"L");

$pdf->Output();

?>