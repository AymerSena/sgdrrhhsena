<?php include('Template/cabecera.php');
/**session_start();
if (!isset($SESSION["Emp"])) {
    header("Location: index.php");
}**/
?>
<div class="container">
    <div id="Menu">
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
                <li>
                    <a href="">
                        <span class="logito">
                        <ion-icon name="stats-chart-outline"></ion-icon>
                        </span>
                        <span class="icontittle">Informes</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<?php include('Template/pie.php'); ?>