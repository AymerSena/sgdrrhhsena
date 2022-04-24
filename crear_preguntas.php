<?php
require("sesionJefe.php");
?>
<?php
	if(!empty($_POST["guardar"])) {
	    $conn = mysqli_connect("localhost","root","","sgdrrhhbd");
		$contador = count($_POST["pro_nombre"]);
		$ProContador=0;
		$query = "INSERT INTO tblpreguntaseva(CriPregunta,CriValorPreg) VALUES ";
		$queryValue = "";
		for($i=0;$i<$contador;$i++) {
			if(!empty($_POST["pro_nombre"][$i]) || !empty($_POST["pro_precio"][$i]) || !empty($_POST["pro_cantidad"][$i])) {
				$ProContador++;
				if($queryValue!="") {
					$queryValue .= ",";
				}
				$queryValue .= "('" . $_POST["pro_nombre"][$i] . "', '" . $_POST["pro_precio"][$i] . "', '" . $_POST["pro_cantidad"][$i] . "')";
			}
		}
		$sql = $query.$queryValue;
		if($ProContador!=0) {
		    $resultadocon = mysqli_query($conn, $sql);
			if(!empty($resultadocon)) $resultado = " <br><ul class='list-group' style='margin-top:15px;'>
   <li class='list-group-item'>Registro(s) Agregado Correctamente.</li></ul>";
		}
		$concaQuery = $query+$queryValue;
		$envio=$conn->query($concaQuery);
	}
?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="stylesheet" href="CSS/plantillaConten.css">
<title>Unix Strongest </title>

<!-- Bootstrap core CSS
<link href="dist/css/bootstrap.min.css" rel="stylesheet">
 Custom styles for this template 
<link href="assets/sticky-footer-navbar.css" rel="stylesheet">
<link href="assets/style.css" rel="stylesheet"> -->
<script src="http://code.jquery.com/jquery-2.1.1.js"></SCRIPT>
<script>
function AgregarMas() {
	$("<div>").load("InputDinamico.php", function() {
			$("#productos").append($(this).html());
	});	
}
function BorrarRegistro() {
	$('div.lista-producto').each(function(index, item){
		jQuery(':checkbox', this).each(function () {
            if ($(this).is(':checked')) {
				$(item).remove();
            }
        });
	});
}
</script>

</head>

<body>
<!-- Begin page content -->
<?php
    include("cabecera.php");
?>
<div class="container">
  <h3 class="mt-5">Creación de medios evaluativos</h3>
  <hr>
  <div class="row">
    <div class="col-12 col-md-12"> 
      <!-- Contenido -->
      


<FORM name="frmpreg" method="post" action="presentar_evaluacion.php">
<div id="outer">
<div id="header">
<div class="float-left">&nbsp; Nro.</div>
<div class="float-left col-heading"> Pregunta</div>
<div class="float-left col-heading2"> Valor pregunta</div>
<div class="float-left col-heading2"> Respuesta</div>
</div>
<div id="productos">
<?php require_once("InputDinamico.php") ?>
</div>
<div class="btn-action float-clear">
<input class="btn btn-success" type="button" name="agregar_registros" value="Agregar Mas" onClick="AgregarMas();" />
<input class="btn btn-danger" type="button" name="borrar_registros" value="Borrar Campos" onClick="BorrarRegistro();" />
<span class="success"><?php if(isset($resultado)) { echo $resultado; }?></span>
</div>
<div style="position: relative;">
<input class="btn btn-primary" type="submit" name="guardar" value="Guardar Ahora" />
<input class="btn btn-primary" type="submit" name="finalizar" value="Finalizar" />

</div>
</div>
</form>


      <!-- Fin Contenido --> 
    </div>
  </div>
  <!-- Fin row --> 

  
</div>
<!-- Fin container -->

<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 

<script src="dist/js/bootstrap.min.js"></script>
<?php
    include("pie.php");
    ?>
</body>
</html>