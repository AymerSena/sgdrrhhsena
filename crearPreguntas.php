<?php
require("classphp/criteriosEvaluativos.php");
require("sesionJefe.php");

if (isset($_POST["terminar"])) {
    header('location: gestionEvaluaciones.php');
}
if (isset($_POST["volverE"])) {
    header('location: gestionEvaluaciones.php');
}
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
            <input type="number" name="value"><br>
            <button class="rounded" name="campoMas"><span class="text-green">Agregar pregunta</span></button> <!-- Para agregar un campo mas -->
            <button class="rounded" name="terminar"><span class="text-green">Terminar y guardar</span></BUtton>
            <?php
            if (isset($_POST["campoMas"])) {
                $obje = new criteriosEvaluativos();
                $creado = $obje->crearPreguna($_POST["criPre"], $_POST["value"], $_SESSION["asoEva"]);
            }

            ?>
        </form>
        <table>

            <thead>
                <th>Criterio evaluativo</th>
                <th>Valor peso del criterio</th>
            </thead>
            <?php
            $dataCons = new criteriosEvaluativos();
            $dataGen = $dataCons->consultarAreaEva($_SESSION["asoEva"]);
            foreach ($dataGen as $row) {
                echo "<tr>";
                echo "<td>" . $row["CriPregunta"] . "<td>";
                echo "<td>" . $row["CriValorPreg"] . "<td>";
                echo "<td> <a href='modiCrite.php?no=" . $row["CriCodigo"] . " type= 'button' class='btnbtn-danger' >Modificar</button></a> </td>";
                echo "<td> <a href='elimiCri.php?no=" . $row["CriCodigo"] . " type= 'button' class='btnbtn-danger' >Eliminar</button></a> </td>";
            }

            ?>
        </table>
        <button class="rounded" name="volverE"><span class="text-green">Volver</span></button>
    </div>
    <?php
    include("pie.php");
    ?>
</body>

</html>