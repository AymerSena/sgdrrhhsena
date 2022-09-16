<?php include('Template/cabecera.php'); ?>
    <div id="Menu">

        <form action="AccionAP.php" method="GET">


            <label for="empleados">lista empleados</label>

            <select name="empleados" id="empleados">
            <br>
        <option  selected disabled="seleccion">Seleccione empleado</option>
        <option value="Aymer">Aymer</option>
        <option value="Miguel">Miguel</option>
        <option value="David">David</option>
        <option value="Johan">Johan</option>
        <option value="Ivan">Ivan</option>
          
        </select>

            <label for="area"></label>

            <select name="areas" id="areas">
            <br>
        <option  selected disabled="seleccion">filtrar</option>
          <option value="Recursos humanos">Recursos humanos</option>
          <option value="Planta">Planta</option>
          <option value="Transporte">Transporte</option>
          <option value="Redes">Redes</option>
          <option value="Marketing">Marketing</option>
          <option value="Contabilidad">Contabilidad</option>
          
        </select>


            <br>
            <p>Dias acumulados por el empleado: 15 </p>
            <h3>Ingrese fecha de regreso</h3>
            <input type="date" name="date" id="date">
            <br>
            <br>
            <br>
            <h3> Alerta</h3>
            <p>¿Desea aprobar vacaciones?</p>
            <input type="submit" value="No">
            <input type="submit" onclick="alert('Vacaciones confirmadas');" value="Sí">



        </form>
    </div>
<?php include('Template/cabecera.php'); ?>