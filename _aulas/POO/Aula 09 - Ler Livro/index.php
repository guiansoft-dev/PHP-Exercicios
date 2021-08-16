<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Aula 09</title>
</head>
<body>
    <pre>
        <?php
            //Importando arquivos
            require_once 'Pessoa.php';
            require_once 'Livro.php';

            //Instânciando
            $pessoa = new Pessoa("Paulo", 18, 'M');
            $livro = new Livro("Primeiro teste", "Paulo", 100, $pessoa);
    
            $livro->pegarLivro();
            $livro->folhear(58);
            $livro->mudarPagina(1);
            $livro->pegarLivro();
            $livro->detalhes();
        ?>
    </pre>
</body>
</html>