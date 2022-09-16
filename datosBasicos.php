<?php
require("sesionCompartida.php");
require("classphp/usuarios.php");
$idus = $_SESSION["idUs"];
$classusuario = new usuario();
$dataFunci = $classusuario->consultOneUsuario($idus);

foreach ($dataFunci as $row) {
    $name = $row["UsuNombre"];
    $lastname = $row["UsuApellido"];
    $gen = $row["UsuGenero"];
    $adress = $row["UsuDireccion"];
    $barrio = $row["UsuBarrio"];
    $mail = $row["UsuCorreo"];
    $phone = $row["UsuTelefono"];
    $dataBir = $row["UsuFechaNaci"];
    $groupSan = $row["UsuTIpoSangre"];
}

if (isset($_POST["buttonEnviar"])) {
    //datos recolectados del formulario
    $upNombre = $_POST["nombre"];
    $upApellido = $_POST["Apellido"];
    $upGenero = $_POST["Genero"];
    $upDireccion = $_POST["Direccion"];
    $upBarrio = $_POST["Barrio"];
    $upCorreo = $_POST["Correo"];
    $upTelefono = $_POST["Telefono"];
    $upFechaNac = $_POST["Fecha_naci"];
    $runUpdate = $classusuario->actualizarDataBasica($upNombre, $upApellido, $upGenero, $upDireccion, $upBarrio, $upCorreo, $upTelefono, $upFechaNac, $idus);

?>

    <script>
        alert("Actualiación exitosa");
    </script>
<?php
    header("Refresh:0");
}

if (isset($_POST["volver"])) {
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
        case 4:
            header("Location: menuRRHH.php");
            break;

        default:
            echo "No perfil";
            break;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/plantillaConten.css">
    <title>Datos basicos</title>
</head>

<body>
    <?php
    include("cabecera.php");
    ?>
    <br>
    <div id="form">
        <blockquote>

            <h3> DATOS BASICOS DEL EMPLEADO</h3>

            <form method="POST">
                <div class="columna3">
                    <label title="Nombre">Nombres</label>
                    <input type="text" size="40" name="nombre" id="nombre" value="<?php echo $name; ?>">

                </div>
                <div class="columna3">
                    <label title="Apellidos">Apellidos</label>
                    <input type="text" size="40" name="Apellido" id="Apellido" value="<?php echo $lastname; ?>">
                </div>
                <div class="columna3">

                    <label title="Genero">Genero</label>
                    <input type="text" size="1" name="Genero" id="Genero" value="<?php echo $gen; ?>">
                </div>
                <div class="columna3">
                    Direccion
                    <input type="text" size="40" name="Direccion" id="Direccion" value="<?php echo $adress; ?>">
                </div>
                <div class="columna3">
                    Barrio
                    <input type="text" size="40" name="Barrio" id="Barrio" value="<?php echo $barrio; ?>">
                </div>

                <div class="columna3">
                    Correo
                    <input type="email" size="40" name="Correo" id="Correo" value="<?php echo $mail; ?>">
                </div>
                <div class="columna3">
                    Telefono
                    <input type="text" size="15" name="Telefono" id="Telefono" value="<?php echo $phone; ?>">
                </div>

                <div class="columna3">
                    Fecha Nacimiento
                    <input type="Date" size="1" name="Fecha_naci" id="Fecha_naci" value="<?php echo $dataBir; ?>">
                </div>
    </div>

    <br>

    <div class="columna3">
        <button class="rounded" class="rounded" type="submit" name="buttonEnviar"><span class="text-green">Enviar</span></button>
        <button class="rounded" class="rounded" name="volver"><span class="text-green">Volver al menú</span></button>

    </div>
    </div>

    </form>
    </blockquote>
    </div>
    <?php
    include("pie.php");
    ?>
</body>

</html>