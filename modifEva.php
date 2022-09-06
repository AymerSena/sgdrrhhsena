<?php
require("sesionJefe.php");
require("classphp/evaluaciones.php");
require("conexionBD.php");

$idEva=$_GET["no"];
$doc=$_SESSION["idUs"];
$sentSql="SELECT UsuForaArea FROM tblusuario WHERE UsuCedula='$doc'";

if (isset($_POST["guardar"])) {
    $obje= new evaluaciones();
    $data= $obje->modificarEvaluacion($_POST["name"],$_POST["decripcion"],$idEva);
}
if (isset ($_POST["volver"])) {
    header("Location: gestionEvaluaciones.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Evaluación</title>
</head>
<body>
    <?php
    include("cabecera.php");
    ?>
    <div class="cuerpo">
        <form action="" method="post">
            <label for="name">Nombre evaluacion</label>
            <input type="text" name="name" value="<?php
            $obje1= new evaluaciones();
            $resul= $obje1->consultarPorId($idEva);
            $data1= $resul-> fetch_array();
            echo $data1[1];//Nombre de la evaluacion
            ?>"> <br>
            <label for="descripcion">Descrición de la evaluacion</label>
            <input type="textarea" name="decripcion" value="<?php
            echo $data1[2];
            ?>
            "><br>
            <button name="guardar">Guardar y cerrar</button>
            <button name="volver">Volver</button>
        </form>
    </div>
    <?php
    include("pie.php");
    ?>
</body>
</html>