<?php
include("sesionJefe.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/plantillaConten.css">
    <title>Informe</title>
</head>

<body>
<?php
    include("cabecera.php");
?>
    <div id="Post">

        <h1 id="varNomEm">Nombre del funcionario</h1>
        <h5 id="varCarFun">Cargo del funcionario</h5><br>
        <h1>Informe de rendimiento en aspectos evaluativos.</h1>
        <form action="InformeRendi1.php" method="POST">
            <label for="empleado">Empleando</label>
            <select name="ftl_empl" id="filtros">
                <option value="Seleccione">Seleccione</option>
                <option value="Pepito Perez">Pepito Perez</option>
                <option value="Mara Sandoval">Mara Sandoval</option>
            </select>
            <label for="empleado">Evaluación</label>
            <select name="ftl_eval" id="filtros">
                <option value="Seleccione">Seleccione</option>
                <option value="Evaluacion1">Evaluacion1</option>
                <option value="Evaluacion2">Evaluacion2</option>
            </select>
            <label for="inicioCalendario">Fecha incio</label>
            <input type="date" name="ini_cal">
            <label for="finCalendario">Fecha fin</label>
            <input type="date" name="fin_cal"><br>
            <table id="tablaResu" border="1">
                <tr>
                    <td>Empleado</td>
                    <td>Pregunta1</td>
                    <td>Pregunta2</td>
                    <td>Pregunta3</td>
                    <td>Resultado</td>
                </tr>
                <tr>
                    <td>Pepito Perez</td>
                    <td>Si</td>
                    <td>No</td>
                    <td>Si</td>
                    <td>75</td>
                </tr>
                <tr>
                    <td>Mara Sandoval</td>
                    <td>No</td>
                    <td>No</td>
                    <td>No</td>
                    <td>0</td>
                </tr>
            </table>
            <br>
            <input type="submit" value="Consultar" id="botonEN">
            <input type="submit" value="Imprimir" id="botonEN">
        </form>
    </div>
    <?php
    include("pie.php");
    ?>
</body>

</html>