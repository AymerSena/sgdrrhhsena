<?php
 require("conexionBD.php");  
 require("constaVari.php"); 
 require("classphp/documentos.php");
 $nombreDoc=$_POST["name1"];
 $descriDoc=$_POST["descripcion"];
 session_start();
 //Crea carpeta o valida si ya existe
 $_SESSION["idUs"];
 $_SESSION["rol"];
//Directorio actual
$SubCarpeta = $_SESSION["idUs"];
 $directorio= "Documentos/".$SubCarpeta."/";
 
 if (!file_exists($directorio)) { // si no existe la carpeta
 mkdir($directorio,0777,true);
}

$subirFile = $directorio.basename($_FILES["file"]['name']);
if (move_uploaded_file($_FILES['file']['tmp_name'], $subirFile)) {
} else {
     echo "La subida ha fallado";
  }

 $ruta_c=$directorio.basename($_FILES["file"]['name']);

 $clase=new documentos();
 $obj=$clase->insertarDocumento($nombreDoc,$descriDoc,$ruta_c,$_SESSION["idUs"]);
 header("Location: " . $_SERVER["HTTP_REFERER"]);
 ?>



