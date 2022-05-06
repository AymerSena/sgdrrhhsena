<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/plantillaConten.css">
    <title>Cambio de contraseña</title>
</head>

<body>
<?php
    session_start();
    include("cabecera.php");
?>
    <section id="cambiocontraseña">
        <h1>Cambio de contraseña</h1>
        <form method="POST">
            <input type="text" placeholder="Contraseña Actual" name="Contra"><br><br>
            <input type="text" placeholder="Nueva Contraseña" name="NuevaContrasena"><br><br>
            <input type="text" placeholder="Repetir nueva contraseña" name="RepetirNuevaContrasena"><br><br>
            <button id=boton type="submit" name="CambiarContrasena">Cambiar contraseña</button><br>
        </form>
    </section>
    <?php
    include("pie.php");
    ?>
</body>
<?php
require("conexionBD.php");
if (isset($_POST['CambiarContrasena'])) {

    require("Index.php");
    echo $docu;

    $contra = $_POST['Contra'];
    $npassword = $_POST['NuevaContrasena'];
    $rnpassword = $_POST['RepetirNuevaContrasena'];
    if (isset($_POST["ContraseñaActual"])) {
        if (isset($_POST["NuevaContraseña"])) {
            if (isset($_POST["RepetirNuevaContraseña"])) {
                $sql = "SELECT * FROM tblusuario WHERE UsuCedula='$docu'";
                $resulpassword = $conexion->query($sql);
                foreach ($resulpassword as $rows) {
                    if ($rows['UsuContrasenaSis'] == $contra) {
                        if ($npassword == $rnpassword) {
                            $updatepass = $conexion->query("UPDATE tblusuario SET UsuContrasenaSis=$npassword");
                            echo "Cambios realizados con exito";
                        }
                    }
                }
            }
        }
    }
}

?>

</html>