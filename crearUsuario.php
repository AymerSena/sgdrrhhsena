<?php
require("sesionAdmin.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/disCrearU.css">
    <title>Plantilla para proyecto unix</title>
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
            <h1>Crear usuario en el sistema</h1>
        </div>
        <div class="container">
            <blockquote>
            <form action="" method="POST">
                <label for="">Documento de la persona</label><br>
                <input type="num" name="document"><br>
                <label for="">Nombres:</label><br>
                <input type="text" name="firstN"><br>
                <label for="">Apellidos:</label><br>
                <input type="text" name="lastN"><br>
                <label for="">Contraseña temporal:</label><br>
                <input type="text" name="contrasena"><br>
                <label for="">Perfil:</label>
                <select name="perfil" id="">
                    <option value="error">Seleccione</option>
                    <?php
                    require("conexionBD.php");
                    $consulta="SELECT * FROM tblperfiles";
                    $result=$conexion->query($consulta);
                    foreach($result as $row){
                        ?>
                        <option value="<?php echo $row['PerCodigo'];?>"><?php echo $row['PerTipo'];?></option>
                        <?php
                    }
                    ?>
                </select><br><br>
                <button name="enviar">Crear usuario</button>
                <button><a href="menuAdministrador.php">Volver al menú</a></button>
            </form>
            </blockquote>


            <img src="https://1.bp.blogspot.com/-CRGFBvE8s8k/YT5yRhIEj8I/AAAAAAAAAHM/dplt4qgxJmcjfSP213rWRyF0EoW_BQlSACNcBGAsYHQ/s332/logoPag.png" id="logoUnix">
        </div>
    </div>
    <div class="foo">
        <footer>
            <h2>Pie de página va acá</h2>
        </footer>
    </div>
<?php
if ($_POST) {
    $documentoP=$_POST["document"];
    $nombre=$_POST["firstN"];
    $apellido=$_POST["lastN"];
    $contrasenatmp=$_POST["contrasena"];
    $perfilas=$_POST["perfil"];

    $consulInsr="INSERT INTO tblusuario(UsuCedula,UsuNombre,UsuApellido,UsuContrasenaSis,UsuForaPerfil ) VALUES('$documentoP','$nombre','$apellido','$contrasenatmp','$perfilas')";
    $enviar=$conexion->query($consulInsr);
    echo "Se ha creado un nuevo usuario";
}
?>

</body>

</html>