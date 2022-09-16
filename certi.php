<?php
require("sesionCompartida.php");
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
    <div id="Menu">
        <ul>
            <li style="list-style: none;"><button class="rounded"><span class="text-green"><a href="certificadoConSueldo.php" target="_blank">Certificado laboral con sueldo.</a></span></button></li>
            <li style="list-style: none;"><button class="rounded"><span class="text-green"><a href="">Certificado laboral Embajadas</a></span></button></li>
            <li style="list-style: none;"><button class="rounded"><span class="text-green"><a href="certi_la_funcion.php" target="_blank">Certificado laboral Salario Promedio</a></span></button></li>
            <li style="list-style: none;"><button class="rounded"><span class="text-green"><a href="laboralFuncionesSueldo.php" target="_blank">Certificado laboral con sueldo y con funciones</a></span></button></li>
            <li style="list-style: none;"><button class="rounded"><span class="text-green"><a href="laboralFuncionesNSueldo.php" target="_blank">Certificado laboral sin sueldo y con funciones</a></span></button></li>
            <li style="list-style: none;"><button class="rounded"><span class="text-green"><a href="certificadoLabsinSuel.php" target="_blank">Certificado laboral sin sueldo</a></span></button></li>
            <li style="list-style: none;"><button class="rounded"><span class="text-green"><a href="">Carta descriptiva</a></li>
        </ul>
    </div>
    <?php
    include("pie.php");
    ?>
</body>

</html>