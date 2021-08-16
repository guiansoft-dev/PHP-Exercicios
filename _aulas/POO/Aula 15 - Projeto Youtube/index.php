<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Youtube</title>
</head>
<body>
    <pre>
        <?php
            //Importando arquivos
            require_once 'entidades/Video.php';
            require_once 'entidades/Gafanhoto.php';
            require_once 'entidades/Visualizacao.php';

            //Instânciando
            $video[0] = new Video("Aula 1 de POO");
            $video[1] = new Video("Aula 12 de PHP");
            $video[2] = new Video("Aula 10 de HTML5");

            $gafanhoto[0] = new Gafanhoto("Paulo", 18, 'M', "pauloh16");
            $gafanhoto[1] = new Gafanhoto("Maria", 60, 'F', "mãe24");

            $visualizacoes[0] = new Visualizacao($gafanhoto[0], $video[0]);
            $visualizacoes[1] = new Visualizacao($gafanhoto[1], $video[1]);
            $visualizacoes[2] = new Visualizacao($gafanhoto[1], $video[0]);
            $visualizacoes[2]->avaliarPorcentagem(100);

            //Usando métodos
            foreach($visualizacoes as $indice => $valor){
                print_r($valor);    
            }

            foreach($video as $indice => $valor){
                print_r($valor);    
            }

            foreach($gafanhoto as $indice => $valor){
                print_r($valor);    
            }
            //Status
        
        ?>
    </pre>
</body>
</html>