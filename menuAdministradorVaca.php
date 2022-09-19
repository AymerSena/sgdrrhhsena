<?php
require("sesionAdmin.php");
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
        
        
         
                <button>
                    <a href="NegociacionPeriodos.php">Pedir ausencias</a>
                </button>
                <button>
                    <a href="MenuAdministradorVacaTabla.php">Ver historial de ausencias</a>
                </button>
                <button><a href="menuAdministrador.php">Volver al menú</a></button>
        
        
    </div>
        </div>
</div>
<?php
    include("pie.php");
    ?>
</body>

</html>