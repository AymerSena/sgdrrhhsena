<?php

class criteriosEvaluativos{
    public function crearPreguna($a,$b,$c){
        require("./conexionBD.php");
        $sentSQL="INSERT INTO tblpreguntaeva (CriPregunta,CriValorPreg,CriForeEvaluacion) VALUES ($a,$b,$c)";
        $runInsert=$conexion->query($sentSQL);
    }
    public function consultarAreaEva($a){
        require("./conexionBD.php");
        $sentSQL="SELECT * FROM tblpreguntaseva WHERE CriForeEvaluacion=$a";
        $runInsert=$conexion->query($sentSQL);
        return $runInsert;
    }
}
?>