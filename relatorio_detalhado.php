<?php
include_once('config.php');

use Dompdf\Dompdf;
use Dompdf\Options;

$local = isset($_GET['local']) ? $_GET['local'] : '';
$sql_simples = "SELECT 
                    id_patrimonio,
                    descricao,
                    quantidade,
                    numero_patrimonio,
                    valor,
                    DATE_FORMAT(data_aquisicao,'%d/%m/%Y') AS data_aquisicao,
                    forma_aquisicao,
                    fornecedor,
                    empenho,
                    local,
                    CONCAT(DATE_FORMAT(data_cadastro,'%d/%m/%Y'), ' ', DATE_FORMAT(data_cadastro,'%H:%i:%s')) AS data_cadastro
                FROM
                    patrimonio.cadastro_patrimonio";
if (!empty($local)) {
    $sql_simples = $sql_simples . " WHERE local='$local'";
}
$res = $conexao->query($sql_simples);

ob_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Patrimônio</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
        }

        .text-center {
            text-align: center;
        }

        .table-container {
            margin-top: 20px;
            text-align: center;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 8px;
            text-align: left;
        }

        .table th {
            background-color: #f2f2f2;
            width: 10%;
            /* Ajuste a largura conforme necessário */
        }

        .table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .table tr:nth-child(odd) {
            background-color: #ffffff;
        }
    </style>
</head>

<body>
    <div class="text-center">

        <h1>PREFEITURA MUNICIPAL DE CAPANEMA</h1>
        <h2>Secretaria Municipal de Saúde</h2>
        <h3>Relatório de Bens Permanente</h3>
    </div>

    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Descrição</th>
                    <th>Quantidade</th>
                    <th>Número Patrimônio</th>
                    <th>Valor</th>
                    <th>Data Aquisição</th>
                    <th>Forma Aquisição</th>
                    <th>Fornecedor</th>
                    <th>Empenho</th>
                    <th>Local</th>
                    <th>Data Cadastro</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($linha = mysqli_fetch_assoc($res)) : ?>
                    <tr>
                        <td><?php echo $linha['id_patrimonio'] ?></td>
                        <td><?php echo $linha['descricao'] ?></td>
                        <td><?php echo $linha['quantidade'] ?></td>
                        <td><?php echo $linha['numero_patrimonio'] ?></td>
                        <td><?php echo $linha['valor'] ?></td>
                        <td><?php echo $linha['data_aquisicao'] ?></td>
                        <td><?php echo $linha['forma_aquisicao'] ?></td>
                        <td><?php echo $linha['fornecedor'] ?></td>
                        <td><?php echo $linha['empenho'] ?></td>
                        <td><?php echo $linha['local'] ?></td>
                        <td><?php echo $linha['data_cadastro'] ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    <?php
    // Geração do PDF
    $html = ob_get_clean();

    require './vendor/autoload.php';

    $options = new Options();
    $options->set('isHtml5ParserEnabled', true);
    $options->set('isPhpEnabled', true);

    $dompdf = new Dompdf($options);
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'landscape');
    $dompdf->render();
    $dompdf->stream('relatorio_detalhado.pdf', ['Attachment' => 0]);
    ?>
</body>

</html>