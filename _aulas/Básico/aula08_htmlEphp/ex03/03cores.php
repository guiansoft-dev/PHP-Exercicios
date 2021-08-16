<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        $texto = isset($_GET['texto'])?$_GET['texto']:"Texto padrão";
        $tamanho = isset($_GET['tamanho'])?$_GET['tamanho']:"14pt";
        $cor = isset($_GET['cor'])?$_GET['cor']:"#000";
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .texto{
            font-size: <?php echo $tamanho; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
    <title>Texto formatado</title>
</head>
<body>
    <?php
        echo "<p class='texto'>$texto</p>"
    ?>
    <a href="index.php">Voltar</a>
</body>
</html>