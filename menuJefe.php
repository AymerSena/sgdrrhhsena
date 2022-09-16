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
    <div class="cuerpo">
        <div class="container">
            <div id="Menu">
                <nav id="logonav">
                    <ul>
                        <button class="rounded">
                            <a href="">
                                <span class="text-green">Gestion de datos basicos</span>
                            </a>
                        </button>
                        <button class="rounded">
                            <a href="">

                                <span class="text-green">Gestion de ausencias</span>
                            </a>
                        </button>
                        <button class="rounded">
                            <a href="">
                                <span class="text-green">Documentos</span>
                            </a>
                        </button>
                        <button class="rounded">
                            <a href="">
                                <span class="text-green">Evaluaciones</span>
                            </a>
                        </button>
                    </ul>
                </nav>
            </div>
            <img src="https://1.bp.blogspot.com/-CRGFBvE8s8k/YT5yRhIEj8I/AAAAAAAAAHM/dplt4qgxJmcjfSP213rWRyF0EoW_BQlSACNcBGAsYHQ/s332/logoPag.png" id="logoUnix" />
        </div>
    </div>
    <?php
    include("pie.php");
    ?>
</body>

</html>