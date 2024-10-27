<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once('conexao.php');
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $linha = $_POST["linha"];

    $sql = "INSERT INTO doadores (nome, email, telefone, linha) VALUES (?, ?, ?, ?)";
    $stmt = $conexao->prepare($sql);

    if ($stmt === FALSE) {
        die("Erro na preparação da consulta: " . $conexao->error);
    }

    $stmt->bind_param("ssss", $nome, $email, $telefone, $linha);

    if ($stmt->execute()) {
        header("Location: home.php");
        exit();
    } else {
        die("Erro na execução da consulta: " . $conexao->errno);
    }
}
?>

