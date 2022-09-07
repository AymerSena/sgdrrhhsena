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
    <title>Áreas</title>
</head>

<body>
<?php
    include("cabecera.php");
?>
<div class="cuerpo">

<h1>Áreas de la organización</h1>

<table style="margin: auto; width: 800px; border-collapse:separate; border-spacing: 10px 5px;">
    <thead>
      <th>Codigo área</th>
      <th>Área</th>
      <th>Descripcions</th>
      <th>Lider o director área</th>
       <th> <a href="crearArea.php"> <button type= "button" class="btn btn-info">Nuevo</button> </a> </th>


       <?php

$resultado = $conexion->query("SELECT * FROM tblarea");

if($resultado -> num_rows>0){
 //while($filas=mysql_fetch_assoc($resultado)) {
   while ($fila=$resultado->fetch_array())
{
  echo "<tr>";
echo "<td>"; echo $fila['AreCodigo']; echo "</td>";
echo "<td>"; echo $fila['AreNombre']; echo "</td>";
echo "<td>"; echo $fila[ 'AreDescripcion']; echo "</td>";
echo "<td>"; echo $fila[ 'AreLider']; echo "</td>";

echo "<td> <a href='modif_area.php?no=" .$fila['AreCodigo']."'> <button type= 'button' class= 'btnbtn-success'>Modificar</button> </a> </td>";
echo "<td> <a href='eliminarAre.php?no=" .$fila['AreCodigo']." type= 'button' class='btnbtn-danger' >Eliminar</button></a> </td>";
echo "</tr>";
}
}
?>
</table>
<button><a href="menuAdministrador.php">Volver al menú</a></button>
</div>
<?php
    include("pie.php");
?>
</body>

</html>