<?php
require("classphp/criteriosEvaluativos.php");
$idpregunta = $_GET["no"];
$obje= new criteriosEvaluativos();
$resultado = $obje->eliminarPregunId($idpregunta);
?>
<script>
    alert("Se elimino correctamente la pregunta");
    window.location.href="crearPreguntas.php";
</script>