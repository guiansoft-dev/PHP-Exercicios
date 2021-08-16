<?php

$ano = isset($_GET['ano'])?$_GET['ano']:"[Você não digitou a idade]";
$idade = date("Y") - $ano;
echo "<h1>Você tem $idade anos</h1>";

if($idade < 16){
    echo "<h2>Você não pode votar</h2>";
}elseif (($idade > 15 && $idade < 18) || $idade > 65){
    echo "<h2>Voto opcional</h2>";
}else{
    echo "<h2>Voto obrigatório</h2>";
}
echo "<a href='index.php'>Voltar</a>";