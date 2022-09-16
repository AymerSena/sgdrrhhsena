<?php
include("constaVari.php");
//require("sesionCompartida.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="CSS/template.css">
    <link rel="stylesheet" href="CSS/changepassw.css">
    <link rel="stylesheet" href="CSS/submenu.css">
    <link rel="stylesheet" href="CSS/menus.css">
    <link rel="stylesheet" href="CSS/css2/botones.css">
    <link rel="stylesheet" href="CSS/css2/formularios.css">
    <link rel="stylesheet" href="CSS/css2/tablas.css">
</head>
<body>
<?php
                    require("conexionBD.php");
                    $documentoFunLoguea=$_SESSION["idUs"];
                    $query=$conexion->query("SELECT * FROM tblusuario WHERE UsuCedula='$documentoFunLoguea'");
                    while ($row = $query->fetch_assoc()) {
                        $return = $row['UsuFotoPerfil'];
                    }
                    if ($return==NULL){
                        $return="https://1.bp.blogspot.com/-MeCxaLO8njU/YT5yRMu7KrI/AAAAAAAAAHI/NhoZIlmquMUWDoiVjAzF3nTF1WnwqRTSQCNcBGAsYHQ/s0/descarga.png";
                    }
                    // Capturar el nombre del usuario
                    $queryName="SELECT UsuNombre, UsuApellido FROM tblusuario WHERE usuCedula='$documentoFunLoguea'";
                    $resulName= $conexion -> query($queryName);
                    foreach ($resulName as $fila) {
                        $nombreUsu = $fila["UsuNombre"]." ".$fila["UsuApellido"];
                    }
                    ?>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <div class="photousu">
                       <img src="<?php echo $return;?>" alt="">
                    </div>
                    <span class="user_name"><?php echo $nombreUsu; ?></span>
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
                    <a href="datosBasicos.php">
                        <span class="icon">
                            <ion-icon name="person-outline"></ion-icon>
                        </span>
                        <span class="text">Datos Basicos</span>
                    </a>
                </li>
                <li>
                    <a href="index_documento.php">
                        <span class="icon">
                            <ion-icon name="document-attach-outline"></ion-icon>
                        </span>
                        <span class="text">Documentos</span>
                    </a>
                </li>
                <li>
                    <a href="submenuvacaciones.php">
                        <span class="icon">
                            <ion-icon name="airplane-outline"></ion-icon>
                        </span>
                        <span class="text">Gestion de ausencias</span>
                    </a>
                </li>
                <li>
                    <a href="submenuevalu.php">
                        <span class="icon">
                            <ion-icon name="clipboard-outline"></ion-icon>
                        </span>
                        <span class="text">Evaluaciones</span>
                    </a>
                </li>
                <li>
                    <a href="menuInformes.php">
                        <span class="icon">
                            <ion-icon name="stats-chart-outline"></ion-icon>
                        </span>
                        <span class="text">Informes</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $cambioContra ?>">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="text">Contraseña</span>
                    </a>
                </li>
                <li>
                    <a href="auxCierrLogin.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                            </ion-icon>
                        </span>
                        <span class="text" name="cierre">Cerrar Sesión</span>
                        
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
                    <?php
                    // session_start();
                    switch ($_SESSION["rol"]) {
                        case 1:
                            echo "<h1>Administrador</h1>";
                            break;
                        case 2;
                            echo "<h1>Lider</h1>";
                            break;
                        case 3;
                            echo "<h1>Colaborador</h1>";
                            break;

                        case 4;
                            echo "<h1>Recursos Humanos</h1>";
                            break;
                        default:
                            echo "Algo paso, por favor contacte al administrador del sistema error en codigo"; 
                            break;
                    }
                    ?>
                </div>
            </div>