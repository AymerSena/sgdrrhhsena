<?php include('Template/cabecera.php'); ?>
<div id="contenido">
    <h1 id="tit">Evaluaciones</h1>
    <form action="gestion_evaluacion.php" method="POST">
        <label for="NombreEva">Ingrese el nombre de la evaluación:</label>
        <input type="text" name="nameEva"><br>
        <label for="descripcionEva">Ingrese la descripcion de la evaluacion:</label><br>
        <textarea name="descriEva" id="cajadetexto" cols="30" rows="10"></textarea><br><br>
        <input type="submit" value="Guardar y continuar" id="botonEN">
        <input type="submit" value="Cancelar" id="botonEN">
    </form>
    <a href="crear_evaluacion.php">Crear preguntas de la evaluación</a>
</div>
<?php include('Template/pie.php'); ?>