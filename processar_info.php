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
    $data_agendamento = $_POST['data_agendamento']; // Captura a data de agendamento do formulário

    // Inserir dados do doador
    $sqlDoador = "INSERT INTO doadores (nome, email, telefone, estacao) VALUES (?, ?, ?, ?)";
    $stmtDoador = $conexao->prepare($sqlDoador);
    $stmtDoador->bind_param("ssss", $nome, $email, $telefone, $estacao);

    if (!$stmtDoador->execute()) {
        die("Erro ao inserir doador: " . $stmtDoador->error);
    }

    $id_doador = $stmtDoador->insert_id;
    $stmtDoador->close();

    // Definir data de doação
    $data_doacao = date("Y-m-d H:i:s");

    // Inserir doações e recuperar id_doacao
    foreach ($_SESSION['id_alimentos'] as $item) {
        $id_alimento = $item['id'];     
        $unidade = $item['quantidade']; 

        $sqlDoacao = "INSERT INTO doacoes (id_doador, id_alimento, unidade, estacao, data_agendamento, data_doacao) VALUES (?, ?, ?, ?, ?, ?)";
        $stmtDoacao = $conexao->prepare($sqlDoacao);
        $stmtDoacao->bind_param("iiisss", $id_doador, $id_alimento, $unidade, $estacao, $data_agendamento, $data_doacao);

        if (!$stmtDoacao->execute()) {
            die("Erro ao inserir doação: " . $stmtDoacao->error);
        }

        $id_doacao = $stmtDoacao->insert_id;  // Recuperar o id da doação

        // Atualizar a tabela alimentos com o id_doacao
        $sqlUpdateAlimento = "UPDATE alimentos SET id_doacao = ? WHERE id_alimento = ?";
        $stmtUpdateAlimento = $conexao->prepare($sqlUpdateAlimento);
        $stmtUpdateAlimento->bind_param("ii", $id_doacao, $id_alimento);

        if (!$stmtUpdateAlimento->execute()) {
            die("Erro ao atualizar o alimento com id_doacao: " . $stmtUpdateAlimento->error);
        }

        $stmtDoacao->close();
        $stmtUpdateAlimento->close();
    }

    $conexao->close();
    unset($_SESSION['id_alimentos']);

    header("Location: home.php");
    exit();
}
