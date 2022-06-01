<<<<<<< HEAD
<?php
require("conexionBD.php");
class generarAreEmp()
{
    function queryEmAr($area){
        $getQuery="SELECT * FROM tblusuario WHERE UsuForaArea = '$area'"
        $runQuery=$conexion->query($getQuery);
        ?>
        <table name="tablaArea" >
            <tr>
                <th>Empleado</th>
            </tr>
        <?php
        foreach ($runQuery as $row) {
            ?>
            <td><?php echo $row["UsuNombre"]." ".$row["UsuApellido"]; ?></td>
            <?php
            return $row
            ?>
        }
    }
}

=======
<?php
require("conexionBD.php");
class generarAreEmp()
{
    function queryEmAr($area){
        $getQuery="SELECT * FROM tblusuario WHERE UsuForaArea = '$area'"
        $runQuery=$conexion->query($getQuery);
        ?>
        <table name="tablaArea" >
            <tr>
                <th>Empleado</th>
            </tr>
        <?php
        foreach ($runQuery as $row) {
            ?>
            <td><?php echo $row["UsuNombre"]." ".$row["UsuApellido"]; ?></td>
            <?php
            return $row
            ?>
        }
    }
}

>>>>>>> a45349979232ba91000f12d0a931ad6d8a47343d
?>