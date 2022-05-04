<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/disCer1.css">
    <title>Document</title>
</head>
<body>
    <?php
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

    ?>
    <div id="titulo">
        <h1>Certificado laboral con sueldo</h1>
    </div>
<div id="certificado">
<img src="https://1.bp.blogspot.com/-nNS8P3RkkaM/YT5yRKlqa5I/AAAAAAAAAHE/cATU1oWOVOcE8r1RrfberpZ1haJ5vywvgCNcBGAsYHQ/s320/Logo.png" alt="" name="logoEmpresaCer" id="logo">
<h2>UNIX STRONGEST S.A.S</h2>
<h2>CERTIFICA QUE:</h2> <br><br><br><br>
<blockquote>
<p>El (la) Señor(a) <?php echo $namePersonJob." ".$lastNamePerJob;?>, identificado(a) con CC No. <?php echo $documento?> de <br>
BOGOTA D.C., está vinculad(a) a la compañía desde el día <?php echo $fechaContrato;?>, con un <br>
contrato de trabajo a <?php echo $tipoContrato; ?>. Actualmente se desempeña en el cargo de <br>
<?php echo $cargoJobFun;?>. <br><br><br><br>
El presente certificado se expide a solicitud del interesado(a) el 03 de marzo de 2022, en la <br>
ciudad de BOGOTA D.C.. <br><br><br><br>
Atentamente,</p> <br><br><br>

<?php // Se debe generar la firma trayendola desde la base de datos, agregar el campo en la base de datos y el repositorio. ?>
<img src="https://vapor-us-east-1-dev-uploads-1603425924.s3.amazonaws.com/sample/8fccc6014f64d1cadd296467befcb17a-Firma-8.png" alt="" name="firm">
<p><?php echo $nameFirmante; ?><br>
<?php echo $cargoFirmante; ?></p>
</blockquote>
</div>
<input type='button' value='Imprimir' onClick='window.print(certificado)'; class='noimp'/>

<?php

?>
</body>
</html>