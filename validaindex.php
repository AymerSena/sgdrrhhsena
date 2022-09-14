<?php
if (isset($_POST['Iniciarsesion'])) {
    $id = $_POST['id'];
    $passw = $_POST['passw'];
    session_start();
    $_SESSION["usuario"] = $_POST["id"];
    require("conexionBD.php");
    $consulta = "SELECT * FROM tblusuario WHERE UsuCedula='$id' AND UsuContrasenaSis='$passw'";
    $resulpassword = mysqli_query($conexion, $consulta);
    $filas = mysqli_fetch_array($resulpassword);
    if ($filas['UsuForaPerfil'] == 1) {
        header("location:madmin.php");
    } elseif ($filas['UsuForaPerfil'] == 2) {
        header("location:mjefe.php");
    } elseif ($filas['UsuForaPerfil'] == 3) {
        header("location:memple.php");
    } else {
?>
        <?php
        include("index.php");
        ?>
        <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
<?php
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);
}
?>