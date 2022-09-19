<?php
require("sesionJefe.php");
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
<div class="cuerpo">
    <button><a href="resEvaArea.php">Informe por área</a></button>
    <button><a href="">Informe por funcionario</a></button>
   
</div>
    <?php
    include("pie.php");
    ?>
</body>

</html>
