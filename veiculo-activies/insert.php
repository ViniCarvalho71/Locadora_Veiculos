<?php


$placa = $_POST['placa'];
$chassi = $_POST['chassi'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$ano = $_POST['fabricacao'];
$km = $_POST['km'];
$cor = $_POST['cor'];
$tipo = $_POST['tipo'];
$preco = $_POST['preco'];
$imagem = $_POST['imagem'];


$conectar = mysqli_connect("localhost","root","","usuario") or die
('Não foi possível conectar');

//Executar tarefa sql
$sql = "INSERT INTO veiculo(placa,chassi,marca,modelo,fabricacao,km,cor,tipo,preco,imagem) VALUES ('$placa','$chassi','$marca','$modelo','$ano','$km','$cor','$tipo','$preco','$imagem')";
$operacao = mysqli_query($conectar,$sql);



?>