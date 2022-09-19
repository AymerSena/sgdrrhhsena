<?php
require("conexionBD.php");  
require("constaVari.php");
require("classphp/documentos.php");

session_start();
$_SESSION["idUs"];
$_SESSION["rol"];
// Usamos el comando "unlink" para borrar el fichero
$clase1=new documentos();
 $obj1=$clase1->eliminarDocumento($_GET["name"]);
unlink( $_GET["name"]);

 // Redirigiendo hacia atrás
header("Location: " . $_SERVER["HTTP_REFERER"])
?>