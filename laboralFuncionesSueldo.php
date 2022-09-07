<?php

require('classphp/fpdf/fpdf.php');

    session_start();
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
    $this->Cell(30,10,'Certificado laboral con sueldo y funciones',0,0,'C');
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

$bod=utf8_decode("El (la) Señor(a) $namePersonJob $lastNamePerJob, identificado(a) con CC No. $documento de ");
$bod1=utf8_decode("BOGOTA D.C., está vinculad(a) a la compañía desde el día $fechaContrato con un");
$bod2=utf8_decode("contrato de trabajo a $tipoContrato. Actualmente se desempeña en el cargo de $cargoJobFun.");
$bod3=utf8_decode("El presente certificado se expide a solicitud del interesado(a) el 03 de marzo de 2022, en la");
$bod4=utf8_decode("ciudad de BOGOTA D.C.");
$bod5=utf8_decode("El funcionario tiene las siguientes funciones correspondientes al cargo.");
$bod6=utf8_decode("Atentamente,");
$bod7=utf8_decode("$nameFirmante");
$bod8=utf8_decode("$cargoFirmante");

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->Cell(70);
$pdf->Cell(0,10,'UNIX STRONGEST S.A.S',0,1);
$pdf->Ln(1);
$pdf->Cell(78);
$pdf->Cell(0,20,'CERTIFICA QUE:',0,1);
$pdf->Ln(10);
$pdf->MultiCell(0,5,utf8_decode("El (la) Señor(a) $namePersonJob $lastNamePerJob, identificado(a) con CC No. $documento de BOGOTA D.C., está vinculad(a) a la compañía desde el día $fechaContrato con un contrato de trabajo a $tipoContrato. Actualmente se desempeña en el cargo de $cargoJobFun. Develgando un salario Básico de $ $jobsueldo."));
$pdf->Ln(5);
$pdf->Cell(0,10,$bod5,0,1,"C");
$pdf->Ln(5);


// Consulta de funciones.
$sentenciaSQL="SELECT * FROM tblfuncionescar WHERE FunForUsuDocumen=$documento";
$runSentSql=$conexion-> query($sentenciaSQL);


foreach ($runSentSql as $key) {
    $pdf->Cell(0,11,utf8_decode($key['FunTitulo']),0,0,"L",0);
    $pdf->Ln();
    $pdf->MultiCell(0,5,utf8_decode($key['FunDescripcion']));
    $pdf->Ln();
}
$pdf->Ln(10);


$pdf->Image('https://vapor-us-east-1-dev-uploads-1603425924.s3.amazonaws.com/sample/8fccc6014f64d1cadd296467befcb17a-Firma-8.png');
$pdf->Ln(5);
$pdf->Cell(0,1,$bod6,0,1,"L");
$pdf->Cell(0,7,$bod7,0,1,"L");

$pdf->Output();

?>