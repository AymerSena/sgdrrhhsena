
<?php
require("sesionJefe.php");
require("classphp/areasorg.php");
require("classphp/evaluaciones.php");
require("classphp/resulEvaluativos.php");
$idUsulogin = $_SESSION["idUs"];
$classArea = new areasorg();
$dataBruto = $classArea->consultarAreaPoridFun($idUsulogin);
$dataFuncional = $dataBruto->fetch_array(); // el codigo del area en la cadena [0]
$classEvaluacion = new evaluaciones();
$dataBrutoEv = $classEvaluacion->consultarPorArea($dataFuncional[0]);
$classResuEva = new resulEvalutivos();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@latest/dist/Chart.min.js"></script>
    <title>Dash Area</title>
</head>
<body>
    <?php 
    include("cabecera.php");
    ?>
    <div class="cuerpo">
        <div class="tabla">
            <table>
                <thead>
                    <th>Evaluación</th>
                    <th>Cantidad de funcionarios evaluados</th>
                    <th>Promedio de resultados</th>
                </thead>
                    <?php

                    
                    foreach ($dataBrutoEv as $row) {
                        $numRegistro= $classResuEva->contarRegistrosPorEva($row["EvaCodigo"]);
                        $sumaNotas = $classResuEva->sumaReulPorEvaluacion($row["EvaCodigo"]);
                        $valoR=$numRegistro->fetch_array();
                        $dataSuma = $sumaNotas->fetch_array();
                        $promedioEv=$dataSuma[0]/$valoR[0];
                        echo "<tr>";
                        echo "<td>". $row["EvaNombre"]."</td>";
                        echo "<td>".$valoR[0]."</td>";
                        echo "<td>".$promedioEv."</td>";
                        echo "</tr>";
                    }
                    
                    ?>
            </table>
        </div>
    <h3>Tabla de resumen evaluativo</h3>
    <table>
        <thead>
            <th>Documento funcionario</th>
            <th>Fecha evaluacion</th>
            <th>Evaluacion</th>
            <th>Nota</th>
        </thead>
        <?php
        $data2TABLA=$classResuEva->tablaGeneral();
        
        foreach ($data2TABLA as $key) {
            $nombreEval = $classEvaluacion->consultarPorId($key["EvRForEvaluacion"]);
            $data=$nombreEval->fetch_array();
            echo "<tr>";
            echo "<td>".$key["EvRForUsuario"]."</td>";
            echo "<td>".$key["EvRFecha"]."</td>";
            echo "<td>".$data[1]."</td>";
            echo "<td>".$key["SUM(res.ResNota)"]."</td>";
            
        }
        ?>
    </table>
    <button><a href="menuInformes.php">Volver</a></button>
    </div>
    <?php 
    include("pie.php");
    ?>
    
</body>
</html>