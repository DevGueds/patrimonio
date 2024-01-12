<?php
include_once('config.php');
$id_patrimonio = $_POST["id_patrimonio"];
$quantidade = $_POST["quantidade"];
$patrimonio = $_POST["patrimonio"];
$valor = $_POST["valor"];
$descricao = $_POST["descricao"];
$data_aquisicao = $_POST["data_aquisicao"];
$forma_aquisicao = $_POST["forma_aquisicao"];
$fornecedor = $_POST["fornecedor"];
$empenho = $_POST["empenho"];
$org = $_POST["org"];

$sql = "UPDATE cadastro_patrimonio set descricao='$descricao', quantidade='$quantidade', numero_patrimonio='$patrimonio', valor='$valor', data_aquisicao='$data_aquisicao', forma_aquisicao='$forma_aquisicao', fornecedor='$fornecedor', empenho='$empenho',local='$org' where id_patrimonio=".$id_patrimonio;
//  echo $sql;
// exit;
$query_patrimonio = mysqli_query($conexao, $sql);

header('Location: home.php');

?>

