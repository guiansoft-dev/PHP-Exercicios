<?php

$n = array(1,3,2,7,4,5);
$n[] = 98;

print_r($n);
echo "<br>";

$c = range(5,20,3);

foreach($c as $item){
    echo "<p>$item</p>";
}

$vetorPersonalizado = array(4=> 34, 5=> "Paulo", "oi"=> 54);
$vetorPersonalizado[] = "Eae";
unset($vetorPersonalizado[5]);

print_r($vetorPersonalizado);

$vetorAssociado = array ("nome"=> "Paulo", "idade"=> 18, "sexo"=> "Masculino");
$vetorAssociado[] = "novo";

foreach($vetorAssociado as $indice => $valor){
    echo "<p>O campo $indice tem o valor $valor</p>";
}


$matriz = array(array(1,2), array(3,4), array(5,6));
$matriz[1][0] = $matriz[2][1];

print_r($matriz);
