<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Exercicio 07</title>
    </head>
    <body>
        <form method="get">
            <label for="x" class="campo">Digite o valor do eixo X: <input type="text" name="x" id="x"></label>
            <label for="y" class="campo">Digite o valor do eixo Y: <input type="text" name="y" id="y"></label>
            <button type="submit">Enviar</button>
        </form>
        <?php 
            if( isset($_GET['x']) && isset($_GET['y']) ){
                $valorX = $_GET['x'];
                $x = floatval($valorX);

                $valorY = $_GET['y'];
                $y = floatval($valorY);

                $res;

                if( $x > 0 && $y > 0 )
                {
                    $res = 'no quadrante 1';
                }
                else if( $x < 0 && $y > 0)
                {
                    $res = 'no quadrante 2';
                }
                else if( $x < 0 && $y < 0)
                {
                    $res = 'no quadrante 3';
                }
                else if($x > 0 && $y < 0)
                {
                    $res = 'no quadrante 4';
                }
                else
                {
                    $res = 'na origem';
                }
        ?>
            <h1>Você está <?php echo $res; ?></h1>
        <?php };?>
    </body>
</html>