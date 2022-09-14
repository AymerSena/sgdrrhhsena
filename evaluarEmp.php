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
    <title>Evaluar empleado</title>
</head>

<body>
<?php
    include("cabecera.php");
?>
    <br>
    <div id="presentacion">
        <form action="evaluar_empleado.php" method="POST">
            <h3><label>Ingrese el documento del empleado a evaluar.:</label></h3>
            <input type='text' name='documentoEvaEm' style='width:300px;' /><br>
            <blockquote>
                <h4>
                    <p>Acá ira la primera pregunta</p>
                </h4>
                <select name="pregunta1" id="respuestas" style='width:100px'>
                    <option value="1">N/A</option>
                    <option value="2">SI</option>
                    <option value="3">NO</option>
                </select>
                <h4>
                    <p>Acá ira la segunda pregunta</p>
                </h4>

                <select name="pregunta2" id="respuestas1" style='width:100px'>
                    <option value="1">N/A</option>
                    <option value="2">SI</option>
                    <option value="3">NO</option>
                </select>
                <h4>
                    <p>Acá ira la tercera pregunta</p>
                </h4>
                <select name="pregunta3" id="respuestas2" style='width:100px'>
                    <option value="1">N/A</option>
                    <option value="2">SI</option>
                    <option value="3">NO</option>
                </select>
                <br>
                <input type="submit" name="botonenvio" value="Enviar Respuestas" id="botonEN">
            </blockquote>
        </form>
    </div>
    <?php
    include("pie.php");
    ?>
</body>

</html>