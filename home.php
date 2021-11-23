<?php  include "verifyall/verifica.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Login</title>
    
</head>
<body >
<nav class="navbar navbar-expand-lg navbar-dark bg-dark nav-css text-white">
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
            <li><a class="dropdown-item" href="cliente.php">Clientes</a></li>
            <li><a class="dropdown-item" href="veiculo.php">Veículos</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
        <button class="btn btn-outline-light " type="submit">Pesquisar</button>
      </form>
      <form action="login-activities/logout.php">
      <button class="btn btn-outline-light logout " type="submit"><i class="fas fa-sign-out-alt"></i></button>
      </form>
    </div>
  </div>
</nav>
<div class="row mt-2">
  <div>
    <h1>Veículos</h1>
  </div>
</div>
<?php
          $conn=mysqli_connect("localhost", "root", "","usuario");      
          $sql = "SELECT * FROM veiculo";
          $qr = mysqli_query($conn,$sql) or die(mysqli_error());
          echo '<div class="container-fluid mt-5 center">
          <div class="row center produtos justify-content-center">';
          while($ln = mysqli_fetch_assoc($qr)){
            echo '<div class=" m-4 box col-11 col-sm-4 col-md-4">';
             echo '<h2 class="mt-2">'.$ln['modelo'].'</h2> <br />';   
             echo '<img class="img-fluid" src="img/'.$ln['imagem'].'" /> <br />';
             echo 'Preço : R$ '.number_format($ln['preco'], 2, ',', '.').'<br />';
             echo '<form action="carrinho.php?acao=add&id='.$ln['id'].'">
             <button class=" mt-3 mb-3 btn btn-outline-dark bg-dark btn-css" type="submit"><a href="carrinho.php?acao=add&id='.$ln['id'].'">Comprar</a></button>
             </form>';
             echo '</div>';
            
          }
          echo '
             </div>
         </div>';
    ?>

   <script src="js/jquery-3.6.0.js"></script>
    <script src="js/bootstrap.js"></script>

</body>
</html>