<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cadastro de Usuários</title>
</head>
<body class="bg-light">
    <div class="container py-5">
        <h2 class="mb-4 text-center">Cadastro de Usuários</h2>
        <form action="salvar.php" method="post" class="bg-white p-4 rounded shadow-sm">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" name="nome" id="nome" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="idade" class="form-label">Idade:</label>
                <input type="number" name="idade" id="idade" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>

        <h2 class="mt-5 text-center">Usuários Cadastrados</h2>
        <ul class="list-group">
            <?php
                $dados = json_decode(file_get_contents("dados.json"), true);

                if(!empty ($dados)){
                    foreach($dados as $usuario){
                        echo "<li class='list-group-item'>{$usuario['nome']} - {$usuario['idade']} anos</li>";
                    }
                }else{
                    echo "<li class='list-group-item'>Não há ninguém cadastrado.</li>";
                }
            ?>
        </ul>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></script>
</body>
</html>