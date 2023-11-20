<?php
  session_start();
  include_once('config.php');
  // print_r($_SESSION);
  if((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true))
  {
    unset($_SESSION['usuario']); // Este código - Vinicius Guedes
    unset($_SESSION['senha']);
    header('Location: login.php');
  }
  $logado = $_SESSION['usuario'];

  $sql = "SELECT * FROM cadastro_usuario ORDER BY id_usuario DESC";

  $result = $conexao->query($sql);


  // print_r($result);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="css/principal.css" />
  <title>Home</title>
</head>

<body>
  <main>
    <aside>
      <nav>
        <ul>
          <li class="item-menu">
            <a class="menu" href="#">
              <span class="icon"><i class="bi bi-house"></i></span>
              <span class="txt-link">Home</span>
            </a>
          </li>
          <li class="item-menu menu-switch">
            <button class="menu">
              <span class="icon"><i class="bi bi-person"></i></span>
              <span class="txt-link">Cadastro</span>
            </button>
            <ul class="sub-menu">
              <li class="item-menu item-submenu">
                <a class="menu" href="cadastro-usuario.php">
                  <span class="icon"><i class="bi bi-person"></i></span>
                  <span class="txt-link"></span>Usuário
                </a>
              </li>
              <li class="item-menu item-submenu">
                <a class="menu" href="#">
                  <span class="icon"><i class="bi bi-bank"></i></span>
                  <span class="txt-link">Patrimônio</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="item-menu">
            <a class="menu" href="#">
              <span class="icon"><i class="bi bi-file-earmark-bar-graph"></i></span>
              <span class="txt-link">Relatório</span>
            </a>
          </li>
          <li class="item-menu">
            <a class="menu" href="#">
              <span class="icon"><i class="bi bi-question-circle"></i></span>
              <span class="txt-link">Ajuda</span>
            </a>
          </li>
          <li class="item-menu">
            <a class="menu" href="sair.php">
              <span class="icon"><i class="bi bi-box-arrow-right"></i></span>
              <span class="txt-link">Sair</span>
            </a>
          </li>
        </ul>
      </nav>
      <!--menu-lateral-->
    </aside>
    <!--conteudo-lateral-->
  </main>
  <!-- conteudo principal -->
  <script src="js/menu.js"></script>
</body>

</html>