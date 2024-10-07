<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
     

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        @font-face {
            font-family: 'league';
            src: url("../font/league/LeagueSpartan-Bold.ttf");
        }

        /* Classe que bloqueia a rolagem */
        .no-scroll {
            position: fixed;
            overflow: hidden;
            width: 100%;
        }

        .topnav {
            position: relative;
            /* Necessário para que o z-index funcione */
            z-index: 1000;
            /* Valor alto para garantir que o navbar fique sobre outros elementos */
        }

        .topnav .logo:hover {
            color: #FA5909;
        }

        .topnav {
            overflow: hidden;
            background-color: white;
            border-bottom: 1px solid #ddd;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 16px;
        }

        .topnav .logo {
            font-size: 24px;
            font-family: baloo;
            color: #FA5909;
        }

        .topnav .menu {
            display: flex;
            gap: 15px;
            position: relative;
        }

        .topnav a {
            display: block;
            color: #3e3e3e;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 20px;
            font-weight: 500;
            font-family: league;
        }

        .topnav a:hover {
            color: #52BACB;
        }

        .topnav .buttons {
            position: relative;
            top: -100px;
            display: flex;
            gap: 1px;
        }

        .topnav .login:hover {
            background-color: #7bcdd9;
            border-color: #7bcdd9;
        }

        .topnav .cad:hover {
            border-color: #7bcdd9;
            color: #7bcdd9;
        }

        .topnav .cad {
            cursor: pointer;
            font-size: 18px;
            background-color: transparent;
            border-radius: 10px;
            border: 3.5px solid #52BACB;
            width: 150px;
            font-weight: 700;
            letter-spacing: 0.5px;
            text-decoration: none;
            color: #52BACB;
            font-family: league;
            padding: 3%;
            position: static;
            /* Alterado para static */
            margin: 0;
            /* Removido top e left */
        }

        .topnav .login {
            cursor: pointer;
            font-size: 18px;
            background-color: #52BACB;
            border-radius: 10px;
            border: 3.5px solid #52BACB;
            width: 150px;
            font-weight: 700;
            letter-spacing: 0.5px;
            text-decoration: none;
            color: #fff;
            font-family: league;
            padding: 3%;
            position: static;
            /* Alterado para static */
            margin: 0;
            /* Removido top e left */
        }

        .topnav .icon {
            display: none;
        }

        @media screen and (max-width: 1171px) {
            .topnav .menu a {
                display: none;
            }

            .topnav .menu {
                display: block;
            }

            .topnav .buttons {
                display: none;
            }

            .topnav .icon {
                display: block;
            }
        }

        @media screen and (max-width: 1171px) {
            .topnav.responsive {
                position: relative;
                flex-direction: column;
                align-items: flex-start;
                z-index: 10000;
                height: 100vh;
            }

            .topnav.responsive .menu {
                display: block;
                width: 100%;
            }

            .topnav.responsive .menu a {
                display: block;
                text-align: left;
                width: 100%;
                padding: 14px 16px;
                box-sizing: border-box;
            }

            .topnav.responsive .buttons {
                display: block;
                width: 100%;
                padding: 0 16px;
            }

            .topnav.responsive .buttons .login,
            .topnav.responsive .buttons .cad {
                width: auto;
                margin: 5px 0;
            }

            .topnav.responsive .icon {
                position: absolute;
                right: 16px;
                top: 16px;
            }
        }

        /* Ocultar o ícone do WhatsApp quando o menu responsivo for aberto */
        .hide-whatsapp-icon .whatsapp-icon {
            display: none;
        }
    </style>
</head>

<body>

    <div class="topnav" id="myTopnav">


        <a href="/VacinePet/index.php" class="logo">VacinePet<i class="fa-solid fa-paw fa-rotate-by"
                style="color: #FA5909; --fa-rotate-angle: 49deg; width: 18px; height: 6px; font-size: 13px;"></i></a>
        <div class="menu">
            <a href="/VacinePet/index.php" class="active">Início</a>
            <a href="/VacinePet/conteudo/profissional.php">Profissional</a>
            <a href="/VacinePet/usuario/agendamento.php">Agendamento</a>
            <a href="/VacinePet/conteudo/adocao.php">Adoção</a>
            <a href="/VacinePet/conteudo/castracao.php">Castração</a>
            <a href="/VacinePet/infos-page/sobre-vacinepet.php">Sobre</a>
        </div>
        <div class="buttons">
            <a href="/VacinePet/inc/login.php"><button style=" width: 150px; border-radius: 20px;"
                    class="login">Entrar</button></a>
            <a href="/VacinePet/usuario/cadastro.php"><button style=" width: 150px; border-radius: 20px;"
                    class="cad">Cadastrar</button></a>
        </div>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i> <!-- Aqui está o ícone de hambúrguer -->
        </a>
    </div>

    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            var body = document.body;
            var html = document.documentElement;
            var whatsappIcon = document.querySelector('.whatsapp-icon');

            if (x.className === "topnav") {
                x.className += " responsive"; // Abre o menu responsivo
                body.classList.add("no-scroll"); // Bloqueia a rolagem no body
            } else {
                x.className = "topnav"; // Fecha o menu
                body.classList.remove("no-scroll"); // Libera a rolagem no body
                html.classList.remove("no-scroll"); // Libera a rolagem no html
            }
        }
    </script>

</body>

</html>