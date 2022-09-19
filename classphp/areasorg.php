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
    public function consultarAreas(){
        require("./conexionBD.php");
        $senteSQL="SELECT * FROM tblarea ";
        $run=$conexion->query($senteSQL);
        return $run;
    }
    public function consultarPorIdArea($idArea){
        require("./conexionBD.php");
        $senteSQL="SELECT * FROM tblarea WHERE AreCodigo='$idArea'";
        $run=$conexion->query($senteSQL);
        return $run;
    }
    
}

?>