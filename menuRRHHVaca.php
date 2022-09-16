<?php
require("sesionRRHH.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/plantillaConten.css">
    <title>Menu Recursos Humanos</title>
</head>

<body>
<?php
    include("cabecera.php");
?>
        <nav id="Logos">
            
                <button>
                    <a href="NegociacionPeriodos.php">Nueva ausencias</a>
                </button>
                <button>
                    <a href="MenuRRHHVacaTabla.php">Historico de ausencias</a>
                </button>
                <button>
                    <a href="menuRRHH.php">Volver al menú</a>
                </button>
            
        </nav>
<?php
    include("pie.php");
    ?>
</body>

</html>