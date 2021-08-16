<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Igual Idêntico</title>
</head>
<body>
    <?php
        $n1 = 4;
        $n2 = '4';
        $res = ($n1 === $n2)? 'SIM':'NÃO';
        echo "As variavéis são iguais? $res";
    ?>
</body>
</html>