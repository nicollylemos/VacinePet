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
-->
<?php
include("./inc/header.php"); ///< Inclui o cabeçalho do site.
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
    <link rel="stylesheet" href="css/css/inicio-tela.css">
    <link rel="stylesheet" href="css/css/inicial.css">
    <link rel="stylesheet" href="css/css/whatsapp.css">
    <link rel="stylesheet" href="css/css/responsividade/telainicio.css">
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
                <h1 class="titulo-site">VacinePet
                </h1>
                <h2 class="subtitulo-site">CARINHO,
                    CUIDADO E PREVENÇÃO PARA <br>SEU PET,
                    NO CONFORTO DA SUA CASA.</h2>
                <p>Manter a vacinação do seu pet atualizada também é uma forma de amor. Com a chegada do filhote,
                    a responsabilidade aumenta e a imunização contra doenças já nos primeiros meses de vida,
                    se faz mais do que necessária. Agende agora com o VacinePet e garanta a saúde do seu animal de
                    estimação. </p><a href="/VacinePet/usuario/agendamento.php"><button
                        class="btn-inicio">Agendar</button></a>
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
                        <a href="/VacinePet/conteudo/doencascachorro.php"><button type="submit" class="btn-ler">Ler
                                Mais</button></a>
                    </div>
                </div>
                <div class="infos" id="info-gato">
                    <div class="texto">
                        <h3>GATO</h3>
                        <p>Muitos problemas de saúde podem atingir nossos pets. Informe-se sobre as doenças que
                            podem afetar seus pets e como preveni-las. Conheça os riscos à saúde do seu gato!</p>
                        <a href="/VacinePet/conteudo/doencasgato.php"><button class="btn-ler">Ler Mais</button></a>
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
                    <div class=" card-wrapper swiper-wrapper">
                        <div class="card swiper-slide">
                            <div class="image-content"><span class="overlay"></span>
                                <div class="card-image"><img src="imgs/pata-icone.png" alt="" class="card-img">
                                </div>
                            </div>
                            <div class="card-content">
                                <p class="valor">R$149,90</p>
                                <p id="tipo">Vacina Canina</p>
                                <h3 class="nome-vacina">
                                    <!-- futuro php-->V10
                                </h3>
                                <p class="description">
                                    A vacina V10 é fundamental para proteger cães contra 10 doenças graves, incluindo
                                    cinomose, parvovirose e leptospirose. Previne infecções fatais e garante uma vida
                                    saudável. </p><a href="#"><button type="submit" class="btn-vacinas">Ver
                                        Mais</button></a>
                            </div>
                        </div>
                        <div class=" card swiper-slide">
                            <div class="image-content"><span class="overlay"></span>
                                <div class="card-image"><img src="imgs/pata-icone.png" alt="" class="card-img">
                                </div>
                            </div>
                            <div class="card-content">
                                <p class="valor">R$179,90</p>
                                <p id="tipo">Vacina Canina</p>
                                <h3 class="nome-vacina">
                                    <!-- futuro php-->Gripe canina
                                </h3>
                                <p class="description">A vacina contra gripe canina previne infecções respiratórias
                                    graves, como a tosse dos canis. Essencial para cães sociáveis, reduz sintomas e
                                    mantém a saúde em dia.</p><button type="submit" class="btn-vacinas">Ver
                                    Mais</button>
                            </div>
                        </div>
                        <div class=" card swiper-slide">
                            <div class="image-content"><span class="overlay"></span>
                                <div class="card-image"><img src="imgs/pata-icone.png" alt="" class="card-img">
                                </div>
                            </div>
                            <div class="card-content">
                                <p class="valor">R$164,90</p>
                                <p id="tipo">Vacina Canina</p>
                                <h3 class="nome-vacina">
                                    <!-- futuro php-->Giardia
                                </h3>
                                <p class="description">A vacina contra giárdia protege cães da infecção intestinal
                                    causada por parasitas. Importante para prevenir diarreia, vômitos e desidratação,
                                    mantendo-os saudáveis. </p><button type="submit" class="btn-vacinas">Ver
                                    Mais</button>
                            </div>
                        </div>
                        <div class=" card swiper-slide">
                            <div class="image-content"><span class="overlay"></span>
                                <div class="card-image"><img src="imgs/pata-icone.png" alt="" class="card-img">
                                </div>
                            </div>
                            <div class="card-content">
                                <p class="valor">R$125,90</p>
                                <p id="tipo">Vacina Canina e Felina</p>
                                <h3 class="nome-vacina">
                                    <!-- futuro php-->Raiva
                                </h3>
                                <p class="description">A vacinação contra a raiva é obrigatória para cães e gatos no
                                    Brasil, ajudando a controlar a doença viral que pode ser transmitida de animais para
                                    humanos, protegendo ambos. </p><button type="submit" class="btn-vacinas">Ver
                                    Mais</button>
                            </div>
                        </div>
                        <div class=" card swiper-slide">
                            <div class="image-content"><span class="overlay"></span>
                                <div class="card-image"><img src="imgs/pata-icone.png" alt="" class="card-img">
                                </div>
                            </div>
                            <div class="card-content">
                                <p class="valor">R$165,90</p>
                                <p id="tipo">Vacina Felina</p>
                                <h3 class="nome-vacina">
                                    <!-- futuro php-->V3
                                </h3>
                                <p class="description">A vacina V3 para gatos, ou tríplice, protege contra
                                    Rinotraqueíte, Calicivirose e Panleucopenia felina, prevenindo essas doenças graves
                                    e mantendo a saúde do seu felino. </p><button type="submit" class="btn-vacinas">Ver
                                    Mais</button>
                            </div>
                        </div>
                        <div class=" card swiper-slide">
                            <div class="image-content"><span class="overlay"></span>
                                <div class="card-image"><img src="imgs/pata-icone.png" alt="" class="card-img">
                                </div>
                            </div>
                            <div class="card-content">
                                <p class="valor">R$179,90</p>
                                <p id="tipo">Vacina Felina</p>
                                <h3 class="nome-vacina">
                                    <!-- futuro php-->V4
                                </h3>
                                <p class="description">A vacina V4, ou Felocell CVR®-C, é uma vacina viva atenuada para
                                    gatos, que protege contra panleucopenia, rinotraqueíte, calicivirose e clamidiose
                                    felina.
                                </p><button type="submit" class="btn-vacinas">Ver Mais</button>
                            </div>
                        </div>
                        <div class=" card swiper-slide">
                            <div class="image-content"><span class="overlay"></span>
                                <div class="card-image"><img src="imgs/pata-icone.png" alt="" class="card-img">
                                </div>
                            </div>
                            <div class="card-content">
                                <p class="valor">R$209,90</p>
                                <p id="tipo">Vacina Felina</p>
                                <h3 class="nome-vacina">
                                    <!-- futuro php-->V5
                                </h3>
                                <p class="description">A vacina V5 oferece proteção adicional ao incluir a imunização
                                    contra Leucemia Felina (Felv), além das doenças já cobertas pela V4: panleucopenia,
                                    rinotraqueíte, calicivirose e clamidiose. </p><button type="submit"
                                    class="btn-vacinas">Ver Mais</button>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content"><span class="overlay"></span>
                                <div class="card-image"><img src="imgs/pata-icone.png" alt="" class="card-img">
                                </div>
                            </div>
                            <div class="card-content">
                                <p class="valor">R$139,90</p>
                                <p id="tipo">Vacina Canina</p>
                                <h3 class="nome-vacina">
                                    <!-- futuro php-->V8
                                </h3>
                                <p class="description">A vacina V8 ajuda a prevenir cinomose, hepatite infecciosa
                                    canina, parainfluenza, parvovirose, coronavirose e leptospirose, oferecendo proteção
                                    abrangente para cães. </p><button type="submit" class="btn-vacinas">Ver
                                    Mais</button>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </section>

    <div class="recado">
        <p id="recado">Atenção: O carrossel de vacinas do site oferece apenas uma estimativa de valores. As vacinas
            devem ser indicadas pela médica veterinária.</p>
    </div>

    <section class="atendimento-domiciliar">
        <div class="fundo-atendimento">
            <div class="conteudo-atend">
                <h2 class="como">Como funciona a vacinação em domicílio?</h2>
                <p class="p-text" style="color: white;">
                    Atualmente, assegurar a saúde e o bem-estar dos animais de estimação é uma prioridade para muitos
                    proprietários. A vacinação é uma medida eficaz para protegê-los de doenças. Contudo, o deslocamento
                    até uma clínica veterinária pode ser complicado. Nesse contexto, o serviço de vacinação a domicílio
                    se apresenta como uma alternativa prática e conveniente.
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

</body>
<?php include("./inc/footer.php") ?>
<!--Swiper JavaScript-->
<script src="js/swiper/swiper-bundle.min.js"></script>
<!--JavaScript-->
<script src="js/telainicial.js"></script>

</html>