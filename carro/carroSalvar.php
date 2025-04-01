<?php
//converte o json para um array válido - lê o conteudo do arquivo(dentro do parenteses)
    $dados = json_decode(file_get_contents("carro.json"), true);

    // verifica se deu certo a comverção
    if (!is_array($dados)){
        $dados = [];
    }

    // adiciona as informações do form as respectivas categorias
    $novoDado = [
        "nome" => $_POST["nome"],
        "valor" => $_POST["valor"],
        "data" => $_POST["data"]
    ];

    // adiciona os novos dados aos já existentes
    $dados [] = $novoDado;

    // tranforma os dados novamente em json
    file_put_contents("carro.json", json_encode($dados, JSON_PRETTY_PRINT));

    echo "dados salvos com sucesso ! <a href='index.php'>voltar </a>";
?>