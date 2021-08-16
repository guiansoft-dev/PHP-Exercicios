<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplos Aula 02</title>
</head>
<body>
    <?php
        //Importando classe
        require_once 'Canetas.php';

        //Instânciando objetos
        $canetaUm = new Canetas;
        $canetaDois = new Canetas;

        //Inicializando atributos
        $canetaUm->cor = "Azul";
        $canetaUm->ponta = 0.5;

        $canetaDois->cor = "Preta";
        $canetaDois->modelo = "Bic";

        //Chamando métodos
        echo "Caneta um: </br>";
        $canetaUm->tampar();
        $canetaUm->rabiscar();

        echo "Caneta dois: </br>";
        $canetaDois->destampar();
        $canetaDois->rabiscar();

        //Verificando status
        print_r($canetaUm);
        //var_dump($canetaUm);
    ?>
</body>
</html>