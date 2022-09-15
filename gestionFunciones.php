<?php
require("classphp/funciones.php");
require("sesionRRHH.php");
require("conexionBD.php");
$idFuncionario=$_GET["id"];
$classFunciones=new funciones;
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
     <h1>Gestion las funciones del empleado seleccionado</h1>
<table>
    <thead>
        <td>Función</td>
        <td>Descripcion</td>
        <td></td>
        <td><a href="agreFun.php?no=<?php echo $idFuncionario;?>">Agregar funcion</a></td>
    </thead>
    <?php
    
    $run=$classFunciones->consultarFuncionesPorfuncio($idFuncionario);
    foreach ($run as $row) {
        echo "<tr>";
        echo "<td>".$row["FunTitulo"]."</td>";
        echo "<td>".$row["FunDescripcion"]."</td>";
        echo "<td><a href=modifFun.php?doc=".$row["FunId"].">Modificar</a></td>";
        echo "<td><a href=elimiFun.php?doc=".$row["FunId"].">Eliminar</a></td>";    
    }
    ?>
</table>
<button><a href="menuDataSen.php">Volver</a></button>
<?php
include("pie.php");
?>
</body>
</html>