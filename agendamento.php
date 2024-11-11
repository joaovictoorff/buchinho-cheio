<?php
// Definir as credenciais do banco de dados
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "sistema_arrecadacao";

// Criar a conexão
$conn = new mysqli($host, $user, $pass, $dbname);

// Verificar se houve erro na conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Consultar os dados da tabela 'doacoes'
$sql = "SELECT * FROM doacoes";
$result = $conn->query($sql);

// Verificar se há resultados
if ($result->num_rows > 0) {
    // Buscar os dados
    while($row = $result->fetch_assoc()) {
        $id_doacao = $row["id_doacao"];
        $id_alimentos = $row["id_alimentos"];
        $id_doadores = $row["id_doadores"];
        // Adicione mais campos conforme necessário
    }
} else {
    echo "0 resultados";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação de Agendamento</title>
    <link rel="stylesheet" href="src/styles/agendamento.css">
</head>
<body>
    <div class="container">
        <div class="icone-ok">
            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0"/>
                <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
            </svg>
        </div>
        <div class="mensagem">
            <h1>Agendamento Confirmado!</h1>
            <p>Seu agendamento foi realizado para o dia <span id="data-agendamento"><?php echo $data_agendamento; ?></span>.</p>
            <p>Te chamaremos no Whatsapp</p>
        </div>
        <a href="home.php">Voltar à tela inicial</a>
    </div>

    <script src="script.js"></script>
</body>
</html>

