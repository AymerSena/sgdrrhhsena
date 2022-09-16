<?php
require("conexionBD.php");
$registroEle=$_GET["no"];
$sentSQL="DELETE FROM tblarea WHERE tblarea.AreCodigo = '$registroEle'";
$run=$conexion->query($sentSQL);
?>
<script>
    alert("Fue eliminada correctamente el área seleccionada.");
    window.location.href="areasOrga.php";
</script>
