<?php
require("sesionRRHH.php");
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

    <nav id="Logos">

        <button class="rounded">
            <span class="text-green"><a href="datosBasicos.html">Actualizar datos basicos</a></span>
        </button>
        <button class="rounded">
            <span class="text-green"><a href="menuRRHHVaca.php">Gestion de ausencias</a></span>
        </button>

        <button class="rounded">
            <span class="text-green"><a href="menuRRHHaAprobarVaca.php">Aprobación de vacaciones</a></span>
        </button>
        <button class="rounded">
            <span class="text-green"><a href="menuInformes.php">Certificados</a></span>
        </button>
        <button class="rounded">
            <span class="text-green"><a href="menuDataSen.php"><img class="logo">Gestion Datos funcionarios</a></span>
        </button>
        <button class="rounded">
            <span class="text-green"><a href="consultaDocumento.php"><img class="logo">Consultar documentos</a></span>
        </button>

    </nav>

    <?php
    include("pie.php");
    ?>
</body>

</html>