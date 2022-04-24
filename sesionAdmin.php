<?php
session_start();
if(!isset($_SESSION['rol'])){
    header('location: Index.php');
}else{
    if($_SESSION['rol'] != 1){
        header('location: Index.php');
    }
}

if(isset($_POST["cierre"])){
    session_unset(); 
    session_destroy(); 
    header('location: Index.php');
}

?>