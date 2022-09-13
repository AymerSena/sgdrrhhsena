<?php
class contrasena{
    public function consulPasword($idFuncionario){
        require("./conexionBD.php");
        $sentSQL="SELECT UsuContrasenaSis FROM tblusuario WHERE UsuCedula='$idFuncionario'";
        $runSQL=$conexion->query($sentSQL);
        return $runSQL;
    }
    public function actualizarPasword($newPasword,$idFuncionario){
        require("./conexionBD.php");
        $sentSQL="UPDATE tblusuario SET UsuContrasenaSis = '$newPasword' WHERE UsuCedula='$idFuncionario'";
        $runSent = $conexion ->query($sentSQL);
        return $runSent;
    }
}
?>