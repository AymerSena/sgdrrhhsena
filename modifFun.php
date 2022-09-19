<?php
require("sesionRRHH.php");
require("classphp/funciones.php");
$classFunciones= new funciones();
$idRegitros = $_GET["doc"];
if (isset($_POST["guardar"])) {
    $runAcu=$classFunciones->modificarFunciones($_POST["funci"],$_POST["descri"],$idRegitros);
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
    $dataRe=$classFunciones->consultarPorRegistro($idRegitros);
    $dataUni=$dataRe->fetch_array();
    ?>
    <div class="cuerpo">
        <form action="" method="post">
            <label for="">Funcion:</label>
            <input type="text" name="funci" value="<?php echo $dataUni[1]; ?>"><br>
            <label for="">Descripción:</label>
            <textarea name="descri" cols="30" rows="10"><?php echo $dataUni[2]; ?></textarea>
            <button name="guardar">Guardar</button>
            <button name="volver"><a href="gestionFunciones.php?id=<?php echo $dataUni[3];?>">Volver</a></button>
        </form>
    </div>
    <?php
    include("pie.php");
    ?>
</body>
</html>