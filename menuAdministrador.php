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
        <h1 id="tit">¿Que deseas hacer?</h1>
        <nav id="logos">
            <ul>
                <li>
                    <a href="crearUsuario.php"><img class="logo" src="https://1.bp.blogspot.com/--_3Twc7jE_4/YT5yHKJ8sqI/AAAAAAAAAF0/ywykiJsi3yY8S1op1g-MyU8O072GJoeYACNcBGAsYHQ/s0/IconoAdmPerfiles.png"></a>
                </li>
                <li>
                    <a href="carge_documentos.php"><img class="logo" src="https://1.bp.blogspot.com/-pWbP6N_2-F0/YT5yIQZXEtI/AAAAAAAAAGA/n0-4cvp7gFYTvNkgiiwsFx1FQM-5hRWZACNcBGAsYHQ/s320/IconoCarDesArch.png"></a>
                </li>
                <li>
                    <a href=""><img class="logo" src="https://1.bp.blogspot.com/-yxwhRnbY8mQ/YT5yLdXGtOI/AAAAAAAAAGY/2MsyxUcL5uAVrLU0RpV2-lZvznBtNf4CgCNcBGAsYHQ/s320/IconoCrudDataSen.png"></a>
                </li>
                <li>
                    <a href="NegociacionPeriodos.php"><img class="logo" src="https://1.bp.blogspot.com/-CVbG8VMJUGg/YT5yP3LJHnI/AAAAAAAAAG8/oSqBcKNbMWcH6gM4eXFSKPc2TC3Mm0rJgCNcBGAsYHQ/s320/IconoSolicitarYConsuVa.png"></a>
                </li>
                <li>
                    <a href="datosBasicos.php"><img class="logo" src="https://1.bp.blogspot.com/-a5TanyEIRgk/YT5yHI4qFcI/AAAAAAAAAFs/mCLSeiyQ5RMHRy8tevTtSORRIaODcvaFQCNcBGAsYHQ/s320/IconoActualiData.png"></a>
                </li>
                <li>
                    <a href="menuInformes.php"><img class="logo" src="https://1.bp.blogspot.com/-zNm1SxTs37c/YT5yN-a4IwI/AAAAAAAAAGs/ya7hx4ayapcuP53sZUm-XyRiY27bjjnIACNcBGAsYHQ/s0/IconoInformes.png"></a>
                </li>
                <li>
                    <a href="certi.php">Generar certificados</a>
                </li>
                <li>
                    <a href="gestionPassword.php">Gestion de contraseñas empleados</a>
                </li>
                <li>
                    <a href="configProyect.php">Menú gestion del sistema</a>
                </li>
                
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