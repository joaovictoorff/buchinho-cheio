<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="src/styles/alimentos_doaveis.css">
    <link rel="stylesheet" href="src/styles/styles.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>Buchinho Cheio</title>
</head>
<body class="body">
    <header class="header">
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

            <button id="mobile_btn">
                <i class="fa-solid fa-bars"></i>
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
        </div>
    </header>

    <div class="container">
        <div class="item">
            <img src="src/images/cafe.png" alt="Café">
            <p>Café</p>
            <div class="controls">
                <input type="number" name="unidade" value="0" min="0" id="quantidade-cafe">
                <input type="button" name="adicionar-cafe" value="Adicionar" onclick="adicionarAoCarrinho('cafe', 'Café', 'src/images/cafe.png')">
            </div>
            </div>
        <div class="item">
            <img src="src/images/arroz.png" alt="Arroz_2kg">
            <p>Arroz 2kg</p>
            <div class="controls">
                <input type="number" name="unidade" value="0" min="0" id="quantidade-arroz">
                <input type="button" name="adicionar-arroz" value="Adicionar" onclick="adicionarAoCarrinho('arroz', 'Arroz', 'src/images/arroz.png')">
            </div>
        </div>
        <div class="item">
            <img src="src/images/feijao.png" alt="Feijão">
            <p>Feijão</p>
            <div class="controls">
                <input type="number" name="unidade" value="0" min="0" id="quantidade-feijao">
                <input type="button" name="adicionar-feijao" value="Adicionar" onclick="adicionarAoCarrinho('feijao', 'Feijão', 'src/images/feijao.png')">
            </div>
        </div>
        <div class="item">
            <img src="src/images/macarrao.png" alt="Macarrão">
            <p>Macarrão</p>
            <div class="controls">
                <input type="number" name="unidade" value="0" min="0" id="quantidade-macarrao">
                <input type="button" name="adicionar-macarrao" value="Adicionar" onclick="adicionarAoCarrinho('macarrao', 'Macarrão', 'src/images/macarrao.png')">
            </div>
            </div>
        <div class="item">
            <img src="src/images/acucar.png" alt="Açúcar">
            <p>Açúcar</p>
            <div class="controls">
                <input type="number" name="unidade" value="0" min="0" id="quantidade-acucar">
                <input type="button" name="adicionar-acucar" value="Adicionar" onclick="adicionarAoCarrinho('acucar', 'Açúcar', 'src/images/acucar.png')">
            </div>
        </div>
        <div class="item">
            <img src="src/images/farinha.png" alt="Farinha de trigo">
            <p>Farinha de trigo</p>
            <div class="controls">
                <input type="number" name="unidade" value="0" min="0" id="quantidade-farinha">
                <input type="button" name="adicionar-farinha" value="Adicionar" onclick="adicionarAoCarrinho('farinha', 'Farinha de trigo', 'src/images/farinha.png')">
            </div>
        </div>
        <div class="item">
            <img src="src/images/milho.png" alt="Milho">
            <p>Milho</p>
            <div class="controls">
                <input type="number" name="unidade" value="0" min="0" id="quantidade-milho">
                <input type="button" name="adicionar-milho" value="Adicionar" onclick="adicionarAoCarrinho('milho', 'Milho', 'src/images/milho.png')">
            </div>
        </div>
        <div class="item">
            <img src="src/images/sardinha.png" alt="Sardinha">
            <p>Sardinha</p>
            <div class="controls">
                <input type="number" name="unidade" value="0" min="0" id="quantidade-sardinha">
                <input type="button" name="adicionar-sardinha" value="Adicionar" onclick="adicionarAoCarrinho('sardinha', 'Sardinha', 'src/images/sardinha.png')">
            </div>
        </div>
        <div class="item">
            <img src="src/images/oleo.png" alt="Óleo">
            <p>Óleo</p>
            <div class="controls">
                <input type="number" name="unidade" value="0" min="0" id="quantidade-oleo">
                <input type="button" name="adicionar-oleo" value="Adicionar" onclick="adicionarAoCarrinho('oleo', 'Óleo', 'src/images/oleo.png')">
            </div>
        </div>
        <div class="item">
            <img src="src/images/sabonete.png" alt="Sabonete">
            <p>Sabonete</p>
            <div class="controls">
                <input type="number" name="unidade" value="0" min="0" id="quantidade-sabonete">
                <input type="button" name="adicionar-sabonete" value="Adicionar" onclick="adicionarAoCarrinho('sabonete', 'Sabonete', 'src/images/sabonete.png')">
            </div>
        </div>
        <div class="item">
            <img src="src/images/pasta.png" alt="Pasta de dente">
            <p>Pasta de dente</p>
            <div class="controls">
                <input type="number" name="unidade" value="0" min="0" id="quantidade-pasta">
                <input type="button" name="adicionar-pasta" value="Adicionar" onclick="adicionarAoCarrinho('pasta', 'Pasta de dente', 'src/images/pasta.png')">
            </div>
        </div>
        <div class="item">
            <img src="src/images/escova.png" alt="Escova de dente">
            <p>Escova de dente</p>
            <div class="controls">
                <input type="number" name="unidade" value="0" min="0" id="quantidade-escova">
                <input type="button" name="adicionar-escova" value="Adicionar" onclick="adicionarAoCarrinho('escova', 'Escova de dente', 'src/images/escova.png')">
            </div>
        </div>
    </div>

    <!-- Modal para o Carrinho -->
    <div id="modal">
        <div id="modal-content">
            <div id="modal-header">
                <h3>Carrinho</h3>
                <span onclick="fecharModal()" style="cursor: pointer;">&times;</span>
            </div>
            <div id="modal-body">
                <ul id="lista-carrinho"></ul>
            </div>
            <div id="modal-footer">
                <button onclick="fecharModal()">Fechar</button>
                <form id="form-carrinho" method="POST" action="processar_carrinho.php" onsubmit="return processarCarrinho()">
    <input type="hidden" name="carrinho" id="input-carrinho">
    <button type="submit">Processar</button>
</form>

            </div>
        </div>
    </div>

    <button class="ver-carrinho" onclick="abrirModal()">
        <i class="fas fa-shopping-cart"></i>
    </button>

    <script>
        const carrinho = {};

        function adicionarAoCarrinho(id, nome_alimentos, imagem) {
            const quantidadeInput = document.getElementById(`quantidade-${id}`);
            const quantidade = parseInt(quantidadeInput.value);

            if (!isNaN(quantidade) && quantidade > 0) {
                if (carrinho[id]) {
                    carrinho[id].quantidade += quantidade;
                } else {
                    carrinho[id] = { nome_alimentos: nome_alimentos, quantidade: quantidade, imagem: imagem };
                }
                atualizarCarrinho();
                quantidadeInput.value = 0; 
            } else {
                alert('Por favor, insira uma quantidade válida.');
            }
        }

        function atualizarCarrinho() {
            const listaCarrinho = document.getElementById('lista-carrinho');
            listaCarrinho.innerHTML = ''; // Limpa a lista antes de atualizar

            for (const item in carrinho) {
                const li = document.createElement('li');
                
                // Cria a imagem do item
                const img = document.createElement('img');
                img.src = carrinho[item].imagem;
                img.alt = carrinho[item].nome_alimentos;
                
                li.appendChild(img);
                li.appendChild(document.createTextNode(`${carrinho[item].nome_alimentos} - ${carrinho[item].quantidade} unidade(s)`));
                
                // Botão para remover item
                const btnRemover = document.createElement('button');
                btnRemover.textContent = 'Remover';
                btnRemover.onclick = function() {
                    removerDoCarrinho(item);
                };
                li.appendChild(btnRemover);
                listaCarrinho.appendChild(li);
            }
        }

        function removerDoCarrinho(id) {
            delete carrinho[id];
            atualizarCarrinho();
        }

        function abrirModal() {
            document.getElementById('modal').style.display = 'block';
        }

        function fecharModal() {
            document.getElementById('modal').style.display = 'none';
        }

        function processarCarrinho() {
            if (Object.keys(carrinho).length === 0) {
                alert('O carrinho está vazio!');
                return false;
            }
            
            const carrinhoJSON = JSON.stringify(carrinho);
            document.getElementById('input-carrinho').value = carrinhoJSON;
            console.log("Carrinho JSON enviado:", carrinhoJSON); // Verifique o JSON no console

            return true; // Permite o envio do formulário
        }

        // Fecha o modal ao clicar fora dele
        window.onclick = function(event) {
            const modal = document.getElementById('modal');
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        }
        </script>

</body>
</html>
