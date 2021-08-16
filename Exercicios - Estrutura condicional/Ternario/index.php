<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Exercicio Ternário</title>
    </head>
    <body>
        <?php 
            $preco =  34.5 ;
        
            $desconto = ($preco <  20 ) ? $preco *  0.1  : $preco *  0.05 ;
        ?>
        <h1>O desconto é: <?php echo $desconto; ?></h1>
    </body>
</html>