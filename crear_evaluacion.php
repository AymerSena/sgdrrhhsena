<?php
require("sesionJefe.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/plantillaConten.css">
    <title>Unix Strongest</title>
</head>
<body>
<?php
    include("cabecera.php");
?>
<form action="" method="POST">
    <blockquote>
<label>Por favor ingrese el nombre de la evaluación: </label>
<br>
<input type="text"  name="Nombre_Eval"  id="Nombre_Eval" placeholder="Nombre de evaluación" required>
<br>
<label>Por favor ingrese la descripción de la evaluación: </label>
<br>
<input type="text"  name="Descrip_Eval"  id="Descrip_Eval" placeholder="Descripción de evaluación" required>
<br>
<br>
<input type="submit" name="Guardar" value="Guardar" id="Btn_Guardar">
<br>
</blockquote>
</form> 
<?php

require("conexionBD.php");
if ($_POST) {
    
    $Nombre_Eval = $_POST['Nombre_Eval'];
    $Descrip_Eval = $_POST['Descrip_Eval'];

    //echo "Conexion exitosa";
 $sql = "INSERT INTO tblevaluaciones (EvaNombre, EvaDescripcion) VALUES ('$Nombre_Eval','$Descrip_Eval')";
 $otra=$conexion->query($sql);

 header("Location: crear_preguntas.php");

}
?>
<?php
    include("pie.php");
    ?>
</body>
</html>