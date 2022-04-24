<?php
session_start();
if(!isset($_SESSION['rol'])){
    header('location: Index.php');
}else{
    if($_SESSION['rol'] != 1){
        header('location: Index.php');
    }
}
?>