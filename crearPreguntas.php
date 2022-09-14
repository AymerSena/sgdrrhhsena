<?php
require("sesionJefe.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preguntas</title>
</head>
<body>
    <?php
    include("cabecera.php");
    ?>
<div class="cuerpo">
    <h1>Creación de los criterios correspondientes a la evaluación</h1>
   <form action="" method="post">
    <label for="">Criterio evaluativo:</label>
    <input type="text" name="criPre"><br>
    <label for="">Peso o valor del criterio:</label>
    <input type="number" name="value"><br>x|
    <button name="campoMas">Agregar pregunta</button> <!-- Para agregar un campo mas -->
    <Button name="terminar">Terminar y guardar</BUtton>   
    <?php
    if (isset($_POST["campoMas"])) {
        $obje = new criteriosEvaluativos();
        $creado = $obje->crearPreguna($_POST["criPre"],$_POST["value"],$_SESSION["asoEva"]);
    }
    ?>
   </form>
<?php
include("tablaCreacionPreg.php");
?>




</div>
    <?php
    include("pie.php");
    ?>
</body>
</html>