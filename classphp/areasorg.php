<?php

class areasorg{

    public function crear($name,$codRes,$descri){
        require("./conexionBD.php");
        $sql="INSERT INTO tblarea (AreNombre,AreLider,AreDescripcion) VALUES ('$name','$codRes','$descri')";
        $runQuery=$conexion->query($sql);

    }
    public function consultarAreaPoridFun($docuFuncionario){
        require("./conexionBD.php");
        $senteciaSQL="SELECT UsuForaArea FROM tblusuario WHERE UsuCedula='$docuFuncionario'";
        $recuperarValor=$conexion->query($senteciaSQL);
        return $recuperarValor;
    }
    
}

?>