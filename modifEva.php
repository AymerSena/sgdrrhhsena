<?php
require("sesionJefe.php");
require("classphp/evaluaciones.php");
require("classphp/criteriosEvaluativos.php");
require("conexionBD.php");

$idEva=$_GET["no"];
$doc=$_SESSION["idUs"];
$sentSql="SELECT UsuForaArea FROM tblusuario WHERE UsuCedula='$doc'";

if (isset($_POST["guardar"])) {
    $obje= new evaluaciones();
    $data= $obje->modificarEvaluacion($_POST["name"],$_POST["decripcion"],$idEva);
    header("Location: gestionEvaluaciones.php");
}
if (isset ($_POST["volver"])) {
    header("Location: gestionEvaluaciones.php");
}

if (isset($_POST["newCri"])) {
    header("Location: newCri.php?no=$idEva");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Evaluación</title>
</head>
<body>
    <?php
    include("cabecera.php");
    ?>
    <div class="cuerpo">
        <form action="" method="post">
            <label for="name">Nombre evaluacion</label>
            <input type="text" name="name" value="<?php
            $obje1= new evaluaciones();
            $resul= $obje1->consultarPorId($idEva);
            $data1= $resul-> fetch_array();
            echo $data1[1];//Nombre de la evaluacion
            ?>"> <br>
            <label for="descripcion">Descrición de la evaluacion</label>
            <input type="textarea" name="decripcion" value="<?php
            echo $data1[2];
            ?>
            "><br>
        <br>
        <hr>
        <h2>Criterios evaluactivos asociados.</h2>
        <table>

<thead>
    <th>Criterio evaluativo</th>
    <th>Valor peso del criterio</th>
</thead>
<?php
$dataCons=new criteriosEvaluativos();
$dataGen = $dataCons->consultarAreaEva($idEva);
foreach ($dataGen as $row) {
echo "<tr>";
echo "<td>".$row["CriPregunta"]."<td>";
echo "<td>".$row["CriValorPreg"]."<td>";
echo "<td> <a href='modiCrite1.php?no=" .$row["CriCodigo"]." type= 'button' class='btnbtn-danger' >Modificar</button></a> </td>";
echo "<td> <a href='elimiCri1.php?no=" .$row["CriCodigo"]." type= 'button' class='btnbtn-danger' >Eliminar</button></a> </td>";
echo "</tr>";
}

?>
</table>

        <button name="newCri">Agregar criterio</button>    
        <button name="volver">Volver</button>
        <button name="guardar">Guardar y cerrar</button>
        </form>
    </div>
    <?php
    include("pie.php");
    ?>
</body>
</html>