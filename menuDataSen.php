<?php
require("sesionRRHH.php");
require("conexionBD.php");
require("classphp/usuarios.php");
require("classphp/areasorg.php");
$classUsu= new usuario();
$classAreas= new areasorg();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de funcionarios</title>
</head>
<body>
    <?php
    require("cabecera.php");
    $dataAreas=$classAreas->consultarAreas();
    ?>
    <div class="cuerpo">
        <h1>Tabla de funcionarios</h1>
    <form action="" method="post">
        <label for="area">Filtrar por área:</label>
        <select name="area" id="">
            <option value="all">Todas las áreas</option>
            <?php
            foreach ($dataAreas as $row) {
            ?>
            <option value="<?php echo $row["AreCodigo"]; ?>"><?php echo $row["AreNombre"]?></option>
            <?php
            }
            ?>
        </select> <button name="filtrar">Filtrar</button><br>
        <table>
            <thead>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Cargo</th>
                <th>Informacion</th>
                <th>Funciones</th>
            </thead>
            <?php
        if (isset($_POST["filtrar"])) {
            $dataUsuario=$classUsu->consultarFuncionarioPorarea($_POST["area"]);
            foreach ($dataUsuario as $row) {
                echo "<tr>";
                echo "<td>".$row["UsuNombre"]."</td>";
                echo "<td>".$row["UsuApellido"]."</td>";
                echo "<td>".$row["UsuCargo"]."</td>";
                echo "<td><a href="."dataSensible.php?id=".$row["UsuCedula"].">Ver datos</a></td>";
                echo "<td><a href="."gestionFunciones.php?id=".$row["UsuCedula"].">Funciones</a></td>";
                echo "</tr>";
            }
        }
        
            ?>
        </table>
        <button><a href="menuRRHH.php">Volver al menú</a></button>
    </form>
    </div>
    <?php
    require("pie.php");
    
    ?>
</body>
</html>