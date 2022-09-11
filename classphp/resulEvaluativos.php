<?php
class resulEvalutivos{
    public function insertHistRest($fecha,$idFuncionario){
        require("./conexionBD.php");
        $sentSQL="INSERT INTO tblhisevaluacionesr (EvRFecha,EvRForUsuario) VALUES ('$fecha','$idFuncionario')";
        $sentSQL2="SELECT MAX(EvRCodigo) AS EvRCodigo FROM tblhisevaluacionesr";
        $runSen1=$conexion->query($sentSQL);
        $runSen2=$conexion->query($sentSQL2);
        return $runSen2;
    }
    public function insertRespues($sentenciaSQL){
        require("./conexionBD.php");
        $runSente=$conexion->query($sentenciaSQL);
    }    
}
?>