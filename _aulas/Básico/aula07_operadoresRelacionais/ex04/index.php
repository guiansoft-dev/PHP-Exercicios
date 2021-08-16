<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eleição</title>
</head>
<body>
    <?php
        $ano = $_GET['ano'];
        $idade = 2019 - $ano;
        echo "<h1>Quem nasceu no ano de $ano tem $idade anos</h1>";
        $voto = ($idade > 17 && $idade < 65)? "é obrigado": "não obrigatório";
        echo "<h2>Teu voto é $voto</h2>"
    ?>
</body>
</html>