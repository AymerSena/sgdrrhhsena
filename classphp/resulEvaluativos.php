
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
    public function sumaReulPorEvaluacion($evalu){
        require("./conexionBD.php");
        $sentSQL1="SELECT SUM(res.ResNota) FROM tblresultadoeva res INNER JOIN tblhisevaluacionesr his ON his.EvRCodigo = res.ResForEvrHis INNER JOIN tblevaluaciones eva ON his.EvRForEvaluacion=eva.EvaCodigo WHERE his.EvRForEvaluacion='$evalu'";
        $runFiSql=$conexion->query($sentSQL1);
        return $runFiSql;
    }
    public function cuentaEVAL(){
        require("./conexionBD.php");
        $sentSQL="SELECT COUNT(EvRForEvaluacion) FROM tblhisevaluacionesr GROUP BY EvRForEvaluacion";//suma evaluaciones realizadas
        $run=$conexion->query($sentSQL);
        return $run;
        
    }
    public function sumaEval(){
        require("./conexionBD.php");
        $sentSQL="SELECT SUM(res.ResNota) FROM tblresultadoeva res INNER JOIN tblhisevaluacionesr his ON his.EvRCodigo = res.ResForEvrHis INNER JOIN tblevaluaciones eva ON his.EvRForEvaluacion=eva.EvaCodigo GROUP BY eva.EvaNombre";
        $run=$conexion->query($sentSQL);
        return $run;

    }

    public function tablaGeneral(){
        require("./conexionBD.php");
        $sentSQL="SELECT  his.EvRCodigo, his.EvRFecha, 	his.EvRForUsuario, 	his.EvRForEvaluacion, SUM(res.ResNota) FROM tblhisevaluacionesr his INNER JOIN tblresultadoeva res ON his.EvRCodigo=res.ResForEvrHis GROUP BY his.EvRCodigo";
        $run=$conexion->query($sentSQL);
        return $run;
    }
}
?>
