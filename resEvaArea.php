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
    <canvas id="grafica"></canvas>
<script>// Obtener una referencia al elemento canvas del DOM
const $grafica = document.querySelector("#grafica");
// Las etiquetas son las que van en el eje X. 
const etiquetas = ["Enero", "Febrero", "Marzo", "Abril"]
// Podemos tener varios conjuntos de datos. Comencemos con uno
const datosVentas2020 = {
    label: "Promedio por evaluación",
    data: [5000, 1500, 8000, 5102], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(54, 162, 235, 0.2)', // Color de fondo
    borderColor: 'rgba(54, 162, 235, 1)', // Color del borde
    borderWidth: 1,// Ancho del borde
};
new Chart($grafica, {
    type: 'bar',// Tipo de gráfica
    data: {
        labels: etiquetas,
        datasets: [
            datosVentas2020,
            // Aquí más datos...
        ]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }],
        },
    }
});
</script>
    </div>
    <?php 
    include("pie.php");
    ?>
    
</body>
</html>