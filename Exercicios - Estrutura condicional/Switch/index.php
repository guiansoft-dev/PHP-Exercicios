<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Exercicio Switch</title>
    </head>
    <body>
        <form method="get">
            <label for="dia" class="campo">Digite o número de 1 a 7: <input type="number" name="dia" id="dia" min="1" max="7"></label>
            <button type="submit">Enviar</button>
        </form>
        <?php 
            if( isset($_GET['dia']) ){
                $dia = $_GET['dia'];

                switch($dia){
                    case 1:
                        $res = "Domingo";
                    break;
                    case 2:
                        $res = "Segunda";
                    break;
                    case 3:
                        $res = "Terça";
                    break;
                    case 4:
                        $res = "Quarta";
                    break;
                    case 5:
                        $res = "Quinta";
                    break;
                    case 6:
                        $res = "Sexta";
                    break;
                    case 7:
                        $res = "Sábado";
                    break;
                    default:
                        $res = "Inválido";
                    break;
                }
        ?>
            <h1>O dia da semana é: <?php echo $res; ?></h1>
        <?php };?>
    </body>
</html>