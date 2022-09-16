<?php
class evaluaciones {
    public function crearEvaluacion($na,$des,$ar){
        require("./conexionBD.php");
        $sentSQL="INSERT INTO tblevaluaciones (EvaNombre,EvaDescripcion,EvaForArea) VALUES ('$na','$des','$ar')";
        $runSent=$conexion->query($sentSQL);
        $secondSQL="SELECT EvaCodigo FROM tblevaluaciones WHERE EvaNombre='$na' AND EvaDescripcion='$des' AND EvaForArea='$ar'";
        $idRegistro=$conexion->query($secondSQL);
        return $idRegistro;

    }
    public function consultarPorArea($a){
        require("./conexionBD.php");
        $senteSQL="SELECT * FROM tblevaluaciones WHERE EvaForArea='$a'";
        $resultados=$conexion->query($senteSQL);
        return $resultados;
    }
    public function consultarPorId($a){
        require("./conexionBD.php");
        $sentSQL="SELECT * FROM tblevaluaciones WHERE EvaCodigo='$a'";
        $runResul=$conexion->query($sentSQL);
        return $runResul;
    }
    public function eleminarEvaYCri($a){
        require("./conexionBD.php");
        $sentSQL="DELETE FROM tblpreguntaseva WHERE CriForeEvaluacion = '$a'";
        $seconSentSQL="DELETE FROM tblevaluaciones WHERE EvaCodigo='$a'";
        $runFirst=$conexion->query($sentSQL);
        $runSecond=$conexion->query($seconSentSQL);
    }
    public function modificarEvaluacion($n,$d,$a){
        require("./conexionBD.php");
        $senteSQL="UPDATE tblevaluaciones SET EvaNombre='$n',EvaDescripcion='$d' WHERE EvaCodigo='$a'";
        $runSQL= $conexion->query($senteSQL);
    }

    public function consultarEvaluaciones(){
        require("./conexionBD.php");
        $senteSQL="SELECT EvaNombre FROM tblevaluaciones";
        $runSQL= $conexion->query($senteSQL);
        return $runSQL;
    }
    

}
?>