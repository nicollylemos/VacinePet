<?php
include ("./inc/header.php")
    ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=10, minimum-scale=1.0">
    <link rel="stylesheet" href="css/css/doencacao.css">
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
        <div class="slide-container swiper">
            <div class="slide-content">
                <div class=" card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content"><span class="overlay"></span>
                            <div class="card-image"><img src="imgs/pata-icone.png" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <p class="valor">149,
                                99</p>
                            <h3 class="nome-vacina">
                                <!-- futuro php-->Polivalente
                            </h3>
                            <p class="description">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum Lorem Ipsum is simply dummy text of the
                                printing and typesetting industry. Lorem Ipsum has. </p><a href="vacinas.php"><button
                                    type="submit" class="btn-vacinas">Ver Mais</button></a>
                        </div>
                    </div>
                    <div class=" card swiper-slide">
                        <div class="image-content"><span class="overlay"></span>
                            <div class="card-image"><img src="imgs/pata-icone.png" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <p class="valor">149,
                                99</p>
                            <h3 class="nome-vacina">
                                <!-- futuro php-->Gripe canina
                            </h3>
                            <p class="description">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum Lorem Ipsum is simply dummy text of the
                                printing and typesetting industry. Lorem Ipsum has. </p><button type="submit"
                                class="btn-vacinas">Ver Mais</button>
                        </div>
                    </div>
                    <div class=" card swiper-slide">
                        <div class="image-content"><span class="overlay"></span>
                            <div class="card-image"><img src="imgs/pata-icone.png" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <p class="valor">149,
                                99</p>
                            <h3 class="nome-vacina">
                                <!-- futuro php-->Giardíase
                            </h3>
                            <p class="description">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum Lorem Ipsum is simply dummy text of the
                                printing and typesetting industry. Lorem Ipsum has. </p><button type="submit"
                                class="btn-vacinas">Ver Mais</button>
                        </div>
                    </div>
                    <div class=" card swiper-slide">
                        <div class="image-content"><span class="overlay"></span>
                            <div class="card-image"><img src="imgs/pata-icone.png" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <p class="valor">149,
                                99</p>
                            <h3 class="nome-vacina">
                                <!-- futuro php-->Antirrábica
                            </h3>
                            <p class="description">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum Lorem Ipsum is simply dummy text of the
                                printing and typesetting industry. Lorem Ipsum has. </p><button type="submit"
                                class="btn-vacinas">Ver Mais</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content"><span class="overlay"></span>
                            <div class="card-image"><img src="imgs/pata-icone.png" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <p class="valor">149,
                                99</p>
                            <h3 class="nome-vacina">
                                <!-- futuro php-->Polivalente
                            </h3>
                            <p class="description">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum Lorem Ipsum is simply dummy text of the
                                printing and typesetting industry. Lorem Ipsum has. </p><button type="submit"
                                class="btn-vacinas">Ver Mais</button>
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
<script src="js/telainicial.js"></script>

</html>