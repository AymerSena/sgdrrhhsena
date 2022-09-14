<?php
class resulEvalutivos{
    public function insertHistRest($fecha,$idFuncionario,$idEvaluacionAsoc){
        require("./conexionBD.php");
        $sentSQL="INSERT INTO tblhisevaluacionesr (EvRFecha,EvRForUsuario,EvRForEvaluacion) VALUES ('$fecha','$idFuncionario','$idEvaluacionAsoc')";
        $sentSQL2="SELECT MAX(EvRCodigo) AS EvRCodigo FROM tblhisevaluacionesr";
        $runSen1=$conexion->query($sentSQL);
        $runSen2=$conexion->query($sentSQL2);
        return $runSen2;
    }
    public function insertRespues($sentenciaSQL){
        require("./conexionBD.php");
        $runSente=$conexion->query($sentenciaSQL);
    }
    public function contarRegistrosPorEva($codigoEval){
        require("./conexionBD.php");
        $sentSql="SELECT COUNT(EvRForEvaluacion) FROM `tblhisevaluacionesr` WHERE EvRForEvaluacion='$codigoEval'";
        $runSent=$conexion->query($sentSql);
        return $runSent;
    }
    public function promedioPorEvaluacion($evalu){
        require("./conexionBD.php");
        $sentSQL1="SELECT evh.EvRForEvaluacion, SUM(evr.SELECT COUNT(EvRForEvaluacion) FROM ResNota) FROM tblhisevaluacionesr evh INNER JOIN tblresultadoeva evr ON evh.EvRCodigo=evr.ResForEvrHis WHERE evh.EvRForEvaluacion='$evalu'";
        $runFiSql=$conexion->query($sentSQL1);
        return $runFiSql;
    }
}
?>