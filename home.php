<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="src/styles/styles.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>Buchinho Cheio</title>
</head>
<body>
    <header>
        <nav id="navbar">
            <i id="nav_logo"> Buchinho Cheio</i>

            <ul id="nav_list">
                <li class="nav-item active">
                    <a href="home.html">Início</a>
                </li>
                <li class="nav-item">
                    <a href="#menu">Produtos</a>
                </li>
                <li class="nav-item">
                    <a href="#testimonials">Histórias</a>
                </li>
                <li class="nav-item">
                    <a href="cadastro.html">Cadastre-se</a>
                </li>
                <li class="nav-item">
                    <a href="login.html">Entrar</a>
                </li>
            </ul>

            <a href="alimentos_doaveis.html">
                <button class="btn-default">
                     Doe aqui
                </button>
            </a>

            <button id="mobile_btn">
                
            </button>
        </nav>

        <div id="mobile_menu">
            <ul id="mobile_nav_list">
                <li class="nav-item">
                    <a href="home.html">Início</a>
                </li>
                <li class="nav-item">
                    <a href="#menu">Produtos</a>
                </li>
                <li class="nav-item">
                    <a href="#testimonials">Nossa história</a>
                </li>
                <li class="nav-item">
                    <a href="cadastro.html">Cadastre-se</a>
                </li>
                <li class="nav-item">
                    <a href="login.html">Entrar</a>
                </li>
            </ul>

            <a href="alimentos_doaveis.html">
                <button class="btn-default">
                     Doe aqui
                </button>
            </a>
        </div>
    </header>

    <main id="content">
        <section id="home">
            <div class="shape"></div>
            <div id="cta">
                <h1 class="title">
                    Doe alimentos, doe 
                    <span>amor</span>
                </h1>

                <p class="description">
                    Nós arrecadamos recursos para montar cestas básicas e doar a famílias carentes, levando alimento e esperança a quem mais precisa.
                </p>

                <div id="cta_buttons">
                    <a href="#" class="btn-default">
                        Ver Cestas
                    </a>
                </div>

                <div class="social-media-buttons">
                    <a href="">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>

                    <a href="https://www.instagram.com/buchinho_cheio24/">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                    <a href="https://www.linkedin.com/in/buchinho-cheio-a0bb702bb/">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                </div>
            </div>

            <div id="banner" class="banner">
                <img src="src/images/buchinho.png" alt="">
            </div>
        </section>

        <section id="menu">
            <h2 class="section-title">Produtos</h2>
            <h3 class="section-subtitle">Opções mais desejadas</h3>

            <div id="dishes">
                <div class="dish">
                    <div class="dish-heart">
                        <i class="fa-solid fa-heart"></i>
                    </div>

                    <img src="src/images/arroz.png" class="dish-image" alt="">

                    <h3 class="dish-title">
                        Arroz
                    </h3>

                    <span class="dish-description">
                        Não perecível
                    </span>

                </div>

                <div class="dish">
                    <div class="dish-heart">
                        <i class="fa-solid fa-heart"></i>
                    </div>

                    <img src="src/images/feijao.png" class="dish-image" alt="">

                    <h3 class="dish-title">
                        Feijão
                    </h3>

                    <span class="dish-description">
                        Não perecível
                    </span>
                </div>

                <div class="dish">
                    <div class="dish-heart">
                        <i class="fa-solid fa-heart"></i>
                    </div>

                    <img src="src/images/macarrao.png" class="dish-image" alt="">

                    <h3 class="dish-title">
                        Macarrão
                    </h3>

                    <span class="dish-description">
                        Não perecível
                    </span>
                </div>

                <div class="dish">
                    <div class="dish-heart">
                        <i class="fa-solid fa-heart"></i>
                    </div>

                    <img src="src/images/acuca.png" class="dish-image" alt="">

                    <h3 class="dish-title">
                        Açúcar
                    </h3>

                    <span class="dish-description">
                        Não perecível
                    </span>
                </div>
            </div>
        </section>

        <section id="testimonials">
            <div id="testimonials_content">
                <h2 class="section-title">
                    Nossa História
                </h2>
                <h3 class="section-subtitle"></h3>

                <div id="feedbacks">
                    <div class="feedback">
                        <p>
                            Somos o “Buchin Cheio” um projeto criado com a finalidade de ajudar pessoas que precisam de ajuda em relação a alimentos básicos e precisam deste suporte, então nós arrecadamos alimentos não perecíveis.

                            Nós arrecadamos esses alimentos para instituições que necessitam deste tipo de suporte.

                            Arrecadamos para instituições carentes, e nós mesmo realizamos a distribuição dos alimentos. 🐼
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div id="footer_items">
            <span id="copyright">
                &copy 2024 Buchinho Cheio
            </span>

            <div class="social-media-buttons">
                <a href="">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>

                <a href="https://www.instagram.com/buchinho_cheio24/">
                    <i class="fa-brands fa-instagram"></i>
                </a>

                <a href="https://www.linkedin.com/in/buchinho-cheio-a0bb702bb/">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
            </div>
        </div>
    </footer>
    <script src="src/javascript/script.js"></script>
</body>
</html>
