<?php
include("./inc/header.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=10, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/css/doencasgato.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css">
    <link rel="stylesheet" href="css/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <title>Doenças Felinas</title>
</head>

<body>
    <section class="start">
        <div class="espaco"></div>
        <div class="escritos">
            <h1 class="title-start">DOENÇAS<br>FELINAS</h1>
            <h4 class="sub-title-start">Conheça as doenças felinas e proteja seu melhor amigo!<br>
                Saber mais sobre infecções e problemas genéticos<br>
                é essencial para a saúde do seu gato. Identifique<br>
                sintomas cedo e assegure um tratamento eficaz.<br>
                Previna doenças com vacinação e cuidados regulares.<br>
                Informe-se e fortaleça o vínculo com seu pet.<br>
                Gostaria de conhecer mais sobre as doenças felinas?</h4>
            <button onclick="scrollToSection()" type="submit" class="btn-start">CONHECER</button>
            <div class="splash-container">
            </div>
        </div>

    </section>
    <section id="doencas">
        <div class="space"></div>
        <div class="titulo-vacina">
            <h2>DOENÇAS FELINAS</h2>
            <p class="subtitle">Conheça as principais doenças felinas e agende a vacinação com o veterinário<br> para
                garantir a saúde e bem-estar do seu pet.</p>
        </div>
        <div class="slide-container swiper">
            <div class="slide-content">
                <div class=" card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="card-content">
                            <h3 class="nome-vacina">
                                <!-- futuro php--> PANLEUCOPENIA
                            </h3>
                            <div class="textinhos">
                                <p class="description">A panleucopenia é uma doença viral que ataca o aparelho digestivo
                                    dos gatos e acomete principalmente os filhotes não vacinados. É conhecida como a
                                    “parvovirose dos gatos”. Sua transmissão se dá principalmente pelo contato direto
                                    com as fezes de animais doentes.

                                    ... </p>
                            </div>
                            <button onclick="modal.showModal()" class="btn-vacinas"><i class="fa-solid fa-angle-down"
                                    style=" width: 13px; height:7px; font-size:30px; margin-right: 16%;"></i> </button>

                            <dialog id="modal" class="modal-css">
                                <div class="infos">
                                    <div>
                                        <div class="title-modal">PANLEUCOPENIA</div>
                                        <div class="modal-body">
                                            O vírus causador da panleucopenia felina é altamente contagioso e, além
                                            disso, é resistente a vários métodos de desinfecção física e química. É
                                            importante destacar que, em ambientes contaminados, este vírus sobrevive em
                                            sua forma infecciosa por períodos prolongados de tempo, por dias ou até
                                            mesmo meses. Isso aumenta o risco de infecção para animais suscetíveis
                                            localizados em tais ambientes. <br><br>

                                            Os sintomas são:

                                            <span class="destaque">Vômito, acompanhado ou não de diarreia;
                                                Febre;
                                                Apatia;
                                                Falta de apetite e desidratação.
                                            </span><br><br>
                                            A melhor forma de prevenir a panleucopenia é por meio da vacinação. Converse
                                            com
                                            o médico-veterinário e
                                            mantenha a vacinação do seu pet em dia.

                                        </div>
                                    </div>
                                    <button class="btn-modal-fechar" onclick="modal.close()">FECHAR</button>
                            </dialog>
                        </div>
                    </div>
                    <div class=" card swiper-slide">
                        <div class="card-content">
                            <h3 class="nome-vacina">
                                <!-- futuro php--> RINOTRAQUEÍTE
                            </h3>
                            <div class="textinhos">
                                <p class="description">A rinotraqueíte é uma doença causada por um herpesvírus que
                                    acomete o trato respiratório superior dos gatos. A transmissão é muito fácil entre
                                    animais que convivem no mesmo ambiente...
                            </div>
                            </p> <button onclick="modal1.showModal()" class="btn-vacinas"><i
                                    class="fa-solid fa-angle-down"
                                    style=" width: 13px; height:7px; font-size:30px; margin-right: 16%;"></i> </button>

                            <dialog id="modal1" class="modal-css">
                                <div class="infos">
                                    <div>
                                        <div class="title-modal">RINOTRAQUEÍTE</div>
                                        <div class="modal-body">
                                            A rinotraqueíte felina é uma enfermidade viral respiratória muito comum e
                                            recorrente, principalmente nos meses mais frios do ano, e por isso é
                                            popularmente chamada pelos tutores de gripe em gatos. Apesar da comparação
                                            com a doença que acomete humanos, existem diferenças importantes que devem
                                            ser esclarecidas ao dono do pet. <br><br>

                                            Os sintomas são:

                                            <span class="destaque">Tosse;
                                                Espirros;
                                                Secreção nasal e ocular;
                                                Febre.

                                                Os gatos parecem gripados, com narinas entupidas, e podem ter
                                                dificuldades para respirar.
                                            </span><br><br>

                                            A melhor forma de prevenir a rinotraqueíte é por meio da vacinação.
                                            Converse com
                                            o médico-veterinário e
                                            mantenha a vacinação do seu pet em dia.

                                        </div>
                                    </div>
                                    <button class="btn-modal-fechar" onclick="modal1.close()">FECHAR</button>
                            </dialog>
                        </div>
                    </div>
                    <div class=" card swiper-slide">
                        <div class="card-content">
                            <h3 class="nome-vacina">
                                <!-- futuro php--> CALICIVIROSE
                            </h3>
                            <div class="textinhos">
                                <p class="description">

                                    A calicivirose é extremamente contagiosa e provoca um quadro de doença respiratória
                                    nos gatos, sendo muitas vezes confundida com outras doenças. No geral, o animal é
                                    infectado ao entrar em contato com outro gato que esteja com o calicivírus. Ela
                                    costuma ocorrer por meio da inalação de aerossóis ou contato com a saliva do outro
                                    felino...
                            </div>
                            </p> <button onclick="modal2.showModal()" class="btn-vacinas"><i
                                    class="fa-solid fa-angle-down"
                                    style=" width: 13px; height:7px; font-size:30px; margin-right: 16%;"></i> </button>

                            <dialog id="modal2" class="modal-css">
                                <div class="infos">
                                    <div>
                                        <div class="title-modal">CALICIVIROSE</div>
                                        <div class="modal-body">
                                            Isso destaca a importância da prevenção, especialmente em ambientes onde
                                            vários gatos convivem, como abrigos e lares multi-gato.

                                            <br><br>

                                            Os sintomas são:

                                            <span class="destaque">
                                                Tosses;
                                                Espirros;
                                                Corrimentos nasais;
                                                Febre;

                                                Úlceras (feridas) na boca, algo que dificulta muito a ingestão de água e
                                                alimentos.
                                            </span><br><br>
                                            A melhor forma de prevenir a coronavirose é por meio da vacinação.
                                            Converse com
                                            o médico-veterinário e
                                            mantenha a vacinação do seu pet em dia.

                                        </div>
                                    </div>
                                    <button class="btn-modal-fechar" onclick="modal2.close()">FECHAR</button>
                            </dialog>
                        </div>
                    </div>
                    <div class=" card swiper-slide">
                        <div class="card-content">
                            <h3 class="nome-vacina">
                                <!-- futuro php--> CLAMIDIOSE
                            </h3>
                            <div class="textinhos">
                                <p class="description">A clamidiose é uma infecção bacteriana que afeta em particular os
                                    olhos dos gatos. Frequentemente, a clamidiose ocorre ao mesmo tempo com outras
                                    infecções respiratórias. Se os olhos não forem tratados adequadamente, pode
                                    haver comprometimento permanente da visão...
                            </div>
                            </p> <button onclick="modal3.showModal()" class="btn-vacinas"><i
                                    class="fa-solid fa-angle-down"
                                    style=" width: 13px; height:7px; font-size:30px; margin-right: 16%;"></i>
                            </button>


                            <dialog id="modal3" class="modal-css">
                                <div class="infos">
                                    <div>
                                        <div class="title-modal">CLAMIDIOSE</div>
                                        <div class="modal-body">
                                            Gatos filhotes são mais suscetíveis a infecções antes de serem vacinados. A
                                            transmissão pode ocorrer quando a mãe lambe um filhote doente e depois lambe
                                            um filhote saudável, passando a doença de um para o outro.

                                            Essa mesma situação se aplica a gatos que vivem juntos e têm um laço muito
                                            forte, e costumam dar banho um no outro.

                                            O contágio também tem mais facilidade de ocorrer em felinos
                                            imunossuprimidos, ou seja, com sistema imunológico fraco, independente da
                                            idade.
                                            <br><br>

                                            Os sintomas são:

                                            <span class="destaque">
                                                Secreção ocular que lembra pus;
                                                Olhos avermelhados ou fechados podem indicar a clamidiose.

                                            </span><br><br>

                                            A melhor forma de prevenir a clamidiose é por meio da
                                            vacinação.
                                            Converse com
                                            o médico-veterinário e
                                            mantenha a vacinação do seu pet em dia.

                                        </div>
                                    </div>
                                    <button class="btn-modal-fechar" onclick="modal3.close()">FECHAR</button>
                            </dialog>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card-content">
                            <h3 class="nome-vacina">
                                <!-- futuro php--> LEUCEMIA VIRAL FELINA (FELV)
                            </h3>
                            <div class="textinhos">
                                <p class="description">A leucemia viral felina é uma doença incurável, causada por um
                                    vírus que afeta o sistema imune dos gatos, facilitando o aparecimento de infecções
                                    por bactérias e até mesmo de alguns tipos de tumor. Pode infectar gatos de qualquer
                                    idade, em geral os filhotes com menos de 1 ano de idade são os mais acometidos....
                            </div>
                            </p> <button onclick="modal4.showModal()" class="btn-vacinas"><i
                                    class="fa-solid fa-angle-down"
                                    style=" width: 13px; height:7px; font-size:30px; margin-right: 16%;"></i>
                            </button>

                            <dialog id="modal4" class="modal-css">
                                <div class="infos">
                                    <div>
                                        <div class="title-modal">HEPATITE INFECCIOSA</div>
                                        <div class="modal-body">
                                            A transmissão acontece principalmente quando um animal infectado lambe
                                            outros gatos, já que o vírus é excretado em abundância na saliva. É uma
                                            doença silenciosa, na maioria das vezes. <br><br>

                                            Os sintomas são:

                                            <span class="destaque">

                                                Perda de apetite e de peso;
                                                Apatia;
                                                Dificuldade para respirar;
                                                Febre;
                                                Anemia;
                                                Anorexia.
                                            </span><br><br>

                                            Não existe tratamento específico.

                                        </div>
                                    </div>
                                    <button class="btn-modal-fechar" onclick="modal4.close()">FECHAR</button>
                            </dialog>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card-content">
                            <h3 class="nome-vacina">
                                <!-- futuro php--> RAIVA
                            </h3>
                            <div class="textinhos">
                                <p class="description">A raiva é uma das doenças infecciosas de cães e gatos mais
                                    importantes porque é uma zoonose fatal. Geralmente é transmitida por meio da mordida
                                    de um animal infectado (que pode ser um cão ou um gato) ou de animais que funcionam
                                    como reservatórios naturais (morcegos, por exemplo)...
                            </div>
                            </p> <button onclick="modal5.showModal()" class="btn-vacinas"><i
                                    class="fa-solid fa-angle-down"
                                    style=" width: 13px; height:7px; font-size:30px; margin-right: 16%;"></i>
                            </button>

                            <dialog id="modal5" class="modal-css">
                                <div class="infos">
                                    <div>
                                        <div class="title-modal">ADENOVIROSE RESPIRATÓRIA</div>
                                        <div class="modal-body">
                                            O vírus da raiva afeta o sistema nervoso, provocando alterações de
                                            comportamento que podem variar de extrema excitação (daí o nome da doença)
                                            até depressão. Muitos animais não conseguem engolir comida e líquidos à
                                            medida que a doença progride.<br><br>

                                            Os sintomas são:

                                            <span class="destaque">Excitação;
                                                Agressividade;
                                                Medo;
                                                Depressão;
                                                Ansiedade;

                                                Sintomas neurológicos como, dificuldade de engolir e salivação.
                                            </span><br><br>

                                            A melhor forma de prevenir a raiva é por meio da
                                            vacinação.
                                            Converse com
                                            o médico-veterinário e
                                            mantenha a vacinação do seu pet em dia.

                                        </div>
                                    </div>
                                    <button class="btn-modal-fechar" onclick="modal5.close()">FECHAR</button>
                            </dialog>
                        </div>
                    </div>
                   
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            <div class="agende-agora">
                <a href="agendamento.php"><button class="btn btn-primary btn-custom">AGENDE AGORA</button></a>

            </div>
        </div>

</body>
<?php include("./inc/footer.php") ?>
<!--scroll JS-->
<script src="js/scroll.js"></script>
<!--swiper JS -->
<script src="js/swiper/swiper-bundle.min.js"></script>
<!--JS -->
<script src="js/telainicial.js"></script>

</html>