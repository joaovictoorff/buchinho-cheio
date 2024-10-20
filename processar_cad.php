<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once('conexao.php');
    $nome = $_POST["nome"];
    $estado = $_POST["estado"];
    $regiao = $_POST["regiao"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $senha_cripto = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO Doadores (nome, estado, regiao, telefone, email, senha) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conexao->prepare($sql);

    if ($stmt === FALSE) {
        die("Erro na preparação no cadastro: " . $conexao->error);
    }


    $stmt->bind_param("ssssss", $nome, $estado, $regiao, $telefone, $email, $senha_cripto);

    if ($stmt->execute()) {
        header("Location: login.php");
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
