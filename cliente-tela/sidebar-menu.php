<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre o VacinePet - VacinePet</title>
    <link rel="stylesheet" href="../css/css/Sidebar-Infos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css">
</head>

<body>
    <section class="menu-sidebar">
        <nav class="sidebar close">
            <header>
                <div class="image-text">
                    <span class="image"></span>
                    <div class="text logo-text">
                        <span class="name">VacinePet</span>
                    </div>
                </div>
                <i class="fa-solid fa-angle-left"></i> <!-- Ícone de alternância -->
            </header>

            <div class="menu-bar">
                <div class="menu">
                    <ul class="menu-links">
                        <li class="nav-link">
                            <a href="sobre-vacinepet.php">
                                <i class="fa-solid fa-syringe icon"></i>
                                <span class="text nav-text">Sobre o VacinePet</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="menu-links">
                        <li class="nav-link">
                            <a href="politicas-privacidade.php">
                                <i class="fa-solid fa-shield-halved icon"></i>
                                <span class="text nav-text">Políticas de Privacidade</span>
                            </a>
                        </li>

                        <li class="nav-link">
                            <a href="direitos.php">
                                <i class="fa-solid fa-copyright icon"></i>
                                <span class="text nav-text">Direitos Autorais</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="menu-links">
                        <li class="nav-link">
                            <a href="vacinacao.php">
                                <i class="fa-solid fa-house icon"></i>
                                <span class="text nav-text">Vacinação em Domicílio</span>
                            </a>
                        </li>

                        <li class="nav-link">
                            <a href="pagamento.php">
                                <i class="fa-solid fa-cash-register icon"></i>
                                <span class="text nav-text">Formas de Pagamento</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>
    </section>

    <section class="home">
        <div class="content"></div>
    </section>

    <script>
    const body = document.querySelector('body'),
        sidebar = body.querySelector('nav.sidebar'),
        toggle = body.querySelector(".fa-solid.fa-angle-left");

    // Toggle do menu lateral
    toggle.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    });
    </script>
</body>

</html>