<?php include('Template/cabecera.php'); ?>
<div class="container">
    <div class="formularioFoto">
        <form enctype="multipart/form-data" action="uploadPhoto.php" method="POST">
            <label for="imagen">Imagen:</label>
            <input id="imagen" name="subir_archivo" size="30" type="file"><br>
            <button>Enviar</button>
        </form>
    </div>
    <img src="https://1.bp.blogspot.com/-CRGFBvE8s8k/YT5yRhIEj8I/AAAAAAAAAHM/dplt4qgxJmcjfSP213rWRyF0EoW_BQlSACNcBGAsYHQ/s332/logoPag.png" id="logoUnix">
</div>
</div>
<?php include('Template/pie.php'); ?>