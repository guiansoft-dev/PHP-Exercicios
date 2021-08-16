<?php

$nome = isset($_GET['nome'])?$_GET['nome']: '[não informado]';
$ano = isset($_GET['ano'])?$_GET['ano']:0;
$sexo = isset($_GET['sexo'])?$_GET['sexo']:'[não informado]';
$idade = $ano != 0?date("Y") - $ano:'[não informado]';

echo "<h1>$nome tem $idade anos e é do sexo $sexo</h1>";
echo "<a href='index.php'>Voltar</a>";