<?php
require("classphp/evaluaciones.php");
$idEva=$_GET["no"];
$obj = new evaluaciones();
$runProces= $obj->eleminarEvaYCri($idEva);
?>
<script>
    alert("Fue eliminada la evaluacion con sus criterios");
    window.location.href="gestionEvaluaciones.php";
</script>