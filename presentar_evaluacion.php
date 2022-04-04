<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unix Strongest</title>
</head>
<body>
    <h1> Bienvenido</h1> 
  <p>En esta sección se pondran a prueba tus conocimientos con respecto a toda la parte organizacional , las preguntas son con respuesta de opción multiple (si ó no). </p>  
  
</body>
<?php
require("conexionBD.PHP");// conexion a BD
if ($conexion -> connect_error){
 //echo "Conexion errada";
}else{
//echo "Conexion exitosa";
}
$sql1="SELECT * FROM tblpreguntaseva;";
$dd=$conexion ->query($sql1);
foreach($dd as $ee){
    echo $ee["CriPregunta"]."</br>";
    ?>
    <br>
    <br>
    <?php
    echo $ee["CriValorPreg"]."</br>";
}

?>

</html>