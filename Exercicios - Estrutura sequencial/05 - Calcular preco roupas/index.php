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
            <label for="codPeca" class="campo">Digite o código da peça: <input type="text" name="codPeca" id="codPeca"></label>
            <label for="qntPeca" class="campo">Digite a quantida de peças: <input type="text" name="qntPeca" id="qntPeca"></label>
            <label for="precoPeca" class="campo">Digite o preço: <input type="text" name="precoPeca" id="precoPeca"></label>
            
            <label for="codPeca1" class="campo">Digite o código da peça: <input type="text" name="codPeca1" id="codPeca1"></label>
            <label for="qntPeca1" class="campo">Digite a quantida de peças: <input type="text" name="qntPeca1" id="qntPeca1"></label>
            <label for="precoPeca1" class="campo">Digite o preço: <input type="text" name="precoPeca1" id="precoPeca1"></label>

            <button type="submit">Enviar</button>
        </form>
        <?php 
            if( isset($_GET['codPeca']) && isset($_GET['codPeca1']) && isset($_GET['qntPeca']) && isset($_GET['qntPeca1']) && isset($_GET['precoPeca']) && isset($_GET['precoPeca1']) ){
                
                $codPeca = $_GET['codPeca'];
                $codPeca1 = $_GET['codPeca1'];

                $valorQntPeca = $_GET['qntPeca'];
                $qntPeca = floatval($valorQntPeca);

                $valorQntPeca1 = $_GET['qntPeca1'];
                $qntPeca1 = floatval($valorQntPeca1);

                $valorprecoPeca = $_GET['precoPeca'];
                $precoPeca = floatval($valorprecoPeca);

                $valorprecoPeca1 = $_GET['precoPeca1'];
                $precoPeca1 = floatval($valorprecoPeca1);
        ?>
            <h1>Valor a pagar: R$ <?php echo number_format($qntPeca * $precoPeca + $qntPeca1 * $precoPeca1 , 2); ?></h1>
        <?php };?>
    </body>
</html>