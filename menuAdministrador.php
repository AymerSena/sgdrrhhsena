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
    <div class="cuerpo">
        <div class="container">
            <div id="Menu">
                <nav id="logos">
                    <ul>
                        <button class="rounded">
                            <span class="text-green"><a href="crearUsuario.php">Administracion de perfiles</a></span>
                        </button>
                        <button class="rounded">
                            <span class="text-green"><a href="carge_documentos.php">Cargar y descargar documentos</a></span>
                        </button>
                        <button class="rounded">
                            <span class="text-green"><a href="">CRUD Datos sencibles</a></span>
                        </button>
                        <button class="rounded">
                            <span class="text-green"><a href="MenuAdministradorVaca.php">Solicitar y consultar vacaciones</a></span>
                        </button>
                        <button class="rounded">
                            <span class="text-green"><a href="datosBasicos.php">Actualizar datos</a></span>
                        </button>
                        <button class="rounded">
                            <span class="text-green"><a href="menuInformes.php">Informes</a></span>
                        </button>
                        <button class="rounded">
                            <span class="text-green"><a href="certi.php">Generar certificados</a></span>
                        </button>
                        <button class="rounded">
                            <span class="text-green"><a href="areasOrga.php">Gestión de áreas</a></span>
                        </button>

                    </ul>
                </nav>
                <img src="https://1.bp.blogspot.com/-CRGFBvE8s8k/YT5yRhIEj8I/AAAAAAAAAHM/dplt4qgxJmcjfSP213rWRyF0EoW_BQlSACNcBGAsYHQ/s332/logoPag.png" id="logoUnix">
            </div>
        </div>
    </div>
    <?php
    include("pie.php");
    ?>
</body>

</html>