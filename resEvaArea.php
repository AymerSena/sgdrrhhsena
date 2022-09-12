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
                        $promedioEv = $classResuEva->promedioPorEvaluacion($row["EvaCodigo"]);
                        $valoR=$numRegistro->fetch_array();
                        echo "<tr>";
                        echo "<td>". $row["EvaNombre"]."</td>";
                        echo "<td>".$valoR[0]."</td>";
                        echo "<td>".$promedioEv."</td>";
                        echo "</tr>";
                    }
                    
                    ?>
            </table>
        </div>
    </div>
    <?php 
    include("pie.php");
    ?>
</body>
</html>