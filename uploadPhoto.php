<?php
require("sesionCompartida.php");
include("cabecera.php");

$docuFuncioLogueado = $_SESSION["idUs"]; 

?>


</style>
<div class="main">
    <?php
    
    $directorio = 'Imagenes/';
    $subir_archivo = $directorio . basename($_FILES['subir_archivo']['name']);
    echo "<div>"; 
    if (move_uploaded_file($_FILES['subir_archivo']['tmp_name'], $subir_archivo)) {
        echo "El archivo es válido y se cargó correctamente.<br><br>";
        echo "<a href='" . $subir_archivo . "' target='_blank'><img src='" . $subir_archivo . "' width='150'></a>";
    } else {
        echo "La subida ha fallado";
    }
    echo "</div>";
    require("conexionBD.php");
   ///Esta variable le hace falta capturar el documento del funcionario logueado por el momento se pone manual.
    $query = $conexion->query("UPDATE tblusuario SET UsuFotoPerfil ='$subir_archivo' WHERE UsuCedula ='$docuFuncioLogueado'");
    ?>
    <br>
    <div style="border:1px solid #000000; text-transform:uppercase">
        <h3 align="center">
            <div align="center"><a href="photoPerfil.php">Volver</a></div>
        </h3>
    </div>
</div>

<?

include("pie.php");
?>