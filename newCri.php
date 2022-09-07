<?php
require("classphp/criteriosEvaluativos.php");
require("sesionJefe.php");
$evalID=$_GET["no"];

if (isset($_POST["guardar"])) {
    $cri=$_POST["criterio"];
    $val=$_POST["valor"];
    $obj = new criteriosEvaluativos();
    $res = $obj->crearPreguna($cri,$val,$evalID);
    header("Location: modifEva.php?no=$evalID");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Criterio</title>
</head>
<body>
<?php
require("cabecera.php");
?>
    <form action="" method="post">
        <label for="criterio">Criterio evaluativo:</label>
        <input type="text" name="criterio"> <br>
        <label for="valor">Valor o peso del criterio</label>
        <input type="number" name="valor"><br>
        <button name="guardar">Guardar pregunta y regresar</button>
    </form>
<?php
require("pie.php");
?>
</body>
</html>