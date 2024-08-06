<?php
include ("./inc/header.php")
    ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=10, minimum-scale=1.0">
    <link rel="stylesheet" href="css/css/dogdoencas.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css">
    <link rel="stylesheet" href="css/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <title>Doenças Caninas</title>
</head>

<body>
    <section class="start">
        <div class="espaco"></div>
        <div class="escritos">
            <h1 class="title-start">DOENÇAS<br>CANINAS</h1>
            <h4 class="sub-title-start">Conheça as doenças caninas e proteja seu melhor amigo!<br>
                Saber mais sobre infecções e problemas genéticos<br>
                é essencial para a saúde do seu cão. Identifique<br>
                sintomas cedo e assegure um tratamento eficaz.<br>
                Previna doenças com vacinação e cuidados regulares.<br>
                Informe-se e fortaleça o vínculo com seu pet.<br>
                Gostaria de conhecer mais sobre as doenças caninas?</h4>
            <button onclick="scrollToSection()" type="submit" class="btn-start">CONHECER</button>
            <div class="splash-container">
            </div>
        </div>

    </section>
    <section id="doencas">
        <div class="space"></div>
        <div class="titulo-vacina">
            <h2>Doenças Caninas</h2>
        </div>
        <div class="slide-container swiper">
            <div class="slide-content">
                <div class=" card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="card-content">
                            <h3 class="nome-vacina">
                                <!-- futuro php-->CINOMOSE
                            </h3>
                            <div class="textinhos">
                                <p class="description">A cinomose é um dos maiores pesadelos dos tutores de cães, é uma
                                    doença altamente infecciosa e frequentemente
                                    fatal causada por um vírus. A transmissão ocorre pelo contato direto com secreções
                                    nasais e oculares,
                                    tosse e espirros de um outro animal infectado... </p>
                            </div>
                            <a href="#"><button type="submit" class="btn-vacinas"><i class="fa-solid fa-angle-down"
                                        style=" width: 13px; height:7px; font-size:30px; margin-right: 16%;"></i></button></a>
                        </div>
                    </div>
                    <div class=" card swiper-slide">
                        <div class="card-content">
                            <h3 class="nome-vacina">
                                <!-- futuro php-->LEPTOSPIROSE CANINA
                            </h3>
                            <div class="textinhos">
                                <p class="description">A leptospirose canina é uma doença com alto índice de
                                    mortalidade, causada por bactérias que também podem infectar os humanos. A
                                    transmissão se dá principalmente pelo contato com a urina...
                            </div>
                            </p><button type="submit" class="btn-vacinas"><i class="fa-solid fa-angle-down"
                                    style=" width: 13px; height:7px; font-size:30px; margin-right: 16%;"></i></button>
                        </div>
                    </div>
                    <div class=" card swiper-slide">
                        <div class="card-content">
                            <h3 class="nome-vacina">
                                <!-- futuro php-->CORONAVIROSE
                            </h3>
                            <div class="textinhos">
                                <p class="description">Aqui está o texto combinado:

                                    A coronavirose canina é uma doença viral altamente contagiosa que acomete
                                    principalmente os intestinos, causando diarreia e vômito. Ela afeta frequentemente
                                    animais mais jovens e pode também comprometer o sistema respiratório. Um dos
                                    principais...
                            </div>
                            </p><button type="submit" class="btn-vacinas"><i class="fa-solid fa-angle-down"
                                    style=" width: 13px; height:7px; font-size:30px; margin-right: 16%;"></i></button>
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
                                    aparelho digestivo e o sistema imunológico dos cães. A transmissão ocorre através do
                                    contato direto com fezes ou vômitos infectados...
                            </div>
                            </p><button type="submit" class="btn-vacinas"><i class="fa-solid fa-angle-down"
                                    style=" width: 13px; height:7px; font-size:30px; margin-right: 16%;"></i></button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card-content">
                            <h3 class="nome-vacina">
                                <!-- futuro php-->HEPATITE INFECCIOSA
                            </h3>
                            <div class="textinhos">
                                <p class="description">A hepatite infecciosa canina é uma doença aguda que acomete o
                                    fígado, causada por um vírus agressivo, transmitida pelas descargas orais e nasais,
                                    fezes e pelo contato com o ambiente...
                            </div>
                            </p><button type="submit" class="btn-vacinas"><i class="fa-solid fa-angle-down"
                                    style=" width: 13px; height:7px; font-size:30px; margin-right: 16%;"></i></button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card-content">
                            <h3 class="nome-vacina">
                                <!-- futuro php-->ADENOVIROSE RESPIRATÓRIA
                            </h3>
                            <div class="textinhos">
                                <p class="description">O adenovírus canino respiratório é altamente contagioso e, se não
                                    tratado, pode levar a complicações como as pneumonias. A transmissão se dá pelo
                                    contato direto entre cães, onde os...
                            </div>
                            </p><button type="submit" class="btn-vacinas"><i class="fa-solid fa-angle-down"
                                    style=" width: 13px; height:7px; font-size:30px; margin-right: 16%;"></i></button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card-content">
                            <h3 class="nome-vacina">
                                <!-- futuro php-->PARAINFLUENZA
                            </h3>
                            <div class="textinhos">
                                <p class="description">O vírus da parainfluenza é um parente do vírus da gripe humana. A
                                    transmissão acontece quando animais doentes tossem, espirram ou quando um cão
                                    saudável tem contato com objetos de um animal doente...
                            </div>
                            </p><button type="submit" class="btn-vacinas"><i class="fa-solid fa-angle-down"
                                    style=" width: 13px; height:7px; font-size:30px; margin-right: 16%;"></i></button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card-content">
                            <h3 class="nome-vacina">
                                <!-- futuro php-->TOSSE DOS CANIS
                            </h3>
                            <div class="textinhos">
                                <p class="description">A tosse dos canis, também conhecida como gripe canina ou
                                    traqueobronquite infecciosa canina, é uma doença altamente contagiosa, causada pela
                                    bactéria Bordetella bronchiseptica, também podendo ter...
                            </div>
                            </p><button type="submit" class="btn-vacinas"><i class="fa-solid fa-angle-down"
                                    style=" width: 13px; height:7px; font-size:30px; margin-right: 16%;"></i></button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card-content">
                            <h3 class="nome-vacina">
                                <!-- futuro php-->RAIVA
                            </h3>
                            <div class="textinhos">
                                <p class="description">A raiva é uma das doenças infecciosas de cães e gatos mais
                                    importantes porque é uma zoonose fatal. Geralmente é transmitida por meio da mordida
                                    de um animal infectado (que pode ser um cão ou um gato) ou...
                            </div>
                            </p><button type="submit" class="btn-vacinas"><i class="fa-solid fa-angle-down"
                                    style=" width: 13px; height:7px; font-size:30px; margin-right: 16%;"></i></button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card-content">
                            <h3 class="nome-vacina">
                                <!-- futuro php-->GIARDÍASE
                            </h3>
                            <div class="textinhos">
                                <p class="description">A giardíase é uma doença causada por um parasita, o
                                    protozoário Giardia lamblia, que vive no intestino delgado dos cães. É altamente
                                    contagiosa. Pode ser transmitida dos cães para outros animais domésticos...
                            </div>
                            </p><button type="submit" class="btn-vacinas"><i class="fa-solid fa-angle-down"
                                    style=" width: 13px; height:7px; font-size:30px; margin-right: 16%;"></i></button>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
    </section>
</body>
<?php include ("./inc/footer.php") ?>
<!--scroll JS-->
<script src="js/scroll.js"></script>
<!--swiper JS -->
<script src="js/swiper/swiper-bundle.min.js"></script>
<!--JS -->
<script src="js/telainicial.js"></script>

</html>