<?php
require("sesionJefe.php");

require("sesionAdmin.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/disMenuInformes.css">
    <title>Menu informes</title>
</head>

<body>
    <div class="cuerpo">
        <div class="panelLeft">
            <nav>
                <ul>
                    <li><img src="https://1.bp.blogspot.com/-MeCxaLO8njU/YT5yRMu7KrI/AAAAAAAAAHI/NhoZIlmquMUWDoiVjAzF3nTF1WnwqRTSQCNcBGAsYHQ/s0/descarga.png" id="photoPer"></li>
                    <li> <img src="https://1.bp.blogspot.com/-EO10WM7B0Ig/YT5yOT5S7JI/AAAAAAAAAGw/FfqaAQ19Y709UTCC9jBUt7CW9pEv8_xjACNcBGAsYHQ/s0/IconoNotificaciones.png" id="photoNoti"></li>
                    <li><button>Gestion contraseña</button></li>
                    <li><button>Cerrar sesión</button></li>
                </ul>
            </nav>
        </div>
        <div class="titlePag">
            <h1>Menú de informes</h1>
        </div>
        <div class="container">
            <button class="buttonCont" onclick="location.href='informeNomina.php'">Nomina</button>
            <button class="buttonCont" onclick="location.href='vacaciInforme.php'">Informe de vacaciones</button>
            <button class="buttonCont" onclick="location.href='infoResulEvalua.php'">Resultados evaluativos</button>
            <button class="buttonCont" onclick="location.href='certi.php'">Certificados</button>
            <img src="https://1.bp.blogspot.com/-CRGFBvE8s8k/YT5yRhIEj8I/AAAAAAAAAHM/dplt4qgxJmcjfSP213rWRyF0EoW_BQlSACNcBGAsYHQ/s332/logoPag.png" id="logoUnix">
        </div>
    </div>
    <div class="foo">
        <footer>
            <h2>Pie de página va acá</h2>
        </footer>
    </div>
</body>

</html>