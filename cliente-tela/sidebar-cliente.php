<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre o VacinePet - VacinePet</title>
    <link rel="stylesheet" href="../css/css/sidebarClientes.css">
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
                    </div>
                </div>
                <i class="fa-solid fa-angle-left"></i> <!-- Ícone de alternância -->
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
                    </ul>
                    <ul class="menu-links">
                        <li class="nav-link">
                            <a href="meu-pet.php">
                                <i class="fa-solid fa-paw icon"></i>
                                <span class="text nav-text">Meu Pet</span>
                            </a>
                        </li>

                        <li class="nav-link">
                            <a href="configuracao.php">
                                <i class="fa-solid fa-gear icon"></i>
                                <span class="text nav-text">Configurações</span>
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
        sidebar = body.querySelector('nav.sidebar'),
        toggle = body.querySelector(".fa-solid.fa-angle-left");

    // Toggle do menu lateral
    toggle.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    });
    </script>
</body>

</html>