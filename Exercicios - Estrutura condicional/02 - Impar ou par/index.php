<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Exercicio 02</title>
    </head>
    <body>
        <form method="get">
            <label for="num" class="campo">Digite o numero: <input type="number" name="num" id="num"></label>
            <button type="submit">Enviar</button>
        </form>
        <?php 
            if( isset($_GET['num']) ){
                $num = $_GET['num'];
                $res = 'par';

                if($num % 2 != 0)
                {
                    $res = 'impar';
                }
        ?>
            <h1>O número digitado é <?php echo $res; ?></h1>
        <?php };?>
    </body>
</html>