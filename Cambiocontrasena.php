<?php
require("sesionCompartida.php");
require("classphp/contrasena.php");
$documenFuncio=$_SESSION["idUs"];
$classContra = new contrasena;
?>
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
    include("cabecera.php");
?>
    <section id="cambiocontraseña">
        <h1>Cambio de contraseña</h1>
        <form method="POST">
            <input type="password" placeholder="Contraseña Actual" name="Contra"><br><br>
            <input type="password" placeholder="Nueva Contraseña" name="nuevaContrasena"><br><br>
            <input type="password" placeholder="Repetir nueva contraseña" name="repetirNuevaContrasena"><br><br>
            <button id=boton type="submit" name="cambiarContrasena">Cambiar contraseña</button><br>
        </form>
    </section>
    <?php
    include("pie.php");
    ?>
</body>
<?php
require("conexionBD.php");
if (isset($_POST['cambiarContrasena'])) {
    $bpswActual=$classContra->consulPasword($documenFuncio);
    $pswActual=$bpswActual->fetch_array();
    $formpswActual=$_POST["Contra"];
    $formpswNew=$_POST["nuevaContrasena"];
    $formpswRNew=$_POST["repetirNuevaContrasena"];
    if ($pswActual[0]=$formpswActual) {
        if ($formpswNew=$formpswRNew) {
            $runActualizar=$classContra->actualizarPasword($formpswNew,$documenFuncio);
            ?>
            <script>
                alert("Se cambio la contraseña de manera correcta");
                window.location.href="auxCierrLogin.php";
            </script>
            <?php
        }else {
            ?>
            <script>
                alert("No coinciden las contraseñas ingresadas");
            </script>
            <?php
        }
    }else {
        ?>
            <script>
                alert("La contraseña actual ingresada no es correcta");
            </script>
            <?php
    }
}

?>

</html>