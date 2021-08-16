<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Aula 13</title>
</head>
<body>
    <pre>
        <?php
            //PHP não suporta sobrecargas
            //Importando arquivos
            require_once 'entidades/Animal.php';
            require_once 'entidades/Mamifero.php';
            require_once 'entidades/Lobo.php';
            require_once 'entidades/Cachorro.php';

            //Instânciando
            $mamifero = new Mamifero(33.5, 4, 4, "Marrom");
            $lobo = new Lobo(50, 7, 0, "Cinza");
            $cachorro = new Cachorro(10, 6, 3, "Branco e preto");

            //Usando métodos
            $mamifero->emitirSom();
            $lobo->emitirSom();
            $cachorro->emitirSom();

            $cachorro->reagirFrase("toma comida");
            $cachorro->reagirFrase("Sai");
            $cachorro->reagirHora(11,45);
            $cachorro->reagirHora(21,00);
            $cachorro->reagirDono(true);
            $cachorro->reagirDono(false);
            $cachorro->reagirIdade(2,12.5);
            $cachorro->reagirIdade(17,4.5);

            //Status
            print_r($mamifero);
            print_r($lobo);
            print_r($cachorro);
        ?>
    </pre>
</body>
</html>