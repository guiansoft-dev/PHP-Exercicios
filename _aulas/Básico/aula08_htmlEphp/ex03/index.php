<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estilizar texto</title>
</head>
<body>
    <div>
        <form method="get" action="03cores.php">
            <label for="texto">Texto: <input type="text" name="texto" id="texto"></label>
            <label for="tamanho">Tamanho</label>
            <select name="tamanho" id="tamanho">
                <option value="8pt">8</option>
                <option value="10pt">10</option>
                <option value="14pt" selected>14</option>
                <option value="20pt">20</option>
                <option value="40pt">40</option>
            </select>
            <label for="cor">Cor: <input type="color" name="cor" id="cor"></label>
            <button type="submit">formatar</button>
        </form>
    </div>
</body>
</html>