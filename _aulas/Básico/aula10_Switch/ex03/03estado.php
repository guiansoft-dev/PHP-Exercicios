<?php

$es = isset($_GET['es'])? $_GET['es']: "[valor inváldo]";

switch ($es){
    case 'AC':
        $es = 'Acre';
        break;
    case 'AL':
        $es = 'Alagoas';
        break;
    case 'AP':
        $ds = 'Amapá';
        break;
    case 'AM':
        $es = 'Amazonas';
        break;
    case 'BH':
        $es = 'Bahia';
        break;
    case 'CE':
        $es = 'Ceará';
        break;
    case 'DF':
        $es = 'Distrito Federal';
        break;
    case 'ES':
        $es = 'Espírito Santo';
        break;
    case 'GO':
        $es = 'Goiás';
        break;
    case 'MA':
        $es = 'Maranhão';
        break;
    case 'MT':
        $es = 'Mato Grosso';
        break;
    case 'MS':
        $es = 'Mato Grosso do Sul';
        break;
    case 'MG':
        $es = 'Minas Gerais';
        break;
    case 'PA':
        $es = 'Pará';
        break;
    case 'PB':
        $es = 'Paraíba';
        break;
    case 'PR':
        $es = 'Paraná';
        break;
    case 'PE':
        $es = 'Pernambuco';
        break;
    case 'PI':
        $es = 'Piauí';
        break;
    case 'RJ':
        $es = 'Rio de Janeiro';
        break;
    case 'RN':
        $es = 'Rio Grande do Norte';
        break;
    case 'RS':
        $es = 'Rio Grande do Sul';
        break;
    case 'RO':
        $es = 'Rondônia';
        break;
    case 'RR':
        $es = 'Roraima';
        break;
    case 'SC':
        $es = 'Santa Catarina';
        break;
    case 'SP':
        $es = 'São Paulo';
        break;
    case 'SE':
        $es = 'Sergipe';
        break;
    case 'TO':
        $es = 'Tocantins';
        break;
    default:
        $es = '[valor inválido]';
        break;
}

echo "<h1>O estado escolhido foi $es</h1>";

switch ($es){
    case '[valor inválido]':
        echo "<h2>Dia da semana inválido</h2>";
        break;
    case 'Amazonas':
    case 'Roraima':
    case 'Amapá':
    case 'Pará':
    case 'Tocantins':
    case 'Rondônia':
    case 'Acre':
        echo "<h2>O estado $es pertence à região norte</h2>";
        break;
    case 'Maranhão':
    case 'Piauí':
    case 'Ceará':
    case 'Rio Grande do Norte':
    case 'Pernambuco':
    case 'Paraibá':
    case 'Sergipe':
    case 'Alagoas':
    case 'Bahia':
        echo "<h2>O estado $es pertence à região nordeste</h2>";
        break;
    case 'Mato Grosso':
    case 'Mato Grosso do Sul':
    case 'Goiás':
        echo "<h2>O estado $es pertenca à região centro-oeste</h2>";
        break;
    case 'São Paulo':
    case 'Rio de Janeiro':
    case 'Espírito Santo':
    case 'Minas Gerais':
        echo "<h2>O estado $es pertence à região sudeste</h2>";
        break;
    default:
        echo "<h2>O estado $es pertence à região sul</h2>";
        break;
}
echo "<a href='index.php'>Voltar</a>";
