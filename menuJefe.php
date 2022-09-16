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
    <title>Menu Jefe</title>
</head>

<body>
<?php
    include("cabecera.php");
?>

        
            <button>
                <a href="datosBasicos.php">
                    Gestion de datos basicos
                </a>
            </button><br>
            <button>
                <a href="menuJefeVaca.php">
                    Gestion de ausencias
                </a>
            </button><br>
            <button>
            <a href="index_documento.php">Documentos</a>
            </button><br>
            <button>
                <a href="gestionEvaluaciones.php">
                    Evaluaciones</a>
            </button><br>
            <button>
                <a href="evaluarEmp.php">Evaluar colaboradores</a>
            </button><br>
            <button>
                <a href="menuJefeVistosBuenos.php">Vistos buenos vacaciones</a>
            </button><br>
            
            

<?php
    include("pie.php");
    ?>
</body>

</html>