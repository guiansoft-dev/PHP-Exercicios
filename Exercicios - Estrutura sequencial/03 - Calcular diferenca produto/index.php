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
            <label for="numA" class="campo">Digite o valor de A: <input type="text" name="numA" id="numA"></label>
            <label for="numB" class="campo">Digite o valor de B: <input type="text" name="numB" id="numB"></label>
            <label for="numC" class="campo">Digite o valor de C: <input type="text" name="numC" id="numC"></label>
            <label for="numD" class="campo">Digite o valor de D: <input type="text" name="numD" id="numD"></label>
            <button type="submit">Enviar</button>
        </form>
        <?php 
            if( isset($_GET['numA']) && isset($_GET['numB']) && isset($_GET['numC']) && isset($_GET['numD']) ){
                
                $valorA = $_GET['numA'];
                $numA = floatval($valorA);

                $valorB = $_GET['numB'];
                $numB = floatval($valorB);

                $valorC= $_GET['numC'];
                $numC = floatval($valorC);

                $valorD = $_GET['numD'];
                $numD = floatval($valorD);
        ?>
            <h1> A diferença entre os produtos de A * B e C * D é: <?php echo $numA * $numB - $numC * $numD; ?></h1>
        <?php } ?>
    </body>
</html>