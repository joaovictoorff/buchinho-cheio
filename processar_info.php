<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once('conexao.php');
    session_start();

    if (!isset($_SESSION['id_alimentos']) || empty($_SESSION['id_alimentos'])) {
        die("Erro: Nenhum alimento no carrinho.");
    }

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $estacao = $_POST['estacao'];

    // Definir unidade (verifique se está sendo enviada ou é um valor fixo)
    $unidade = 1; // Exemplo de valor fixo para unidade; modifique conforme necessário

    $sqlDoador = "INSERT INTO doadores (nome, email, telefone, estacao) VALUES (?, ?, ?, ?)";
    $stmtDoador = $conexao->prepare($sqlDoador);
    $stmtDoador->bind_param("ssss", $nome, $email, $telefone, $estacao);

    if (!$stmtDoador->execute()) {
        die("Erro ao inserir doador: " . $stmtDoador->error);
    }

    $id_doador = $stmtDoador->insert_id;
    $stmtDoador->close();

    $sqlDoacao = "INSERT INTO doacoes (id_doador, id_alimento, unidade, estacao, data_doacao) VALUES (?, ?, ?, ?, ?)";
    $stmtDoacao = $conexao->prepare($sqlDoacao);

    if ($stmtDoacao === FALSE) {
        die("Erro na preparação da doação: " . $conexao->error);
    }

    // Definir data de doação
    $data_doacao = date("Y-m-d H:i:s");

    foreach ($_SESSION['id_alimentos'] as $id_alimento) {
        $stmtDoacao->bind_param("iiiss", $id_doador, $id_alimento, $unidade, $estacao, $data_doacao);

        if (!$stmtDoacao->execute()) {
            die("Erro ao inserir doação: " . $stmtDoacao->error);
        }
    }

    $stmtDoacao->close();
    $conexao->close();

    unset($_SESSION['id_alimentos']);
    
    header("Location: home.php");
    exit();
}
?>
