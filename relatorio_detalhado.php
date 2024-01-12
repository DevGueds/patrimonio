<?php
$tipo_relatorio = $_GET["tipo_relatorio"];
$local = $_GET["local"];

//echo $tipo_relatorio;
//echo $local;
if($tipo_relatorio=="Detalhado"){

}
if($tipo_relatorio=="Simples"){

}
?>

<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">Código</th>
        <th scope="col">Descrição</th>
        <th scope="col">Quantidade</th>
        <th scope="col">Número Patrimonio</th>
        <th scope="col">Data aquisição</th>
        <th scope="col">Forma aquisição</th>
        <th scope="col">Localdestino</th>
        <th scope="col">Data Cadastro</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
    </tr>
    </tbody>
</table>
