<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once('conexao.php');

    $carrinho = json_decode($_POST["carrinho"], true);

    if (!is_array($carrinho)) {
        die("Erro: formato do carrinho inválido.");
    }

    $sql = "INSERT INTO alimentos (nome_alimentos, unidade) VALUES (?, ?)";
    $stmt = $conexao->prepare($sql);

    if ($stmt === FALSE) {
        die("Erro na preparação do produto: " . $conexao->error);
    }

    $id_alimentos = [];

    foreach ($carrinho as $item) {
        $nome_alimentos = $item['nome_alimentos'];
        $unidade = $item['quantidade'];

        $stmt->bind_param("si", $nome_alimentos, $unidade);

        if ($stmt->execute()) {
            $id_alimentos[] = $stmt->insert_id;
        } else {
            die("Erro na execução da consulta: " . $stmt->error);
        }
    }

    $stmt->close();
    $conexao->close();

    // Armazenar os IDs de alimentos em uma sessão para serem usados na próxima página
    session_start();
    $_SESSION['id_alimentos'] = $id_alimentos;

    header("Location: informacoes.php");
    exit();
}
?>
