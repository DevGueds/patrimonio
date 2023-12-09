<?php
session_start();
include_once('config.php');
// print_r($_SESSION);
if ((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true)) {
  unset($_SESSION['usuario']);
  unset($_SESSION['senha']);
  header('Location: login.php');
}
$logado = $_SESSION['usuario'];

$sql_bens = "SELECT * FROM cadastro_patrimonio ORDER BY id_patrimonio DESC";

$result_bens = $conexao->query($sql_bens);

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
          <img class="logo-img" src="img/logo.png" alt="Logotipo Prefeitura">
        </header>

        <nav>
          <a href="#" class="link ativo">
            <span>
              <i class="bi bi-box-seam"></i>
              <span>Patrimônios</span>
          </a>
          <a href="usuarios.php" class="link">
            <span>
              <i class="bi bi-people"></i>
              <span>Usuários</span>
            </span>
          </a>
          <a href="#" class="link">
            <span>
              <i class="bi bi-database-down"></i>
              <span>Backup</span>
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
      <div class="header-principal">
        <h1 class="titulo">
          Olá,
          <?php
          echo "$logado";
          ?>
        </h1>
        <div class="btn-cadastrar">
          <button onclick="abrirModal2()" class="relatorio">Relatorio</button>
          <button onclick="abrirModal()" class="cadastrar">Cadastrar</button>
        </div>
      </div>
      <hr class="linha">
      <div class="header-tabela">
        <h3 class="header-tabela-titulo">Bens cadastrados</h1>
          <div class="pesquisar">
            <input type="search" class="form-control" placeholder="Buscar..." id="pesquisar">
            <button class="btn btn-pesquisar">
              <i class="bi bi-search"></i>
            </button>
          </div>
      </div>

      <table class="tabela w-100">
        <thead>
          <th class="header-tabela-text pl-2">Código</th>
          <th class="header-tabela-text">Nome</th>
          <th class="header-tabela-text">Local</th>
          <th class="header-tabela-text">Ação</th>
        </thead>
        <tbody>
          <!-- Inicio Sessão PHP -->
          <?php
          
          while($bens_data = mysqli_fetch_assoc($result_bens)){
            echo "<tr>";
            echo "<td>".$bens_data['id_patrimonio']."</td>";
            echo "<td>".$bens_data['descricao']."</td>";
            echo "<td>".$bens_data['local']."</td>";
            echo "<td>
                <a class='btn btn-deletar' href='#'>Deletar</a>
                <a class='btn btn-editar' href='#'>Editar</a>
            </td>";
            // echo "<td>".$user_data['usuario']."</td>";
            echo "</tr>";
          }
          
          ?>
          <!-- Fim Sessão PHP -->


          <!-- <tr class="tabela-linha">
            <td class="primeira-linha  pl-2">#0298302</td>
            <td>Televisao</td>
            <td>SMS</td>
            <td class="texto-direita ultima-linha">
              <button class="btn btn-deletar">
                Deletar
              </button>
              <button class="btn btn-editar">
                Editar
              </button>
            </td>
          </tr>
          <tr class="tabela-linha">
            <td class="primeira-linha  pl-2">#0298302</td>
            <td>Nobreak</td>
            <td>Pedreira</td>
            <td class="texto-direita ultima-linha">
              <button class="btn btn-deletar">
                Deletar
              </button>
              <button class="btn btn-editar">
                Editar
              </button>
            </td>
          </tr> -->
        </tbody>
      </table>

      <!-- Modal -->
      <div class="modal" id="modal" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Cadastrar Patrimônio</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <!-- <p>Viniguededs | Marcar paragráfo.</p> -->
              <form class="row g-3" id="cad-usuario-form">
                <div class="col-md-4">
                  <label for="inputQtd" class="form-label">Quantidade</label>
                  <input type="number" class="form-control" id="inputQtd">
                </div>
                <div class="col-md-4">
                  <label for="inputNPatrimonio" class="form-label">N° Patrimônio</label>
                  <input type="text" class="form-control" id="inputNPatrimonio">
                </div>
                <div class="col-md-4">
                  <label for="inputValor" class="form-label">Valor</label>
                  <input type="number" class="form-control" id="inputValor">
                </div>
                <div class="col-md-12">
                  <label for="inputDesc" class="form-label">Descricao</label>
                  <input type="text" class="form-control" id="inputDesc">
                </div>
                <div class="col-md-6">
                  <label for="inputData" class="form-label">Data Aquisicao</label>
                  <input type="date" class="form-control" id="inputData">
                </div>
                <div class="col-md-6">
                  <label for="inputFAquisicao" class="form-label">Forma Aquisicao</label>
                  <input type="text" class="form-control" id="inputFAquisicao">
                </div>
                <div class="col-md-4">
                  <label for="inputFornecedor" class="form-label">Fornecedor</label>
                  <input type="text" class="form-control" id="inputFornecedor">
                </div>
                <div class="col-md-4">
                  <label for="inputEmpenho" class="form-label">Empenho</label>
                  <input type="text" class="form-control" id="inputEmpenho">
                </div>
                <div class="col-md-4">
                  <label for="inputLocal" class="form-label">Local</label>
                  <input type="text" class="form-control" id="inputLocal">
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn cadastrar btn-success">Salvar</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal Viniguedes-->

      <!-- Modal -->
      <div class="modal" id="modal2" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Relatorio</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <!-- <p>Viniguededs | Marcar paragráfo.</p> -->
              <form class="row g-3" id="cad-usuario-form">
                <div class="col-md-12">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Detalhado</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Simples</label>
                  </div>
                  
                </div>
                <div class="col-md-6">
                  <label for="inputLocal" class="form-label">Local</label>
                  <select class="form-select" id="inputLocal">
                    <option value="pedreira">Pedreira</option>
                    <option value="pedreira">SMS</option>
                    <option value="pedreira">Inussum</option>
                  </select>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn cadastrar btn-success">Gerar</button>
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