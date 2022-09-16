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

       
        <nav id="Logos">
            <ul>
                <button>
                    <a href="datosBasicos.html">Actualización datos basicos</a>
                </button>
                <button>
                    <a href="index_documento.php">Carga de archivos</a>
                </button>
                <button>
                    <a href="MenuEmpleadoVaca.php">Gestion de ausencias</a>
                </button>
                <button>
                    <a href="certi.php">Certificados</a>
                </button>
            </ul>
        </nav>
 
<?php
    include("pie.php");
    ?>
</body>

</html>