<?php
include('config.php');
?>
<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SISTEMA DE GERENCIAMENTO DE CHAMADOS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-dark text-light">
  <div class="container-fluid d-flex">
    <div class="container mt-4">
      <form action="salvar.php" method="POST">
        <input type="hidden" name="acao" value="cadNewUser">

        <div class="mb-3">
          <label for="nomeUser" class="form-label">Nome completo</label>
          <input type="text" class="form-control" id="nomeUser" name="nomeUser" placeholder="Digite seu nome completo... ">
        </div>
        <div class="mb-3">
          <label for="username" class="form-label">Nome de Usuario</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Digite o nome de usuario que deseja... ">
        </div>
        <div class="mb-3">
          <label for="mailUser" class="form-label">Email</label>
          <input type="email" class="form-control" id="mailUser" name="mailUser" placeholder="Digite seu melhor Email">
        </div>
        <div class="mb-3">
          <label for="passUser" class="form-label">Digite sua senha</label>
          <input type="text" class="form-control" id="passUser" name="passUser" placeholder="Digite a senha que deseja">
        </div>
        <div class="mb-3">
          <label for="passUser2" class="form-label">Confirme sua senha</label>
          <input type="text" class="form-control" id="passUser2" name="passUser2" placeholder="Digite sua senha novamente">
        </div>
        <div class="mb-3">
          <button type="submit" class="btn btn-primary">ENVIAR</button>
        </div>
    </form>
    </div>
  
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>