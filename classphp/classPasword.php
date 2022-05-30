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

?>