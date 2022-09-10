<?php
require("classphp/criteriosEvaluativos.php");
session_start();
?>
<table>

        <thead>
            <th>No.</th>
            <th>Criterio evaluativo</th>
            <th>Valor peso del criterio</th>
        </thead>
        <?php
    $dataCons=new criteriosEvaluativos();
    $dataGen = $dataCons->consultarAreaEva($_SESSION["asoEva"]);
    foreach ($dataGen as $row) {
        echo "<tr>";
       echo "<td>".$row["CriPregunta"]."<td>";
       echo "<td>".$row["CriValorPreg"]."<td>";
       echo "<td>Modificar<td>";
       echo "<td>Eliminar<td>";
    }
       
        ?>
    </table>