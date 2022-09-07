<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/plantillaConten.css">
</head>
<body>
<?php
    include("cabecera.php");
?>
        <div class="titlePag">
            <h1>Informe de vacaciones.</h1>
        </div>
        <div class="container">
            
<form action="" method="POST">
    <select name="filterPeople" id="">
        <option value="all">Seleccionar todo</option>
        <?php
        require("conexionBD.php");
        $queryBdJub="SELECT UsuCedula, UsuNombre, UsuApellido FROM tblusuario;";
        $answerQueSql=$conexion->query($queryBdJub);
        foreach($answerQueSql as $rowsCol){
        ?>
        <option value="<?php echo $rowsCol['UsuCedula']; ?>"><?php echo $rowsCol['UsuNombre'].' '.$rowsCol['UsuApellido']?></option>
        <?php
        }
        ?>
    </select>
    <input type="submit" value="Consultar" name="boton">
</form><br>
<table id="tablaResu">
    <tr>
        <th>Empleado</th>
        <th>Fecha solicitud</th>
        <th>Fecha de inicio</th>
        <th>Fecha fin</th>
        <th>Estado</th>
    </tr>

<?php
if (isset($_POST['boton'])) {
    echo $_POST['filterPeople'] .' Se cumple la condición del boton';
    if ($_POST['filterPeople']=="all") {
        $whereSql="";
    }else {
        $document=$_POST['filterPeople'];
        $whereSql="WHERE usu.UsuCedula=$document";
    }
}else{
    $whereSql="";
}
$sql="SELECT his.HisFechaSolicitud, his.HisFechaInicio, his.HisFechaRegreso, his.HisEstado, usu.UsuNombre, usu.UsuApellido FROM tblhistovaca his INNER JOIN tblusuario usu ON his.HisForUsuCed=usu.UsuCedula $whereSql";
$answTableSql=$conexion ->query($sql);
foreach($answTableSql as $rowsTable){
    ?>
    <tr>
        <td><?php echo $rowsTable['UsuNombre']. ' '.$rowsTable['UsuApellido'];?></td>
        <td><?php echo $rowsTable['HisFechaSolicitud'];?></td>
        <td><?php echo $rowsTable['HisFechaInicio'];?></td>
        <td><?php echo $rowsTable['HisFechaRegreso'];?></td>
        <td><?php echo $rowsTable['HisEstado'];?></td>
    </tr>
<?php
}
?>
</table>
<img src="https://1.bp.blogspot.com/-CRGFBvE8s8k/YT5yRhIEj8I/AAAAAAAAAHM/dplt4qgxJmcjfSP213rWRyF0EoW_BQlSACNcBGAsYHQ/s332/logoPag.png" id="logoUnix">
        </div>
    </div>
    <?php
    include("pie.php");
    ?>

</blockquote>

</body>

</html>