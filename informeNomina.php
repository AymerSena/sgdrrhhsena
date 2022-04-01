<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/disInfoNomina.css">
    <title>Plantilla para proyecto unix</title>
</head>

<body>
    <div class="cuerpo">
        <div class="panelLeft">
            <nav>
                <ul>
                    <li><img src="https://1.bp.blogspot.com/-MeCxaLO8njU/YT5yRMu7KrI/AAAAAAAAAHI/NhoZIlmquMUWDoiVjAzF3nTF1WnwqRTSQCNcBGAsYHQ/s0/descarga.png" id="photoPer"></li>
                    <li> <img src="https://1.bp.blogspot.com/-EO10WM7B0Ig/YT5yOT5S7JI/AAAAAAAAAGw/FfqaAQ19Y709UTCC9jBUt7CW9pEv8_xjACNcBGAsYHQ/s0/IconoNotificaciones.png" id="photoNoti"></li>
                    <li><button>Gestion contraseña</button></li>
                    <li><button>Cerrar sesión</button></li>
                </ul>
            </nav>
        </div>
        <div class="titlePag">
            <h1>Informe de nomina.</h1>
        </div>
        <div class="container">
            <div class="subcontenido">
            <div class="secondConteiner">
                <div class="conteinerLeft">
               <form action="POST">
                   <h2>Tabla de resultados  </h2>

                   <select name="areaSelect" id="areaSelect">
                       <option value="111">Seleccione área</option>
                       <?php
        require("conexionBD.php");
        $queryBdJub="SELECT * FROM tblarea;";
        $answerQueSql=$conexion->query($queryBdJub);
        foreach($answerQueSql as $rowsCol){
        ?>
        <option value="<?php echo $rowsCol['AreCodigo']; ?>"><?php echo $rowsCol['AreNombre'];?></option>
        <?php
        }
        ?>
                   </select>

                   <select name="peopleSelect" id="peopleSelect">
                       <option value="*">Selccione funcionario</option>
        <?php
        $queryPerson="SELECT * FROM tblusuario;";
        $answerQueSql1=$conexion->query($queryPerson);
        foreach($answerQueSql1 as $rowsCol){
        ?>
        <option value="<?php echo $rowsCol['UsuCedula']; ?>"><?php echo $rowsCol['UsuNombre'].' '.$rowsCol['UsuApellido']?></option>
        <?php
        }
        ?>
                   </select>


                   <button>Graficar filtros</button>
               </form>
               <table class="resultTable">
                   <tr>
                       <th>Fecha</th>
                       <th>Funcionario</th>
                       <th>Salario</th>
                   </tr>
                   <tr>
                       <td>Fecha Ficticia</td>
                       <td>Funcionario ficticio</td>
                       <td>Salario ficticio</td>
                   </tr>
               </table>
               </div>
               <div class="conteinerRight">
                   <h2>Acá va la grafica.</h2>
               </div>
            </div>
            </div>
            <img src="https://1.bp.blogspot.com/-CRGFBvE8s8k/YT5yRhIEj8I/AAAAAAAAAHM/dplt4qgxJmcjfSP213rWRyF0EoW_BQlSACNcBGAsYHQ/s332/logoPag.png" id="logoUnix">
        </div>
    </div>
    <div class="foo">
        <footer>
            <h2>Pie de página va acá</h2>
        </footer>
    </div>
</body>

</html>