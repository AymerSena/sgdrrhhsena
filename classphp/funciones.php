<?php
class funciones{
    public function agregarFuncion($titulo,$descripcion,$idDocumento){
        require("./conexionBD.php");
        $sentSQL= "INSERT INTO tblfuncionescar (FunTitulo, FunDescripcion,FunForUsuDocumen) VALUES ('$titulo','$descripcion','$idDocumento')";
        $run=$conexion->query($sentSQL);
    }
    public function modificarFunciones($titulo,$descripcion,$idRegistro){
        require("./conexionBD.php");
        $senteSQL="UPDATE tblfuncionescar SET FunTitulo='$titulo', FunDescripcion='$descripcion' WHERE FunId='$idRegistro'";
        $runSen=$conexion->query($senteSQL);
    }
    public function eliminarFuncion($idFuncion){
        require("./conexionBD.php");
        $senteSQL="DELETE FROM tblfuncionescar WHERE FunId='$idFuncion'";
        $runSql=$conexion->query($senteSQL);
    }
    public function consultarFuncionesPorfuncio($idFuncio){
        require("./conexionBD.php");
        $sentSQL="SELECT * FROM tblfuncionescar WHERE FunForUsuDocumen='$idFuncio'";
        $runSQL=$conexion->query($sentSQL);
        return $runSQL;
    }
    public function consultarPorRegistro($idRegistro){
        require("./conexionBD.php");
        $sentSQL="SELECT * FROM tblfuncionescar WHERE FunId='$idRegistro'";
        $runSql=$conexion->query($sentSQL);
        return $runSql;
    }
}
?>