<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php

    $nota1 = isset($_GET['nota1'])?$_GET['nota1']:0;
    $nota2 = isset($_GET['nota2'])?$_GET['nota2']:0;
    $media = ($nota1 + $nota2)/2;
    $status = "";

    if($media < 5){
        $status = 'REPROVADO';
    }elseif ($media < 7){
        $status = "RECUPERAÇÃO";
    }else{
        $status = "APROVADO";
    }

    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .colorido{
            font-weight: bold;
            color: #ff0756;
        }
    </style>
    <title>Conferindo nota</title>
</head>
<body>
    <h1>Você tirou <span class="colorido"><?php echo $nota1 ?></span> na primeira prova e <span class="colorido"><?php echo $nota2 ?></span> na segunda, ficou com média <span class="colorido"><?php echo $media ?></span></h1>
    <p>Seu status é de <span class="colorido"><?php echo $status ?></span</p>
    <a href="index.php">Voltar</a>
</body>
</html>