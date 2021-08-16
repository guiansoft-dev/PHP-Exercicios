<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Exercícios Aula 02</title>
</head>
<body>
    <?php
        //Importando classe
        require_once 'Computadores.php';

        //Instânciando objeto
        $computador = new Computadores;

        //Inicializando atributos
        $computador->modelo = "Essentials E30";
        $computador->marca = "Samsung";
        $computador->programas = "Paint e Bloco de notas";
        $computador->tempoDeUso = 6;

        //Usando métodos
        $computador->ligar();
        $computador->usarProgramas();

        //Importando classe
        require_once 'Familias.php';

        //Instânciando objeto
        $familia = new Familias;

        //Inicializando atributos
        $familia->pais = "Elino e Maria";
        $familia->filhos = "Rita, Rosa, Aline e Paulo";
        $familia->netos = "Jennifer, Emily, João, Luiz, Cristian e Ana";

        //Usando métodos
        $familia->afastar();
    ?>
    <h1>Status das classes</h1>
    <div class="exibicao">
        <div>
            <h2>Computador:</h2>
            <ul>
                <?php $computador->status(); ?>
            </ul>
        </div>
        <div>
            <h2>Família:</h2>
            <ul>
                <?php $familia->status(); ?>
            </ul>
        </div>
    </div>
</body>
</html>