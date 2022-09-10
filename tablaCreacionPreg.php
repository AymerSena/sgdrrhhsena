<?php


?>
<table>

        <thead>
            <th>No.</th>
            <th>Criterio evaluativo</th>
            <th>Valor peso del criterio</th>
            <th>Evaluacion es <?php echo $_SESSION["asoEva"]; ?></th>
        </thead>
        <?php
    //$dataCons=new criteriosEvaluativos();
    $dataGen = $obje->consultarAreaEva($_SESSION["asoEva"]);
    foreach ($dataGen as $row) {
       echo "<tr>";
       echo "<td>".$row["CriPregunta"]."<td>";
       echo "<td>".$row["CriValorPreg"]."<td>";
       echo "<td>Modificar<td>";
       echo "<td>Eliminar<td>";
    }
       
        ?>
    </table>