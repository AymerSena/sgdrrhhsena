<?php
require("sesionRRHH.php");
require("classphp/funciones.php");
$classFunciones= new funciones;
$idFun=$_GET["no"];
if (isset($_POST["guardar"])) {
    $runGuardar=$classFunciones->agregarFuncion($_POST["funcion"],$_POST["descrip"],$idFun);
}
if (isset($_POST["volver11"])) {
    header("Location: gestionFunciones.php?id=$idFun");
}
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
    <form action="" method="post">
        <label for="">Función:</label>
        <input type="text" name="funcion"><br>
        <label for="">Descripcion:</label>
        <textarea name="descrip" id="" cols="30" rows="10"></textarea>
        <button name="guardar">Guardar</button>
        <button name="volver11">Volver</button>
    </form>
    <?php
    include("pie.php");
    ?>
</body>
</html>