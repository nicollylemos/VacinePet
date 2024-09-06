<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VacinePet</title>
    <link rel="stylesheet" href="../css/css/sidebar-cliente.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css">
</head>

<body>
    <section class="menu-sidebar">
        <nav class="sidebar">
            <header>
                <div class="image-text">
                    <div class="text logo-text">
                        <span class="hello">Olá, Cliente</span>
                    </div>
                </div>
                <i class=" fa-solid fa-angle-left"></i>
            </header>
            <div class="menu-bar">
                <div class="menu">
                    <ul class="menu-links">
                        <li class="nav-link">
                            <a href="index.php">
                                <i class="fa-solid fa-user icon"></i>
                                <span class="text nav-text">Meu Perfil</span>
                            </a>
                        </li>

                        <li class="nav-link">
                            <a href="htrc-agendamentos.php">
                                <i class="fa-solid fa-paw icon"></i>
                                <span class="text nav-text">Meu Pet</span>
                            </a>
                        </li>

                        <li class="nav-link">
                            <a href="diario.php">
                                <i class="fa-solid fa-calendar-days icon"></i>
                                <span class="text nav-text">Meus Agendamentos</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="menu-links">
                        <li class="nav-link">
                            <a href="valores-alt.php">
                                <i class="fa-solid fa-bell icon"></i>
                                <span class=" text nav-text">Notificação</span>
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