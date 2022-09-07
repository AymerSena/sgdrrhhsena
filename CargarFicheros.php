 <?php
 require("conexionBD.php");  
 require("constaVari.php");
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
  header("Location: " . $_SERVER["HTTP_REFERER"]);
/* Codigo subir archivo Miguel
 // Cómo subir el archivo
 $fichero = $_FILES["file"];
 // Cargando el fichero en la carpeta "Documentos"
 move_uploaded_file ($fichero["tmp_name"] ,"Documentos/". $SubCarpeta);
 // Redirigiendo hacia atrás
 header("Location: " . $_SERVER["HTTP_REFERER"]);
*/
 ?>



