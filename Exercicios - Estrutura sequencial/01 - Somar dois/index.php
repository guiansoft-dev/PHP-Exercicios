<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Exercicio 01</title>
    </head>
    <body>
        <form method="get">
            <label for="num1" class="campo">Digite o primeiro valor: <input type="number" name="num1" id="num1"></label>
            <label for="num2" class="campo">Digite o segundo valor: <input type="number" name="num2" id="num2"></label>
            <button type="submit">Enviar</button>
        </form>
        <?php 
            if( isset($_GET['num1']) && isset($_GET['num2']) ){
                $num1 = $_GET['num1'];
                $num2 = $_GET['num2'];
        ?>
            <h1><?php echo $num1 + $num2; ?></h1>
        <?php } ?>
    </body>
</html>