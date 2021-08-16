<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testando PHP</title>
</head>
<body>
    <?php
    if(isset($_GET['a']) & isset($_GET['b'])){
        $n1 = $_GET['a'];
        $n2 = $_GET['b'];
    }else{
        $n1 = 18;
        $n2 = 12;
    }
    $soma = $n1 + $n2;
    $sub = $n1 - $n2;
    $multi = $n1 * $n2;
    echo "<h2>A soma entre $n1 e $n2 é $soma</h2>";
    echo "<h2>A subtração entre $n1 e $n2 é $sub</h2>";
    echo "<h2>A multiplicação entre $n1 e $n2 é $multi</h2>";
    echo "<h2>A divisão entre $n1 e $n2 é ".($n1/$n2)."</h2>";
    echo "<h2>O resto (modúlo) entre $n1 e $n2 é ".($n1%$n2)."</h2>";
    echo "<h2>A média entre $n1 e $n2 é ".(($n1 + $n2) / 2)."</h2>";
    echo "<h2>O valor abosoluto de $n2 - $n1 é ".abs($n2 - $n1)."</h2>";
    echo "<h2>O valor de $n2<sup>$n2</sup> é ".pow($n2, $n2)."</h2>";
    echo "<h2>A raiz quadrada de $n1 é ".sqrt($n1)."</h2>";
    echo "<h2>O valor arredondado de $n1 divido por $n2 é ".round($n1/$n2)."</h2>";
    echo "<h2>A parte ineteira do resultado de $n1 divido por $n2 é ".intval($n1/$n2)."</h2>";
    echo "<h2>O valor de $n1 em reais é R$".number_format($n1,2,',','.')."</h2>";
    ?>
</body>
</html>