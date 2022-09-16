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
    <link rel="stylesheet" href="CSS/menus.css">
    <title>Menu Administrador</title>
</head>

<body>
    <?php
    include("cabecera.php");
    ?>
    <div class="cuerpo">
        <div class="container">
            <div id="Menu">
                <h1 id="title">¿Que deseas hacer?</h1>
                <nav id="logonav">
                    <ul>
                        <li>
                            <a href="">
                                <span class="logito">
                                    <ion-icon name="person-add-outline"></ion-icon>
                                </span>
                                <span class="icontittle">Gestion de usuarios</span>
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
                                    <ion-icon name="hand-right-outline"></ion-icon>
                                </span>
                                <span class="icontittle">Gestion de informacion sencible</span>
                            </a>
                        </li>
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