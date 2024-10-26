<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once('conexao.php');

    // Decodificar o JSON do carrinho
    $carrinho = json_decode($_POST["carrinho"], true);

    if (!is_array($carrinho)) {
        die("Erro: formato do carrinho inválido.");
    }

    // Preparar a inserção
    $sql = "INSERT INTO alimentos (nome_alimentos, unidade) VALUES (?, ?)";
    $stmt = $conexao->prepare($sql);

    if ($stmt === FALSE) {
        die("Erro na preparação no produto: " . $conexao->error);
    }

    // Inserir cada item do carrinho
    foreach ($carrinho as $item) {
        $nome_alimentos = $item['nome_alimentos'];
        $unidade = $item['quantidade'];

        // Use "si" em bind_param: "s" para string e "i" para inteiro
        $stmt->bind_param("si", $nome_alimentos, $unidade);

        if (!$stmt->execute()) {
            die("Erro na execução da consulta: " . $stmt->error);
        }
    }

    $stmt->close();
    $conexao->close();

    // Redirecionar após o processamento
    header("Location: informacoes.php");
    exit();
}
?>
