<?php

    session_start();
    include_once('config.php');

    $id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
    $result_patrimonio = "DELETE FROM cadastro_patrimonio WHERE id_patrimonio='$id'";
    $resultado_patrimonio = mysqli_query($conexao, $result_patrimonio);

    header('Location: home.php');
?>