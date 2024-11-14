<?php
include("../inc/header.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/css/profissional.css">
    <link rel="stylesheet" href="../css/css/responsividade/telaveterinaria.css">
    <link rel="stylesheet" href="../css/css/whatsapp.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css">
    <title>Conheça a Veterinária</title>

    <style>
   
    </style>
</head>

    

<body>

    <div class="fundo">
        <h1 class="title">Conheça nossa profissional</h1>
        <h1 class="subtitle">Quem é a Dra. Luciane Mônica?</h1>

        <div class="sobre-profissional">

            <p class="destaque">Dra. Luciane Mônica Gonçalves Mansano <br>CRMV SP 7854<br></p>

            <p id="p1" style="margin-bottom: 20px;">Dra. Luciane Mônica é uma médica veterinária com mais de 20 anos de experiência,
                dedicada ao cuidado de pequenos animais, com especial foco em medicina de felinos. Possui especializações em
                Homeopatia, Saúde Pública e Medicina de Felinos, é mestre em Ciências pela USP.<br>
            </p>
            <p id="p2" style="margin-bottom: 20px;">Sua atuação inclui serviços práticos e acessíveis, como a aplicação de vacinas
                em domicílio e a realização de castrações de felinos, garantindo o conforto e a tranquilidade dos tutores e
                de seus pets.<br>
            </p>
            <p id="p3" style="margin-bottom: 20px;"> Com um atendimento atencioso e especializado, Dra. Luciane proporciona o melhor
                cuidado possível para a saúde e bem-estar dos animais e seus tutores.
                Com uma carreira sólida e ampla experiência clínica, Dra. Luciane Mônica é a escolha ideal para quem busca
                uma veterinária que une conhecimento técnico, experiência e paixão pelos animais.</p>

            <p id="p4"> Entre em contato e agende uma visita para garantir a saúde e o bem-estar do seu pet com o cuidado
                especializado da Dra. Luciane. Seu animalzinho merece o melhor!</p>


                <?php if ($admin || $logado) : ?>
                    <a  class="btn btn-primary" href="/VacinePet/usuario/agendamento.php">Agende agora</a>
                    <?php endif; ?>
                    <?php if (!isset($_SESSION['email']) && !isset($_SESSION['senha_hash'])): ?>
                    <a  class="btn btn-primary" href="#" onclick="document.getElementById('modalLogin').showModal(); return false;">Agende agora</a>
                    <?php endif; ?>
                  

        </div>
        


        <!-- Ícone do WhatsApp -->
        <div class="whatsapp-icon">
            <a href="https://wa.me/5512991445347?text=Olá!%20Tenho%20uma%20dúvida%20sobre%20o%20serviço.%20Poderia%20me%20ajudar%20com%20mais%20informações?"
                target="_blank" title="Fale conosco no WhatsApp">
                <i class="fab fa-whatsapp"></i>
            </a>
        </div> 
    </div>
    

</body>
<?php include("../inc/footer.php") ?>

<dialog class="modalLog" id="modalLogin">
        <div class="modalLogin">
            <button class="close" onclick="document.getElementById('modalLogin').close()">
                <i class="fa-regular fa-circle-xmark"></i>
            </button>
            <h1> Aviso:<br> Login Necessário</h1>
            <p>Para realizar o agendamento, é necessário estar logado em sua conta. Por favor, faça login para
                continuar.</p>
            <a href="/VacinePet/inc/login.php" class="logar">
                <button class="entrar" style="border-radius:10px;">Entrar</button>
            </a>
            <p>Não tem uma conta? <a href="/VacinePet/usuario/cadastro.php" class="cadastrar">Cadastre-se aqui!</a></p>
        </div>
    </dialog>
</html>