<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="template.css">
    <link rel="stylesheet" href="template.css">
    <link rel="stylesheet" href="../CSS/changepassw.css">
    <link rel="stylesheet" href="../CSS/submenu.css">
</head>
<body>
<?php 
                    require("conexionBD.php");
                    $documentoFunLoguea=1110000001;/// Esta variable debe capturar quien se logueo por el momento se pone manual.
                    $query=$conexion->query("SELECT * FROM tblusuario WHERE UsuCedula='$documentoFunLoguea'");
                    while ($row = $query->fetch_assoc()) {
                        $return = $row['UsuFotoPerfil'];
                    }
                    if ($return==NULL){
                        $return="https://1.bp.blogspot.com/-MeCxaLO8njU/YT5yRMu7KrI/AAAAAAAAAHI/NhoZIlmquMUWDoiVjAzF3nTF1WnwqRTSQCNcBGAsYHQ/s0/descarga.png";
                    }
                    ?>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <div class="photousu">
                        <img src="<?php echo $return;?>" alt="">
                    </div>
                    <span class="user_name">User name</span>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="notifications-outline"></ion-icon>
                        </span>
                        <span class="text">Notificaciones</span>
                    </a>
                </li>
                <li>
                    <a href="../datosbasicos.php">
                        <span class="icon">
                            <ion-icon name="person-outline"></ion-icon>
                        </span>
                        <span class="text">Datos Basicos</span>
                    </a>
                </li>
                <li>
                    <a href="../submenucddocs.php">
                        <span class="icon">
                            <ion-icon name="document-attach-outline"></ion-icon>
                        </span>
                        <span class="text">Documentos</span>
                    </a>
                </li>
                <li>
                    <a href="../submenuvacaciones.php">
                        <span class="icon">
                            <ion-icon name="airplane-outline"></ion-icon>
                        </span>
                        <span class="text">Gestion de ausencias</span>
                    </a>
                </li>
                <li>
                    <a href="../submenuevalu.php">
                        <span class="icon">
                            <ion-icon name="clipboard-outline"></ion-icon>
                        </span>
                        <span class="text">Evaluaciones</span>
                    </a>
                </li>
                <li>
                    <a href="../submenuinfor.php">
                        <span class="icon">
                            <ion-icon name="stats-chart-outline"></ion-icon>
                        </span>
                        <span class="text">Informes</span>
                    </a>
                </li>
                <li>
                    <a href="../changepassw.php">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="text">Contraseña</span>
                    </a>
                </li>
                <li>
                    <a href="Index.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                            </ion-icon>
                        </span>
                        <form action="" method="$_POST">
                        <span class="text" name="cierre">Cerrar Sesión</span>
                        </form>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <div class="title">
                    <h1>Menu empleado</h1>
                </div>
            </div>