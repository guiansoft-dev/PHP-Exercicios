<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Exercicio 04</title>
    </head>
    <body>
        <form method="get">
            <label for="numFunc" class="campo">Digite o número do funcionário: <input type="text" name="numFunc" id="numFunc"></label>
            <label for="horaTab" class="campo">Digite o valor de horas trabalhadas: <input type="text" name="horaTab" id="horaTab"></label>
            <label for="sal" class="campo">Digite o salário por hora: <input type="text" name="sal" id="sal"></label>
            <button type="submit">Enviar</button>
        </form>
        <?php 
            if( isset($_GET['numFunc']) && isset($_GET['horaTab']) && isset($_GET['sal']) ){
                
                $numFunc = $_GET['numFunc'];

                $valorHT = $_GET['horaTab'];
                $horaTab = floatval($valorHT);

                $valorSal = $_GET['sal'];
                $sal = floatval($valorSal);
        ?>
            <h1>Número do funcionário: <?php echo $numFunc; ?> | Deve receber: U$ <?php echo number_format($sal * $horaTab , 2); ?></h1>
        <?php } ?>
    </body>
</html>