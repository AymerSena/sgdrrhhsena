<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/plantillaConten.css">
    <title>Plantilla para proyecto unix</title>
</head>

<body>
<?php
    include("cabecera.php");
?>
        <div class="titlePag">
            <h1>Cambiar foto de perfil</h1>
        </div>
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
    <?php
    include("pie.php");
    ?>
</body>
</html>
