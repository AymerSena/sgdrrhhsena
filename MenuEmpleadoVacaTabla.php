<?php

$conexion= mysqli_connect("localhost","root","","sgdrrhhbd");

?>
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

<br>
 <table border="3">
     <tr>
         <td>codigo</td>
         <td>tipo de ausencia</td>
         <td>fecha de inicio</td>
         <td>fecha de regreso </td>
         <td>fecha de solicitud</td>
         <td>estado</td>
         <td>usuario credencial</td>
         <td>días de solicitud</td>
         <td>documento</td>
            
     </tr>
<?php
$documento=$_SESSION["idUs"];
$querySql = "SELECT * FROM tblusuario WHERE UsuCedula=$documento";

$sql="SELECT * from `tblausencias` WHERE AusForUsuCed=$documento";
$result=mysqli_query($conexion,$sql);

while ($mostrar=mysqli_fetch_array($result)){ 
?>
     <tr>
         <td> <?php  echo $mostrar["AusCodigo"]?></td>
         <td> <?php  echo $mostrar["AusForTipAus"]?></td>
         <td> <?php  echo $mostrar["AusFechaInicio"]?></td>
         <td> <?php  echo $mostrar["AusFechaRegreso"]?></td>
         <td> <?php  echo $mostrar["AusFechaSolicitud"]?></td>
         <td> <?php  echo $mostrar["AusEstado"]?></td>
         <td> <?php  echo $mostrar["AusForUsuCed"] ?></td>
         <td> <?php  echo $mostrar["AusDiasSolici"] ?></td>
         <td> <?php  echo $mostrar["AusDocumen"] ?></td>
         
     </tr>

<?php 
 }
?> 






 </table>
    



</body>

</html>