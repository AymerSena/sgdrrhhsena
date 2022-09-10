<?php
<<<<<<< HEAD


=======
require("classphp/criteriosEvaluativos.php");
session_start();
>>>>>>> 940d7f0f7f63d5d96007762ce72e59f40d0b7dd5
?>
<table>

        <thead>
            <th>No.</th>
            <th>Criterio evaluativo</th>
            <th>Valor peso del criterio</th>
<<<<<<< HEAD
            <th>Evaluacion es <?php echo $_SESSION["asoEva"]; ?></th>
        </thead>
        <?php
    //$dataCons=new criteriosEvaluativos();
    $dataGen = $obje->consultarAreaEva($_SESSION["asoEva"]);
    foreach ($dataGen as $row) {
       echo "<tr>";
=======
        </thead>
        <?php
    $dataCons=new criteriosEvaluativos();
    $dataGen = $dataCons->consultarAreaEva($_SESSION["asoEva"]);
    foreach ($dataGen as $row) {
        echo "<tr>";
>>>>>>> 940d7f0f7f63d5d96007762ce72e59f40d0b7dd5
       echo "<td>".$row["CriPregunta"]."<td>";
       echo "<td>".$row["CriValorPreg"]."<td>";
       echo "<td>Modificar<td>";
       echo "<td>Eliminar<td>";
    }
       
        ?>
    </table>