<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
    
</head>
<body class="bg-perso">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark nav-css">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Vinícius Locadora</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contato</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cadastros
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="funcionario.php">Funcionários</a></li>
            <li><a class="dropdown-item" href="index.php">Clientes</a></li>
            <li><a class="dropdown-item" href="veiculo.php">Veículos</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Pesquisar</button>
      </form>
    </div>
  </div>
</nav>
<div class="container-fluid bg-dark css-container mt-5 text-white">
    <div class="row justify-content-center  center">
        <div class="col-8 col-md-6 col-sm-4 mt-2">
               <h1>Cadastro</h1>
        </div>
    </div>
    <form action="cadastro-activities/insert.php" method="POST" class="mt-3 m-5 center">
    <div class="row justify-content-center">
    <div class="col-4 col-md-3 col-sm-2">
    <label for="placa" class="form-label" >Usuário</label>
    <input type="text" class="form-control c" name="usuario"  placeholder="Usuário">
    </div>
    </div>
    <div class="row justify-content-center">
    <div class="col-4 col-md-3 col-sm-2  ">
    <label for="chassi" class="form-label" >Senha</label>
    <input type="password" class="form-control " name="senha"  placeholder="Senha">
    </div>
    </div>
    <div class="row justify-content-center">
    <div class="col-4 col-md-3 col-sm-2  ">
    <label for="chassi" class="form-label" >Repita a senha</label>
    <input type="password" class="form-control " name="senha2"  placeholder="Senha">
    </div>
    </div>
     <div class="row justify-content-center">
        <div class="col mt-5">
            <button class="btn btn-light " >Entrar</button>
        </div>
    </div>
    <div class="row">
      <div class="col mt-4">
           <p>Ja tem cadastro?</p><a href="login.php">Clique aqui.</a>
      </div>
    </div>
    </form>
    </div>
    <script src="js/bootstrap.js"></script>
<script src="js/jquery-3.6.0.js"></script>
</body>
</html>