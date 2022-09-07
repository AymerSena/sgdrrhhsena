<?php
require("sesionAdmin.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/plantillaConten.css">
    <title>Menu Empleado</title>
</head>

<body>
<?php
    include("cabecera.php");
?>
<div class="cuerpo">
        <div class="container">
    <div id="Menu">
        <h1 id="tit">¿Que deseas hacer?</h1>
        <nav id="Logos">
            <ul>
                <li>
                    <a href="NegociacionPeriodos.php"><img class="logo" src="https://1.bp.blogspot.com/-a5TanyEIRgk/YT5yHI4qFcI/AAAAAAAAAFs/mCLSeiyQ5RMHRy8tevTtSORRIaODcvaFQCNcBGAsYHQ/s320/IconoActualiData.png"></a>
                </li>
                <li>
                    <a href="MenuAdministradorVacaTabla.php"><img class="logo" src="https://1.bp.blogspot.com/-pWbP6N_2-F0/YT5yIQZXEtI/AAAAAAAAAGA/n0-4cvp7gFYTvNkgiiwsFx1FQM-5hRWZACNcBGAsYHQ/s320/IconoCarDesArch.png"></a>
                </li>
                
            </ul>
        </nav>
    </div>
        </div>
</div>
<?php
    include("pie.php");
    ?>
</body>

</html>