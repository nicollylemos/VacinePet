<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VacinePet</title>
    <link rel="stylesheet" href="css/css/teste-nav.css">
    
</head>

<body>
    <nav>
        <div class="logo">
            <h1 href="index.php" class="logo">VacinePet<i class="fa-solid fa-paw fa-rotate-by"
                    style="color: #FA5909; --fa-rotate-angle: 49deg; width: 20px; height: 20px; font-size: 15px;"></i>
            </h1>
        </div>
        <ul id="menuList">
            <li><a href="index.php">Início</a></li>
            <li><a href="agendamento.php">Agendamento</a></li>
            <li><a href="infos-page/sobre-vacinepet.php">Sobre</a></li>
            <li><a href="infos-page/sobre-profissional.php">Profissional</a></li>
            <li><a href="">Contato</a></li>

            <div class="btn-acesso ms-auto">
                <a href="login.php"><button class="btn-login">Entrar</button></a>
                <a href="cadastro.php"><button class="btn-cad">Cadastrar</button></a>
            </div>
        </ul>
        <div class="menu-icon">
            <i class="fa-solid fa-bars" onclick="toggleMenu()"></i>
        </div>
    </nav>

    <script>
        let menuList = document.getElementById("menuList");
        menuList.style.maxHeight = "0px";

        function toggleMenu() {
            if (menuList.style.maxHeight === "0px") {
                menuList.style.maxHeight = "500px"; // Altura suficiente para acomodar todos os itens e botões
            } else {
                menuList.style.maxHeight = "0px";
            }
        }
    </script>
    <script src="https://kit.fontawesome.com/f8e1a90484.js" crossorigin="anonymous"></script>
</body>

</html>