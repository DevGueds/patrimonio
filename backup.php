<?php 

// $dataAtual = date("Y-m-d H:i:s");
$data = new DateTime();
$dataAtual = $data->format('d/m/Y H:i:s');
echo $dataAtual;

?>