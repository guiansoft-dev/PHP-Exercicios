<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dados pessoais</title>
</head>
<body>
    <div>
        <form method="get" action="02idade.php">
            <label for="nome">Nome: <input type="text" name="nome" id="nome"></label>
            <label for="ano">Ano de nascimento: <input type="number" name="ano" id="ano"></label>
            <fieldset>
                <legend>Sexo</legend>
                <input type="radio" name="sexo" id="masc" value="masculino" checked>
                <label for="masc">Masculino</label>
                <input type="radio" name="sexo" id="fem" value="feminio">
                <label for="fem">Feminino</label>
            </fieldset>
            <button type="submit">Calcular raiz</button>
        </form>
    </div>
</body>
</html>