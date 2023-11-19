<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'patrimonio';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

// if($conexao->connect_errno)
// {
//     echo "Erro";
// }
// else{
//     echo "Conexão realizada com sucesso | Viniguedes.";
// }

?>