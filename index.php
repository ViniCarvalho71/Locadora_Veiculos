<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Login de Clientes</title>
    
</head>
<body class="bg-perso">

<div class="container-fluid bg-dark css-container mt-5 text-white">
    <div class="row justify-content-center  center">
        <div class="col-8 col-md-6 col-sm-4 mt-2">
               <h1>Login de Clientes</h1>
        </div>
    </div>
    <form action="login-activities/login.php" method="POST" class="mt-3 m-5 center">
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
        <div class="col mt-5">
            <button class="btn btn-light " >Entrar</button>
        </div>
    </div>
    <div class="row">
      <div class="col mt-4">
           <p>Não é cadastrado?</p><a href="cliente.php">Clique aqui.</a>
      </div>
    </div>
    </form>
    <div class="row center">
      <div class="col mt-4">
           <button class="btn btn-light" href="login-funcionario.php"><a href="login-funcionario.php">Login de Funcionário</a></button>
      </div>
    </div>
    </div>
    <script src="js/bootstrap.js"></script>
<script src="js/jquery-3.6.0.js"></script>
</body>
</html>