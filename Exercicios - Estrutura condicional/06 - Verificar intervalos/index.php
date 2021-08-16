<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Exercicio 06</title>
    </head>
    <body>
        <form method="get">
            <label for="num" class="campo">Digite o número: <input type="text" name="num" id="num"></label>
            <button type="submit">Enviar</button>
        </form>
        <?php 
            if( isset($_GET['num']) ){
                $valor = $_GET['num'];
                $num = floatval($valor);

                if( $num > 0 && $num <= 25 )
                {
                    $res = 'Intervalo 0 | 25';
                }
                else if( $num > 25 && $num <= 50)
                {
                    $res = 'Intervalo 25 | 50';
                }
                else if( $num > 50 && $num <= 75)
                {
                    $res = 'Intervalo 50 | 75';
                }
                else if( $num > 75 && $num <= 100)
                {
                    $res = 'Intervalo 75 | 100';
                }
                else
                {
                    $res = 'Fora do intervalo';
                }
        ?>
            <h1><?php echo $res; ?></h1>
        <?php };?>
    </body>
</html>