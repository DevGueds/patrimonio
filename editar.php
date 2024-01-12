<?php
session_start();
include_once('config.php');

if ((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header('Location: login.php');
} else {
    $logado = $_SESSION['usuario'];

    $sql_bens = "SELECT * FROM cadastro_patrimonio ORDER BY id_patrimonio DESC";
    $result_bens = $conexao->query($sql_bens);
}
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
                    <a href="home.php" class="link">
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
            </div>
            <hr class="linha">

            <h3 class="header-tabela-titulo">Alterar Patromônio</h3>
            <?php
            $id_patrimonio = $_GET["id"];
            $sql_bens = "SELECT * FROM cadastro_patrimonio where id_patrimonio=$id_patrimonio";
            $result_bens = $conexao->query($sql_bens);
            $bens_data = mysqli_fetch_assoc($result_bens);
            print_r($bens_data);
            
            ?>
            <div class="modal-body">
                <!-- <p>Viniguededs | Marcar paragráfo.</p> -->
                <form class="row g-3" id="cad-patrimonio-form" method="POST" action="editar_update.php">
                    <input type="hidden" name="id_patrimonio" value="<?php echo $bens_data["id_patrimonio"] ?>">
                    <span id="msgAlertErroCad"></span>
                    <span id="msgAlert"></span>
                    <div class="col-md-4">
                        <label for="inputQtd" class="form-label">Quantidade</label>
                        <input type="number" name="quantidade" class="form-control" id="inputQtd" value="<?php echo $bens_data["quantidade"] ?>" required>
                    </div>
                    <div class="col-md-4">
                        <label for="inputNPatrimonio" class="form-label">N° Patrimônio</label>
                        <input type="text" name="patrimonio" class="form-control" id="inputNPatrimonio" value="<?php echo $bens_data["numero_patrimonio"] ?>" required>
                    </div>
                    <div class="col-md-4">
                        <label for="inputValor" class="form-label">Valor</label>
                        <input type="number" name="valor" class="form-control" id="inputValor" value="<?php echo $bens_data["valor"] ?>" required>
                    </div>
                    <div class="col-md-12">
                        <label for="inputDesc" class="form-label">Descricao</label>
                        <input type="text" name="descricao" class="form-control" id="inputDesc" value="<?php echo $bens_data["descricao"] ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputData" class="form-label">Data Aquisicao</label>
                        <input type="date" name="data_aquisicao" class="form-control" id="inputData" value="<?php echo $bens_data["data_aquisicao"] ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputFAquisicao" class="form-label">Forma Aquisicao</label>
                        <input type="text" name="forma_aquisicao" class="form-control" id="inputFAquisicao" value="<?php echo $bens_data["forma_aquisicao"] ?>" required>
                    </div>
                    <div class="col-md-4">
                        <label for="inputFornecedor" class="form-label">Fornecedor</label>
                        <input type="text" name="fornecedor" class="form-control" id="inputFornecedor" value="<?php echo $bens_data["fornecedor"] ?>" required>
                    </div>
                    <div class="col-md-4">
                        <label for="inputEmpenho" class="form-label">Empenho</label>
                        <input type="text" name="empenho" class="form-control" id="inputEmpenho" value="<?php echo $bens_data["empenho"] ?>" required>
                    </div>
                    <div class="col-md-4">
                        <label for="inputLocal" class="form-label">Local</label>

                        <select class="form-select" id="inputLocal" name="org" required>
                            <option value="pedreira" <?php if ($bens_data["local"] == "pedreira") echo 'selected' ?>>Pedreira</option>
                            <option value="sms" <?php if ($bens_data["local"] == "sms") echo 'selected' ?>>SMS</option>
                            <option value="inussum" <?php if ($bens_data["local"] == "inussum ") echo 'selected' ?>>Inussum</option>
                        </select>

                    </div>
                    <div class="col-md-12">
                        <input type="submit" class="btn cadastrar btn-success" value="Alterar">
                    </div>
                </form>
        </main>
    </div>
    <!-- Área de Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>