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
    require("conexionBD.php");
    $documento=1110000001;
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
<p>El (la) Señor(a) <?php echo $namePersonJob;?>, identificado(a) con CC No. <?php echo $documento?> de <br>
BOGOTA D.C., está vinculad(a) a la compañía desde el día <?php echo $fechaContrato;?>, con un <br>
contrato de trabajo a <?php echo $tipoContrato; ?>. Actualmente se desempeña en el cargo de <br>
<?php echo $cargoJobFun;?>. <br><br><br><br>
El presente certificado se expide a solicitud del interesado(a) el 03 de marzo de 2022, en la <br>
ciudad de BOGOTA D.C.. <br><br><br><br>
<h2>El funcionario tiene las siguientes funciones correspondientes al cargo</h2>
<table id="tblfun">
    <tr>
        <th>FUNCIÓN</th>
        <th>DESCRIPCIÓN</th>
    </tr>
    
<?php
$query2SQL="SELECT * FROM tblfuncionescar WHERE FunForUsuDocumen=$documento";
$ruslts = $conexion ->query($query2SQL);
foreach($ruslts as $inte){
    ?>
    <tr>
        <td><?php echo $inte["FunTitulo"]?></td>
        <td><?php echo $inte["FunDescripcion"]?></td>
    </tr>
    <?php
}
?>
</table><br><br>
Atentamente,</p> <br><br><br>



<?php 
$querySS="SELECT * FROM tblfirmas WHERE firmaUsuDocu=1110000001";
$rel=$conexion->query($query2SQL);
while ($row = $rel->fetch_assoc()) {
    $return = $row['firmaUrl'];
}
if ($return==NULL){
    $return="https://1.bp.blogspot.com/-MeCxaLO8njU/YT5yRMu7KrI/AAAAAAAAAHI/NhoZIlmquMUWDoiVjAzF3nTF1WnwqRTSQCNcBGAsYHQ/s0/descarga.png";
}
?>
<img src="<?php echo $urlFim; ?>" alt="" name="firm">
<p><?php echo $nameFirmante; ?><br>
<?php echo $cargoFirmante; ?></p>
</blockquote>


</div>

<input type='button' value='Imprimir' onClick='window.print(certificado)'; class='noimp'/>

<?php

?>


</body>
</html>