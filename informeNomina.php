<?php include('Template/cabecera.php'); ?>
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
                       <option value="*">Seleccione área</option>
                   </select>
                   <select name="peopleSelect" id="peopleSelect">
                       <option value="*">Selccione funcionario</option>
                   </select>
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
    <?php include('Template/pie.php'); ?>