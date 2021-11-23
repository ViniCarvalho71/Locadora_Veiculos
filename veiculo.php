<?php  include "funcionario-activies/verifica.php"  ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="login.css">
    <title>Cadastramento de veículos</title>
    
</head>
<body class="bg-perso">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark nav-css text-white">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Vinícius Locadora</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contato</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cadastros
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="cliente.php">Clientes</a></li>
            <li><a class="dropdown-item" href="veiculo.php">Veículos</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Pesquisar</button>
      </form>
      <form action="funcionario-activies/logout.php">
      <button class="btn btn-outline-light" type="submit">Logout</button>
      </form>
    </div>
  </div>
</nav>
<div class="container-fluid bg-dark css-container mt-5 text-white">
    <div class="row justify-content-center  center">
        <div class="col-8 col-md-6 col-sm-4 mt-2">
               <h1>Cadastro de Veículos</h1>
        </div>
    </div>
    <form action="veiculo-activies/insert.php" method="POST" class="mt-3 m-5">
    <div class="row">
    <div class="col-4 ol-md-3 col-sm-2">
    <label for="placa" class="form-label" >Placa</label>
    <input type="text" class="form-control c" name="placa" aria-describedby="placa"  placeholder=" Placa">
    </div>
    </div>
    <div class="row">
    <div class="col-4 col-md-4 col-sm-3">
    <label for="chassi" class="form-label" >Chassi</label>
    <input type="text" class="form-control " name="chassi" aria-describedby="chassi" placeholder="Chassi">
    </div>
    </div>
    <div class="row">
    <div class="col-4  col-md-3 col-sm-3">
    <label for="marca" class="form-label" >Marca</label>
    <input type="text" class="form-control " name="marca" aria-describedby="marca" placeholder="Marca">
    </div>
    <div class="col-4 col-md-4 col-sm-3">
    <label for="modelo" class="form-label" >Modelo</label>
    <input type="text" class="form-control " name="modelo" aria-describedby="modelo" placeholder="Modelo"> 
    </div>
    </div>
    <div class="row">
    <div class="col-3 col-md-3 col-sm-3">
    <label for="frabicação" class="form-label" >Ano de Fabricação</label>
    <input type="number" class="form-control " name="fabricacao" aria-describedby="fabricação" placeholder="Ano de Fabricação">
    </div>
    <div class="col-2  col-md-2 col-sm-2">
    <label for="km" class="form-label" >Kilometragem</label>
    <input type="number" class="form-control " name="km" aria-describedby="nkm" placeholder="Kilometragem">
    </div>
    <div class="col-4 mt-5">
    <span id="passwordHelpInline" class="form-text text-white">
      Km*
    </span>
    </div>
    <div class="row">
    <div class="col-4  col-md-3 col-sm-2">
    <label for="cor" class="form-label" >Cor</label>
    <input type="text" class="form-control " name="cor" aria-describedby="cor" placeholder="Cor">
    </div>
    <div class="col-8  col-md-6 col-sm-4">
    <label for="tipo" class="form-label" >Tipo</label>
    <input type="text" class="form-control " name="tipo" aria-describedby="tipo" placeholder="tipo">
     </div>
     </div>
     <div class="row">
    <div class="col-4  col-md-3 col-sm-2">
    <label for="cor" class="form-label" >Preço</label>
    <input type="text" class="form-control " name="preco" aria-describedby="cor" placeholder="Preço sem o R$">
    </div>
    <div class="col-8  col-md-6 col-sm-4">
    <label for="tipo" class="form-label" >Imagem</label>
    <input type="text" class="form-control " name="imagem" aria-describedby="tipo" placeholder="nome da imagem.jpg">
     </div>
     </div>
     <div class="row">
        <div class="col mt-5">
            <button class="btn btn-light" >Cadastrar</button>
        </div>
    </div>
    </form>
    </div>
    <script src="js/bootstrap.js"></script>
<script src="js/jquery-3.6.0.js"></script>
</body>
</html>