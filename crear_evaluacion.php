<?php include('Template/cabecera.php'); ?>
<div id="presentacion">
    <form method="POST">
        <h3><label>CARGO.: </label></h3><label>_____________________________</label>
        <h3><label>NOMBRE.:</label></h3><label>_____________________________</label>
        <blockquote>
            <h4>
                <br> Pregunta: <br>
                <input type="text" size="50" name="preguntaN" id="pregunta1">
                <br> Valor: <br>
                <input type="text" size="50" name="Valor" id="pregunta2">
                <br>
                <input type="submit" name="boton" value="cargar" id="btngrabar">
        </blockquote>
    </form>
</div>
<?php
require("conexionBD.php"); //llama conexionBd
if (isset($_POST['boton'])) {
    $lapregunta = $_POST['preguntaN'];
    $valorpre = $_POST['Valor'];
    $sql = "INSERT INTO tblpreguntaseva values (null,'$lapregunta','$valorpre',null)";
    $resultado = $conexion->query($sql);
    echo $lapregunta . " " . $valorpre;
}
include('Template/pie.php');
?>