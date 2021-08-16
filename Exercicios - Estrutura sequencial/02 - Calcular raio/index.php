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
            <label for="raio" class="campo">Digite o valor do raio: <input type="text" name="raio" id="raio"></label>
            <button type="submit">Enviar</button>
        </form>
        <?php 
            if( isset($_GET['raio']) ){
                $valor = $_GET['raio'];
                $raio = floatval($valor);
        ?>
            <h1> A área é de: <?php echo round( 3.14159 * pow($raio, 2), 4 ); ?></h1>
        <?php } ?>
    </body>
</html>