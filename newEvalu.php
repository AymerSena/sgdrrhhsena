<?php
require("classphp/evaluaciones.php");
require("sesionJefe.php");
$area = $_GET["idAre"];
if (isset($_POST["guardar"])) {
    $planoOb = new evaluaciones();
    $obje = $planoOb->crearEvaluacion($_POST["nameEva"], $_POST["descrEva"], $area);
    $idReg = $obje->fetch_array();
    $_SESSION["asoEva"] = $idReg[0];
?>
    <script>
        alert("Se creo la evalución");
        window.location.href = "crearPreguntas.php";
    </script>
<?php
}
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
    <h1>Creación nueva evaluacion.</h1><br>
    <form action="" method="post">
        <label for="">Nombre de la evalución:</label>
        <input type="text" name="nameEva"><br>
        <label for="">Descripción de la evaluación:</label>
        <input type="text" name="descrEva"><br>
        <button class="rounded" name="guardar">Guardar</button>
    </form>
    <a href="gestionEvaluaciones.php">Volver</a>
    <?php
    include("pie.php");
    ?>
</body>

</html>