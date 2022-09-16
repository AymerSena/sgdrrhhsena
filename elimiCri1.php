<?php
require("classphp/criteriosEvaluativos.php");
require("classphp/evaluaciones.php");
$idpregunta = $_GET["no"];
$obje= new criteriosEvaluativos();
$obje2 = new evaluaciones();
$resEv= $obje -> consultarIdCri($idpregunta);
$eval= $resEv->fetch_array();
$guardar= $eval[3];
$resultado = $obje->eliminarPregunId($idpregunta);
header("Location: modifEva.php?no=$guardar");
?>