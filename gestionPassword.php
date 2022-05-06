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
    $dataSelectArea="SELECT * FROM tblarea";
    $runAnsawers=$conexion -> query($dataSelectArea);
    ?>

    <form action="" method="post">
        <select name="area" id="">
            <option value="">seleccione área</option>
            <?php 
            foreach ($runAnsawers as $row) {
                ?>
                <option value="<?php echo $row["AreCodigo"]; ?>"><?php echo $row["AreNombre"]; ?></option>
                <?php
            }
            ?>                
        </select>
        <button name="consul">Consultar funcionarios</button>
    </form>
            <?php
            if ($_POST) {
                $idAR = $_POST["area"];
                switch ($idAR) {
                    case 1:
                        echo "<P> PRIMERA AREA </P> ";
                        break;
                    case 2:
                        echo "<P> SEGUNDA AREA </P> ";
                        break;
                    default:
                    echo "<P> cualquier otra </P> ";
                        break;
                }
            }
                
                
            ?>
    <?php
    include("pie.php");
    ?>
</body>
</html>