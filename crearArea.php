<?php
require("sesionAdmin.php");
require("classphp/areasorg.php");
if (isset($_POST["save"])) {
    $instanciar = new areasorg();
    $creaObej = $instanciar->crear($_POST["nameAre"], $_POST["docResp"], $_POST["descAre"],); 
}
if (isset($_POST["volver"])) {
    ?>
    <script>
        windows.location.href="areasOrga.php";
    </script>
    <?php
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Área</title>
</head>
<body>
    <?php
    include("cabecera.php");
    ?>
    <div class="cuerpo">
        <form action="" method="post">
            <label for="">Ingrese el nombre de la nueva área</label>
            <input type="text" name="nameAre"><br><br>
            <label for="">Ingrese el documento del lider de la nueva área</label>
            <input type="number" name="docResp"><br><br>
            <label for="">Ingrese por favor descripción del área</label>
            <input type="text" name="descAre"><br><br>
            <button name="save">Guardar</button>
            <button name="volver">Volver al menú</button>
        </form>

    </div>

    <?php
    include("pie.php");
    ?>
</body>
</html>