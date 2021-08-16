<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Aula 10</title>
</head>
<body>
    <pre>
        <?php
            //Importando arquivos
            require_once 'Pessoa.php';
            require_once 'Aluno.php';
            require_once 'Professor.php';
            require_once 'Funcionario.php';

            //Instânciando
            $pessoa = new Pessoa("Paulo", 18, 'M');
            $aluno = new Aluno("Paulo", 18, 'M', 123456789, "POO");
            $professor = new Professor("Gustavo", 28, 'M', "Tecnologia", 900.50);
            $funcionario = new Funcionario("Maria", 60, "F", "Culinária", false);

            //Status
            print_r($pessoa);
            print_r($aluno);
            print_r($professor);
            print_r($funcionario);
        ?>
    </pre>
</body>
</html>