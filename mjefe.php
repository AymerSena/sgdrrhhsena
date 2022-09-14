<?php include('Template/cabecera.php');
/*if (!isset($SESSION["usuario"])) {
    header("Location: index.php");
}*/
?>

<div class="container">

    <div id="Menu">
        <h1 id="tit">¿Que deseas hacer?</h1>
        <nav id="logonav">
            <ul>
                <li>
                    <a href="">
                        <span class="logito">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="icontittle">Gestion de datos basicos</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="logito">
                            <ion-icon name="airplane-outline"></ion-icon>
                        </span>
                        <span class="icontittle">Gestion de ausencias</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="logito">
                            <ion-icon name="document-attach-outline"></ion-icon>
                        </span>
                        <span class="icontittle">Documentos</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="logito">
                            <ion-icon name="clipboard-outline"></ion-icon>
                        </span>
                        <span class="icontittle">Evaluaciones</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <img src="https://1.bp.blogspot.com/-CRGFBvE8s8k/YT5yRhIEj8I/AAAAAAAAAHM/dplt4qgxJmcjfSP213rWRyF0EoW_BQlSACNcBGAsYHQ/s332/logoPag.png" id="logoUnix" />
</div>
<?php include('Template/pie.php'); ?>