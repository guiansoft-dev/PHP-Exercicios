<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>
<body>
    <?php
        function soma(){
            $p = func_get_args();
            $tot = func_num_args();
            $s = 0;

            for($i = 0; $i < $tot; $i++){
                $s = $s + $p[$i];
            }
            return $s;
        }
        $res = soma(12,34,5,2,78,90);
        echo "<h2>Deu isso ae $res</h2>"
    ?>
</body>
</html>