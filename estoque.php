<?php

$servidor = "localhost";
$usuario  =  "root";
$senha = "";
$nome_bd = "sistema_arrecadacao";


$conexao=mysqli_connect($servidor, $usuario,$senha, $nome_bd);


if(!$conexao){
    die ("falha na conexão!".mysqli_connect_error());
}


$sql = "SELECT id_alimento, nome, quantidade_estoque, data_cadastro FROM alimentos";
$resultado = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque de Cestas Básicas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Estoque de Cestas Básicas</h1>
        <table>
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Quantidade</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($resultado->num_rows > 0) {
                  
                    while($row = $resultado->fetch_assoc()) {
                        echo "<tr><td>" . $row["nome_item"] . "</td><td>" . $row["quantidade"] . "</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='2'>Nenhum item no estoque</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>



<?php

$conexao->close();
?>
