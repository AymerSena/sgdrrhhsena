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
        <form action="validaindex.php" method="POST">
            <input type="text" placeholder="ID" name="id" required="true"><br><br>
            <input type="password" placeholder="Password" name="passw" required="true"><br><br>
            <button id="boton" type="submit" name="Iniciarsesion">Iniciar sesión</button><br><br>
            <button id="boton1" type="submit" name="respassword">Restablecer contraseña</button><br><br>
        </form>
    </section>
</body>

</html>