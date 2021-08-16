<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Exercicio 03</title>
    </head>
    <body>
        <form method="get">
            <label for="numA" class="campo">Digite o valor de A: <input type="number" name="numA" id="numA"></label>
            <label for="numB" class="campo">Digite o valor de B: <input type="number" name="numB" id="numB"></label>
            <button type="submit">Enviar</button>
        </form>
        <?php 
            if( isset($_GET['numA']) && isset($_GET['numB']) ){
                $numA = $_GET['numA'];
                $numB = $_GET['numB'];
                $res = 'são mútiplos';

                if( $numA % $numB != 0 && $numB % $numA != 0 )
                {
                    $res = 'não são múltiplos';
                }
        ?>
            <h1>Os números digitados  <?php echo $res; ?></h1>
        <?php };?>
    </body>
</html>