<?php
include("sesionAdmin.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/plantillaConten.css">
    <title>Menu Administrador</title>
</head>

<body>
<?php
    include("cabecera.php");
?>

        <nav id="logos">
                <button>
                    <a href="crearUsuario.php">Gestionar usuarios</a>
                </button>
                <button>
                    <a href="index_documento.php">Cargar documentos</a>
                </button>
                <button>
                    <a href="MenuAdministradorVaca.php">Gestion de ausencias</a>
                </button>
                <button>
                    <a href="datosBasicos.php">Actualizar datos basicos</a>
                </button>
                <button>
                    <a href="certi.php">Certificados laborales</a>
                </button>
                <button>
                    <a href="certi.php">Generar certificados</a>
                </button>
                <button>
                    <a href="areasOrga.php">Gestión de áreas</a>
                </button>
        </nav>
    <?php
    include("pie.php");
    ?>
</body>

</html>