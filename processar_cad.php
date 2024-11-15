<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once('conexao.php');

    // Receber dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);

    // Verificar a conexão com o banco de dados
    if ($conexao->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
    }

    // Verificar se o e-mail já está cadastrado
    $sqlVerificar = "SELECT id_doador FROM doadores WHERE email = ?";
    $stmtVerificar = $conexao->prepare($sqlVerificar);

    if (!$stmtVerificar) {
        die("Erro na consulta SQL (verificação): " . $conexao->error);
    }

    $stmtVerificar->bind_param("s", $email);
    $stmtVerificar->execute();
    $stmtVerificar->store_result();

    if ($stmtVerificar->num_rows > 0) {
        // Se o e-mail já existe, redirecionar para a página de cadastro com aviso
        header("Location: cadastro.php?erro=usuario_existente");
        exit();
    }

    $stmtVerificar->close();

    // Inserir dados do doador
    $sqlDoador = "INSERT INTO doadores (nome, email, telefone, senha) VALUES (?, ?, ?, ?)";
    $stmtDoador = $conexao->prepare($sqlDoador);

    if (!$stmtDoador) {
        die("Erro na consulta SQL (inserção doador): " . $conexao->error);
    }

    $stmtDoador->bind_param("ssss", $nome, $email, $telefone, $senhaCriptografada);

    if (!$stmtDoador->execute()) {
        die("Erro ao inserir doador: " . $stmtDoador->error);
    }

    $stmtDoador->close();
    $conexao->close();

    // Redirecionar para a página de login após cadastro bem-sucedido
    header("Location: login.php");
    exit();
}
?>
