<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre o VacinePet - VacinePet</title>
    <link rel="stylesheet" href="../css/css/Sidebar-veterinaria.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css">
</head>

<body>
    <section class="menu-sidebar">
        <nav class="sidebar close">
            <header>
                <div class="image-text">
                    <span class="image"></span>
                    <div class="text logo-text">
                        <span class="name">Olá, Luciane Mônica</span>
                    </div>
                </div>
                <i class="fa-solid fa-angle-left"></i> <!-- Ícone de alternância -->
            </header>

            <div class="menu-bar">
                <div class="menu">
                    <ul class="menu-links">
                        <li class="nav-link">
                            <a href="index.php">
                                <i class="fa-solid fa-bars-progress icon"></i>
                                <span class="text nav-text">Agendamentos Ativos</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="menu-links">
                        <li class="nav-link">
                            <a href="htrc-agendamentos.php">
                                <i class="fa-solid fa-clock-rotate-left icon"></i>
                                <span class="text nav-text">Histórico Agendamentos</span>
                            </a>
                        </li>

                        <li class="nav-link">
                            <a href="diario.php">
                                <i class="fa-solid fa-calendar-days icon"></i>
                                <span class="text nav-text">Meu diário</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="menu-links">
                        <li class="nav-link">
                            <a href="valores-alt.php">
                                <i class="fa-solid fa-money-bill icon"></i>
                                <span class="text nav-text">Alteração de Valores</span>
                            </a>
                        </li>

                    </ul>
                    <ul class="menu-links">
                        <li class="nav-link">
                            <a href="gerencia-atend.php">
                                <i class="fa-solid fa-clock icon"></i>
                                <span class="text nav-text">Gerenciar Atendimento</span>
                            </a>
                        </li>

                        <li class="nav-link">
                            <a href="configuracao.php">
                                <i class="fa-solid fa-cog icon"></i>
                                <span class="text nav-text">Configuração</span>
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