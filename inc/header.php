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

        .logo {
            font-size: 25px;
            color: #FA5909;
            font-family: baloo;
            float: left;
            display: block;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            
        }

        .topnav {
            overflow: hidden;
            background-color: #fff;
            border-bottom: 1px solid #DDD;
        }

        .topnav .link {
            float: left;
            display: block;
            color: #000;
            text-align: center;
            padding: 22px 16px;
            text-decoration: none;
            font-size: 18px;

        }

        .topnav a:hover {
            color: #2FA8BB;
        }

        .topnav a.active {
            color: white;
        }

        .topnav .icon {
            display: none;
        }

        .btn-acesso .btn-login,
        .btn-acesso .btn-cad {
            cursor: pointer;
            font-family: league;
            font-size: 18px;
            border-radius: 10px;
            border: 3.5px solid;
            width: 150px;
            font-weight: 700;
            letter-spacing: 0.5px;
            text-decoration: none;
            display: inline-block;
            padding: 8px 0;
        }

        .btn-acesso .btn-login {
            background-color: #ffffff;
            color: #52BACB;
            border-color: #52BACB;
            margin-right: 10px;
        }

        .btn-acesso .btn-cad {
            background-color: #52BACB;
            color: #fff;
            border-color: #52BACB;
        }

        .btn-acesso {
            display: inline-block;
            align-items: center;
            position: relative;
            left: 25%;
            top: 10px;
            padding: 1px;
        }


        @media screen and (max-width: 600px) {
            .topnav a:not(:first-child) {
                display: none;
            }

            .topnav a.icon {
                float: right;
                display: block;
            }
        }

        @media screen and (max-width: 600px) {
            .topnav.responsive {
                position: relative;
            }

            .topnav.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
            }

            .topnav.responsive a {
                float: none;
                display: block;
                text-align: left;
            }
        }
    </style>
</head>

<body>

    <div class="topnav" id="myTopnav">
        <a href="index.php" class="logo">VacinePet<i class="fa-solid fa-paw fa-rotate-by"
                style="color: #FA5909; --fa-rotate-angle: 49deg; width: 20px; height: 20px; font-size: 15px;"></i></a>
        <a href="index.php" class="link">Início</a>
        <a href="agendamento.php" class="link">Agendamento</a>
        <a href="infos-page/sobre-vacinepet.php" class="link">Sobre</a>
        <a href="infos-page/sobre-profissional.php" class="link">Profissional</a>
        <a href="#about" class="link">Contato</a>
        <div class="btn-acesso ms-auto">
            <a href="login.php"><button class="btn-login">Entrar</button></a>
            <a href="cadastro.php"><button class="btn-cad">Cadastrar</button></a>
        </div>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
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