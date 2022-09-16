<?php
require("classphp/contrasena.php");
$classPws = new contrasena();
$docuFun = $_GET["no"];

if (isset($_POST["run"])) {
    if ($_POST["contrNw"] = $_POST["contrNw2"]) {
        $pas = $classPws->actualizarPasword($_POST["contrNw"], $docuFun);
?>
        <script>
            alert("Fue cambiada la contraseña");
            window.location.href = "index.php";
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("las contraseñas no coinciden");
        </script>
<?php
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Index.css">
    <title>Login</title>
</head>

<body>
    <header id="encabezado">
        <img id="logo-header" src="https://1.bp.blogspot.com/-CRGFBvE8s8k/YT5yRhIEj8I/AAAAAAAAAHM/dplt4qgxJmcjfSP213rWRyF0EoW_BQlSACNcBGAsYHQ/s320/logoPag.png">
    </header>
    <section id="Login">
        <br>
        <form method="POST">
            <input type="text" placeholder="Nueva contraseña" name="contrNw"><br><br>
            <input type="password" placeholder="Repetir contraseña" name="contrNw2"><br><br>
            <button class="rounded" id="boton" type="submit" name="run">Iniciar sesión</button><br><br>
        </form>
    </section>
    <!--subido... linea de texto -->
</body>

</html>