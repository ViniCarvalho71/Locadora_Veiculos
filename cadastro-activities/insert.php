<?php

    $login = $_POST['usuario'];
    $senhaV = $_POST['senha'];
    $senha = MD5($senhaV);
    $senha2 = $_POST['senha2'];


    //criar conecção com o servidor
     $conectar = mysqli_connect("localhost","root","","usuario") or die
     ('Não foi possível conectar');

     $sqlbusca = "SELECT * FROM cadastro WHERE usuario = '$login'";

     $resultado = mysqli_query($conectar, $sqlbusca) or die ("Não foi possível buscar os dados");
     

       if($senhaV == "" || $senhaV  == null){

          echo "O campo senha não pode estar vazio";

     } else if(strlen(utf8_decode($senhaV)) <= 7){

           echo "A senha deve ter no mínimo 8 carácteres";

     } else if($login == "" || $login == null ){

         echo "O campo usuário não pode ser vazio";

     } else if (mysqli_num_rows($resultado)>0){

         echo "O usuário ja existe";

     } else if($senha2 != $senhaV){

        echo "As duas senhas devem ser iguáis";

     } else if(mysqli_num_rows($resultado)<=0) {

        $sql = "INSERT INTO cadastro(senha,usuario) VALUES ('$senha','$login')";
        $operacao = mysqli_query($conectar,$sql);
        echo "Usuário inserido com sucesso!!";
        
     }

    
     
?>