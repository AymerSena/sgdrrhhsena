<?php include('Template/cabecera.php'); ?>
<div id="Menu">
    <form action="BaseAP.php" method="POST">
        <br>
        <p>Dias acumulados por el empleado: 15 </p>
        <input type="submit" name="image" onclick="alert('Vacaciones solicitadas');" img id="vacaciones" src="Iconos_imagenes/IconoSolicitarVa.png" style="float: right;" value="solicitado" />

        <h3>Ingrese fecha de partida</h3>
        <input type="date" name="date" id="date">

        <br>
        <h3>Ingrese fecha de solicitud</h3>
        <input type="date" name="dated" id="dated">

    </form>
</div>
<?php include('Template/cabecera.php'); ?>