<<<<<<< HEAD
<?php
session_start();
if(!isset($_SESSION['rol'])){
    header('location: Index.php');
}else{
    if($_SESSION['rol'] != 2){
        header('location: Index.php');
    }
}

if(isset($_POST["cerrar_sesion"])){
    session_unset(); 
    session_destroy(); 
    header('location: Index.php');
}
=======
<?php
session_start();
if(!isset($_SESSION['rol'])){
    header('location: Index.php');
}else{
    if($_SESSION['rol'] != 2){
        header('location: Index.php');
    }
}

if(isset($_POST["cerrar_sesion"])){
    session_unset(); 
    session_destroy(); 
    header('location: Index.php');
}
>>>>>>> codaym
?>