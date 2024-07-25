<?php
include ("./inc/header.php")
    ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=10, minimum-scale=1.0">
    <link rel="stylesheet" href="css/css/rafa.css">
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
        <!--bolinhas laranjas -->
        <div class="orange-balls"></div>
        <div class="orange-balls1"></div>
        <div class="orange-balls2"></div>
        <!--bolinhas azuis -->
        <div class="blue-balls"></div>
        <div class="blue-balls1"></div>
        <div class="blue-balls2"></div>
        <div class="blue-balls3"></div>
        <!--bolinhas azuis meio -->
        <div class="bolinha-furada"></div>
        <div class="bolinha-furada1"></div>
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
                            <p class="description">A cinomose é um dos maiores pesadelos dos tutores de cães, é uma doença altamente infecciosa e frequentemente fatal causada por um vírus. A transmissão ocorre pelo contato direto com secreções nasais e oculares, tosse e espirros de um outro animal infectado... </p><a href="#"><button type="submit"
                                class="btn-vacinas" ><i class="fa-solid fa-angle-down" style=" width: 13px; height:7px; font-size:30px; margin-right: 16%;"></i></button></a>
                        </div>
                    </div>
                    <div class=" card swiper-slide">
                        <div class="card-content">
                            <h3 class="nome-vacina">
                                <!-- futuro php-->LEPTOSPIROSE CANINA
                            </h3>
                            <p class="description">A leptospirose canina é uma doença com alto índice de mortalidade, causada por bactérias que também podem infectar os humanos. A transmissão se dá principalmente pelo contato com a urina... </p><button type="submit"
                                class="btn-vacinas"><i class="fa-solid fa-angle-down" style=" width: 13px; height:7px; font-size:30px; margin-right: 16%;"></i></button>
                        </div>
                    </div>
                    <div class=" card swiper-slide">
                        <div class="card-content">
                            <h3 class="nome-vacina">
                                <!-- futuro php-->CORONAVIROSE
                            </h3>
                            <p class="description">A coronavirose é uma doença viral, altamente contagiosa, que acomete os intestinos, provocando um quadro de diarreia e vômito. É muito comum em locais em que grande número de animais fica abrigado... </p><button type="submit"
                                class="btn-vacinas"><i class="fa-solid fa-angle-down" style=" width: 13px; height:7px; font-size:30px; margin-right: 16%;"></i></button>
                        </div>
                    </div>
                    <div class=" card swiper-slide">
                        <div class="card-content">
                            <h3 class="nome-vacina">
                                <!-- futuro php-->PARVOVIROSE
                            </h3>
                            <p class="description">A parvovirose é uma doença causada por um vírus que ataca o aparelho digestivo e o sistema imunológico dos cães, principalmente em filhotes. Sua transmissão se dá pelo contato direto com as fezes de animais doentes... </p><button type="submit"
                                class="btn-vacinas"><i class="fa-solid fa-angle-down" style=" width: 13px; height:7px; font-size:30px; margin-right: 16%;"></i></button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card-content">
                            <h3 class="nome-vacina">
                                <!-- futuro php-->HEPATITE INFECCIOSA 
                            </h3>
                            <p class="description">A hepatite infecciosa canina é uma doença aguda que acomete o fígado, causada por um vírus agressivo, transmitida pelas descargas orais e nasais, fezes e pelo contato com o ambiente... </p><button type="submit"
                                class="btn-vacinas"><i class="fa-solid fa-angle-down" style=" width: 13px; height:7px; font-size:30px; margin-right: 16%;"></i></button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card-content">
                            <h3 class="nome-vacina">
                                <!-- futuro php-->ADENOVIROSE RESPIRATÓRIA
                            </h3>
                            <p class="description">O adenovírus canino respiratório é altamente contagioso e, se não tratado, pode levar a complicações como as pneumonias. A transmissão se dá pelo contato direto entre cães, onde os animais infectados transmitem a doença para os cães sadios... </p><button type="submit"
                                class="btn-vacinas"><i class="fa-solid fa-angle-down" style=" width: 13px; height:7px; font-size:30px; margin-right: 16%;"></i></button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card-content">
                            <h3 class="nome-vacina">
                                <!-- futuro php-->PARAINFLUENZA 
                            </h3>
                            <p class="description">O vírus da parainfluenza é um parente do vírus da gripe humana. A transmissão acontece quando animais doentes tossem, espirram ou quando um cão saudável tem contato com objetos de um animal doente... </p><button type="submit"
                                class="btn-vacinas"><i class="fa-solid fa-angle-down" style=" width: 13px; height:7px; font-size:30px; margin-right: 16%;"></i></button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card-content">
                            <h3 class="nome-vacina">
                                <!-- futuro php-->TOSSE DOS CANIS  
                            </h3>
                            <p class="description">A tosse dos canis, também conhecida como gripe canina ou traqueobronquite infecciosa canina, é uma doença altamente contagiosa, causada pela bactéria Bordetella bronchiseptica, também podendo ter... </p><button type="submit"
                                class="btn-vacinas"><i class="fa-solid fa-angle-down" style=" width: 13px; height:7px; font-size:30px; margin-right: 16%;"></i></button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card-content">
                            <h3 class="nome-vacina">
                                <!-- futuro php-->RAIVA 
                            </h3>
                            <p class="description">A raiva é uma das doenças infecciosas de cães e gatos mais importantes porque é uma zoonose fatal. Geralmente é transmitida por meio da mordida de um animal infectado (que pode ser um cão ou um gato) ou de animais que funcionam como reservatórios naturais (morcegos, por exemplo)... </p><button type="submit"
                                class="btn-vacinas"><i class="fa-solid fa-angle-down" style=" width: 13px; height:7px; font-size:30px; margin-right: 16%;"></i></button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card-content">
                            <h3 class="nome-vacina">
                                <!-- futuro php-->GIARDÍASE
                            </h3>
                            <p class="description">A giardíase é uma doença causada por um parasita, o protozoário Giardia lamblia, que vive no intestino delgado dos cães. É altamente contagiosa. Pode ser transmitida dos cães para outros animais domésticos e até mesmo para o ser humano... </p><button type="submit"
                                class="btn-vacinas"><i class="fa-solid fa-angle-down" style=" width: 13px; height:7px; font-size:30px; margin-right: 16%;"></i></button>
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