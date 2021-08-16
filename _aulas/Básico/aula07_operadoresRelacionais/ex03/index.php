<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Situação</title>
</head>
<body>
    <?php
        $nota1 = $_GET['n1'];
        $nota2 = $_GET['n2'];
        $media = ($nota1 + $nota2)/2;
        echo "<h1>Sua mêdia é $media</h1>";
        echo (($media >= 7)?'<h2>PASSOU NEEGÃO</h2>':'<h2>REPROVOU NEGUIM</h2>');
    ?>
</body>
</html>