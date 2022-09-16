<?php
require("sesionRRHH.php");
require("classphp/funciones.php");
$classFunciones = new funciones();
$idRegistro = $_GET["doc"];
$dataF=$classFunciones->consultarPorRegistro($idRegistro);
$funcionario=$dataF->fetch_array();
$idFuncio=$funcionario[3];
$runElimin=$classFunciones->eliminarFuncion($idRegistro);
header("Location: gestionFunciones.php?id=$idFuncio");
?>
