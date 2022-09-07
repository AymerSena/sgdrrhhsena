<?php
<<<<<<< HEAD
session_start();
=======
>>>>>>> codaym
include("sesionCompartida.php");
require("conexionBD.php");
$idus = $_SESSION["idUs"];
$senQueryData="SELECT * FROM tblusuario WHERE UsuCedula=$idus";
$runQuery=$conexion->query($senQueryData);
foreach ($runQuery as $row ){
    $name=$row["UsuNombre"];
    $lastname=$row["UsuApellido"];
    $gen=$row["UsuGenero"];
    $adress=$row["UsuDireccion"];
    $barrio=$row["UsuBarrio"];
    $mail=$row["UsuCorreo"];
    $phone=$row["UsuTelefono"];
    $dataBir=$row["UsuFechaNaci"];
<<<<<<< HEAD
    $groupSan=$row["UsuTipoSangre"];
=======
    $groupSan=$row["UsuTIpoSangre"];
>>>>>>> codaym
   
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
<<<<<<< HEAD
session_start();
=======

>>>>>>> codaym
    include("cabecera.php");
?>
    <br>
    <div id="Menu">
        <blockquote>

            <h3> DATOS BASICOS DEL EMPLEADO</h3>

            <form  method="POST">
                <div class="columna3">
                    <label title="Nombre" style="width:40%; display: block;">Nombres</label>
                    <input type="text" size="40" name="nombre" id="nombre" value="<?php echo $name; ?>">

                </div>
                <div class="columna3">
                    <label title="Apellidos" style="width:40%; display: block;">Apellidos</label>
                    <input type="text" size="40" name="Apellido" id="Apellido" value="<?php echo $lastname; ?>">
                </div>
                <div class="columna3">

                    <label title="Genero" style="width:100%; display: block;">Genero</label>
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
                    Grup sanguineo
                    <input type="Grupo_sanguinio" size="3" name="Grupo_sanguinio" id="Grupo_sanguinio" value="<?php echo $groupSan; ?>">
                </div>
                
                <br>

                <div class="columna3">
                    <input type="submit" value="ENVIAR" name="buttonEnviar">
                    <button>LIMPIAR</button>
                    <input type="reset" value="LIMPIAR"></p>
                </div>
    </div>

    </form>
    </blockquote>
    </div>
    <?php
    
    if(isset($_POST["buttonEnviar"])){
        //datos recolectados del formulario
    $upNombre=$_POST["nombre"];
    $upApellido=$_POST["Apellido"];
    $upGenero=$_POST["Genero"];
    $upDireccion=$_POST["Direccion"];
    $upBarrio=$_POST["Barrio"];
    $upCorreo=$_POST["Correo"];
    $upTelefono=$_POST["Telefono"];
    $upFechaNac=$_POST["Fecha_naci"];
    $upGsanquineo=$_POST["Grupo_sanguinio"];
    
        /*$senUpdaData="UPDATE tblusuario SET UsuNombre = $upNombre,
        UsuApellido=$upApellido,
        UsuGenero=$upGenero,
        UsuDireccion=$upDireccion,
        UsuBarrio=$upBarrio,
        UsuCorreo=$upCorreo,
        UsuTelefono=$upTelefono,
        UsuFechaNaci=$upFechaNac,
        UsuTipoSangre=$upGsanquineo WHERE UsuCedula=$idus";
        */
        $senUpdaData="UPDATE tblusuario SET UsuNombre = $upNombre WHERE UsuCedula=$idus";
        $runUpdateData=$conexion->query($senUpdaData);
    }
    
    include("pie.php");
    ?>
</body>

</html>