<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Aula 05</title>
</head>
<body>
    <pre>
        <?php
            //Importando classe
            require_once 'ContaBanco.php';

            //Instânciando objetos
            $pessoa1 = new ContaBanco();
            $pessoa2 = new ContaBanco();
            
            //Atribuindo valores
            $pessoa1->setNumConta("1111");
            $pessoa2->setNumConta("2222");

            $pessoa1->setDono("Jubileu");
            $pessoa2->setDono("Creusa");

            $pessoa1->abrirConta("cc");
            $pessoa2->abrirConta("cp");

            $pessoa1->depositar(300);
            $pessoa2->depositar(500);

            $pessoa2->sacar(800);
            $pessoa2->fecharConta();

            //Verificando status
            print_r($pessoa1);
            print_r($pessoa2);
        ?>
    </pre>
</body>
</html>