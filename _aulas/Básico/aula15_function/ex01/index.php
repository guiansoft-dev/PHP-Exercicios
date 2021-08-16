<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function por referência</title>
</head>
<body>
    <?php
        function soma(&$x){
            $x += 2;
            echo $x;
        }
        $a = 3;
        soma($a);
        echo $a;
    ?>
</body>
</html>