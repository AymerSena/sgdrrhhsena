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
    <title>Menu jefe</title>
</head>

<body>
<?php
    include("cabecera.php");
?>
<div class="cuerpo">
        <div class="container">
    <div id="Menu">
        <nav id="Logos">
            
                <button>
                    <a href="NegociacionPeriodos.php">Nueva ausencia</a>
                </button>
                <button>
                    <a href="MenuJefeVacaTabla.php">Historico de ausencias</a>
                </button>
                <button><a href="menuJefe.php">Volver al menú</a></button>
            
        </nav>
    </div>
        </div>
</div>
<?php
    include("pie.php");
    ?>
</body>

</html>