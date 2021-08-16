<?php

$vetor = array("a", "de","be","cd","disco voador");

array_shift($vetor);
array_unshift($vetor, "oi");
array_push($vetor, 90);
$vetor[] = 87;
array_pop($vetor);

var_dump($vetor);

$quantidade = count($vetor);
echo "<p>O vetor tem $quantidade itens</p>";

$numeros = array(1,34,56,7,88,9,0,12);
sort($numeros);

print_r($numeros);

rsort($numeros);

echo "<br>";
print_r($numeros);

asort($numeros);

echo "<br>";
print_r($numeros);

arsort($numeros);

echo "<br>";
print_r($numeros);

ksort($numeros);

echo "<br>";
print_r($numeros);

ksort($numeros);

echo "<br>";
print_r($numeros);
