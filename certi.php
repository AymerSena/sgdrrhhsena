<?php
session_start();
require("conexionBD.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include("cabecera.php");
    ?>
    <h1>Pruebas de generar certificados</h1>
    <h2>Menú de certificados</h2>
    <div id="menu">
        <ul>
            <li><a href="certifica_la_sueldo1.php">Certificado laboral con sueldo.</a></li>
            <li><a href="">Certificado laboral Embajadas</a></li>
            <li><a href="certi_la_funcion.php">Certificado laboral Salario Promedio</a></li>
            <li><a href="certi_la_sueldo_funcion.php">Certificado laboral con sueldo y con funciones</a></li>
            <li><a href="">Certificado laboral sin sueldo y con funciones</a></li>
            <li><a href="">Certificado laboral sin sueldo</a></li>
            <li><a href="">Carta descriptiva</a></li>
        </ul>
    </div>
    <?php
    include("pie.php");
    ?>
</body>
</html>