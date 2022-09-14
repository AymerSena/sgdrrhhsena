<?php include('Template/cabecera.php'); ?>
    <div id="Menu">
        <form action="AccionVB.php" method="GET">
            <h1 id="tit">Visto bueno</h1>

            <label for="empleados">lista empleados</label>
            <p style="float: right;">Dias acumulados por el empleado: 15 </p>
            <select name="empleados" id="empleados">
            <br>
        <option  selected disabled="seleccion">Seleccione empleado</option>
          <option value="Aymer">Aymer</option>
          <option value="Miguel">Miguel</option>
          <option value="David">David</option>
          <option value="Johan">Johan</option>
          <option value="Ivan">Ivan</option>
          <br>  
          <br>    
          <textarea name="textarea" id="textarea" placeholder="Añadir comentarios" cols="135" rows="10"></textarea> 
        <br>
        <input type="submit" onclick="alert('Visto bueno cargado');"value="enviar" style="float: right;">
        </form>
    </div>
    <br>
    <br>
    
</div>
<?php include('Template/pie.php'); ?>