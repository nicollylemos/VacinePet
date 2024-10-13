<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VacinePet</title>
    <link rel="stylesheet" href="../css/css/sidebarvet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css">
</head>

<body>
    <section class="menu-sidebar">
        <nav class="sidebar">
            <header>
                <div class="image-text">
                    <div class="text logo-text"><span class="hello">Olá,
                            Luciane Mônica</span></div>
                </div><i class=" fa-solid fa-angle-left"></i>
            </header>
            <div class="menu-bar">
                <div class="menu">
                    <ul class="menu-links">
                        <li class="nav-link"><a href="index.php"><i class="fa-solid fa-bars-progress icon"></i><span
                                    class="text nav-text">Agendamentos
                                    Ativos</span></a></li>
                        <li class="nav-link"><a href="htrc-agendamentos.php"><i
                                    class="fa-solid fa-clock-rotate-left icon"></i><span class="text nav-text">Histórico
                                    Agendamentos</span></a></li>
                        <li class="nav-link"><a href="diario.php"><i class="fa-solid fa-calendar-days icon"></i><span
                                    class="text nav-text">Meu Diário</span></a></li>
                    </ul>
                    <ul class="menu-links">
                        <li class="nav-link"><a href="valores-alt.php"><i class="fa-solid fa-money-bill icon"></i><span
                                    class="text nav-text">Alteração de Valores</span></a></li>
                    </ul>
                    <li class="nav-link"><a href="adocao.php"><i class="fa-solid fa-paw icon"></i><span
                                class="text nav-text">Adoção</span></a></li>
                    <li class="nav-link"><a href="data.php"><i class="fa-solid fa-clock icon"></i><span
                                class="text nav-text">Gerenciar Atendimento</span></a></li>
                    <li class="nav-link"><a href="configuracao.php"><i class="fa-solid fa-cog icon"></i><span
                                class="text nav-text">Configuração</span></a></li>

                </div>
            </div>
        </nav>
    </section>
    <section class="home">
        <div class="content"></div>
    </section>
    <script>
    const body = document.querySelector('body'),
        sidebar = body.querySelector('nav'),
        toggle = body.querySelector(".fa-solid"),
        modeSwitch = body.querySelector(".toggle-switch"),
        modeText = body.querySelector(".mode-text");

    toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        }

    ) searchBtn.addEventListener("click", () => {
            sidebar.classList.remove("close");
            separacao.classList.remove("close");
        }

    ) modeSwitch.addEventListener("click", () => {
            body.classList.toggle("dark");

            if (body.classList.contains("dark")) {
                modeText.innerText = "Light mode";
            } else {
                modeText.innerText = "Dark mode";

            }
        }

    );
    </script>
</body>

</html>