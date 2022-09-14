<?php
class usuario{
    public function consultForAreasinjefe($area,$idLider){
        require("./conexionBD.php");
        $sentSQL= "SELECT * FROM tblusuario WHERE UsuForaArea='$area' AND NOT UsuCedula='$idLider'";
        $optenerResult=$conexion->query($sentSQL);
        return $optenerResult;
    }
    public function consultOneUsuario($idFuncionario){
        require("./conexionBD.php");
        $sentSQL= "SELECT * FROM tblusuario WHERE UsuCedula='$idFuncionario'";
        $optenerResult=$conexion->query($sentSQL);
        return $optenerResult;
    }
    public function actualizarDataBasica($nombre,$apellido,$genero,$direccion,$barrio,$correo,$telefono,$fechanaci,$documento){
        require("./conexionBD.php");
        $sentSQL= "UPDATE tblusuario SET UsuNombre='$nombre', UsuApellido='$apellido', UsuGenero='$genero', UsuDireccion='$direccion',UsuBarrio='$barrio',UsuCorreo='$correo',UsuTelefono='$telefono', UsuFechaNaci='$fechanaci' WHERE UsuCedula='$documento'";
        $optenerResult=$conexion->query($sentSQL);
    }
    public function consultarEmpleadosSinAdm(){
        require("./conexionBD.php");
        $sentSQL="SELECT * FROM tblusuario WHERE NOT UsuCedula=1";
        $runSQL=$conexion->query($sentSQL);
        return $runSQL;
    }
    public function consultarFuncionarioPorarea($area){
        require("./conexionBD.php");
        $sentSQL="SELECT * FROM tblusuario WHERE NOT UsuCedula=1 AND UsuForaArea='$area' AND UsuForaArea='$area'";
        $runSQL=$conexion->query($sentSQL);
        return $runSQL;
    }
}
?>