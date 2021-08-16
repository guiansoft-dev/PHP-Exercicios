<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Exercicio 08</title>
    </head>
    <body>
        <form method="get">
            <label for="sal" class="campo">Digite o seu salário: <input type="text" name="sal" id="sal"></label>
            <button type="submit">Enviar</button>
        </form>
        <?php 
            if( isset($_GET['sal']) ){
                $valorSal = $_GET['sal'];
                $sal = floatval($valorSal);
                $res;

                if( $sal <= 2000 )
                {
                    $res = "Vocês está isento de imposto";
                }
                else if( $sal > 2000.01 && $sal <= 3000)
                {
                    $imp = number_format(($sal - 2000) * 0.08, 2, ",", ".");
                    $res = "Você deverá pagar R$ $imp de imposto";
                }
                else if( $sal > 3000.01 && $sal <= 4500)
                {
                    $imp = number_format(($sal - 3000) * 0.18  + 1000 * 0.08, 2, ",", ".");
                    $res = "Você deverá pagar R$ $imp de imposto";
                }
                else
                {
                    $imp = number_format(($sal - 4500) * 0.28 + 1500 * 0.18 + 1000 * 0.08, 2, ",", ".");
                    $res = "Você deverá pagar R$ $imp de imposto";
                }
        ?>
            <h1><?php echo $res; ?></h1>
        <?php };?>
    </body>
</html>