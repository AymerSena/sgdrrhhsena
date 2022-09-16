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
            <button class="buttonCont" onclick="location.href='resEvaArea.php'">Resultados evaluativos</button>
            <button class="buttonCont" onclick="location.href='certi.php'">Certificados</button>
            <button class="buttonCont" onclick="location.href='menuJefe.php'">Volver al menú</button>
           
        </div>
    </div>
    <?php
    include("pie.php");
    ?>
</body>

</html>