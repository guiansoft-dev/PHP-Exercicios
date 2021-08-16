<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercício 04</title>
</head>
<body>
    <?php
        $x = 'abc';
        $$x = 'def';
        echo "<h2>A variável X tem valor de $x</h2>";
        echo "<h2>A variável ABC recebe o valor de $abc</h2>";
    ?>
</body>
</html>