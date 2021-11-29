<?php
          session_start();
          
          if(!isset($_SESSION['carrinho'])){ 
             $_SESSION['carrinho'] = array();
          }
          
          //adiciona produto
          
          if(isset($_GET['acao'])){
             
             //ADICIONAR CARRINHO
             if($_GET['acao'] == 'add'){
                $id = intval($_GET['id']);
                if(!isset($_SESSION['carrinho'][$id])){
                   $_SESSION['carrinho'][$id] = 1;
                }else{
                   $_SESSION['carrinho'][$id] += 1;
                }
             }
             
             //REMOVER CARRINHO
             if($_GET['acao'] == 'del'){
                $id = intval($_GET['id']);
                if(isset($_SESSION['carrinho'][$id])){
                   unset($_SESSION['carrinho'][$id]);
                }
             }
             
             //ALTERAR QUANTIDADE
             if($_GET['acao'] == 'up'){
                if(is_array($_POST['prod'])){
                   foreach($_POST['prod'] as $id => $qtd){
                      $id  = intval($id);
                      $qtd = intval($qtd);
                      if(!empty($qtd) || $qtd <> 0){
                         $_SESSION['carrinho'][$id] = $qtd;
                      }else{
                         unset($_SESSION['carrinho'][$id]);
                      }
                   }
                }
             }
          
          }
          
          
    ?>
   <!DOCTYPE html>
   <html lang="pt-br">
   <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public\css\bootstrap.min.css">
    <link rel="stylesheet" href="css/carrinho.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Carrinho de compras</title>   
   </head>

    <body>
    <table>
        
    <div class="container-fluid">
    <table class="table table-hover table-borderless">
        <thead>
          <tr>
            <th scope="col">Descrição</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Preço</th>
            <th scope="col">Subtotal</th>
            <th scope="col">Remover</th>
          </tr>
        </thead>
        <form action="?acao=up" method="post">
        <tfoot>
               <tr>
                <td colspan="5"><input type="submit" value="Atualizar Carrinho" /></td>
                <tr>
                <td colspan="5"><a href="home.php">Continuar Comprando</a></td>
        </tfoot>
         
     

                   <?php
                         if(count($_SESSION['carrinho']) == 0){
                            echo '<tr><td colspan="5">Não há produto no carrinho</td></tr>';
                         }else{
                           $conn = mysqli_connect("localhost", "root", "","usuario");
                           $total = 0;
                            foreach($_SESSION['carrinho'] as $id => $qtd){
                                  $sql   = "SELECT *  FROM veiculo WHERE id= '$id'";
                                  $qr    = mysqli_query($conn, $sql) or die(mysqli_error());
                                  $ln    = mysqli_fetch_assoc($qr);
                                  
                                  $nome  = $ln['modelo'];
                                  $preco = number_format($ln['preco'], 2, ',', '.');
                                  $sub   = number_format($ln['preco'] * $qtd, 2, ',', '.');
                                  
                                  $total += $ln['preco'] * $qtd; 
          
                               
                               echo '
                               <tbody>
                                  <tr>       
                                     <th scope = "row">'.$nome.'</td>
                                     <td><input type="text" size="3" name="prod['.$id.']" value="'.$qtd.'" /></td>
                                     <td>R$ '.$preco.'</td>
                                     <td>R$ '.$sub.'</td>
                                     <td><a href="?acao=del&id='.$id.'"><i class="fas fa-minus-circle"></i></a></td>
                                  </tr>';
                            }
                               $total = number_format($total, 2, ',', '.');
                               echo '<tr>
                                        <td colspan="4">Total</td>
                                        <td>R$ '.$total.'</td>
                                  </tr> </tbody>';
                                 
                         }
                   ?>
      
    </table>
    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/bootstrap.js"></script>

    </body>
    </html>
