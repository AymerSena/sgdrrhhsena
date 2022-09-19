<?php
require("sesionJefe.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/plantillaConten.css">
    <title>Menu Jefe</title>
</head>

<body>
    <?php
    include("cabecera.php");
    ?>


    <button class="rounded">
        <span class="text-green"><a href="datosBasicos.php">
                Gestion de datos basicos
            </a></span>
    </button><br>
    <button class="rounded">
        <span class="text-green"><a href="menuJefeVaca.php">
                Gestion de ausencias
            </a></span>
    </button><br>
    <button class="rounded">
        <span class="text-green"><a href="index_documento.php">Documentos</a></span>
    </button><br>
    <button class="rounded">
        <span class="text-green"><a href="gestionEvaluaciones.php">
                Evaluaciones</a></span>
    </button><br>
    <button class="rounded">
        <span class="text-green"><a href="evaluarEmp.php">Evaluar colaboradores</a></span>
    </button><br>
    <button class="rounded">
        <span class="text-green"><a href="menuJefeVistosBuenos.php">Vistos buenos vacaciones</a></span>
    </button><br>



    <?php
    include("pie.php");
    ?>
</body>

</html>