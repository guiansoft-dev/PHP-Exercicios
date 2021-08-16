<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Aula 12</title>
</head>
<body>
    <pre>
        <?php
            //Importando arquivos
            require_once 'entidades/Animal.php';
            require_once 'entidades/Mamifero.php';
            require_once 'entidades/Reptil.php';
            require_once 'entidades/Peixe.php';
            require_once 'entidades/Ave.php';
            require_once 'entidades/Canguru.php';

            //Instânciando
            $mamifero = new Mamifero(33.5, 4, 4, "Marrom");
            $reptil = new Reptil(50, 7, 0, "Verde");
            $peixe = new Peixe(10, 6, 3, "Laranja");
            $ave = new Ave(12, 1, 4, "Morrom claro");
            $canguru = new Canguru(60, 5, 4, "Marrom escuro");

            //Usando métodos
            $mamifero->locomover();
            $reptil->locomover();
            $peixe->locomover();
            $ave->locomover();
            $canguru->locomover();

            //Status
            print_r($mamifero);
            print_r($reptil);
            print_r($peixe);
            print_r($ave);
            print_r($canguru);
        ?>
    </pre>
</body>
</html>