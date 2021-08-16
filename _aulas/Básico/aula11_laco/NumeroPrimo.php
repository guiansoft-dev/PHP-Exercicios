<?php

$num = isset($_GET['num'])?$_GET['num']: 'não passou numero, né amigão';
$multiplos = "";
$numMultiplos = 0;

for($i = 1; $i <= $num; $i++){
    if($num%$i == 0 ){
        $multiplos = $multiplos." ".$i;
        $numMultiplos++;
    }
}

echo "<h1>Analisando o numero $num...</h1>";
echo "<h2>Numeros multiplos $multiplos</h2>";
echo "<h2>Total de multiplos $numMultiplos</h2>";
$msg = ($numMultiplos > 2)? "<h2>Não é primo</h2>": "<h2>É primo</h2>";
echo $msg;
echo "<a href='index.html'>Voltar</a>";

