<?php
session_start();
require("conexionBD.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unix Strongest</title>
</head>
<body>
<form method="POST" name="construirEvaluacion">
    <blockquote>
<label>Por favor ingrese el nombre de la evaluación: </label>
<br>
<input type="text"  name="nombre_Eval"  id="nombre_Eval" placeholder="Nombre de evaluación :" required>
<br>
<label>Por favor ingrese la descripción de la evaluación: </label>
<br>
<input type="text"  name="descrip_Eval"  id="descrip_Eval" placeholder="Descripción de evaluación :" required>
<br>
<br>
<input type="submit" name="Guardar" value="Guardar" id="Btn_Guardar">
<br>
</blockquote>
</form> 
<?php
  
if ($_POST) {

    $nombreE = $_POST['nombre_Eval'];
    $descriE = $_POST['descrip_Eval'];
    
    $sentInsertD= "INSERT INTO tblevaluaciones(EvaNombre,EvaDescripcion) VALUES ('$nombreE','$descriE')" ;
    $runInsert = $conexion ->query($sentInsertD);
    $searchEva="SELECT MAX(EvaCodigo) FROM tblevaluaciones;";
    $runSearEva=$conexion -> query($searchEva);
    $_SESSION["idEva"]= $runSearEva;
    echo $_SESSION["idEva"];
    include("crear_preguntas.php");
    //SELECT * FROM TABLE WHERE id = (SELECT MAX(id) FROM TABLE); 

    /*
    $sql3="SELECT * FROM tblevaluaciones;";
    $dd=$conexion ->query($sql3);
    foreach($dd as $ee){
        echo $ee["EvaNombre"];
        ?>
        <br>
        <?php
        echo $ee["EvaDescripcion"];
    }    # code...
    */
}
?>
</body>
</html>