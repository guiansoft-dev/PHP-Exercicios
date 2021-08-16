<?php

$valor = $_GET['valor'];
$raiz = number_format(sqrt($valor),2,',','.');

echo "<h1>O valor da raiz de $valor é $raiz</h1>";
echo "<a href='index.php'>Voltar</a>";
