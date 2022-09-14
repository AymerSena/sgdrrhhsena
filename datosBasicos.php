<?php include('Template/cabecera.php') ?>
<div id="Menu">
    <blockquote>

        <h3> DATOS BASICOS DEL EMPLEADO</h3>

        <form action=" recibedatosba.php" method="POST" style="margin: auto;">
            <div class="columna3">
                <label title="Nombre" style="width:40%; display: block;">Nombres</label>
                <input type="text" size="40" name="nombre" id="nombre">

            </div>
            <div class="columna3">
                <label title="Apellidos" style="width:40%; display: block;">Apellidos</label>
                <input type="text" size="40" name="Apellido" id="Apellido">
            </div>
            <div class="columna3">


                <label title="Cedula" style="width:40%; display: block;">Cedula</label>
                <input type="text" size="12" name="Cedula" id="cedula">
            </div>

            <div class="columna3">

                <label title="Genero" style="width:100%; display: block;">Genero</label>
                <input type="text" size="1" name="Genero" id="Genero">
            </div>
            <div class="columna3">
                Direccion
                <input type="text" size="40" name="Direccion" id="Direccion">
            </div>
            <div class="columna3">
                Barrio
                <input type="text" size="40" name="Barrio" id="Barrio">
            </div>

            <div class="columna3">
                Correo
                <input type="email" size="40" name="Correo" id="Correo">
            </div>
            <div class="columna3">
                Telefono
                <input type="text" size="15" name="Telefono" id="Telefono">
            </div>
            <div class="columna3">
                Cargo
                <input type="text" size="40" name="Cargo" id="Cargo">
            </div>
            <div class="columna3">
                Fecha Nacimiento
                <input type="Date" size="1" name="Fecha_naci" id="Fecha_naci">
            </div>
            <br> Fecha Expedicioncedula
            <input type="Date" size="1" name="Fecha_expe" id="Fecha_expe">
            <br>
            <div class="columna3">

                Grup sanguinio
                <input type="Grupo_sanguinio" size="3" name="Grupo_sanguinio" id="Grupo_sanguinio">
            </div>

            <div class="columna3">
                Fecha contrato
                <input type="Date" size="1" name="Fecha_contra" id="Fecha_contra">
            </div>
            <br>


            <div class="columna3">
                <u>Enviar</u>
                <input type="submit" value="ENVIAR" name="buttonEnviar">
                <button>LIMPIAR</button>
                <input type="reset" value="LIMPIAR"></p>
            </div>
</div>

</form>
</blockquote>
</div>
<?php include('Template/pie.php'); ?>