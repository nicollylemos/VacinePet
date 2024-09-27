<?php
include("../inc/header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/css/como-funciona.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css">
    <title>Como funciona?</title>
</head>

<body>
    <div class="container">
        <div class="title">
            <h1 class="title-comofunciona">AGENDAMENTO ONLINE
                <i style="color: #fa5909; --fa-rotate-angle: 49deg;"></i>
            </h1>
            <h6 class="subtitle">Você começa agendando a vacinação do seu pet através do nosso site. <br><br>
                Basta preencher um formulário simples com suas informações de contato,<br> endereço, dados do pet, e
                escolher a data e o horário mais
                conveniente para você.
            </h6>
            <img src="../imgs/cadastro.png" alt="Tela de cadastro" class="img-cad">
            <img src="../imgs/calendario.png" alt="Tela do calendário" class="img-cale">
        </div>
        <div class="sections-container">
            <div class="section">
                <div class="title-visita-container">
                    <div class="icon-container">
                        <i class="fas fa-house"></i>
                    </div>
                    <h3 class="title-visita">VISITA DO VETERINÁRIO</h3>
                </div>
                <p class="text-visita">No dia agendado, nosso veterinário irá até sua residência com todos os
                    equipamentos necessários para realizar a vacinação do seu pet.</p>
            </div>
            <div class="sections">
                <div class="title-acompanhamento-container">
                    <div class="icon-container2">
                        <i class="fas fa-message"></i>
                    </div>
                    <h3 class="title-acompanhamento">ACOMPANHAMENTO<br> PÓS-ATENDIMENTO</h3>
                </div>
                <p class="text-acompanhamento">Após a visita, você terá acesso a um canal direto de comunicação com o
                    veterinário para esclarecer dúvidas e receber orientações adicionais, garantindo o cuidado contínuo
                    com seu pet.</p>
            </div>
        </div>
        <div class="agende-agora">
            <h2 class="title-2">Não espere mais para proporcionar<br> o melhor cuidado ao seu animal!</h2>
            <p class="text-agendeja"> Agende já a visita do nosso veterinário e garanta a saúde e bem-estar do<br> seu
                pet com toda a comodidade e segurança do atendimento a domicílio.</p>
            <a href="../usuario/agendamento.php"><button class="btn btn-primary btn-custom">AGENDE AGORA</button></a>

        </div>
    </div>
</body>

<?php include ("../inc/footer.php") ?>
<!--Swiper JavaScript-->
<script src="../js/swiper/swiper-bundle.min.js"></script>

</html>