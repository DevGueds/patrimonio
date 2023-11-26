<?php

    session_start();
    include_once('config.php');

    $id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
    $result_usuario = "DELETE FROM cadastro_usuario WHERE id_usuario='$id'";
    $resultado_usuario = mysqli_query($conexao, $result_usuario);

    header('Location: usuarios.php');
?>