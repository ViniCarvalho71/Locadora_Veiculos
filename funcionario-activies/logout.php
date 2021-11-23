<?php
  session_start();
  unset($_SESSION['funcionario']);
  header("location:../login-funcionario.php")
?>