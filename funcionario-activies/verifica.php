

<?php
 if(session_status() == PHP_SESSION_NONE){
     session_start();
 }
 if(empty($_SESSION['funcionario'])){
     header("location:index.php");
 }
$_SESSION['usuario'] = "";
?>