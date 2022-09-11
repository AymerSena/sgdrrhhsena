<?php
class usuario{
    public function consultForAreasinjefe($area,$idLider){
        require("./conexionBD.php");
        $sentSQL= "SELECT * FROM tblusuario WHERE UsuForaArea='$area' AND NOT UsuCedula='$idLider'";
        $optenerResult=$conexion->query($sentSQL);
        return $optenerResult;
    }
    public function consultOneUsuario($idFuncionario){
        require("./conexionBD.php");
        $sentSQL= "SELECT * FROM tblusuario WHERE UsuCedula='$idFuncionario'";
        $optenerResult=$conexion->query($sentSQL);
        return $optenerResult;
    }
}
?>