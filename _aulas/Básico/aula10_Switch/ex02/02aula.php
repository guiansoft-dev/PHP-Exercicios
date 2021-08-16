<?php

$ds = isset($_GET['ds'])? $_GET['ds']: "[valor inváldo]";

switch ($ds){
    case 2:
        $ds = 'segunda-feira';
        break;
    case 3:
        $ds = 'terça-feira';
        break;
    case 4:
        $ds = 'quarta-feira';
        break;
    case 5:
        $ds = 'quinta-feira';
        break;
    case 6:
        $ds = 'sexta-Feira';
        break;
    case 7:
        $ds = 'sábado';
        break;
    case 8:
        $ds = 'domingo';
        break;
    default:
        $ds = '[valor inválido]';
        break;
}

echo "<h1>O dia da semana escolhido foi $ds</h1>";

switch ($ds){
    case '[valor inválido]':
        echo "<h2>Dia da semana inválido</h2>";
        break;
    case 'sábado':
    case 'domingo':
        echo "<h2>No $ds não tem aula</h2>";
        break;
    default:
        echo "<h2>Na $ds você tem aula</h2>";
        break;
}
echo "<a href='index.php'>Voltar</a>";
