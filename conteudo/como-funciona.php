<?php include("../inc/header.php"); ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Como Funciona?</title>
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @font-face {
            font-family: 'baloo';
            src: url("../font/baloo/Baloo-Regular.ttf");
        }

        @font-face {
            font-family: 'league';
            src: url("../font/league/LeagueSpartan-Regular.ttf");
        }

        /* Configurações gerais */
        body {
            font-family: 'Poppins', sans-serif;
            color: #333;
            background-color: #52BACB;
        }

        /* Seção de título */
        .title-section {
            text-align: center;
            padding: 2rem 1rem;
            border-radius: 8px;
            margin-bottom: 2rem;
            font-family: baloo;
        }

        .subtitle {
            font-family: sans-serif;
        }

        .title-section h1 {
            font-size: 1.9rem;
            color: #fff;
            margin-bottom: 0.5rem;
            font-family: 'baloo', sans-serif;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 8px 20px;
            background-color: #fa5909;
            border-radius: 15px;
            display: inline-block;
            position: relative;
        }

        .title-section p {
            font-size: 1.1rem;
            color: #555;
            background-color: #fff;
            padding: 50px 20px 20px 20px;
            /* Padding: top right bottom left */
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
            margin-top: -40px;
            /* Ajuste para elevar a posição do bloco */
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Sombra suave para destaque */
        }

        /* Estilo para destacar palavras específicas */
        .highlight {
            font-weight: bold;
            color: #52BACB;
            /* Cor laranja para combinar com o tema */
        }



        .images {

            display: flex;
            gap: 1rem;
            justify-content: center;
            margin-top: 1.5rem;
        }

        .img-fluid {
            margin-top: 30px;
            max-width: 35%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 10px 16px rgba(0, 0, 0, 0.5);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        /* Efeito ao passar o mouse sobre as imagens */
        .img-fluid:hover {
            transform: scale(1.05);
            /* Aumenta levemente a imagem */
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.6);
            /* Intensifica a sombra */
        }

        /* Estilo para o lightbox */
        .lightbox {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 1000;
        }

        .lightbox img {
            max-width: 90%;
            max-height: 90%;
            border-radius: 8px;
        }

        /* Seção de informações */
        .info-section {
            display: flex;
            gap: 2rem;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 2rem;
        }

        .info-card {
            margin-top: 30px;
            background-color: #fff;
            padding: 2rem;
            border-radius: 12px;
            /* Aumenta a suavidade das bordas */
            text-align: center;
            width: 320px;
            /* Aumenta a largura para dar mais espaço ao conteúdo */
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.1);
            /* Suaviza e expande a sombra */
            transition: transform 0.2s, box-shadow 0.2s;
            /* Adiciona animação para efeito de hover */
        }

        .info-card:hover {
            transform: translateY(-5px);
            /* Eleva o card ao passar o mouse */
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15);
            /* Aumenta a sombra no hover */
        }

        .info-card .icon {
            font-size: 3rem;
            /* Aumenta o ícone para dar mais destaque */
            color: #FD811C;
            /* Cor mais suave para combinar com o tema */
            margin-bottom: 1.2rem;
            /* Ajusta o espaço abaixo do ícone */
        }

        .info-card h3 {
            font-size: 1.6rem;
            /* Aumenta o título um pouco para melhorar a hierarquia */
            color: #333;
            margin-bottom: 0.7rem;
            /* Aumenta o espaçamento abaixo do título */
            font-family: 'Baloo', sans-serif;
        }

        .info-card p {
            font-size: 1.05rem;
            /* Levemente maior para facilitar a leitura */
            color: #666;
            /* Tom mais claro para o texto, mantendo o contraste */
            line-height: 1.7;
        }


        /* Seção de chamada para ação */
        .cta-section {
            text-align: center;
            background-color: #fff;
            padding: 2rem 1rem;
            border-radius: 8px;
            margin-bottom: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .cta-section h2 {
            font-size: 2rem;
            color: #fa5909;
            margin-bottom: 1rem;
        }

        .cta-section p {
            font-size: 1.1rem;
            color: #666;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .btn-custom {
            background-color: #fa5909;
            border: none;
            color: #fff;
            padding: 0.75rem 1.5rem;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #d94e08;
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .title-section h1 {
                font-size: 2rem;
            }

            .info-section {
                flex-direction: column;
                align-items: center;
            }

            .info-card {
                width: 90%;
            }

            .cta-section h2 {
                font-size: 1.8rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <header class="title-section">
            <h1>Agendamento Online</h1>
            <!-- Conteúdo HTML do parágrafo com destaque nas palavras -->
            <p class="subtitle">
                Você começa agendando o serviço escolhido através do nosso site.<br> Basta preencher um
                formulário com suas informações de <span class="highlight">contato</span>, <span
                    class="highlight">endereço</span> e <span class="highlight">dados do pet</span>, escolhendo a data e
                o horário mais conveniente para você.
            </p>

            <div class="images">
                <img src="../imgs/tela-cadastro.png" alt="Tela de cadastro" class="img-fluid">
                <img src="../imgs/tela-agendamento.png" alt="Tela do calendário" class="img-fluid">
            </div>
        </header>

        <main>
            <section class="info-section">
                <div class="info-card">
                    <i class="fas fa-house icon"></i>
                    <h3>Visita do Veterinário</h3>
                    <p>No dia agendado, nosso veterinário irá até sua residência com todos os equipamentos necessários
                        para realizar a vacinação do seu pet.</p>
                </div>
                <div class="info-card">
                    <i class="fas fa-message icon"></i>
                    <h3>Acompanhamento Pós-Atendimento</h3>
                    <p>Após a visita, você terá acesso a um canal direto de comunicação com o veterinário para
                        esclarecer dúvidas e garantir o cuidado contínuo do seu pet.</p>
                </div>
            </section>

            <section class="cta-section">
                <h2>Não espere mais para proporcionar o melhor cuidado ao seu animal!</h2>
                <p>Agende já a visita do nosso veterinário e garanta a saúde e bem-estar do seu pet com toda a
                    comodidade e segurança do atendimento a domicílio.</p>
                <a href="../usuario/agendamento.php" class="btn btn-custom">Agende Agora</a>
            </section>
        </main>
    </div>

    <!-- Lightbox -->
    <div class="lightbox" id="lightbox">
        <img id="lightbox-img" src="" alt="Imagem ampliada">
    </div>

    <script>
        // Seleciona as imagens e o lightbox
        const lightbox = document.getElementById("lightbox");
        const lightboxImg = document.getElementById("lightbox-img");
        const images = document.querySelectorAll(".img-fluid");

        // Função para abrir o lightbox com a imagem clicada
        images.forEach(img => {
            img.addEventListener("click", () => {
                lightbox.style.display = "flex";
                lightboxImg.src = img.src;
            });
        });

        // Fechar o lightbox ao clicar fora da imagem
        lightbox.addEventListener("click", (e) => {
            if (e.target !== lightboxImg) {
                lightbox.style.display = "none";
            }
        });
    </script>

    <?php include("../inc/footer.php"); ?>
</body>

</html>