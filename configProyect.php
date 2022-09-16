<?php
include("sesionAdmin.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/plantillaConten.css">
    <title>Gestión sistema</title>
</head>

<body>
<?php
    include("cabecera.php");
?>
<div class="cuerpo">
<ul>
    <li>
        <a href="areasOrga.php">Gestión de las áreas de la organización</a>
    </li>
    <li>
        <a href="">Permisos a empleados</a>
    </li>
    <li>
        <a href="">Gestion de horarios</a>
    </li>
</ul>
</div>
<?php
    include("pie.php");
?>
</body>

</html>