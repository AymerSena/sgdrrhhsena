<?php
require("sesionRRHH.php");
require("classphp/usuarios.php");
require("classphp/areasorg.php");
$idFuncio=$_GET["id"];
$classArea= new areasorg();
$classUsu= new usuario();
$dataFun=$classUsu->consultOneUsuario($idFuncio);
if (isset($_POST["guardar"])) {
    $runData=$classUsu->actualizarDataSensi($idFuncio,$_POST["nombres"],$_POST["apellidos"],$_POST["cargo"],$_POST["genero"],$_POST["eps"],$_POST["telefono"],$_POST["barrio"],$_POST["direccion"],$_POST["nacimiento"],$_POST["expedicion"],$_POST["correo"],$_POST["rh"],$_POST["fechacontrato"],$_POST["nohijos"],$_POST["area"],$_POST["vacaciones"],$_POST["salario"]);
    header("Refresh:0");
}
if (isset($_POST["volver"])) {
    header("Location: menuDataSen.php");
}
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
    include("cabecera.php");
    ?>
    <?php
    foreach ($dataFun as $row ) {
        ?>
        <form action="" method="post">
        <label for="">Nombres: </label>
        <input type="text" name="nombres" value="<?php echo $row["UsuNombre"];?>"><br>

        
        <label for="">Apellidos: </label>
        <input type="text" name="apellidos" value="<?php echo $row["UsuApellido"];?>"><br>

        
        <label for="">Cargo: </label>
        <input type="text" name="cargo" value="<?php echo $row["UsuCargo"];?>"><br>

        
        <label for="">Genero</label>
        <input type="text" name="genero" value="<?php echo $row["UsuGenero"];?>"><br>

        
        <label for="">Eps: </label>
        <input type="text" name="eps" value="<?php echo $row["UsuEps"];?>"><br>

        
        <label for="">Telefono o celular: </label>
        <input type="text" name="telefono" value="<?php echo $row["UsuTelefono"];?>"><br>

        
        <label for="">Barrio de recidencia: </label>
        <input type="text" name="barrio" value="<?php echo $row["UsuBarrio"];?>"><br>

        
        <label for="">Dirección recidencia: </label>
        <input type="text" name="direccion" value="<?php echo $row["UsuDireccion"];?>"><br>

        <label for="">Fecha de nacimiento: </label>
        <input type="date" name="nacimiento" value="<?php echo $row["UsuFechaNaci"];?>"><br>

        
        <label for="">Fecha expedición de la cedula: </label>
        <input type="date" name="expedicion" value="<?php echo $row["UsuFechaExpCc"];?>"><br>

        
        <label for="">Correo email: </label>
        <input type="text" name="correo" value="<?php echo $row["UsuCorreo"];?>"><br>

        
        <label for="">Grupo sanguineo: </label>
        <input type="text" name="rh" value="<?php echo $row["UsuTIpoSangre"];?>"><br>

        
        <label for="">Fecha de contratación: </label>
        <input type="date" name="fechacontrato" value="<?php echo $row["UsuFechaContrato"];?>"><br>

        
        <label for="">No. hijos: </label>
        <input type="text" name="nohijos" value="<?php echo $row["UsuNoHijos"];?>"><br>

        <!-- el area -->
        <label for="">Area: </label>
        <select name="area" id="">
            <option value="<?php echo $row["UsuForaArea"]?>">
            <?php 
            $consultar = $classArea->consultarPorIdArea($row["UsuForaArea"]);
            $devolver = $consultar->fetch_array();
            echo $devolver[1];
            ?>
            </option>
            <?php
            $demasAre=$classArea->consultarAreas();
            foreach ($demasAre as $areas) {
                echo "<option value=".$areas["AreCodigo"].">".$areas["AreNombre"]."</option>";
            }

            ?>
        </select><br>

        
        <label for="">Días acumulados vacaciones: </label>
        <input type="text" name="vacaciones" value="<?php echo $row["UsuDiasAcuVacaci"];?>"><br>

        
        <label for="">Salario: </label>
        <input type="text" name="salario" value="<?php echo $row["UsuSalario"];?>"><br>

        <button name="guardar">Guardar cambios</button>
        <button name="volver">Volver</button>
    </form>    
    <?php
    }
    ?>
    <?php
    include("pie.php");
    ?>
</body>
</html>