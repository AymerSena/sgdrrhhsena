<?php
require("sesionRRHH.php");
require("classphp/usuarios.php");
$idFuncio=$_GET["id"];
$classUsu= new usuario;
$dataFun=$classUsu->consultOneUsuario($idFuncio);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    foreach ($dataFun as $row ) {
        ?>
        <form action="" method="post">
        <label for="">Nombre</label>
        <input type="text" name="nombre" value="<?php echo $row["UsuNombre"];?>"><br>


    </form>    
    <?php
    }
    ?>
</body>
</html>