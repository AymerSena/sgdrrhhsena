<<<<<<< HEAD <?php
                include("sesionAdmin.php");
                require("conexionBD.php");

                ?> <!DOCTYPE html>
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
            <button class="rounded" name="consultaD"><span class="text-green">Consular funcionario</span></button>
        </form>
        <?php
        if (isset($_POST)) {
            $document = $_POST['docuChangPas'];
            $dataSelectArea = "SELECT * FROM tblusuario WHERE UsuCedula='$document'";
            $runAnsawers = $conexion->query($dataSelectArea);
            foreach ($runAnsawers as $row) {
        ?>
                <h3>El funcionario <?php echo $row['UsuNombre'], " ", $row['UsuApellido']; ?></h3>
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
            <button class="rounded" name="cambiarCon"><span class="text-green">Restablecer la contraseña</span></button>
        </form>
        }
        <?php
        include("pie.php");
        ?>
    </body>
    =======
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
        $dataSelectArea = "SELECT * FROM tblarea";
        $runAnsawers = $conexion->query($dataSelectArea);
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
            <button class="rounded" name="consul"><span class="text-green">Consultar funcionarios</span></button>
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
    >>>>>>> a45349979232ba91000f12d0a931ad6d8a47343d

    </html>