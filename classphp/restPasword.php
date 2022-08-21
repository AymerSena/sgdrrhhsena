<?php
class restPasword{

    public function validarContraseña($a, $b, $c, $d){
        require("../conexionBD.php");
        $sentenciaSQL="SELECT * FROM tblusuario WHERE UsuCedula=$d";
        $runQuery=$conexion->query($sentenciaSQL);
        $registro= $runQuery -> fetch_array();

        if ($a==$registro[7] and $b==$registro[11] and $c==$registro[15] ) {
            $validacion=true;
        }else{
            $validacion=false;
        }
return $validacion;
    }
    public function cambioContra($c1,$c2,$d){
        require("../conexionBD.php");
        $mensaje="Sin parametros";
            if ($c1==$c2) {
                $sentSQL="UPDATE tblusuario SET UsuContrasenaSis=$c1 WHERE UsuCedula=$d";
                $runSQL= $conexion->query($sentSQL);
                $mensaje="El cambio de contraseña ha sido exitoso";
                return $mensaje;
            }else{
                $mensaje="No coincidió las contraseñas, por favor intente de nuevo";
                return $mensaje;
            }
        }

}
?>