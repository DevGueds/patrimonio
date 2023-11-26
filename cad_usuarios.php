<?php

include_once "config.php";
$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$permissao = $_POST['permissao'];

// $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

// if(empty($dados['nome'])){
//     $retorna = ['erro' => true, 'msg' => "<div class='alert alert-danger' role='alert'> Erro: Preencha o campo nome!</div>"];
// }elseif (empty($dados['usuario'])){
//     $retorna = ['erro' => true, 'msg' => "<div class='alert alert-danger' role='alert'> Erro: Preencha o campo usuário!</div>"];
// }elseif (empty($dados['senha'])){
//     $retorna = ['erro' => true, 'msg' => "<div class='alert alert-danger' role='alert'> Erro: Preencha o campo senha!</div>"];
// }else{
    // $query_usuario = "INSERT INTO cadastro_usuario (nome, usuario, senha) VALUES (:nome, :usuario, :senha)";
    // $cad_usuario = $conexao->prepare($query_usuario);
    // $cad_usuario->bindParam(':nome, $dados['nome'])
    
 

    $query_usuario = mysqli_query($conexao, "INSERT INTO cadastro_usuario(nome,usuario,senha,permissao) 
    VALUES('$nome', '$usuario','$senha','$permissao')");

        

    // $retorna = ['erro' => false, 'msg' => "<div class='alert alert-success' role='alert'> Usuário cadastrado com sucesso!</div>"];
// }

// echo json_encode($retorna);

?>