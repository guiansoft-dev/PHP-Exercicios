<?php

$diasemana = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado');

$data = date('Y-m-d');

$diasemana_numero = date('w', strtotime($data));

echo $diasemana[$diasemana_numero];
?>