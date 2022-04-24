<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/plantillaConten.css">
    <title>Menu informes</title>
</head>

<body>
<?php
    include("cabecera.php");
?>
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
    <?php
    include("pie.php");
    ?>
</body>

</html>