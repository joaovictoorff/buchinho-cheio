<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once('conexao.php');
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
   $linha = $_POST["linha"];
   $estacao = $_POST["estacao"];

    $sql = "INSERT INTO Doadores (nome, email, telefone, linha, estacao) VALUES (?,?,?,?,?)";
    $stmt = $conexao->prepare($sql);

    if ($stmt === FALSE) {
        die("Erro na preparação no cadastro: " . $conexao->error);
    }


    $stmt->bind_param("sssss", $nome, $email, $telefone, $linha, $estacao);

    if ($stmt->execute()) {
        header("Location: home.php");
        exit();
    } else {
        die("Erro na execução da consulta: " . $stmt->error);
    }
    
    if ($cadastro_sucesso) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error']);
    }
}
?>
