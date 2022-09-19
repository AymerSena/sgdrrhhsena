<?php
require("classphp/resulEvaluativos.php");
require("classphp/evaluaciones.php");
$classResul = new resulEvalutivos();
$classEval = new evaluaciones();
$dataRes= $classEval -> consultarEvaluaciones();
$etiqueta = array()

?>