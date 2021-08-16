<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercícios 01</title>
</head>
<body>
    <?php
        $preco = $_GET['p'];
        echo "<h2>O preço do produto é R$".number_format($preco, 2, ',', '.')."</h2>";
        $preco += $preco * 10/100;
        echo "<h2>O novo preço com 10% de aumento é de R$".number_format($preco, 2, ',', '.')."</h2>"
    ?>
</body>
</html>