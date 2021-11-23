

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastramento de clientes</title>
</head>
<body class="bg-perso">

    <div class="container-fluid bg-dark css-container mt-5 text-white">
    <div class="row  center">
        <div class="col mt-2">
               <h1>Cadastro de Clientes</h1>
        </div>
    </div>
    <form action="client-activies/insert.php" method="POST" class="mt-3 m-5">
    <div class="row">
    <div class="col-4">
    <label for="nome" class="form-label" >Nome</label>
    <input type="text" class="form-control " name="nome" aria-describedby="nome"  placeholder=" João">
    </div>
    <div class="col-8">
    <label for="sobrenome" class="form-label" >Sobrenome</label>
    <input type="text" class="form-control " name="sobrenome" aria-describedby="sobrenome" placeholder="Da Silva">
    </div>
    </div>
    <div class="row">
    <div class="col-6">
    <label for="cep" class="form-label" >CPF</label>
    <input type="text" class="form-control " name="cpf" aria-describedby="CPF" placeholder="CPF">
    </div>
    </div>
    <div class="row">
    <div class="col">
    <label for="cep" class="form-label" >CEP</label>
    <input type="text" class="form-control " name="cep" aria-describedby="CEP" placeholder="CEP">
    </div>
    <div class="col">
    <label for="bairro" class="form-label" >Bairro</label>
    <input type="text" class="form-control " name="bairro" aria-describedby="bairro" placeholder="Bairro"> 
    </div>
    </div>
    <div class="row">
    <div class="col-10">
    <label for="rua" class="form-label" >Rua</label>
    <input type="text" class="form-control " name="rua" aria-describedby="rua" placeholder="Rua">
    </div>
    <div class="col-2">
    <label for="num" class="form-label" >Número</label>
    <input type="number" class="form-control " name="num" aria-describedby="num" placeholder="Número">
    </div>
    </div>
    <div class="row">
    <div class="col-4">
    <label for="cidade" class="form-label" >Cidade</label>
    <input type="text" class="form-control " name="cidade" aria-describedby="cidade" placeholder="Cidade">
    </div>
    <div class="col-2">
    <select class="form-select mt-5" value="estado" name="estado" aria-label="Default select example">
            <option selected>Estado</option>
            <option value="AC">AC</option>
            <option value="AL">AL</option>
            <option value="AP">AP</option>
            <option value="AM">AM</option>
            <option value="BA">BA</option>
            <option value="CE">CE</option>
            <option value="ES">ES</option>
            <option value="GO">GO</option>
            <option value="MA">MA</option>
            <option value="MT">MT</option>
            <option value="MS">MS</option>
            <option value="MG">MG</option>
            <option value="PA">PA</option>
            <option value="PB">PB</option>
            <option value="PR">PR</option>
            <option value="PE">PE</option>
            <option value="PI">PI</option>
            <option value="RJ">RJ</option>
            <option value="RN">RN</option>
            <option value="RS">RS</option>
            <option value="RO">RO</option>
            <option value="RR">RR</option>
            <option value="SC">SC</option>
            <option value="SP">SP</option>
            <option value="SE">SE</option>
            <option value="TO">TO</option>
            <option value="DF">DF</option>
      </select>
    </div>
    </div>
    <div class="row">
        <div class="col-8">
        <label for="email" class="form-label" >Email</label>
        <input type="email" class="form-control " name="email" aria-describedby="email" placeholder="example@gmail.com">
        </div>
        <div class="col-4">
        <label for="tel" class="form-label" >Telefone</label>
        <input type="text" class="form-control " name="tel" aria-describedby="tel "placeholder="14 99485-7548">
        </div>
    </div>
    <div class="row">
        <div class="col-8">
        <label for="email" class="form-label" >Usuário</label>
        <input type="text" class="form-control " name="usuario" aria-describedby="email" placeholder="Usuário">
        </div>
        <div class="col-4">
        <label for="tel" class="form-label" >Senha</label>
        <input type="password" class="form-control " name="senha" aria-describedby="tel "placeholder="Senha">
        </div>
    </div>
    
            <button class="btn btn-light mt-5">Cadastrar</button>
        
    
    </form>
    </div>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-3.6.0.js"></script>
</body>
</html>