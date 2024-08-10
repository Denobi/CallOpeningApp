<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SISTEMA DE GERENCIAMENTO DE CHAMADOS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-dark text-light" >
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="dashComum.php">
        <img src="img/_4d757b64-4f4d-461d-af45-66c08f090cfc.jpg" alt="Bootstrap" width="50" height="44">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="dashComum.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=novoTicket">Abrir Chamado</a>
          </li>
          
        </ul>
        <span class="navbar-text p-2">
            SISTEMA DE GERENCIAMENTO DE CHAMADOS
          
              <a class="btn btn-danger ms-3" href="logout.php">SAIR</a>
           
        </span>
      </div>
    </div>
  </nav>

  <div class="container m-5">
  <?php
    include('config.php');

    switch (@$_REQUEST['page']) {
      case "novoTicket":
       include("createticket.php");
        break;
        case "salvar":
            include("salvar.php");
             break;
      default:
        print("<h1>INICIO</h1>");
        break;
    }
  ?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>