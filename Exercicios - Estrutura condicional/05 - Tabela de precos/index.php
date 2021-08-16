<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Exercicio 05</title>
    </head>
    <body>
        <form method="get">
            <label for="i1" class="campo">Cachorro quente: <input type="radio" name="item" id="i1" value="i1"></label>
            <label for="i2" class="campo">X-Salada: <input type="radio" name="item" id="i2" value="i2"></label>
            <label for="i3" class="campo">X-Bacon: <input type="radio" name="item" id="i3" value="i3"></label>
            <label for="i4" class="campo">Torrada simples: <input type="radio" name="item" id="i4" value="i4"></label>
            <label for="i5" class="campo">Refigerante: <input type="radio" name="item" id="i5" value="i5"></label>
            <label for="qnt" class="campo">Quantos você quer: <input type="number" name="qnt" id="qnt"></label>
            <button type="submit">Enviar</button>
        </form>
        <?php 
            if( isset($_GET['item']) && isset($_GET['qnt']) ){
                $item = $_GET['item'];
                $qnt = $_GET['qnt'];
                $res;

                if( $item == 'i1' )
                {
                    $res = $qnt * 4;
                }
                else if($item == 'i2')
                {
                    $res = $qnt * 4.5;
                }
                else if($item == 'i3')
                {
                    $res = $qnt * 5;
                }
                else if($item == 'i4')
                {
                    $res = $qnt * 2;
                }
                else
                {
                    $res = $qnt * 1.5;
                }
        ?>
            <h1>Valor a pagar: R$ <?php echo number_format($res, 2, ',', '.'); ?></h1>
        <?php };?>
    </body>
</html>