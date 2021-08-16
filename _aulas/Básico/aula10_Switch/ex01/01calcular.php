<?php

$num = isset($_GET['num'])?$_GET['num']: "[dados não informados]";
$operacao = isset($_GET['op'])?$_GET['op']: "[dados não informados]";
echo "<h1>Você escolheu numero $num e a operação $operacao</h1>";

switch ($operacao){
    case 'dobro':
        $resultado = $num * 2;
        echo "<h2>O resultado é $resultado</h2>";
        break;
    case 'cubo':
        $resultado = pow($num,3);
        echo "<h2>O resultado é $resultado</h2>";
        break;
    case 'raiz': 
        $resultado = sqrt($num);
        echo "<h2>O resultado é ".number_format($resultado, 2)."</h2>";
        break;
    default:
        echo "<h2> Alog saiu errado, tente novamente</h2>";
        break;
}

echo "<a href='index.php'>Voltar</a>";
