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
      <a href="#">
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
        <button class="cadastrar">Cadastrar</button>
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
    </main>
  </div>
</body>

</html>