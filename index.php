<!--
 /**
 * @file index.php
 *
 * @brief Página inicial do site VacinePet que fornece informações sobre o serviço de vacinação para animais domésticos, como cães e gatos.
 *        Inclui links para agendamento de vacinas, informações sobre doenças comuns e um carrossel de vacinas mais procuradas.
 *
 * @author Nicolly Lemos da Silva
 *
 * @version 1.0
 * 
 * @date 2024-09-20
 *
 * @copyright Todos os direitos reservados
 *
 * @details
 * Esta página contém seções para introduzir o serviço de vacinação de pets no domicílio, um carrossel para vacinas populares
 * com informações e valores estimados, e links para páginas com informações mais detalhadas sobre doenças que afetam cães e gatos.
 */
--><?php

include("./inc/header.php"); ///< Inclui o cabeçalho do site.

include_once('config.php');  // Inclui o arquivo de configuração para conexão com o banco

// Defina o valor do cod_vac diretamente



$sql = "SELECT * FROM vacina ORDER BY cod_vac ";
$result = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!--
    * @brief Cabeçalho HTML contendo informações de metadados e links para arquivos CSS externos.
    * @details Inclui links para a estilização da página, o ícone do site e bibliotecas externas como FontAwesome e Swiper.
    -->
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=10, minimum-scale=1.0">
    <link rel="stylesheet" href="css/css/index-seg.css">    
    <link rel="stylesheet" href="css/css/iniciar.css">
    <link rel="stylesheet" href="css/css/whatsapp.css">
    <link rel="stylesheet" href="css/css/responsividade/telainicial.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css">
    <link rel="stylesheet" href="css/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <title>VacinePet</title>

</head>

<style>
html,
body {
    overflow-x: hidden;
    /* Esconde a rolagem horizontal */
}
</style>

<body>
    <!--
    * @brief Seção inicial com título e descrição do serviço.
    * @details Apresenta o serviço de vacinação em domicílio com um botão de agendamento e uma breve descrição dos benefícios da vacinação.
    -->
    <section class="home-inicial">
        <div class="tela-inicial">
            <div class="info-inicial">
                <h1 class="titulo-site">VacinePet<i class="fa-solid fa-paw fa-rotate-by" id="icon"> </i>
                </h1>
                <h2 class="subtitulo-site">CARINHO,
                    CUIDADO E PREVENÇÃO PARA <br>SEU PET,
                    NO CONFORTO DA SUA CASA.</h2>
                <p id="sub">Manter a vacinação do seu pet atualizada também é uma forma de amor. Com a chegada do
                    filhote,
                    a responsabilidade aumenta e a imunização contra doenças já nos primeiros meses de vida,
                    se faz mais do que necessária. Agende agora com o VacinePet e garanta a saúde do seu animal de
                    estimação. </p> <?php if ($admin): ?><a href="/VacinePet/usuario/agendamento.php">
                    <button class="btn-inicio">Agendar</button></a> <?php endif; ?>
                <?php if ($logado): ?><a href="/VacinePet/usuario/agendamento.php">
                    <button class="btn-inicio">Agendar</button></a> <?php endif; ?>
                <?php if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)): ?>
                <button class="btn-inicio" onclick="modalLogin.showModal()">Agendar</button><?php endif; ?>
            </div>
            <div class="img-animal"></div>
        </div>
    </section>
    <!-- Card para tela de informações sobre as doenças -->
    <div id="doenca" class="info-doencas">
        <div class="informacao">
            <div class="row justify-content-center">
                <div class="infos" id="info-cao">
                    <div class="texto">
                        <h3>CÃO</h3>
                        <p>Muitos problemas de saúde podem atingir nossos pets. Informe-se sobre as doenças que
                            podem afetar seus pets e como preveni-las. Conheça os riscos à saúde do seu cão!</p>
                        <a href="/VacinePet/conteudo/doencascachorro.php"><button id="btn-cao" class="btn-ler">Ler
                                Mais</button></a>
                    </div>
                </div>
                <div class="infos" id="info-gato">
                    <div class="texto">
                        <h3>GATO</h3>
                        <p>Muitos problemas de saúde podem atingir nossos pets. Informe-se sobre as doenças que
                            podem afetar seus pets e como preveni-las. Conheça os riscos à saúde do seu gato!</p>
                        <a href="/VacinePet/conteudo/doencasgato.php"><button id="btn-gato" class="btn-ler">Ler Mais</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Valores Vacinas -->
    <section class="secao-valores">
        <div class="vacinas-valor">
            <div class="titulo-vacina">
                <h2 id="vmp">Vacinas mais procuradas</h2>
            </div>

            <div class="slide-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">

                        <?php
            // Verifica se existem vacinas cadastradas
            if ($result->num_rows > 0) {
                while ($vacina = $result->fetch_assoc()) {
                    echo '<div class="card swiper-slide" id="cardizinhos">';
                    echo '<div class="image-content"><span class="overlay"></span>';
                    echo '<div class="card-image"><img src="imgs/pata-icone.png" alt="" class="card-img"></div>';
                    echo '</div>'; // image-content
                    echo '<div class="card-content">';
                    echo '<p class="valor">R$' . number_format($vacina['valor'], 2, ',', '.') . '</p>';
                    echo '<p id="tipo">' . $vacina['tipo'] . '</p>';
                    echo '<h3 class="nome-vacina">' . $vacina['nome'] . '</h3>';
                    echo '<p class="description">' . $vacina['descricao'] . '</p>';
                    echo '<a href="#"><button type="submit" class="btn-vacinas">Ver Mais</button></a>';
                    echo '</div>'; // card-content
                    echo '</div>'; // card
                }
            }
            ?>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

    </section>

    <section class="recado">
        <h1 id="recado">Atenção: O carrossel de vacinas do site oferece apenas uma estimativa de valores. As vacinas
            devem ser indicadas pela médica veterinária.</h1>
    </section>

    <section class="atendimento-domiciliar">
        <div class="fundo-atendimento">
            <div class="conteudo-atend">
                <h2 class="como">Como funciona nosso agendamento?</h2>
                <p class="p-text" style="color: white;">
                    Garantir a saúde dos pets é uma prioridade para muitos proprietários. A vacinação protege contra
                    doenças, mas ir à clínica pode ser complicado. Para facilitar, oferecemos um sistema de agendamento
                    que permite organizar a vacinação e castração do seu pet com comodidade, inclusive a domicílio.
                </p><a href="/VacinePet/conteudo/como-funciona.php"><button class="btn-ler-atend">Saiba
                        mais</button></a>
            </div>
        </div>
    </section>

    <!-- Ícone do WhatsApp -->
    <div class="whatsapp-icon">
        <a href="https://wa.me/5512991445347?text=Olá!%20Tenho%20uma%20dúvida%20sobre%20o%20serviço.%20Poderia%20me%20ajudar%20com%20mais%20informações?"
            target="_blank" title="Fale conosco no WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>
    <dialog class="modalLog" id="modalLogin">
        <div class="modalLogin">
            <button class="close" onclick=" modalLogin.close()">
                <i class="fa-regular fa-circle-xmark"></i>
            </button>
            <h1> Aviso:<br> Login Necessário</h1>
            <p>Para realizar o agendamento, é necessário estar logado em sua conta. Por favor, faça login para
                continuar.</p>
            <a href="/VacinePet/inc/login.php" class="logar"><button class="entrar"
                    style="border-radius:10px;">Entrar</button></a>
            <p>Não tem uma conta? <a href="/VacinePet/usuario/cadastro.php" class="cadastrar">Cadastre-se aqui!</a></p>

        </div>
    </dialog>
</body>
<?php include("./inc/footer.php") ?>
<!--Swiper JavaScript-->
<script src="js/swiper/swiper-bundle.min.js"></script>
<!--JavaScript-->
<script src="js/telainicial.js"></script>

</html>