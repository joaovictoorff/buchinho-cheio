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
    <link rel="stylesheet" href="src/styles/login.css">
    <link rel="shortcut icon" href="src/images/buchinho.png" type="image/x-icon">
    <title>Login | Buchinho Cheio</title>
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

    <div id="login-container">
        <div id="login-box">
            <h2>Entrar</h2>
            <p>Acesse sua conta do Buchinho Cheio</p>
            <form action="login.php" method="POST">
                
                <label for="email">Email</label>
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" id="email" name="email" placeholder="exemplo@email.com" required>
                </div>
                <label for="senha">Senha</label>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="senha" name="senha" placeholder="Senha de 8 caracteres" required>
                </div>
                <a href="#" class="forgot-password">Esqueceu a senha?</a>
                <button type="submit" class="login-button"><i class="fas fa-sign-in-alt"></i> Entrar</button>
            </form>
            <p class="signup-link">Não tem uma conta? <a href="cadastro.php">Crie sua conta agora!</a></p>
        </div>
    </div>

</body>
</html>
