<?php
require("sesionEmpleado.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/plantillaConten.css">
    <title>Menu Empleado</title>
</head>

<body>
    <?php
    include("cabecera.php");
    ?>


    <nav id="Logos">
        <ul>
            <button class="rounded">
                <span class="text-green"><a href="datosBasicos.html">Actualización datos basicos</a></span>
            </button>
            <button class="rounded">
                <span class="text-green"><a href="index_documento.php">Carga de archivos</a></span>
            </button>
            <button class="rounded">
                <span class="text-green"><a href="MenuEmpleadoVaca.php">Gestion de ausencias</a></span>
            </button>
            <button class="rounded">
                <span class="text-green"><a href="certi.php">Certificados</a></span>
            </button>
        </ul>
    </nav>

    <?php
    include("pie.php");
    ?>
</body>

</html>