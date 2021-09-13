<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/cambiocontraseña.css">
    <title>Cambio de contraseña</title>
</head>
<body>
    <header id="encabezado">
        <a href=""><img id="logo-header" src="https://1.bp.blogspot.com/-CRGFBvE8s8k/YT5yRhIEj8I/AAAAAAAAAHM/dplt4qgxJmcjfSP213rWRyF0EoW_BQlSACNcBGAsYHQ/s320/logoPag.png"></a>
        <img id="foto_perfil" src="https://1.bp.blogspot.com/-MeCxaLO8njU/YT5yRMu7KrI/AAAAAAAAAHI/NhoZIlmquMUWDoiVjAzF3nTF1WnwqRTSQCNcBGAsYHQ/s0/descarga.png">
        <nav>
            <ul>
                <li>
                    <a href=""><img class="logito" src="https://1.bp.blogspot.com/-EO10WM7B0Ig/YT5yOT5S7JI/AAAAAAAAAGw/FfqaAQ19Y709UTCC9jBUt7CW9pEv8_xjACNcBGAsYHQ/s0/IconoNotificaciones.png"></a>
                </li>
                <li>
                    <a href="index.html"><img class="logito" src="https://1.bp.blogspot.com/-BM03tlw4TH0/YT5yOxEwdoI/AAAAAAAAAG0/LneMrf5vRD0ooVH6n92poAdrIa8balaRACNcBGAsYHQ/s0/IconoSalir.png"></a>
                </li>
            </ul>
        </nav>
        <h3>  Nombre Apellido  </h3>
    </header>
    <section id="cambiocontraseña">
        <h1>Cambio de contraseña</h1>
        <form method="POST">
            <input type="text" placeholder="Contraseña Actual" name="ContraseñaActual"><br><br><br>
            <input type="text" placeholder="Nueva Contraseña" name="NuevaContraseña"><br><br><br>
            <input type="text" placeholder="Repetir nueva contraseña" name="RepetirNuevaContraseña"><br><br><br>
            <button type="submit" name="CambiarContraseña">Cambiar contraseña</button>
        </form>
    </section>
</body>
<?php 
$ContraseñaActual=$_POST['ContraseñaActual'];
$NuevaContraseña=$_POST['NuevaContraseña'];
$RepetirNuevaContraseña=$_POST['RepetirNuevaContraseña'];
echo "Contraseña fue cambiada con exito", $NuevaContraseña;
?>
</html>