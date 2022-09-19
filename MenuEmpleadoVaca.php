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

        <div class="container">
    <div id="Menu">
        <nav id="Logos">
            <ul>
                <button>
                    <a href="NegociacionPeriodos.php">Nueva ausencia</a>
                </button>
                <button>
                    <a href="MenuEmpleadoVacaTabla.php">Historico de ausencias</a>
                </button>
                <button>
                    <a href="menuEmpleado.php">Volver al menú</a>
                </button>
                
            </ul>
        </nav>
    </div>
        </div>

<?php
    include("pie.php");
    ?>
</body>

</html>