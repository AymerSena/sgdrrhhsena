<?php
require("sesionAdmin.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/plantillaConten.css">
    <title>Plantilla para proyecto unix</title>
</head>

<body>
<?php
    include("cabecera.php");
?>
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
                </select><br>
                <label for="">Área</label>
                <select name="area" id="">
                    <option value="error">Seleccione</option>
                    <?php
                    require("conexionBD.php");
                    $consulta="SELECT * FROM tblarea";
                    $result=$conexion->query($consulta);
                    foreach($result as $row){
                        ?>
                        <option value="<?php echo $row['AreCodigo']; ?>"><?php echo $row['AreNombre'];?></option>
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
    <?php
    include("pie.php");
    ?>
<?php
if ($_POST) {
    $documentoP=$_POST["document"];
    $nombre=$_POST["firstN"];
    $apellido=$_POST["lastN"];
    $contrasenatmp=$_POST["contrasena"];
    $perfilas=$_POST["perfil"];
    $areaAsignado=$_POST["area"];

    $consulInsr="INSERT INTO tblusuario(UsuCedula,UsuNombre,UsuApellido,UsuContrasenaSis,UsuForaPerfil,UsuForaArea ) VALUES('$documentoP','$nombre','$apellido','$contrasenatmp','$perfilas','$areaAsignado')";
    $enviar=$conexion->query($consulInsr);
    echo "Se ha creado un nuevo usuario";
}
?>

</body>

</html>