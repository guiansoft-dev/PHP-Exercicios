<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercício 03</title>
</head>
<body>
    <?php
        $a = 4;
        $b = &$a;
        $b += 4;
        echo "<h2>O valor de A é $a</h2>";
        echo "<h2>O valor de B é $b</h2>";
    ?>
</body>
</html>