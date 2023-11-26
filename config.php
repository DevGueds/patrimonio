<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'patrimonio';

    $conexao = new mysqli($dbHost, $dbUsername,$dbPassword,$dbName);

    // $conexao = new PDO("mysql:host=$dbhost;dbname=". $dbName, $dbUsername,$dbPassword);


    // if($conexao->connect_errno)
    // {
    //     echo "Erro";
    // }
    // else
    // {
    //     echo "Conexão efetuada com sucesso";
    // }

?>