<?php

$prod = "Leite";
$preco = 4.5;

//printf escreve e formata o texto
printf("<p>O %s custa R$ %.2f</p>", $prod, $preco);

$v[0] = 4;
$v[1] = 8;
$v[2] = 3;

//print_r mostra vetores
echo "<p>";
print_r($v);
echo "</p>";

$v2 = array (1,2,3,4,5,6,7,8,9);

print_r($v2);

$txt = "      PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP PHP            ";
$r = wordwrap($txt, 16  , "<br>\n");
echo "<p>$r</p>";

//strlen mostra o numero de caracteres
echo strlen($txt);

// trim apaga os espaços que vem no começo e no fim, deixa os espaços entre as palavras, ltrim tira só os do começo, rtrim mostra só os do fim.
$novoTxt = trim($txt);

echo "<br>";
echo strlen($novoTxt);

// str_word_count 0: conta as palavras, str_word_count 1: mostra um array com cada indice sendo uma palavra, str_wod_count 2: mostra um array onde os valores do inices é onde a palavra começa
$frase = "fui comprar arroz no mercado";
$cont = str_word_count($frase,0);

echo "<br>";
echo $cont;
echo "<br>";

//serve para elimnir o caractere indicado no começo e retonar um array separado por onde ouve a exploção
$site = "Batata online";
$vetor = explode(" ", $site);
print_r($vetor);

$tecla = chr(67);
$numero = ord("C");
echo $tecla;
echo $numero;