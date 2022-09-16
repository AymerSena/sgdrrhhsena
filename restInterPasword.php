<?php
require("classphp/restPasword.php");
require("classphp/usuarios.php");
$classPsw= new restPasword();
$classUsu= new usuario();

if (isset($_POST["validar"])) {
    $dataBrUsu = $classUsu -> consultOneUsuario($_POST["id"]);
    $idDoc=$_POST["id"];
    foreach ($dataBrUsu as $row) {
        $celularBD=$row["UsuTelefono"];
        $excedulaBD=$row["UsuFechaExpCc"];
        $datacontrBD=$row["UsuFechaContrato"];
    }
    if ($_POST["number"]=$celularBD and $_POST["dataExp"]=$excedulaBD and $_POST["dataCont"]=$datacontrBD) {
        header("Location: interCambioCont.php?no=$idDoc");
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
        <h1>Validación y restablecimiento de contraseña</h1>
    <form action="" method="post">
        <label for="documento">No. de documento registrado:</label>
        <input type="num" name="id"> <br>
        <label for="pregunta1" >No. celular registrado</label>
        <input type="num" name="number"><br>
        <label for="dataExp">Fecha de expedición del documento</label>
        <input type="data" name ="dataExp"> <br>
        <label for="dataCont">Fecha de contratación</label>
        <input type="data" name="dataCont"> <br>
        <Button name="validar">Validar información</Button>
    </form>
    </section>
    <!--subido... linea de texto -->
</body>
</html>