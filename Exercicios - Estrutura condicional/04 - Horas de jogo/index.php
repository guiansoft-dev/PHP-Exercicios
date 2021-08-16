<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Exercicio 04 </title>
    </head>
    <body>
        <form method="get">
            <label for="ini" class="campo">Quando o jogo começou: <input type="number" name="ini" id="ini"></label>
            <label for="fim" class="campo">Quando o jogo terminou: <input type="number" name="fim" id="fim"></label>
            <button type="submit">Enviar</button>
        </form>
        <?php 
            if( isset($_GET['ini']) && isset($_GET['fim']) ){
                $ini = $_GET['ini'];
                $fim = $_GET['fim'];
                $res = 24 - $ini + $fim;

                if( $ini < $fim )
                {
                    $res = $fim - $ini;
                }
        ?>
            <h1>O jogo durou <?php echo $res; ?> horas</h1>
        <?php };?>
    </body>
</html>