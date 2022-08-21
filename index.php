<?php
require("conexionBD.php");  
require("constaVari.php");
session_start();

if (isset($_POST["iniciarSesion"])) {
    $idUser=$_POST["usuario"];
    $idPassword=$_POST["contrasena"];
    $sqlQueryDocu="SELECT * FROM tblusuario WHERE UsuCedula='$idUser'";
    $resuId=$conexion -> query($sqlQueryDocu);
    foreach ($resuId as $row){
        $_SESSION["idUs"]=$row["UsuCedula"];
        if ($row["UsuCedula"]>0) {
                if ($row["UsuContrasenaSis"]==$idPassword) {
                    $_SESSION["rol"]=$row["UsuForaPerfil"];
                    switch ($_SESSION["rol"]) {
                        case 1:
                            header("Location: menuAdministrador.php");
                            break;
                        case 2:
                            header("Location: menuJefe.php");
                            break;
                        case 3:
                            header("Location: menuEmpleado.php");
                            break;
    
                        default:
                            echo "No perfil";
                            break;
                    }
                }else{
                    ?>
                    <script>alert("Credenciales incorrectas por favor intentelo de nuevo.")</script>
                    <?php     
                }
        }else {
            ?>
            <script>alert("El usuario no fue encontrado en el sistema.")</script>
            <?php
        }
    }
}

if (isset($_POST["resContrasena"])) {
    header("Location: restInterPasword.php");
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
        <h1>Inicio de sesión</h1>
        <form method="POST">
            <input type="text" placeholder="Usuario" name="usuario"><br><br>
            <input type="password" placeholder="Contrasena" name="contrasena"><br><br>
            <button id="boton" type="submit" name="iniciarSesion">Iniciar sesión</button><br><br>
            <button id="boton1" type="submit" name="resContrasena">Restablecer contraseña</button><br><br>
        </form>
    </section>
    <!--subido... linea de texto -->
</body>
</html>