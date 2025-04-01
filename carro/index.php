<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carro</title>
</head>
<body>
    <h2>Salvar Carro</h2>
    <form action="carroSalvar.php" method="post">
        <label for="">nome:</label><br>
        <input type="text" name="nome"><br>
        <label for="">valor:</label><br>
        <input type="number" name="valor"><br>
        <label for="">data:</label>
        <input type="date" name="data"><br><hr>
        <button type="submite">Salvar</button>
    </form>
</body>
</html>