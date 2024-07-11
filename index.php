<?php 
 include("./inc/header.php")
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css/telainicial.css">
    <link rel="stylesheet" href="css/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css">
    <link rel="stylesheet" href="css/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <title>VacinePet</title>
</head>

<body>
    <section class="home-inicial">
        <div class="tela-inicial">
            <div class="info-inicial">
                <h1 class="titulo-site">VacinePet <i class="fa-solid fa-paw fa-rotate-by"
                        style="color: #fa5909; --fa-rotate-angle: 49deg; width: 50px; height:10px; font-size:55px;"></i>
                </h1>
                <h2 class="subtitulo-site">CARINHO, CUIDADO E PREVENÇÃO PARA <br>SEU PET, NO CONFORTO DA SUA CASA.</h2>
                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when anunknown printer
                    took a galley of type and scrambled it to make a type specimen book.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when anunknown printer
                    took a galley of type and scrambled it to make a type specimen book. </p>
                <button class="btn-inicio"><a href="agendamento.php">Agendar</a> </button>
            </div>
            <div class="img-animal">

            </div>
        </div>
    </section>
    <!-- Card para tela de informações sobre as doenças -->
    <section class="info-doencas">
        <div class="informacao">
            <div class="row justify-content-center">
                <div class="col-4" id="info-cao">
                    <div class="texto">
                        <h3>CÃO</h3>
                        <p>Muitos problemas de saúde podem atingir nossos pets. Informe-se sobre as doenças que podem
                            afetar seus pets e como preveni-las. Conheça os riscos
                            à saúde do seu cão!</p>
                        <button type="submit"><a href="">Ler Mais</a></button>
                    </div>
                    <div class="img-pet">
                        <div class="pet-dog">
                            <img src="" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-4" id="info-gato">
                    <div class="texto">
                        <h3>GATO</h3>
                        <p>Muitos problemas de saúde podem atingir nossos pets. Informe-se sobre as doenças que podem
                            afetar seus pets e como preveni-las. Conheça os riscos
                            à saúde do seu gato!</p>
                        <button><a href="">Ler Mais</a></button>
                    </div>
                    <div class="img-pet">
                        <div class="pet-cat">
                            <img src="" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Valores Vacinas -->
    <section class="secao-valores">
        <div class="titulo-vacina">
            <h2>Vacinas Procuradas</h2>
        </div>
        <div class="slide-container swiper">
            <div class="slide-content">
                <div class=" card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="imgs/pata-icone.png" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <p class="valor">149,99</p>
                            <h3 class="nome-vacina">
                                <!-- futuro php--> Polivalente
                            </h3>
                            <p class="description">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has.
                            </p>
                            <button type="submit" class="btn-vacinas">Ver Mais</button>
                        </div>
                    </div>
                    <div class=" card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="imgs/pata-icone.png" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <p class="valor">149,99</p>
                            <h3 class="nome-vacina">
                                <!-- futuro php--> Gripe canina
                            </h3>
                            <p class="description">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has.
                            </p>
                            <button type="submit" class="btn-vacinas">Ver Mais</button>
                        </div>
                    </div>
                    <div class=" card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="imgs/pata-icone.png" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <p class="valor">149,99</p>
                            <h3 class="nome-vacina">
                                <!-- futuro php--> Giardíase
                            </h3>
                            <p class="description">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has.
                            </p>
                            <button type="submit" class="btn-vacinas">Ver Mais</button>
                        </div>
                    </div>
                    <div class=" card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="imgs/pata-icone.png" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <p class="valor">149,99</p>
                            <h3 class="nome-vacina">
                                <!-- futuro php--> Antirrábica
                            </h3>
                            <p class="description">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has.
                            </p>
                            <button type="submit" class="btn-vacinas">Ver Mais</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="imgs/pata-icone.png" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <p class="valor">149,99</p>
                            <h3 class="nome-vacina">
                                <!-- futuro php--> Polivalente
                            </h3>
                            <p class="description">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has.
                            </p>
                            <button type="submit" class="btn-vacinas">Ver Mais</button>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
    </section>
    <section class="atendimento-domiciliar">
        <div class="fundo-atendimento">
            <div class="conteudo-atend">
                <h2>Como funciona o atendimento domiciliar?</h2>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    <br>
                    Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </p>
                <button class="btn-ler-atend">Ler Mais</button>

            </div>
        </div>
    </section>
</body>
<?php 
 include("./inc/footer.php")
?>

<!--Swiper JavaScript-->
<script src="js/swiper/swiper-bundle.min.js"></script>
<!--JavaScript-->
<script src="js/telainicial.js"></script>


</html>