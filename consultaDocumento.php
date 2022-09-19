<?php
//require("sesionJefe.php");
require("classphp/documentos.php");
session_start();
$_SESSION["idUs"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
<style>
</style>
</head>
<body>
    <?php
    include("cabecera.php");
    ?>
<form action="" method="post">
    <label for="documento">Escriba el documento:</label>
    <input required=""type="number" name="documento" id="" >
    <button name="ejecutar">Consultar</button>
</form>
      <?php
    if (isset($_POST["ejecutar"])) {
        ?>
   
<table class="table">
  <thead>
    <tr>
      <th width="9%">No. Documento</th>
      <th width="9%">Tipo de Documento</th>
      <th width="15%">Descripción</th>
      <th width="20%">Adjunto</th>
      <th width="10%">Descargar</th>
      <th width="10%">Eliminar</th>
    </tr>
  </thead>
  <tbody>
     
 <?php
                
                $clase= new documentos();
                $obj= $clase->consultarDocumento($_POST["documento"]);
                                 
                foreach ($obj as $row) {
                    echo "<tr>";
                    echo "<td>".$row["DocForUsuario"]."</td>";
                    echo "<td>".$row["DocTipo"]."</td>";
                    echo "<td>".$row["DocDescripcion"]."</td>";
                    echo "<td>".$row["DocAdjunto"]."</td>";
                    ?>
                    <td><a title="Descargar Archivo" href="Documentos/<?php echo $_POST["documento"]."/".$archivos[$i]; ?>" download="<?php echo $archivos[$i]; ?>" style="color:blue;font-weight:bold">Descargar<span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> </a></td>
        <td><a title="Eliminar Archivo" href="Eliminar_documento.php?name=Documentos/<?php echo $_POST["documento"].'/'.$archivos[$i]; ?>" style="color: red; font-size:18px;" onclick="return confirm('Esta seguro de eliminar el archivo?');"> <span class="glyphicon glyphicon-trash" aria-hidden="true">Eliminar</span> </a></td>
                    <?php
                    echo "</tr>";
                   }
                }
        ?>
                   </table>      
  
                   
 <a href="<?php
switch ($_SESSION["rol"]) {
                        case 1:
                            echo "menuAdministrador.php";
                            break;
                        case 2:
                            echo"menuJefe.php";
                            break;
                        case 3:
                            echo"menuEmpleado.php";
                            break;
                        case 4:
                            echo"menuRRHH.php";
                            break;
                        }
                            ?>"  >Ir al menu</a>
                                
<?php
    include("pie.php");
?>
</body>
</html>