<?php
require("sesionRRHH.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/plantillaConten.css">
    <title>Menu aprobar RRHH</title>
</head>

<body>
<?php
    include("cabecera.php");
    require("conexionBD.php");
$valor = $_GET["id"];
$Variable1= "SELECT AusDiasSolici FROM tblausencias WHERE  AusCodigo=$valor;";

$resu= mysqli_query($conexion,$Variable1,);
while ($mostrar=mysqli_fetch_array($resu)){ 
    ?>
         <tr>
             <td> <?php  echo $mostrar["AusDiasSolici"]?></td>
             
            
             
         </tr>
    
    <?php
    $diassoli=$mostrar["AusDiasSolici"]; 
     }
     ?> 
      <?php 
     
     
     $Variable2= "SELECT `AusForUsuCed` FROM tblausencias WHERE AusCodigo=$valor;";
     $resul= mysqli_query($conexion,$Variable2,);
     while ($mostrar=mysqli_fetch_array($resul)){ 
        ?>
             <tr>
                 <td> <?php  echo $mostrar["AusForUsuCed"]?></td>

                 
                
                 
             </tr>
        
        <?php 
        $VariableEmer=$mostrar["AusForUsuCed"];
         }
         ?>
   <?php 
     
     
     $Variable3= "SELECT `UsuDiasAcuVacaci` FROM tblusuario WHERE UsuCedula=$VariableEmer";
     $resulx= mysqli_query($conexion,$Variable3,);
     while ($mostrar=mysqli_fetch_array($resulx)){ 
        ?>
             <tr>
                 <td> <?php  echo $mostrar["UsuDiasAcuVacaci"]?></td>

                 
                
                 
             </tr>
        
        <?php 
        $diasacus=$mostrar["UsuDiasAcuVacaci"];
       
         }
         ?>
   

<?php

$operator= $diasacus-$diassoli;
echo $operator;

if (isset($_POST["runEstado"])) {
    $estado=$_POST["estadoNew"];
    $senteciaSQL="UPDATE tblausencias SET AusEstado='$estado' WHERE AusCodigo=$valor;";
    $finaly= "UPDATE tblusuario SET UsuDiasAcuVacaci='$operator' WHERE UsuCedula= $VariableEmer;";
    $runComandSQL= $conexion->query($senteciaSQL);
    $runComandSQLx= $conexion->query($finaly);

   // header("Location: TablaDeVacaciones.php");//
}

?>



<?php
require("conexionBD.php");
$valor = $_GET["id"];
if (isset($_POST["runEstado"])) {
    $estado=$_POST["estadoNew"];
    $senteciaSQL="UPDATE tblausencias SET AusEstado='$estado' WHERE AusCodigo=$valor;";
    $runComandSQL= $conexion->query($senteciaSQL);
   ?>
   <script>
    alert("Fue cambiado exitosamente el registro");
    window.location.href="menuRRHHaAprobarVaca.php";
   </script>
   <?php
}

?>

<form action="" method="post">
    <label for="">Nuevo estado</label>
    <select name="estadoNew" id="">
        <option value="Aprobado">Aprobado</option>
        <option value="Denegado">Denegado</option>
    </select>
    <button name="runEstado">Aceptar</button>
    <button name="cacelar"><a href="menuRRHHaAprobarVaca.php">Cancelar</a></button>
</form>

<?php
    include("pie.php");
    ?>
</body>

</html>