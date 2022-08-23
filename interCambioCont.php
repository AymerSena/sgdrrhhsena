<?php
require("classphp/restPasword.php");
require("conexionBD.php");

$documento=$_POST["id"];
$celular=$_POST["number"];
$expedicion=$_POST["dataExp"];
$contrato=$_POST["dataCont"];

$sentenciaSQL="SELECT * FROM tblusuario WHERE UsuCedula=$documento";
$respuestaConsulta= $conexion -> query($sentenciaSQL);
$fila = $respuestaConsulta -> fetch_array();

if ($fila[0]==$documento) { // validar si el documento esta registrado
    $obj= new restPasword;
    $vistoBueno= $obj->validarContraseña($celular,$expedicion,$contrato,$documento);
    if ($vistoBueno==true) {
        $obj->cambioContra()
    }
}else{
    ?>
    <script type="text/javascript">
    alert("No se encontro documento registrado");
    window.location.href='restInterPasword.php';
</script>
    
    <?php
}


?>
