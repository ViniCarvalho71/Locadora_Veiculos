<?php
$cpf = $_POST['cpf'];
$telefone = $_POST['tel'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$num = $_POST['num'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$email = $_POST['email'];
$rua = $_POST['rua'];
$usuario = $_POST['usuario'];
$senha = MD5($_POST['senha']);
$nome_completo = $nome . " " . $sobrenome;



//criar conecção com o servidor
$conectar = mysqli_connect("localhost","root","","locadora_veiculos") or die
('Não foi possível conectar');

//Executar tarefa sql
$sql = "INSERT INTO cliente(nome,cpf,telefone,num,rua,bairro,cep,cidade,estado,email,usuario,senha) VALUES ('$nome_completo','$cpf','$telefone','$num','$rua','$bairro','$cep','$cidade','$estado','$email','$usuario','$senha')";
$operacao = mysqli_query($conectar,$sql);



?>