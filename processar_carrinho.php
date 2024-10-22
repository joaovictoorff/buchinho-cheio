<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once('conexao.php');
    $nome = $_POST["nome"];
   $unidade = $_POST["unidade"];


    $sql = "INSERT INTO alimentos (nome, unidade) VALUES (?,?)";
    $stmt = $conexao->prepare($sql);

    if ($stmt === FALSE) {
        die("Erro na preparação no cadastro: " . $conexao->error);
    }


    $stmt->bind_param("ss", $nome, $unidade);

    if ($stmt->execute()) {
        header("Location: informacoes.php");
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
