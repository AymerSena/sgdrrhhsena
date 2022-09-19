<?php
require("sesionJefe.php");
require("classphp/resulEvaluativos.php");
require("classphp/criteriosEvaluativos.php");
$classCrite= new criteriosEvaluativos();
$classHisRes= new resulEvalutivos();
$idFuncionario=$_GET["funcionario"];
$evalId=$_GET["evaluacion"];
$fechaAct=date("Ymd");
$arreglo = array();
$arreglo2 = array();
$arreglo3 = array();
$dataPreg=$classCrite->consultarAreaEva($evalId);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluando</title>
</head>
<body>
    <?php
    include("cabecera.php");
    ?>
<div class="cuerpo">
    <form action="" method="post">
        <?php
            foreach ($dataPreg as $row) {
                ?>
                <label for=""><?php echo $row["CriPregunta"]?></label>
                <select name="repu[]" id="" onchange="<?php array_push($arreglo2,$row["CriValorPreg"]);array_push($arreglo3,$row["CriCodigo"]); ?>">
                    <option value="NA">Seleccione</option>
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select> <br>
                
                <?php
            }   
        ?>
        <button name= "generar">Guardar</button>
        <button><a href="evaluarEmp.php">Volver</a></button>
    </form>
    <?php
    if (isset($_POST["generar"])) {
$codigoHisRes = $classHisRes->insertHistRest($fechaAct,$idFuncionario,$evalId);
$resCodiAsoc = $codigoHisRes->fetch_array();
$cantCriterios= $classCrite->contarNoPre($evalId);
$noPreg=$cantCriterios->fetch_array();

        foreach (array_keys($_POST["repu"]) as $key) {
            if ($_POST["repu"][$key]=="No") {
                $val=0;
            }else {
                $val=$arreglo2[$key];
            }
            $arreglo = $_POST["repu"][$key];
            $sentSQL = "INSERT INTO tblresultadoeva(ResRespuesta,ResNota,ResForPregun,ResForEvrHis) VALUES('$arreglo','$val','$arreglo3[$key]','$resCodiAsoc[0]')";
            $run = $classHisRes->insertRespues($sentSQL);
    }
        ?>
        <script>
            alert("Se agrego los registros");
            window.location.href="evaluarEmp.php";
        </script>
        <?php
    }
    ?>
</div>
    <?php    
    include("pie.php");

    ?>
</body>
</html>