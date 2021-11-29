<?php
  session_start();
  unset($_SESSION['usuario']);
  unset($_SESSION['funcionario']);
  header("location:login.php")
  
?>