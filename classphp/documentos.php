<?php
class documentos{
 public function insertarDocumento($nombre,$descripcion,$ruta,$docuFun){
        require("./conexionBD.php");
        $sentSQL_Insert="INSERT INTO tbldocumento (DocTipo, DocDescripcion,DocAdjunto,DocForUsuario) VALUES ('$nombre','$descripcion','$ruta','$docuFun')";
        $runSentSQL_Insert=$conexion->query($sentSQL_Insert);
 }
 public function eliminarDocumento($ruta){
    require("./conexionBD.php");
    $sentSQL_Delete="DELETE FROM tbldocumento WHERE DocAdjunto='$ruta'";
    $runSentSQL_Delete=$conexion->query($sentSQL_Delete);
 }    
 public function consultarDocumento($docuFun){
   require("./conexionBD.php");
   $sentSQL_Select="SELECT * FROM `tbldocumento` WHERE DocForUsuario = '$docuFun'";
   $runSentSQL_Select=$conexion->query($sentSQL_Select);
   return $runSentSQL_Select;

 }
}
?>