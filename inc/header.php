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
        font-size: 17px;
    }

    .topnav a:hover {
        color: #52BACB;
    }

    .topnav .buttons {
        display: flex;
        gap: 1px;
    }

    .topnav .cad {
        cursor: pointer;
        font-size: 18px;
        background-color: #ffffff;
        border-radius: 10px;
        border: 3.5px solid #52BACB;
        width: 150px;
        font-weight: 700;
        letter-spacing: 0.5px;
        text-decoration: none;
        color: #52BACB;
        font-family: league;
        padding: 2%;
    }

    .topnav .login {
        cursor: pointer;
        font-size: 18px;
        background-color: #ffffff;
        border-radius: 10px;
        border: 3.5px solid #52BACB;
        width: 150px;
        font-weight: 700;
        letter-spacing: 0.5px;
        text-decoration: none;
        color: #52BACB;
        font-family: league;
        padding: 2%;
    }

    .topnav .icon {
        display: none;
    }

    @media screen and (max-width: 600px) {
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

    @media screen and (max-width: 600px) {
        .topnav.responsive {
            position: relative;
            flex-direction: column;
            align-items: flex-start;
            z-index: 80;
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
    </style>
</head>

<body>

    <div class="topnav" id="myTopnav">
        <a href="index.php" class="logo">VacinePet<i class="fa-solid fa-paw fa-rotate-by"
                style="color: #FA5909; --fa-rotate-angle: 49deg; width: 20px; height: 20px; font-size: 15px;"></i></a>
        <div class="menu">
            <a href="index.php" class="home active">Início</a>
            <a href="agendamento.php">Agendamento</a>
            <a href="infos-page/sobre-vacinepet.php">Sobre</a>
            <a href="infos-page/sobre-profissional.php">Profissional</a>

        </div>
        <div class="buttons">
            <a href="login.php"><button class="login">Entrar</button></a>
            <a href="cadastro.php"><button class="cad">Cadastrar</button></a>
        </div>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i> <!-- Aqui está o ícone de hambúrguer -->
        </a>
    </div>

    <script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
    </script>

</body>

</html>