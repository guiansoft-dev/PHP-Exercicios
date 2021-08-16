<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Aula 11</title>
</head>
<body>
    <pre>
        <?php
            //Importando arquivos
            require_once 'Visitante.php';
            require_once 'Aluno.php';
            require_once 'Professor.php';
            require_once 'Bolsista.php';
            require_once 'Tecnico.php';

            //Instânciando
            $visitante = new Visitante("Toninho", 43, 'M');
            $aluno = new Aluno("Paulo", 18, 'M', 123456789, "POO");
            $professor = new Professor("Gustavo", 28, 'M', "Tecnologia", 900.50);
            $bolsista = new Bolsista("Maria", 60, 'F', 987654321, "PHP", 9876);
            $tecnico = new Tecnico("Zé", 20, 'M', 192837465, "Java", 1234);

            //Usando métodos
            $aluno->pagarMensalidade();
    
            $bolsista->renovarBolsa();
            $bolsista->pagarMensalidade();

            $tecnico->praticar();

            //Status
            print_r($visitante);
            print_r($aluno);
            print_r($professor);
            print_r($bolsista);
            print_r($tecnico);
        ?>
    </pre>
</body>
</html>