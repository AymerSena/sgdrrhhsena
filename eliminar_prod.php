<?php
include "conexion.php";

EliminarProducto($_GET['no']);

function EliminarProducto($no)
{
$link = new conectarDB();
$con = $link->conectar();
    $resultado = $con->query("DELETE FROM productos WHERE no = '$no';");
}

?>

<script type="text/javascript">
    alert("Producto eliminado exitosamente");
    window.location.href='index.php';
</script>