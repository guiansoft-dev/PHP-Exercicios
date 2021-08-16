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
            <label for="num" class="campo">Digite o numero: <input type="number" name="num" id="num"></label>
            <button type="submit">Enviar</button>
        </form>
        <?php 
            if( isset($_GET['num']) ){
                $num = $_GET['num'];
                $res = 'não negativo';

                if($num < 0)
                {
                    $res = 'negativo';
                }
        ?>
            <h1>O número digitado é <?php echo $res; ?></h1>
        <?php };?>
    </body>
</html>