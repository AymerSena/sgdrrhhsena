<?php
session_start();
$codarea=$_SESSION["codArea"];
ModificarProducto($_POST['area'],$_POST['descripcion'],$_POST["lider"],$codarea);

function ModificarProducto($nom, $descrip,$lider,$no)
{
    require("conexionBD.php");
    $resultado = $conexion->query("UPDATE tblarea SET AreNombre='$nom', AreDescripcion='$descrip', AreLider='$lider' WHERE AreCodigo='$no'");
}
?>


<script type="text/javascript">
    alert("Producto Modificado exitosamente");
    window.location.href='areasOrga.php';
</script>