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
            <label for="numA" class="campo">Digite o valor de A: <input type="text" name="numA" id="numA"></label>
            <label for="numB" class="campo">Digite o valor de B: <input type="text" name="numB" id="numB"></label>
            <label for="numC" class="campo">Digite o valor de C: <input type="text" name="numC" id="numC"></label>
            <button type="submit">Enviar</button>
        </form>
        <?php 
            if( isset($_GET['numA']) && isset($_GET['numB']) && isset($_GET['numC']) ){
                
                $valorA = $_GET['numA'];
                $numA = floatval($valorA);

                $valorB = $_GET['numB'];
                $numB = floatval($valorB);

                $valorC = $_GET['numC'];
                $numC = floatval($valorC);
        ?>
            <ul>
                <li>A área do triângulo: <?php echo number_format( $numA * $numC / 2 , 3 ); ?></li>
                <li>A área do circulo: <?php echo number_format( 3.14159 * pow($numC , 2) , 3 ); ?></li>
                <li>A área do trapézio: <?php echo number_format( ($numA + $numB) * $numC / 2 , 3 ); ?></li>
                <li>A área do quadrado: <?php echo number_format( pow($numB, 2) , 3 ); ?></li>
                <li>A área do retângulo: <?php echo number_format( $numA * $numB , 3 ); ?></li>
            </ul>
        <?php };?>
    </body>
</html>