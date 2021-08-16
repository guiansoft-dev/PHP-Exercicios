<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercício 2</title>
</head>
<body>
    <?php
        $anoAtual = $_GET['aa']; #Essa linha vai pegar o ano na url
        echo "<h2>O ano atual é $anoAtual, o ano anterior é ".--$anoAtual.", o ano que vem será ".($anoAtual+=2)."</h2>";
    ?>
</body>
</html>