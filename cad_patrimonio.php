<?php

include_once "config.php";
$descricao = $_POST['descricao'];
$quantidade = $_POST['quantidade'];
$patrimonio = $_POST['patrimonio'];
$valor = $_POST['valor'];
$data_aquisicao = $_POST['data-aquisicao'];
$forma_aquisicao = $_POST['forma-aquisicao'];
$fornecedor = $_POST['fornecedor'];
$empenho = $_POST['empenho'];
$org = $_POST['org'];

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(empty($dados['descricao'])){
     $retorna = ['erro' => true, 'msg' => "<div class='alert alert-danger' role='alert'> Erro: Preencha o campo descricao!</div>"];
}elseif (empty($dados['quantidade'])){
     $retorna = ['erro' => true, 'msg' => "<div class='alert alert-danger' role='alert'> Erro: Preencha o campo quantidade!</div>"];
}elseif (empty($dados['patrimonio'])){
    $retorna = ['erro' => true, 'msg' => "<div class='alert alert-danger' role='alert'> Erro: Preencha o campo numero do patrimonio!</div>"];
}else{
    // $query_usuario = "INSERT INTO cadastro_usuario (nome, usuario, senha) VALUES (:nome, :usuario, :senha)";
    // $cad_usuario = $conexao->prepare($query_usuario);
    // $cad_usuario->bindParam(':nome, $dados['nome'])
    
 
    // $query_usuario_pes = "SELECT id_usuario FROM usuario WHERE usuario=usuario LIMIT 1"; - Verificar o PDO 
    $query_patrimonio = mysqli_query($conexao, "INSERT INTO cadastro_patrimonio(descricao, quantidade, numero_patrimonio, valor, data_aquisicao, forma_aquisicao, fornecedor, empenho, org, data_cadastro) 
    VALUES('$descricao', '$quantidade','$patrimonio','$valor', '$data_aquisicao', '$forma_aquisicao', '$fornecedor', '$empenho', '$org')");

        

    $retorna = ['erro' => false, 'msg' => "<div class='alert alert-success' role='alert'>Patrimonio cadastrado com sucesso!</div>"];
}

echo json_encode($retorna);

?>