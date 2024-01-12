<?php
$tipo_relatorio = $_GET["tipo_relatorio"];
$local = $_GET["local"];

if($tipo_relatorio=="Detalhado"){
    header("Location: relatorio_detalhado.php?local=$local");
}
if($tipo_relatorio=="Simples"){
    header("Location: relatorio_simples.php?local=$local");
}
?>