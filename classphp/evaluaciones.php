<?php
require_one("./conexionBD.php");
class evaluaciones{

    private $idEval = insertEval();
        public $nombreEva;
        public $descriEva;
        public $keyArea;
    public function construct__($eNam,$eDes,$eAre){
        
     $nombreEva = $this -> eNam;
     $descriEva = $this -> eDes;
     $keyArea = $this -> eAre;
    }

    public function insertEval(){
     $this -> nombreEva;
     $this -> descriEva;
     $this -> keyArea;

        $sql = "INSERT INTO tblevaluaciones VALUES (NULL, '$nombreEva','$nombreEva','$descriEva','$keyArea')";
        $runInsert = $conexion ->query($sql);
        $querId="SELECT EvaCodigo FROM tblevaluaciones WHERE EvaCodigo=(SELECT max(EvaCodigo) FROM tblevaluaciones)";
        $result=$conexion ->query($querId);
        return $result;
    }

    public function searchEval($a){
        $sql = "SELECT * FROM tblevaluaciones WHERE EvaForAre = '$a'";
        $runSelect = $conexion -> query($sql);
        return $runSelect;
    }

    public function updateEval($a,$b, $c, ){´
    
    }

}

?>