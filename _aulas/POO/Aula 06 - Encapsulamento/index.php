<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Aula 06</title>
</head>
<body>
    <pre>
        <?php
            //Importando classe
            require_once 'ControleRemoto.php';

            //Instânciando objetos
            $controle = new ControleRemoto();

            $controle->abrirMenu();

        ?>
    </pre>
</body>
</html>