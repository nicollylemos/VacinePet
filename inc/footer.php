<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/css/rodapee.css">
    <style>
    @font-face {
        font-family: 'league';
        src: url("../font/league/LeagueSpartan-Regular.ttf");
    }

    @font-face {
        font-family: 'baloo';
        src: url("../font/baloo/Baloo-Regular.ttf");
    }

    @font-face {
        font-family: 'oswald';
        src: url("../font/oswald/Oswald-Regular.ttf");
    }

    .footer h1 {
        color: #ffffff;
        font-family: baloo;
        font-size: 23px;
        margin-left: 30px;
        position: relative;
        top: 25px;
        margin-bottom: 35px;
        font-weight: 500;
    }

    .footer {
        padding-left: 15px;
    }

    .footer {
        background-color: #419dac;
        height: 270px;
    }

    .footer ul {
        display: inline-block;
        list-style: none;
        font-weight: 400;
    }

    .footer li {
        font-family: league;
        color: #ffffff;
        margin-right: 30px;
        font-size: 15px;
        margin-left: 10px;
        margin-top: 5px;
    }

    .footer a {
        text-decoration: none;
        color: #fff;
    }

    .footer h2 {
        font-size: 17px;
        font-family: baloo;
        color: #ffffff;
        font-weight: 500;
        margin-bottom: 5px;
    }

    .redes-sociais {
        display: inline-block;
        position: relative;
        bottom: 30px;
    }

    .redes-sociais i {
        text-align: center;
        margin: 5px
    }

    .creditos {
        margin-top: 10px;
        text-align: center;
        color: #ffffff;
        font-size: 14px;
        font-weight: 500;
    }

    hr {
        margin: 20px;
    }

    @media (min-width:310px) and (max-width: 500px) {
        .sobre{
            position: relative;
            left: -50px;
        }
        .footer {
            width: 480px;
            height: 900px;
        }

        ul {
            margin-top: 10px;
        }

        .redes-sociais {
            position: relative;
            top: 10px;
        }

        .redes-sociais i {
            text-align: center;
            margin: 5px
        }
        .creditos{
            width: 300px;
        }
    }

    @media (max-width:767px) and (min-width: 350px) {
        .footer {
            height: 650px;
        }

        ul {
            margin-top: 10px;
        }

        .redes-sociais {
            margin-top: 30px;
        }

        .redes-sociais i {
            text-align: center;
            margin: 5px
        }
    }

    @media (max-width: 992px) and (min-width:725px) {
        .redes-sociais {
            margin-top: 30px;
            margin-left: 90px;
        }

        .footer {
            height: 400px;
        }
    }


    @media (min-width:992px) and (max-width:1216px) {
        .redes-sociais {
            margin-top: 30px;
        }

        .footer {
            height: 400px;
        }
    }
    </style>

</head>

<body>
    <div class="footer">
        <h1>VacinePet <i class="fa-solid fa-paw fa-rotate-by"
                style="color: #fff; --fa-rotate-angle: 49deg; width: 13px; height:7px; font-size:13px;"></i></h1>
        <div class="infos-site">
            <ul>
                <li>
                    <h2>Contato</h2>
                </li>
                <li>Funcionamento de Segunda a Sexta
                </li>
                <li>Telefone: +55 12 99144-5347
                </li>
                <li>Email: vacinepet@gmail.com</li>
            </ul>
            <ul class="duvidas">
                <li>
                    <h2>Dúvidas</h2>
                </li>
                <li><a href="como-funciona.php">Como funciona o agendamento</a></li>
                <li><a href="../infos-page/vacinacao.php">Vacinação em Domicílio</a></li>
                <li><a href="../infos-page/pagamento.php">Formas de pagamento</a></li>
            </ul>
            <ul>
                <li>
                    <h2>Políticas e Termos</h2>
                </li>
                <li><a href="../infos-page/politicas-privacidade.php">Termos de Uso</a></li>
                <li><a href="../infos-page/politicas-privacidade.php">Política de Privacidade</a></li>
                <li><a href="../infos-page/direitos.php">Direitos Autorais</a></li>
            </ul>
            <ul  class="sobre">
                <li>
                    <h2 >Sobre nós</h2>
                </li>
                <li><a href="../infos-page/sobre-vacinepet.php">Sobre o VacinePet</a></li>
                <li><a href="profissional.php">Sobre o profissional</a></li>
                <li><a href="../infos-page/vacinacao.php">Sobre o atendimento</a></li>
            </ul>
            <ul class="redes-sociais">
                <li>
                    <h2>Redes Sociais:</h2>
                </li>
                <li class="icones"><a href="#"><i class="fa-brands fa-instagram"
                            style="color: #ffffff;font-size:35px;"></i></a><a href="#"><i class="fa-brands fa-facebook"
                            style="color: #ffffff;font-size:35px;"></i></a>
                </li>
            </ul>
            <hr>
            <p class="creditos"> VacinePet © Copyright 2024. Desenvolvido pela WebWave</p>
        </div>


    </div>
</body>

</html>