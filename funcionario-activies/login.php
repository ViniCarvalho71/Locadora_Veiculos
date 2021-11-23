<?php


  $login = $_POST['usuario'];
  $senha = MD5($_POST['senha']);


  //criar conecção com o servidor
  $conectar = mysqli_connect("localhost","root","","usuario") or die
  ('Não foi possível conectar');

  //Executar tarefa sql
  $sql = "SELECT * FROM funcionarios WHERE usuario = '$login' AND senha = '$senha'";
  $operacao = mysqli_query($conectar,$sql) or die
  ('Não foi possível');
  
  
  if(mysqli_num_rows($operacao)<=0){
    echo "Usuário não cadastrado ou dados inválidos";
  } 
  else {
    echo "Login efetuado com sucesso";
    if(isset($login)){
      session_start();
      $_SESSION['funcionario'] = $login;
    }
  }

  header("location:../veiculo.php");
  
   /*while($sql = mysqli_fetch_array($operacao)){
       $login1 = $sql['usuario'];
       $senha1 = $sql['senha'];
       $cod = $sql['cod'];

       echo $login1 . "<br>";
       echo $senha1 . "<br>";
       echo $cod . "<br>";
      }*/
   
?>