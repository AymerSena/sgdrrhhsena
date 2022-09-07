<?php

class criteriosEvaluativos{
    public function crearPreguna($a,$b,$c){
        require("./conexionBD.php");
<<<<<<< HEAD
        $sentSQL="INSERT INTO tblpreguntaeva (CriPregunta,CriValorPreg,CriForeEvaluacion) VALUES ($a,$b,$c)";
=======
        $sentSQL="INSERT INTO tblpreguntaseva (CriPregunta,CriValorPreg,CriForeEvaluacion) VALUES ('$a','$b','$c')";
>>>>>>> codaym
        $runInsert=$conexion->query($sentSQL);
    }
    public function consultarAreaEva($a){
        require("./conexionBD.php");
<<<<<<< HEAD
        $sentSQL="SELECT * FROM tblpreguntaseva WHERE CriForeEvaluacion=$a";
        $runInsert=$conexion->query($sentSQL);
        return $runInsert;
    }
=======
        $sentSQL="SELECT * FROM tblpreguntaseva WHERE CriForeEvaluacion='$a'";
        $runInsert=$conexion->query($sentSQL);
        return $runInsert;
    }
    public function consultarIdCri($a){ 
        require("./conexionBD.php");
        $sentSQL="SELECT * FROM tblpreguntaseva WHERE CriCodigo='$a'";
        $runSQL=$conexion->query($sentSQL);
        return $runSQL;
    }
    public function eliminarPregunId($a){
        require("./conexionBD.php");
        $sentSQL="DELETE FROM tblpreguntaseva WHERE CriCodigo = '$a' ";
        $runSent= $conexion -> query($sentSQL);
        
    }
    public function modificarPregunta($n,$v,$a){
        require("./conexionBD.php");
        $sentSQL="UPDATE tblpreguntaseva SET CriPregunta = '$n', CriValorPreg = '$v' WHERE CriCodigo = '$a'";
        $runSent= $conexion -> query($sentSQL);

    }
>>>>>>> codaym
}
?>