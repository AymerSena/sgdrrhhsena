<?php include('Template/cabecera.php'); ?>
<section class="cambiocontraseña">
    <h1 class="tittlechangepassw">Cambio de contraseña</h1>
    <form method="POST">
        <input class="box" type="text" placeholder="Contraseña Actual" name="Contra"><br><br>
        <input class="box" type="text" placeholder="Nueva Contraseña" name="NuevaContrasena"><br><br>
        <input class="box" type="text" placeholder="Repetir nueva contraseña" name="RepetirNuevaContrasena"><br><br>
        <button class="rounded" id=boton type="submit" name="CambiarContrasena"><span class="text-green">Cambiar contraseña</span></button><br>
    </form>
</section>
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
include('Template/pie.php');
?>