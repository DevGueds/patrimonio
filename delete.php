<?php

    session_start();
    include_once('config.php');

    $id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
    $result_usuario = "DELETE FROM cadastro_usuario WHERE id_usuario='$id'";
    $resultado_usuario = mysqli_query($conexao, $result_usuario);

    if(mysqli_affected_rows($conexao)){
        $_SESSION['msg'] = "<p style='color: green;'> Usuário apagado com sucesso</p>";
        header('Location: usuarios.php');
    }else{
        $_SESSION['msg'] = "<p style='color: red;'> Erro: Usuário não foi apagado</p>";
        header('Location: usuarios.php');

    }
    
    
   
?>