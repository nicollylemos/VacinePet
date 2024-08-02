<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/css/sidebarmenu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css">
</head>

<body>
    <section class="menu-sidebar">
        <nav class="sidebar close">
            <header>
                <div class="image-text">
                    <span class="image">
                    </span>
                    <div class="text logo-text">
                        <span class="name">VacinePet </span>
                        <span class="subtitle">Vacinação para seu pet<br> em Sorocaba e região.</span>
                    </div>
                </div>

                <i class=" fa-solid fa-angle-right"></i>
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

                        <li class="nav-link">
                            <a href="sobre-profissional.php">
                                <i class="fa-solid fa-user-tie icon"></i>
                                <span class="text nav-text">Sobre a profissional</span>
                            </a>
                        </li>

                        <li class="nav-link">
                            <a href="sobre-atend.php">
                                <i class="fa-solid fa-bell-concierge icon"></i>
                                <span class="text nav-text">Sobre o atendimento</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="menu-links">
                        <li class="nav-link">
                            <a href="#">
                                <i class="fa-solid fa-shield-halved icon"></i>
                                <span class="text nav-text">Políticas de Privacidade</span>
                            </a>
                        </li>

                        <li class="nav-link">
                            <a href="#">
                                <i class="fa-solid fa-file-signature icon"></i>
                                <span class="text nav-text">Termos de uso</span>
                            </a>
                        </li>

                        <li class="nav-link">
                            <a href="#">
                                <i class="fa-solid fa-copyright icon"></i>
                                <span class="text nav-text">Direitos Autorais</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="menu-links">
                        <li class="nav-link">
                            <a href="#">
                                <i class="fa-solid fa-house icon"></i>
                                <span class="text nav-text"> Vacinação em domicílio</span>
                            </a>
                        </li>
                        <li class="nav-link">
                            <a href="#">
                                <i class="fa-regular fa-calendar-days icon"></i>
                                <span class="text nav-text">Confirmar agendamento</span>
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
        <div class="content">
        </div>
    </section>
    <script>
    const body = document.querySelector('body'),
        sidebar = body.querySelector('nav'),
        toggle = body.querySelector(".fa-solid"),
        modeSwitch = body.querySelector(".toggle-switch"),
        modeText = body.querySelector(".mode-text");
    toggle.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    })
    searchBtn.addEventListener("click", () => {
        sidebar.classList.remove("close");
        separacao.classList.remove("close");
    })
    modeSwitch.addEventListener("click", () => {
        body.classList.toggle("dark");

        if (body.classList.contains("dark")) {
            modeText.innerText = "Light mode";
        } else {
            modeText.innerText = "Dark mode";

        }
    });
    </script>
</body>

</html>