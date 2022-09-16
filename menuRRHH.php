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
                <li>
                    <a href="">
                        <span class="logito">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="icontittle">Gestion de datos basicos</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="logito">
                            <ion-icon name="airplane-outline"></ion-icon>
                        </span>
                        <span class="icontittle">Gestion de ausencias</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="logito">
                            <ion-icon name="document-attach-outline"></ion-icon>
                        </span>
                        <span class="icontittle">Documentos</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="logito">
                            <ion-icon name="clipboard-outline"></ion-icon>
                        </span>
                        <span class="icontittle">Evaluaciones</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="logito">
                        <ion-icon name="stats-chart-outline"></ion-icon>
                        </span>
                        <span class="icontittle">Informes</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
        </div>
</div>
<?php
    include("pie.php");
    ?>
</body>

</html>