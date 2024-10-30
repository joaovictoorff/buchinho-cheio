<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once('conexao.php');

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $linha = $_POST["linha"];
    $ids_alimentos = $_SESSION['ids_alimentos']; // Recuperar os IDs dos alimentos salvos na sessão

    $sql = "INSERT INTO doadores (nome, email, telefone, linha) VALUES (?, ?, ?, ?)";
    $stmt = $conexao->prepare($sql);

    if ($stmt === FALSE) {
        die("Erro na preparação da consulta: " . $conexao->error);
    }

    $stmt->bind_param("ssss", $nome, $email, $telefone, $linha);

    if ($stmt->execute()) {
        $id_doador = $stmt->insert_id;

        $sqlDoacao = "INSERT INTO doacoes (id_doador, id_alimento, unidade, estacao, data_doacao) VALUES (?, ?, ?, ?, NOW())";
        $stmtDoacao = $conexao->prepare($sqlDoacao);

        if ($stmtDoacao === FALSE) {
            die("Erro na preparação da consulta de doação: " . $conexao->error);
        }

        foreach ($ids_alimentos as $id_alimento) {
            $unidade = 1; // Ajuste para a unidade conforme necessário
            $stmtDoacao->bind_param("iiis", $id_doador, $id_alimento, $unidade, $linha);
            if (!$stmtDoacao->execute()) {
                die("Erro na execução da consulta de doação: " . $stmtDoacao->error);
            }
        }

        header("Location: home.php");
        exit();
    } else {
        die("Erro na execução da consulta de doador: " . $conexao->errno);
    }
}
?>
