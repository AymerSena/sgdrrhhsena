<?php
session_start();
if(!isset($_SESSION['rol'])){
    header('location: index.php');
}else{
    if($_SESSION['rol'] > 3 ){
        session_unset(); 
        session_destroy(); 
        header('location: Index.php');
    }
}
if(isset($_POST["cerrar_sesion"])){
    session_unset(); 
    session_destroy(); 
    header('location: Index.php');
}
?>