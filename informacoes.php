<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="src/styles/styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="src/styles/cadastro.css">
    <link rel="shortcut icon" href="src/images/buchinho.png" type="image/x-icon">
    <title>Informações para coleta | Buchinho Cheio</title>
</head>
<body>
    <header>
        <nav id="navbar">
            <i id="nav_logo"> Buchinho Cheio</i>
            <ul id="nav_list">
                <li class="nav-item">
                    <a href="home.php">Início</a>
                </li>
            </ul>
            
        </nav>
        <div id="mobile_menu">
            <ul id="mobile_nav_list">
                <li class="nav-item">
                    <a href="home.php">Início</a>
                </li>
            </ul>
        </div>
    </header>
    <div class="row">
        <div class="col-md-6">
            <img id="buchinho" src="src/images/buchinho.png" alt="">
        </div>
        <div class="col-md-6">
            <div id="div_form">
                <form id="form_cad" action="processar_info.php" method="post">
                    <h3>Informações para envio</h3>
                    
                    <!-- Campo oculto para o ID da doação -->
                    <input type="hidden" name="id_doacao" value="<?php echo isset($_GET['id_doacao']) ? htmlspecialchars($_GET['id_doacao']) : ''; ?>">

                    <label for="nome">Nome completo:</label><br>
                    <input class="input_form" name="nome" type="text" id="nome" placeholder="ex: João Pereira" required><br>
                    
                    <label for="telefone">Telefone:</label><br>
                    <input class="input_form" type="text" name="telefone" id="telefone" placeholder="ex: (11) 90000-0000" required><br>
                    
                    <label for="email">Email:</label><br>
                    <input class="input_form" type="email" name="email" id="email" placeholder="ex: joao.pereira123@gmail.com" required><br>
                    
                    <label for="linha">Linha:</label><br>
                    <select name="linha" id="linha" required>
                        <option value="">Selecione...</option>
                        <option value="vermelha">Vermelha</option>
                    </select><br><br>

                    <input type="submit" id="submit" value="Enviar">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
