<?php
// contador
//echo count(['Console de TV', 100, true]) . PHP_EOL;

// remover valores duplicados de um array
$array = [
    'Laranja',
    'Vermelho',
    'Azul',
    'Azul',
    'Vermelho',
    'Preto'
];
// array_unique discarta um valor repetido
//var_dump(array_unique($array));


// in_array para saber se um valor desejado está no array ele retorna um valor boleano false ou true
//var_dump(in_array('Preto', $array));

// função para juntar 2 array
var_dump(array_merge($array, ['Jhones', 30, 27]));