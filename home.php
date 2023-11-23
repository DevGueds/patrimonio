<?php
  session_start();
  // print_r($_SESSION);
  if((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true))
  {
      unset($_SESSION['usuario']);
      unset($_SESSION['senha']);
      header('Location: login.php');
  }
  $logado = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Sistema de Patrimônio</title>
</head>

<body>
  <div class="conteiner">
    <aside class="menu-lateral">
      <div>
        <header class="menu-lateral-header">
          <img class="logo-img" src="img/logo-2.png" alt="Logotipo Prefeitura">
        </header>

        <nav>
          <a href="#" class="link ativo">
            <span>
              <i class="bi bi-box-seam"></i>
              <span>Patrimônios</span>
          </a>
          <a href="#" class="link">
            <span>
              <i class="bi bi-people"></i>
              <span>Usuários</span>
            </span>
          </a>
          <a href="#" class="link">
            <span>
              <i class="bi bi-file-earmark-text"></i>
              <span>Relatório</span>
            </span>
          </a>
        </nav>
      </div>
      <a href="sair.php">
        <span>
          <i class="bi bi-box-arrow-right"></i>
          <span>Sair</span>
        </span>
      </a>
    </aside>

    <main class="principal">
      <?php
        echo "<h1>Olá, $logado</h1>";
      ?>
      <div class="btn-cadastrar">
        <a href="#">
        <button onclick="abrirModal()" class="cadastrar">Cadastrar</button>
        </a>
      </div>
      <hr class="linha">
      <div class="pesquisar">
        <input type="search" class="form-control" placeholder="Buscar..." id="pesquisar">
        <button class="btn btn-pesquisar">
          <i class="bi bi-search"></i>
        </button>
      </div>
      <h1>Lista de usuários</h1>
    <!-- Modal -->
    
    <div class="modal" id="modal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Cadastrar usuário</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Viniguededs | Marcar paragráfo.</p>
            <form class="row g-3" id="cad-usuario-form">
                <div class="col-md-6">
                   <label for="inputEmail4" class="form-label">Nome</label>
                   <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Permissões</label>
                  <input type="password" class="form-control" id="inputPassword4">
                </div>

            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success">Salvar</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Viniguedes-->
      
    </main>
  </div>
  <!-- Área de Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="js/modal.js"></script>
</body>
</html>