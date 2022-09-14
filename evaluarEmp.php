<?php
include("sesionJefe.php");
require("classphp/evaluaciones.php");
require("classphp/criteriosEvaluativos.php");
require("classphp/usuarios.php");
$idJefe=$_SESSION["idUs"];
$classUsu = new usuario();
$obje = $classUsu -> consultOneUsuario($idJefe);
foreach ($obje as $row) {
    $area = $row["UsuForaArea"];


}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/plantillaConten.css">
    <title>Evaluar empleado</title>
</head>

<body>
<?php
    include("cabecera.php");
?>
   <form action="genEvalu.php" method="get">
    <label for="funcionario">Funcionario:</label>
    <select name="funcionario" id="">
        <?php
        $obje2 = $classUsu-> consultForAreasinjefe($area,$idJefe);
        foreach ($obje2 as $row) {
            echo "<option value=".$row["UsuCedula"].">".$row["UsuNombre"]." ".$row["UsuApellido"]."</option>";
        }
        ?>
    </select><br>
    <label for="evaluacion">Evaluacion:</label>
    <select name="evaluacion" id="">
        <?php
        $classEva = new evaluaciones();
        $objEva = $classEva->consultarPorArea($area);
        foreach ($objEva as $row) {
            echo "<option value=".$row["EvaCodigo"].">".$row["EvaNombre"]."</option>";
        }
        ?>
    </select><br>
    <button name="evaluar">Evaluar</button>
    
   </form>
   <button name="volver"><a href="menuJefe.php">Menú principal</a></button>
    <?php
    include("pie.php");
    ?>
</body>

</html>
