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

                                            <span class="destaque">Diarreia;

                                                Falta de apetite;
                                                Febre;
                                                Hemorragia;
                                                Icterícia;
                                                Vômito;
                                                Urina de cor amarronzada.</span><br><br>
                                            A melhor forma de prevenir a leptospirose canina é por meio da vacinação.
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
                                <!-- futuro php-->CORONAVIROSE
                            </h3>
                            <div class="textinhos">
                                <p class="description">

                                    A coronavirose canina é uma doença viral altamente contagiosa que acomete
                                    principalmente os intestinos, causando diarreia e vômito. Ela afeta frequentemente
                                    animais mais jovens e pode também comprometer o sistema respiratório...
                            </div>
                            </p> <button onclick="modal2.showModal()" class="btn-vacinas"><i
                                    class="fa-solid fa-angle-down"
                                    style=" width: 13px; height:7px; font-size:30px; margin-right: 16%;"></i> </button>

                            <dialog id="modal2" class="modal-css">
                                <div class="infos">
                                    <div>
                                        <div class="title-modal">CORONAVIROSE</div>
                                        <div class="modal-body">
                                            A coronavirose é muito comum em locais em que grande número de animais
                                            fica abrigado.
                                            <br><br>

                                            Os sintomas são:

                                            <span class="destaque">
                                                Diarreia;
                                                Febre e falta de apetite são os mais comuns.</span><br><br>
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
                                <!-- futuro php-->PARVOVIROSE
                            </h3>
                            <div class="textinhos">
                                <p class="description">A parvovirose canina (ou parvovírus canino) é uma doença viral
                                    altamente contagiosa que afeta os cães, especialmente os filhotes. Ela ataca o
                                    aparelho digestivo e o sistema imunológico dos cães...
                            </div>
                            </p> <button onclick="modal3.showModal()" class="btn-vacinas"><i
                                    class="fa-solid fa-angle-down"
                                    style=" width: 13px; height:7px; font-size:30px; margin-right: 16%;"></i>
                            </button>


                            <dialog id="modal3" class="modal-css">
                                <div class="infos">
                                    <div>
                                        <div class="title-modal">PARVOVIROSE</div>
                                        <div class="modal-body">
                                            Sua transmissão se dá pelo contato direto com
                                            as fezes de animais doentes.
                                            <br><br>

                                            Os sintomas são:

                                            <span class="destaque">
                                                Vômitos;
                                                Diarreia com sangue;
                                                Febre;
                                                Tristeza;
                                                Falta de apetite.
                                            </span><br><br>
                                            Se não tratados a tempo, os animais podem falecer por desidratação e
                                            infecção generalizada.
                                            É
                                            importante higienizar
                                            de forma adequada o ambiente onde animais doentes viveram, uma vez que o
                                            vírus é resistente e
                                            pode sobreviver por meses.<br><br>

                                            A melhor forma de prevenir a parvovirose é por meio da
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
                                <!-- futuro php-->HEPATITE INFECCIOSA
                            </h3>
                            <div class="textinhos">
                                <p class="description">A hepatite infecciosa canina é uma doença aguda que acomete o
                                    fígado, causada por um vírus agressivo, transmitida pelas descargas orais e
                                    nasais,
                                    fezes e pelo contato com o ambiente...
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
                                            Tem
                                            uma rápida evolução, podendo levar a óbito em 24 horas. Filhotes não
                                            vacinados podem ter morte
                                            súbita.<br><br>

                                            Os sintomas são:

                                            <span class="destaque">

                                                Vômitos;
                                                Diarreia;
                                                Febre;
                                                Dor abdominal (muitas vezes de forma aguda);
                                                Os cães também perdem o apetite e ficam apáticos</span><br><br>
                                            A melhor forma de prevenir a hepatite infecciosa é por meio da
                                            vacinação.
                                            Converse com
                                            o médico-veterinário e
                                            mantenha a vacinação do seu pet em dia.

                                        </div>
                                    </div>
                                    <button class="btn-modal-fechar" onclick="modal4.close()">FECHAR</button>
                            </dialog>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card-content">
                            <h3 class="nome-vacina">
                                <!-- futuro php-->ADENOVIROSE RESPIRATÓRIA
                            </h3>
                            <div class="textinhos">
                                <p class="description">O adenovírus canino respiratório é altamente contagioso e, se
                                    não
                                    tratado, pode levar a complicações como as pneumonias...
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
                                            A transmissão se dá pelo contato direto entre cães, onde os
                                            animais infectados transmitem a doença para os cães sadios. Além disso, o
                                            aparecimento da
                                            doença por falta de higienização no ambiente em que o animal vive é bem
                                            propício.<br><br>

                                            Os sintomas são:

                                            <span class="destaque">Febre;
                                                Vômitos;
                                                Espirros;
                                                Secreções nasais e oculares, bem similares aos da gripe.</span><br><br>
                                            A melhor forma de prevenir a adenovirose respiratória é por meio da
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
                    <div class="card swiper-slide">
                        <div class="card-content">
                            <h3 class="nome-vacina">
                                <!-- futuro php-->PARAINFLUENZA
                            </h3>
                            <div class="textinhos">
                                <p class="description">O vírus da parainfluenza é um parente do vírus da gripe
                                    humana. A
                                    transmissão acontece quando animais doentes tossem, espirram ou quando um cão
                                    saudável tem contato com objetos de um animal doente...
                            </div>
                            </p> <button onclick="modal6.showModal()" class="btn-vacinas"><i
                                    class="fa-solid fa-angle-down"
                                    style=" width: 13px; height:7px; font-size:30px; margin-right: 16%;"></i>
                            </button>

                            <dialog id="modal6" class="modal-css">
                                <div class="infos">
                                    <div>
                                        <div class="title-modal">PARAINFLUENZA</div>
                                        <div class="modal-body">


                                            Os sintomas são bem parecidos com o da gripe humana:

                                            <span class="destaque">Tosse;
                                                Espirros;
                                                Falta de apetite;
                                                Febre.
                                            </span><br><br>
                                            Esses sinais costumam aparecer de forma súbita e podem variar de leves a
                                            mais graves, dependendo do sistema imunológico do animal. É importante
                                            observar o comportamento do seu cão, pois a progressão da doença pode levar
                                            a complicações, como infecções secundárias.<br><br>

                                            A melhor forma de prevenir a parainfluenza é por meio da
                                            vacinação.
                                            Converse com
                                            o médico-veterinário e
                                            mantenha a vacinação do seu pet em dia.

                                        </div>
                                    </div>
                                    <button class="btn-modal-fechar" onclick="modal6.close()">FECHAR</button>
                            </dialog>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card-content">
                            <h3 class="nome-vacina">
                                <!-- futuro php-->TOSSE DOS CANIS
                            </h3>
                            <div class="textinhos">
                                <p class="description">A tosse dos canis, também conhecida como gripe canina ou
                                    traqueobronquite infecciosa canina, é uma doença altamente contagiosa, causada
                                    pela
                                    bactéria Bordetella bronchiseptica, também podendo ter envolvimento de vírus e
                                    outras bactérias, afetando o sistema respiratório do cão...
                            </div>
                            </p> <button onclick="modal7.showModal()" class="btn-vacinas"><i
                                    class="fa-solid fa-angle-down"
                                    style=" width: 13px; height:7px; font-size:30px; margin-right: 16%;"></i>
                            </button>

                            <dialog id="modal7" class="modal-css">
                                <div class="infos">
                                    <div>
                                        <div class="title-modal">TOSSE DOS CANIS</div>
                                        <div class="modal-body">
                                            Normalmente, o número de casos aumenta durante o inverno, estação onde os
                                            cães ficam mais
                                            expostos ao clima e à umidade. Mas também pode acontecer durante todo o ano,
                                            em todas as
                                            estações.<br><br>

                                            Os sintomas são:

                                            <span class="destaque">

                                                Tosse, que pode aparecer de um dia para o outro e que se assemelha a um
                                                engasgo;
                                                Espirros;
                                                Secreção nasal e ocular</span><br><br>

                                            Cães de qualquer raça ou idade podem pegar a gripe canina e os animais podem
                                            demorar semanas
                                            até se recuperarem, sendo a pneumonia uma complicação comum. Além da
                                            vacinação,
                                            recomenda-se utilizar boas práticas de manejo e adequada desinfecção do
                                            ambiente.

                                        </div>
                                    </div>
                                    <button class="btn-modal-fechar" onclick="modal7.close()">FECHAR</button>
                            </dialog>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card-content">
                            <h3 class="nome-vacina">
                                <!-- futuro php-->RAIVA
                            </h3>
                            <div class="textinhos">
                                <p class="description">A raiva é uma das doenças infecciosas de cães e gatos mais
                                    importantes porque é uma zoonose fatal. Geralmente é transmitida por meio da
                                    mordida
                                    de um animal infectado (que pode ser um cão ou um gato) ou ou de animais que
                                    funcionam como reservatórios naturais (morcegos, por
                                    exemplo)...
                            </div>
                            </p> <button onclick="modal8.showModal()" class="btn-vacinas"><i
                                    class="fa-solid fa-angle-down"
                                    style=" width: 13px; height:7px; font-size:30px; margin-right: 16%;"></i>
                            </button>

                            <dialog id="modal8" class="modal-css">
                                <div class="infos">
                                    <div>
                                        <div class="title-modal">RAIVA</div>
                                        <div class="modal-body">
                                            O vírus da raiva afeta o sistema nervoso, provocando alterações de
                                            comportamento que
                                            podem variar de extrema excitação (daí o nome da doença) até depressão.
                                            Muitos animais não
                                            conseguem engolir comida e líquidos à medida que a doença progride.<br><br>

                                            Os sintomas são:

                                            <span class="destaque">
                                                Excitação;
                                                Agressividade;
                                                Medo;
                                                Depressão;
                                                Ansiedade.
                                                Além disso, também têm os sintomas neurológicos:
                                                Dificuldade de engolir;
                                                Salivação.</span><br><br>

                                            A melhor forma de prevenir a raiva é por meio da
                                            vacinação.
                                            Converse com
                                            o médico-veterinário e
                                            mantenha a vacinação do seu pet em dia.

                                        </div>
                                    </div>
                                    <button class="btn-modal-fechar" onclick="modal8.close()">FECHAR</button>
                            </dialog>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card-content">
                            <h3 class="nome-vacina">
                                <!-- futuro php-->GIARDÍASE
                            </h3>
                            <div class="textinhos">
                                <p class="description">A giardíase é uma doença causada por um parasita, o protozoário
                                    Giardia lamblia, que vive no
                                    intestino delgado dos cães. É altamente contagiosa. Pode ser transmitida dos cães
                                    para outros
                                    animais domésticos e até mesmo para o ser humano...
                            </div>
                            </p> <button onclick="modal9.showModal()" class="btn-vacinas"><i
                                    class="fa-solid fa-angle-down"
                                    style=" width: 13px; height:7px; font-size:30px; margin-right: 16%;"></i>
                            </button>

                            <dialog id="modal9" class="modal-css">
                                <div class="infos">
                                    <div>
                                        <div class="title-modal">GIARDÍASE</div>
                                        <div class="modal-body">
                                            Por este motivo, é muito importante prestar
                                            sempre atenção à saúde do seu cãozinho.
                                            A ingestão de água ou alimentos contendo os cistos (“ovos”) do parasita
                                            Giardia é a principal
                                            fonte de infecção.<br><br>

                                            Os sintomas são:

                                            <span class="destaque">Fezes mais moles e com cheiro mais forte que o comum;
                                                Vômitos;
                                                Desidratação.</span><br><br>
                                            A melhor forma de prevenir a giardíase é por meio da
                                            vacinação.
                                            Converse com
                                            o médico-veterinário e
                                            mantenha a vacinação do seu pet em dia.

                                        </div>
                                    </div>
                                    <button class="btn-modal-fechar" onclick="modal9.close()">FECHAR</button>
                            </dialog>
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