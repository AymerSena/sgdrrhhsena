<?php
require("sesionCompartida.php");
$conexion= mysqli_connect("localhost","root","","sgdrrhhbd");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La tabla</title>

</head>
<body>

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
         <td>Asignación</td>    
     </tr>
<?php


$sql="SELECT * from `tblausencias` WHERE AusEstado='Solicitado'";
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
         <td><a href="vistoBueno.php?id=<?php echo $mostrar["AusCodigo"];?> "><button>Gestionar</button></a></td>
     </tr>

<?php 
 }
?> 






 </table>
    



</body>
</html>