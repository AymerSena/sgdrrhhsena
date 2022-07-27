<?php
session_start();
require("conexionBD.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/disMenCerti.css">
    <title>Document</title>
</head>
<body>
<?php
    include("cabecera.php");
    ?>
    <h1>Pruebas de generar certificados</h1>
    <h2>Menú de certificados</h2>
    <div id="menu">
        <ul>
            <li><a href="certifica_la_sueldo1.php"><button>Certificado laboral con sueldo.</button></a></li>
            <li><a href="">
            <button>Certificado laboral Embajadas</button></a></li>
            <li><a href="certi_la_funcion.php"><button>laboral Salario Promedio</button></a></li>
            <li><a href="certi_la_sueldo_funcion.php"><button>laboral con sueldo y con funciones</button></a></li>
            <li><a href=""><button>laboral sin sueldo y con funciones</button></a></li>
            <li><a href=""><button>laboral sin sueldo</button></a></li>
            <li><a href=""><button>Carta descriptiva</button></a></li>
        </ul>
    </div>
    <?php
    include("pie.php");
    ?>
</body>
</html>