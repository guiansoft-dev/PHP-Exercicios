<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplos Aula 04</title>
</head>
<body>
    <pre>
        <?php
            //Importando classe
            require_once 'Canetas.php';

            //Instânciando objetos
            $canetaUm = new Canetas("Bic", "Azul", 0.5);

            //$canetaUm->setModelo("Bic");
            //$canetaUm->setPonta(0.5);

            //Verificando status
            print_r($canetaUm);
        ?>
    </pre>
</body>
</html>