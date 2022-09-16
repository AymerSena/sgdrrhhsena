<?php
require("sesionEmpleado.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/plantillaConten.css">
    <title>Menu Empleado</title>
</head>

<body>
    <?php
    include("cabecera.php");
    ?>
    <div class="cuerpo">
        <div class="container">
            <div id="Menu">
                <nav id="logos">
                    <ul>
                        <button class="rounded">
                            <span class="text-green"><a href="datosBasicos.html">Actualizar datos</a></span>
                        </button>
                        <button class="rounded">
                            <span class="text-green"><a href="">Carga y descarga de documentos</a></span>
                        </button>
                        <button class="rounded">
                            <span class="text-green"><a href="MenuEmpleadoVaca.php">Gestion de vacaciones</a></span>
                        </button>
                        <button class="rounded">
                            <span class="text-green"><a href="moduloEvalucion.html">Realizar evaluaciones</a></span>
                        </button><br> <br>
                        <button class="rounded">
                            <span class="text-green"><a href="evaluarEmp.html">Evaluar Empleado</a></span>
                        </button>
                        <button class="rounded">
                            <span class="text-green"><a href="AprobarVacaciones.html">Aprobar evaluaciones</a></span>
                        </button>
                        <button class="rounded">
                            <span class="text-green"><a href="menuInformes.php">Informes</a></span>
                        </button>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <?php
    include("pie.php");
    ?>
</body>

</html>