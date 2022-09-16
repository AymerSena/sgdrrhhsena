<?php
include("sesionAdmin.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Modificar Producto</title>
    <style type="text/css">
    </style>
</head>

<body>
    <?php
    include("cabecera.php");
    ?>

    <?php
    $registroMod = $_GET["no"];
    $_SESSION["codArea"] = $registroMod;
    $senSQL = "SELECT * FROM tblarea WHERE AreCodigo=$registroMod";
    $runSent = $conexion->query($senSQL);
    $fila = $runSent->fetch_array(); // recorre las filas del registro

    // Para vincular al lider al área
    $senSQL2 = "SELECT * FROM tblusuario WHERE UsuForaArea=$registroMod";
    $runSql2 = $conexion->query($senSQL2);

    ?>

    <div class="cuerpo">
        <form action="modif_area2.php" method="post">
            <label for="area">Area:</label>
            <input type="texto" value="<?php echo $fila[1] ?>" name="area"> <br>
            <label for="descripcion">Descripcion:</label>
            <input type="texto" value="<?php echo $fila[2] ?>" name="descripcion"> <br> <br>
            <label for="lider">Lider o director</label>
            <select name="lider" id="">
                <?php
                foreach ($runSql2 as $row) {
                ?>
                    <option value="<?php echo $row["UsuCedula"]; ?>"><?php echo $row["UsuNombre"] . " " . $row["UsuApellido"]; ?></option>
                <?php
                }

                ?>

            </select>
            <button class="rounded" type="submit" name="submit">Guardar</button>
        </form>
        <button class="rounded"><a href="areasOrga.php">Volver</a></button>

    </div>

    <?php
    include("pie.php");
    ?>
</body>

</html>