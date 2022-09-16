<?php
include("sesionAdmin.php");
require("conexionBD.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Contraseñas Sistema</title>
</head>
<body>
    <?php
    include("cabecera.php");
    ?>

    <form action="" method="post">
        <label>Ingrese el documento del funcionario </label>
        <input type="num" name="docuChangPas">
        <button name="consultaD">Consular funcionario</button>
    </form>
    <?php
    if(isset($_POST)){
    $document=$_POST['docuChangPas'];
    $dataSelectArea="SELECT * FROM tblusuario WHERE UsuCedula='$document'";
    $runAnsawers=$conexion -> query($dataSelectArea);
    foreach($runAnsawers as $row){
        ?>
        <h3>El funcionario <?php echo $row['UsuNombre']," ",$row['UsuApellido']; ?></h3>
        <?php
    }
    }
    ?>
    <h3>Restablezca la contraseña</h3>
    <form method="post">
        <label>Ingrese la contraseña</label>
        <input name="con1" type="password">
        <label>Verifique la contraseña</label>
        <input name="con2" type="password">
        <button name="cambiarCon">Restablecer la contraseña</button>
    </form>
    }
    <?php
    include("pie.php");
    ?>
</body>
</html>