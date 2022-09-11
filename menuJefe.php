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
    <title>Menu Jefe</title>
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
                    <a href="datosBasicos.html"><img class="logo" src="https://1.bp.blogspot.com/-a5TanyEIRgk/YT5yHI4qFcI/AAAAAAAAAFs/mCLSeiyQ5RMHRy8tevTtSORRIaODcvaFQCNcBGAsYHQ/s320/IconoActualiData.png"></a>
                </li>
                <li>
                    <a href=""><img class="logo" src="https://1.bp.blogspot.com/-pWbP6N_2-F0/YT5yIQZXEtI/AAAAAAAAAGA/n0-4cvp7gFYTvNkgiiwsFx1FQM-5hRWZACNcBGAsYHQ/s320/IconoCarDesArch.png"></a>
                </li>
                <li>
                    <a href="menuJefeVaca.php"><img class="logo" src="https://1.bp.blogspot.com/-CVbG8VMJUGg/YT5yP3LJHnI/AAAAAAAAAG8/oSqBcKNbMWcH6gM4eXFSKPc2TC3Mm0rJgCNcBGAsYHQ/s320/IconoSolicitarYConsuVa.png"></a>
                </li>
                <li>
                    <a href="gestionEvaluaciones.php"><img class="logo" src="https://1.bp.blogspot.com/-DFzD5Wp_k1I/YT5yJ1ibjFI/AAAAAAAAAGM/J3uFXohr1YY49BYHDVROIISKXNJ3XvDGACNcBGAsYHQ/s320/IconoCrearEvaP.png"></a>
                </li><br> <br>
                <li>
                    <a href="evaluarEmp.php"><img class="logo" src="https://1.bp.blogspot.com/-Zxks8ycBOc0/YT5yM4bZqzI/AAAAAAAAAGk/WdnOOm982uULk6R7qeFviWx68IABXBDcQCNcBGAsYHQ/s0/IconoEvaluaciones.png"></a>
                </li>
                <li>
                    <a href="VistoBueno.html"><img class="logo" src="https://1.bp.blogspot.com/-CBDJAQ-UHsw/YT5yQQfp80I/AAAAAAAAAHA/wDve7hRolmMfYVJs8pvtDXC8VJrwbHpNwCNcBGAsYHQ/s0/IconoVistoBuenoVaca.png"></a>
                </li>
                <li>
                    <a href="menuInformes.php"><img class="logo" src="https://1.bp.blogspot.com/-zNm1SxTs37c/YT5yN-a4IwI/AAAAAAAAAGs/ya7hx4ayapcuP53sZUm-XyRiY27bjjnIACNcBGAsYHQ/s0/IconoInformes.png"></a>
                </li>
                <li>
                    <a href="menuJefeVistosBuenos.php"><img class="logo" src="https://1.bp.blogspot.com/-zNm1SxTs37c/YT5yN-a4IwI/AAAAAAAAAGs/ya7hx4ayapcuP53sZUm-XyRiY27bjjnIACNcBGAsYHQ/s0/IconoInformes.png"></a>
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