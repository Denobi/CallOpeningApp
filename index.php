<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GERENCIAMENTO DE CHAMADOS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class=" bg-dark">
  <div class="container " style="width: 100%;height: 100vh;display:flex;justify-content:center;align-items: center;">
    <div class="row">
      <div class="col-lg-4 offset-lg-4 text-white">
        <div class="card" style="width: 28rem;">
          <div class="card-body">
            <h3>Acesso Restrito</h3>
          </div>
          <div class="card-body">
            <form action="login.php" method="POST">
              <div>
                <div class="mb-3">
                  <label for="username" class="form-label">Nome de Usuario</label>
                  <input type="text" name="username" class="form-control" id="username">
                </div>
              </div>
              <div>
                <div class="mb-3">
                  <label for="passwords" class="form-label">Senha</label>
                  <input type="password" name="passwords" class="form-control" id="passwords">
                </div>
              </div>
              <div>
                <div class="mb-3">
                  <button type="submit" class="btn btn-warning">LOGAR</button>
                </div>
                <div class="mb-3">
                <p class="text-end">Não possui cadastro ainda?<a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="cadUsersNew.php"> Cadastrar-se</a></p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>