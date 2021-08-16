<?php

$ano = isset($_GET['ano'])?$_GET['ano']:"[Você não digitou a idade]";
$idade = date("Y") - $ano;
echo "<h1>Você tem $idade anos</h1>";

if($idade > 17){
    echo "<h2>Você pode dirrigir</h2>";
    echo "<h2>Você pode votar</h2>";
}else{
    echo "<h2>Você não pode dirrigr</h2>";
    echo "<h2>Você não pode votar</h2>";
}
echo "<a href='index.php'>Voltar</a>";
