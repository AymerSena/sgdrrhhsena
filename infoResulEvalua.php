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
        <div class="titlePag">
            <h1>Informe resultados evaluativos.</h1>
        </div>
        <div class="container">
            <div class="subConteiner">
            <h2>Nombre de la evaluación va acá</h2>
            <h3>El nombre del funcionario va acá</h3>
            <table>
                <tr>
                    <th>Pregunta</th>
                    <th>Respuesta</th>
                    <th>Puntuaje</th>
                </tr>
                <tr>
                    <td>Pregunta1?</td>
                    <td>Respuensta1</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>Pregunta2?</td>
                    <td>Respuesta2</td>
                    <td>2</td>
                </tr>
            </table>
            <div class="grafica">
            Este contiene una grafica a futuro.
            </div>
            </div>
            <img src="https://1.bp.blogspot.com/-CRGFBvE8s8k/YT5yRhIEj8I/AAAAAAAAAHM/dplt4qgxJmcjfSP213rWRyF0EoW_BQlSACNcBGAsYHQ/s332/logoPag.png" id="logoUnix">
        </div>
    </div>
    <?php
    include("pie.php");
    ?>
</body>

</html>