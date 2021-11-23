<?php 
if(session_status() == PHP_SESSION_NONE){
    session_start();
}
if(empty($_SESSION['funcionario']) && empty($_SESSION['usuario'])){
    header("location:index.php");
}

?>