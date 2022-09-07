<?php
require("sesionJefe.php");
require("classphp/evaluaciones.php");
require("conexionBD.php");
$doc=$_SESSION["idUs"];
$sentSql="SELECT UsuForaArea FROM tblusuario WHERE UsuCedula='$doc'";

<<<<<<< HEAD
=======

>>>>>>> codaym
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de evaluaciones</title>
</head>
<body>
    <?php
    include("cabecera.php");
    ?>
    <div class="cuerpo">
<h1>Tabla de evaluaciones del area.</h1>

<!-- tabla de evaluaciones -->
<table>
<thead>
    <th>Nombre de la evaluación</th>
    <th>Descripción de la evaluación</th>
</thead>
<tr>   
<?php 
$resl=$conexion->query($sentSql);
$data=$resl->fetch_array(); // en la variable $data se guarda el codigo de área $data[0] = codigo de area
$obje = new evaluaciones();
$creadoOb= $obje->consultarPorArea($data[0]);
foreach ($creadoOb as $row) {
    echo "<td>". $row["EvaNombre"]."</td>"; 
    echo "<td>". $row["EvaDescripcion"]."</td>";
<<<<<<< HEAD
    echo "<td>"."Modificar"."</td>";
    echo "<td>"."Eliminar"."</td>";
=======
    echo "<td> <a href='modifEva.php?no=" .$row["EvaCodigo"]." type= 'button' class='btnbtn-danger' >Modificar</button></a> </td>";
    echo "<td> <a href='eliminarEvaluCri.php?no=" .$row["EvaCodigo"]." type= 'button' class='btnbtn-danger' >Eliminar</button></a> </td>";
>>>>>>> codaym
    echo "</tr>";
}
?>
</tr>
</table>
<<<<<<< HEAD
<br>
<button><a href="newEvalu.php?idAre=<?php echo $data[0];?>">Crear nueva evaluación</a></button>
=======
<button><a href="newEvalu.php?idAre=<?php echo $data[0];?>">Crear nueva evaluación</a></button>
<button><a href="menuJefe.php">Regresar al menú</a></button>
<br>

>>>>>>> codaym
    </div>
    <?php
    include("pie.php");
    ?>
</body>
</html>