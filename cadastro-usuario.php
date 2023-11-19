<?php
if (isset($_POST['submit'])) {
  // print_r('Nome: ' .$_POST['nome']);
  // print_r('<br>');
  // print_r('Usuário: ' .$_POST['usuario']);
  // print_r('<br>');
  // print_r('Senha: ' .$_POST['senha']);
  // print_r('<br>');
  // print_r('Permissão: ' .$_POST['permissao']);

  include_once('config.php');

  $nome = $_POST['nome'];
  $usuario = $_POST['usuario'];
  $senha = $_POST['senha'];
  $permissao = $_POST['permissao'];

  $result = mysqli_query($conexao, "INSERT INTO cadastro_usuario(nome,usuario,senha,permissao)
    VALUES ('$nome', '$usuario', '$senha', '$permissao')");
}


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="css/cadastro-usuario.css" />
  <link rel="stylesheet" href="css/principal.css" />
  <title>Cadastrar Usuario</title>
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
    <div class="content-form">
      <h1>Cadastro de usuário</h1>
      <form action="cadastro-usuario.php" method="POST">
        <label for="usuario">Usuario: </label>
        <input type="text" name="usuario" id="usuario" />

        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" />

        <label for="senha">Senha: </label>
        <input type="password" name="senha" id="senha" />

        <label for="permissao">Permissão: </label>
        <select id="permissao" name="permissao">
          <option value="administrador">Administrador</option>
          <option value="usuario" selected>Usuário</option>
        </select>
        <input type="submit" name="submit" value="Cadastrar" />
      </form>
      <div class="listagem m-5">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nome</th>
              <th scope="col">Usuário</th>
              <th scope="col">Senha</th>
              <th scope="col">Permissão</th>
              <th scope="col">...</th>
            </tr>
          </thead>
          <tbody>
            <?php
            while ($user_data = mysqli_fetch_assoc($result)) {
              echo "<tr>";
              echo "<td>" . $user_data['id'] . "</td>";
              // echo "<td>" . $user_data['nome'] . "</td>";
              // echo "<td>" . $user_data['usuario'] . "</td>";
              // echo "<td>" . $user_data['senha'] . "</td>";
              // echo "<td>" . $user_data['permissao'] . "</td>";
              // echo "<td>" . $user_data['...'] . "</td>";
              // echo "</tr>";
            }
            ?>

          </tbody>
        </table>
      </div>
    </div>
  </main>
  <!-- conteudo principal -->
  <script src="js/menu.js"></script>
</body>

</html>