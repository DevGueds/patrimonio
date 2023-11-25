<?php

include_once "config.php";

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(empty($dados['nome'])){
    $retorna = ['erro' => true, 'msg' => "<div class='alert alert-danger' role='alert'> Erro: Preencha o campo nome!</div>"];
}elseif (empty($dados['usuario'])){
    $retorna = ['erro' => true, 'msg' => "<div class='alert alert-danger' role='alert'> Erro: Preencha o campo usuário!</div>"];
}elseif (empty($dados['senha'])){
    $retorna = ['erro' => true, 'msg' => "<div class='alert alert-danger' role='alert'> Erro: Preencha o campo senha!</div>"];
}else{
    $retorna = ['erro' => false, 'msg' => "<div class='alert alert-success' role='alert'> Usuário cadastrado com sucesso!</div>"];
}

echo json_encode($retorna);

?>