<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/crear_evaluacion.css">
    <title>Crear evaluacion </title>
</head>

<body>
    <header id="encabezado">
        <a href=""><img id="logo-header" src="https://1.bp.blogspot.com/-CRGFBvE8s8k/YT5yRhIEj8I/AAAAAAAAAHM/dplt4qgxJmcjfSP213rWRyF0EoW_BQlSACNcBGAsYHQ/s320/logoPag.png"></a>
        <img id="foto_perfil" src="https://1.bp.blogspot.com/-MeCxaLO8njU/YT5yRMu7KrI/AAAAAAAAAHI/NhoZIlmquMUWDoiVjAzF3nTF1WnwqRTSQCNcBGAsYHQ/s0/descarga.png">
        <nav>
            <ul>
                <li>
                    <a href=""><img id="notificacion" src="https://1.bp.blogspot.com/-EO10WM7B0Ig/YT5yOT5S7JI/AAAAAAAAAGw/FfqaAQ19Y709UTCC9jBUt7CW9pEv8_xjACNcBGAsYHQ/s0/IconoNotificaciones.png"></a>
                </li>
                <li>
                    <a href="Index.php"><img id="cerrarSe" src="https://1.bp.blogspot.com/-BM03tlw4TH0/YT5yOxEwdoI/AAAAAAAAAG0/LneMrf5vRD0ooVH6n92poAdrIa8balaRACNcBGAsYHQ/s0/IconoSalir.png"></a>
                </li>
            </ul>
        </nav>
    </header>
    <br>
    <img id="foto_perfil" src="Iconos_imagenes/IconoAgregarPregunta.png" class="ubi1">

    <div id="presentacion">
        <form method="POST">
            <h3><label>CARGO.: </label></h3><label>_____________________________</label>
            <h3><label>NOMBRE.:</label></h3><label>_____________________________</label>
            <blockquote>
                <h4>
                    <br> Pregunta: <br>
                    <input type="text" size="50" name="preguntaN" id="pregunta1">
                    <br> Valor: <br>
                    <input type="text" size="50" name="Valor" id="pregunta2">
                    <br>
                    <input type="submit" name="boton" value="cargar" id="btngrabar">
            </blockquote>
        </form>
    </div>
<?php
require("conexionBD.php");//llama conexionBd
if(isset($_POST['boton'])){
    $lapregunta=$_POST['preguntaN'];
    $valorpre=$_POST['Valor'];
    $sql="INSERT INTO tblpreguntaseva values (null,'$lapregunta','$valorpre',null)";
    $resultado= $conexion->query($sql);
    echo $lapregunta. " ".$valorpre;
}

?>


</body>



</html>