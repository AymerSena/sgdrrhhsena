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
    <title>Menu Administrador</title>
</head>

<body>
    <?php
    include("cabecera.php");
    ?>

    <nav id="logos">

        <button class="rounded">
            <span class="text-green"><a href="index_documento.php">Cargar documentos</a></span>
        </button>
        <button class="rounded">
            <span class="text-green"><a href="MenuAdministradorVaca.php">Gestion de ausencias</a></span>
        </button>
        <button class="rounded">
            <span class="text-green"><a href="datosBasicos.php">Actualizar datos basicos</a></span>
        </button>
        <button class="rounded">
            <span class="text-green"><a href="certi.php">Certificados laborales</a></span>
        </button>
        <button class="rounded">
            <span class="text-green"><a href="certi.php">Generar certificados</a></span>
        </button>
        <button class="rounded">
            <span class="text-green"><a href="areasOrga.php">Gestión de áreas</a></span>
        </button>
    </nav>
    <?php
    include("pie.php");
    ?>
</body>

</html>