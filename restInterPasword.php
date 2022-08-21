<?php
require("classphp/restPasword.php");
require("conexionBD.php");

if (isset($_POST["validar"]) {
    $sentSQL = "SELECT Usu"
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resetear contraseña</title>
</head>
<body>
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
</body>
</html>