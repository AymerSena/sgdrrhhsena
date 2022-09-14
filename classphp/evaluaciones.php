<?php
class evaluaciones {
    public function crearEvaluacion($na,$des,$ar){
        require("./conexionBD.php");
        $sentSQL="INSERT INTO tblevaluaciones (EvaNombre,EvaDescripcion,EvaForArea) VALUES ('$na','$des','$ar')";
        $runSent=$conexion->query($sentSQL);
        $secondSQL="SELECT EvaCodigo FROM tblevaluaciones WHERE EvaNombre=$na AND EvaDescripcion=$des AND EvaForArea=$ar";
        $idRegistro=$conexion->query($secondSQL);
        return $idRegistro;

    }
    public function consultarPorArea($a){
        require("./conexionBD.php");
        $senteSQL="SELECT * FROM tblevaluaciones WHERE EvaForArea=$a";
        $resultados=$conexion->query($senteSQL);
        return $resultados;
    }
}
?>