<?php
require("sesionJefe.php");
require("conexionBD.php");
$documento = $_SESSION["idUs"];
$querySql0 = "SELECT UsuForaArea FROM tblusuario WHERE UsuCedula='$documento'";
$result0 = mysqli_query($conexion, $querySql0);
foreach ($result0 as $row) {
    $idArea = $row["UsuForaArea"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/plantillaConten.css">
    <title>Menu jefe</title>
</head>

<body>
    <?php
    include("cabecera.php");
    ?>


    <?php

    //$conexion= mysqli_connect("localhost","root","","sgdrrhhbd");//

    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>La tabla</title>

    </head>

    <body>

        <br>

        <table border="3">
            <tr>
                <td>codigo</td>
                <td>tipo de ausencia</td>
                <td>fecha de inicio</td>
                <td>fecha de regreso </td>
                <td>fecha de solicitud</td>
                <td>estado</td>
                <td>usuario credencial</td>
                <td>días de solicitud</td>
                <td>documento</td>
                <td>Asignación</td>
            </tr>
            <?php

            $querySql = "SELECT UsuForaArea FROM `tblusuario` WHERE `UsuCedula`='$documento'";

            $result1 = $conexion->query($querySql);
            foreach ($result1 as $row) {
                $idArea1 = $row["UsuForaArea"];
            }
            $sql = "SELECT u.UsuForaArea,a.* FROM tblusuario u JOIN tblausencias a ON u.UsuCedula= a.AusForUsuCed WHERE u.UsuForaArea=$idArea1 AND AusEstado='Solicitado'";
            $result = mysqli_query($conexion, $sql);
            //$result=$conexion->query($sql);//


            while ($mostrar = mysqli_fetch_array($result)) {
                $idause = $mostrar["AusForTipAus"];
                $nombrSQL = "SELECT TipTipo FROM tbltiposausen WHERE TipID='$idause'";
                $run = $conexion->query($nombrSQL);
                $recorrer = $run->fetch_array();
            ?>

                <tr>
                    <td> <?php echo $mostrar["AusCodigo"] ?></td>
                    <td> <?php echo $recorrer[0]; ?></td>
                    <td> <?php echo $mostrar["AusFechaInicio"] ?></td>
                    <td> <?php echo $mostrar["AusFechaRegreso"] ?></td>
                    <td> <?php echo $mostrar["AusFechaSolicitud"] ?></td>
                    <td> <?php echo $mostrar["AusEstado"] ?></td>
                    <td> <?php echo $mostrar["AusForUsuCed"] ?></td>
                    <td> <?php echo $mostrar["AusDiasSolici"] ?></td>
                    <td> <?php echo $mostrar["AusDocumen"] ?></td>
                    <td><a href="vistoBueno.php?id=<?php echo $mostrar["AusCodigo"]; ?> "><button class="rounded">Gestionar</button></a></td>
                </tr>

            <?php
            }
            ?>
        </table>
        <button class="rounded"><a href="menuJefe.php">Menú principal</a></button>
        <?php

        include("pie.php");
        ?>
    </body>

    </html>