<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css/rodarodape.css">
    <link rel="stylesheet" href="css/css/responsividade/footer-resp.css">
    <style>
    @media (min-width:310px) and (max-width: 350px) {
        .footer {
            width: 350px;
            height: 650px;
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
                <li>Telefone: (XX)XXXXX-XXXX
                </li>
                <li>Email: vacinepet@gmail.com</li>
            </ul>
            <ul class="duvidas">
                <li>
                    <h2>Dúvidas</h2>
                </li>
                <li><a href="#">Como funciona o atendimento domiciliar?</a></li>
                <li><a href="#">Como confirmar agendamento</a></li>
                <li><a href="pagamento.php">Formas de pagamento</a></li>
            </ul>
            <ul>
                <li>
                    <h2>Políticas e Termos</h2>
                </li>
                <li><a href="#">Política de Privacidade</a></li>
                <li><a href="#">Termo de Uso</a></li>
                <li><a href="#">Direitos Autorais</a></li>
            </ul>
            <ul>
                <li>
                    <h2>Sobre nós</h2>
                </li>
                <li><a href="#">Sobre o VacinePet</a></li>
                <li><a href="#">Sobre o profissional</a></li>
                <li><a href="#">Sobre o atendimento</a></li>
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