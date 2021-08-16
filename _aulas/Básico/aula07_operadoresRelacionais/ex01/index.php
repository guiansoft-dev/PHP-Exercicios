<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operação</title>
</head>
<body>
    <?php
        $n1 = $_GET['a'];
        $n2 = $_GET['b'];
        $tipo = $_GET['op'];
        echo "<h1>Os valores adicionados foram $n1 e $n2</h1>";
        $r = ($tipo == 's')?$n1+$n2:$n1*$n2;
        echo $r;
    ?>
</body>
</html>