<?php
include("../inc/header.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=10, minimum-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/css/doencasdogs.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css">
    <link rel="stylesheet" href="../css/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../css/css/responsividade/teladoencascao.css">
    <title>Doenças Caninas</title>

    <style>

    </style>
</head>

<body>
    <div class="conta">
        <section class="start">
            <div class="espaco"></div>
            <div class="escritos">
                <h1 class="title-start">Doenças Caninas</h1>
                <h4 class="sub-title-start">Conheça as doenças felinas e proteja seu melhor amigo!
                    Saber mais sobre infecções e problemas genéticos
                    é essencial para a saúde do seu cão. Identifique
                    sintomas cedo e assegure um tratamento eficaz.
                    Previna doenças com vacinação e cuidados regulares.
                    Informe-se e fortaleça o vínculo com seu pet.</h4> <button onclick="scrollToSection()" type="submit"
                    class="btn-start">CONHECER</button>
                <div class="splash-container">
                </div>
            </div>

        </section>
        <section id="doencas">
            <div class="space"></div>
            <div class="titulo-vacina">
                <h2 id="title-do">Principais Doenças Caninas</h2>
                <p class="subtitle">Conheça as principais doenças caninas e agende a vacinação com o veterinário<br>
                    para
                    garantir a saúde e bem-estar do seu pet.</p>
                <div class="vacinas-valor">
                    <div class="slide-container swiper">
                        <div class="slide-content">
                            <div class=" card-wrapper swiper-wrapper">
                                <div class="card swiper-slide" id="cardizinhos">
                                    <div class="image-content"><span class="overlay"></span>
                                        <div class="card-image"><i class="fa-solid fa-dog card-image card-img "></i>
                                        </div>
                                    </div>
                                    <div class="card-content">

                                        <h3 class="nome-vacina">
                                            Cinomose Canina
                                        </h3>
                                        <p class="description">
                                            A cinomose é uma doença viral altamente contagiosa que afeta cães, podendo
                                            afetar vários sistemas do corpo, incluindo o sistema respiratório, digestivo
                                            e nervoso.
                                        </p><a href="#"><button onclick="modalCinomose.showModal()" type="submit"
                                                class="btn-vacinas">Ver
                                                Mais</button></a>
                                    </div>
                                </div>
                                <div class=" card swiper-slide" id="cardizinhos">
                                    <div class="image-content"><span class="overlay"></span>
                                        <div class="card-image"><i class="fa-solid fa-dog card-image card-img "></i>
                                        </div>
                                    </div>
                                    <div class="card-content">


                                        <h3 class="nome-vacina">
                                            Leptospirose
                                        </h3>
                                        <p class="description"> A leptospirose é uma doença bacteriana grave transmitida
                                            por contato com água ou solo contaminado pela urina de animais infectados.
                                            Afeta vários órgãos, especialmente os rins e o fígado.
                                        </p><button onclick="modalLeptospirose.showModal()" type="submit"
                                            class="btn-vacinas">Ver
                                            Mais</button>
                                    </div>
                                </div>
                                <div class=" card swiper-slide" id="cardizinhos">
                                    <div class="image-content"><span class="overlay"></span>
                                        <div class="card-image"><i class="fa-solid fa-dog card-image card-img "></i>
                                        </div>
                                    </div>
                                    <div class="card-content" id="cardizinhos">


                                        <h3 class="nome-vacina">
                                            Coronavirose Canina
                                        </h3>
                                        <p class="description"> A coronavirose é uma infecção viral que afeta
                                            principalmente o trato gastrointestinal dos cães, causando diarreia, vômitos
                                            e desidratação. A transmissão ocorre por contato com fezes de animais
                                            infectados. </p><button type="submit"
                                            onclick="modalCoronavirose.showModal()" class="btn-vacinas">Ver
                                            Mais</button>
                                    </div>
                                </div>
                                <div class=" card swiper-slide" id="cardizinhos">
                                    <div class="image-content"><span class="overlay"></span>
                                        <div class="card-image"><i class="fa-solid fa-dog card-image card-img "></i>
                                        </div>
                                    </div>
                                    <div class="card-content">


                                        <h3 class="nome-vacina">
                                            Parvovirose Canina
                                        </h3>
                                        <p class="description"> A parvovirose é uma infecção viral grave que afeta
                                            principalmente filhotes e cães não vacinados. Ela ataca o trato
                                            gastrointestinal e pode causar diarreia hemorrágica, vômitos e desidratação
                                            severa.
                                        </p><button type="submit" onclick="modalParvovirose.showModal()"
                                            class="btn-vacinas">Ver
                                            Mais</button>
                                    </div>
                                </div>
                                <div class=" card swiper-slide" id="cardizinhos">
                                    <div class="image-content"><span class="overlay"></span>
                                        <div class="card-image"><i class="fa-solid fa-dog card-image card-img "></i>
                                        </div>
                                    </div>
                                    <div class="card-content">


                                        <h3 class="nome-vacina">
                                            Hepatite Infecciosa
                                        </h3>
                                        <p class="description"> A transmissão acontece principalmente quando um animal
                                            infectado lambe
                                            outros gatos, já que o vírus é excretado em abundância na saliva. É uma
                                            doença silenciosa, na maioria das vezes. </p><button
                                            onclick="modalHepatite.showModal()" class=" btn-vacinas">Ver
                                            Mais</button>
                                    </div>
                                </div>

                                <div class="card swiper-slide" id="cardizinhos">
                                    <div class="image-content"><span class="overlay"></span>
                                        <div class="card-image"><i class="fa-solid fa-dog card-image card-img "></i>
                                        </div>
                                    </div>
                                    <div class="card-content">


                                        <h3 class="nome-vacina">
                                            Adenovirose Respiratória
                                        </h3>
                                        <p class="description"> A adenovirose respiratória canina é uma infecção viral
                                            que afeta o trato respiratório superior dos cães, causada pelo adenovírus
                                            canino tipo 2 (CAV-2). Ela pode causar sintomas semelhantes aos de um
                                            resfriado, como tosse e secreção nasal.
                                        </p><button onclick="modalAdenovirose.showModal()" class="btn-vacinas">Ver
                                            Mais</button>
                                    </div>
                                </div>
                                <div class="card swiper-slide" id="cardizinhos">
                                    <div class="image-content"><span class="overlay"></span>
                                        <div class="card-image"><i class="fa-solid fa-dog card-image card-img "></i>
                                        </div>
                                    </div>
                                    <div class="card-content">


                                        <h3 class="nome-vacina">
                                            Parainfluenza
                                        </h3>
                                        <p class="description"> A parainfluenza canina é uma infecção viral que afeta o
                                            trato respiratório superior, geralmente causando tosse e outros sintomas
                                            respiratórios.</p><button type="submit"
                                            onclick="modalParainfluenza.showModal()" class="btn-vacinas">Ver
                                            Mais</button>
                                    </div>
                                </div>
                                <div class="card swiper-slide" id="cardizinhos">
                                    <div class="image-content"><span class="overlay"></span>
                                        <div class="card-image"><i class="fa-solid fa-dog card-image card-img "></i>
                                        </div>
                                    </div>
                                    <div class="card-content">


                                        <h3 class="nome-vacina">
                                            Tosse dos Canis
                                        </h3>
                                        <p class="description"> A Tosse dos Canis é uma infecção respiratória altamente
                                            contagiosa, geralmente causada por uma combinação de vários agentes,
                                            incluindo o vírus da parainfluenza, adenovírus e bactérias como Bordetella
                                            bronchiseptica.</p><button onclick="modalTosseCanis.showModal()"
                                            type="submit" class="btn-vacinas">Ver
                                            Mais</button>
                                    </div>
                                </div>
                                <div class="card swiper-slide" id="cardizinhos">
                                    <div class="image-content"><span class="overlay"></span>
                                        <div class="card-image"><i class="fa-solid fa-dog card-image card-img "></i>
                                        </div>
                                    </div>
                                    <div class="card-content">


                                        <h3 class="nome-vacina">
                                            Raiva Canina
                                        </h3>
                                        <p class="description"> A raiva é uma doença viral grave que afeta o sistema
                                            nervoso central e pode ser transmitida para humanos. É transmitida pela
                                            mordida ou arranhadura de um animal infectado.
                                        </p><button onclick="modalRaiva.showModal()" type="submit"
                                            class="btn-vacinas">Ver
                                            Mais</button>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="agende-agora">
                <?php if ($admin || $logado): ?>
                <a href="/VacinePet/usuario/agendamento.php"><button class="btn btn-primary btn-custom">Agendar
                        agora!</button></a>
                <?php endif; ?>
                <?php if (!isset($_SESSION['email']) && !isset($_SESSION['senha_hash'])): ?>
                <a href="#" onclick="document.getElementById('modalLogin').showModal(); return false;"><button
                        class="btn btn-primary btn-custom">Agendar agora!</button></a>
                <?php endif; ?>

            </div>
    </div>
    </div>
    <dialog id="modalCinomose" class="modal-css">
        <div class="infos">
            <div>
                <div class="title-modal">Cinomose</div>
                <div class="modal-body">
                    A cinomose é uma doença viral altamente contagiosa que afeta cães, podendo afetar vários sistemas do
                    corpo, incluindo o sistema respiratório, digestivo e nervoso. O vírus é transmitido por contato com
                    secreções de animais infectados, como saliva, urina e secreções respiratórias.

                    Os sintomas incluem:

                    <span class="destaque">Febre; Tosse; Secreção nasal e ocular; Vômitos e diarreia; Sintomas
                        neurológicos, como convulsões e paralisia.</span>

                    O tratamento é sintomático, com o uso de antivirais, antibióticos para prevenir infecções
                    secundárias e suporte geral. A vacinação é a melhor forma de prevenção contra a cinomose.
                </div>
            </div>
            <button class="btn-modal-fechar" onclick="modalCinomose.close()">FECHAR</button>
        </div>
    </dialog>

    <dialog id="modalLeptospirose" class="modal-css">
        <div class="infos">
            <div>
                <div class="title-modal">Leptospirose</div>
                <div class="modal-body">
                    A leptospirose é uma doença bacteriana grave transmitida por contato com água ou solo contaminado
                    pela urina de animais infectados. Afeta vários órgãos, especialmente os rins e o fígado.

                    Os sintomas incluem:

                    <span class="destaque">Febre; Vômitos; Diarreia; Desidratação; Icterícia (amarelecimento das
                        mucosas); Dor abdominal.</span>

                    A prevenção é feita com vacinação e evitando o contato com áreas contaminadas. O tratamento é com
                    antibióticos e cuidados de suporte.
                </div>
            </div>
            <button class="btn-modal-fechar" onclick="modalLeptospirose.close()">FECHAR</button>
        </div>
    </dialog>

    <dialog id="modalCoronavirose" class="modal-css">
        <div class="infos">
            <div>
                <div class="title-modal">Coronavirose</div>
                <div class="modal-body">
                    A coronavirose é uma infecção viral que afeta principalmente o trato gastrointestinal dos cães,
                    causando diarreia, vômitos e desidratação. A transmissão ocorre por contato com fezes de animais
                    infectados.

                    Os sintomas incluem:

                    <span class="destaque">Diarreia; Vômitos; Perda de apetite; Letargia; Desidratação.</span>

                    Não há tratamento específico, e a prevenção é feita por meio da vacinação.
                </div>
            </div>
            <button class="btn-modal-fechar" onclick="modalCoronavirose.close()">FECHAR</button>
        </div>
    </dialog>

    <dialog id="modalParvovirose" class="modal-css">
        <div class="infos">
            <div>
                <div class="title-modal">Parvovirose</div>
                <div class="modal-body">
                    A parvovirose é uma infecção viral grave que afeta principalmente filhotes e cães não vacinados. Ela
                    ataca o trato gastrointestinal e pode causar diarreia hemorrágica, vômitos e desidratação severa.

                    Os sintomas incluem:

                    <span class="destaque">Diarreia sanguinolenta; Vômitos; Letargia; Perda de apetite;
                        Desidratação.</span>

                    O tratamento é feito com fluidos intravenosos, antibióticos e medicamentos de suporte. A vacinação é
                    a forma mais eficaz de prevenção.
                </div>
            </div>
            <button class="btn-modal-fechar" onclick="modalParvovirose.close()">FECHAR</button>
        </div>
    </dialog>

    <dialog id="modalHepatite" class="modal-css">
        <div class="infos">
            <div>
                <div class="title-modal">Hepatite Infecciosa</div>
                <div class="modal-body">
                    A hepatite infecciosa canina é uma doença viral causada pelo adenovírus tipo 1, que afeta o fígado,
                    rins e olhos dos cães. A transmissão ocorre por contato com secreções corporais de cães infectados.

                    Os sintomas incluem:

                    <span class="destaque">Febre; Vômitos; Diarreia; Dor abdominal; Icterícia (amarelecimento das
                        mucosas); Perda de apetite.</span>

                    A vacinação é a principal forma de prevenção. O tratamento é sintomático e de suporte.
                </div>
            </div>
            <button class="btn-modal-fechar" onclick="modalHepatite.close()">FECHAR</button>
        </div>
    </dialog>

    <dialog id="modalAdenovirose" class="modal-css">
        <div class="infos">
            <div>
                <div class="title-modal">Adenovirose Respiratoria</div>
                <div class="modal-body">
                    A adenovirose respiratória canina é uma infecção viral que afeta o trato respiratório superior dos
                    cães, causada pelo adenovírus canino tipo 2 (CAV-2). Ela pode causar sintomas semelhantes aos de um
                    resfriado, como tosse e secreção nasal.

                    Os sintomas incluem:

                    <span class="destaque">Tosse persistente; Secreção nasal e ocular; Febre; Letargia; Perda de
                        apetite.</span>

                    A prevenção é feita por meio da vacinação, que também protege contra a Tosse dos Canis. O tratamento
                    é sintomático e de suporte.
                </div>
            </div>
            <button class="btn-modal-fechar" onclick="modalAdenovirose.close()">FECHAR</button>
        </div>
    </dialog>

    <dialog id="modalParainfluenza" class="modal-css">
        <div class="infos">
            <div>
                <div class="title-modal">Parainfluenza</div>
                <div class="modal-body">
                    A parainfluenza canina é uma infecção viral que afeta o trato respiratório superior, geralmente
                    causando tosse e outros sintomas respiratórios.

                    Os sintomas incluem:

                    <span class="destaque">Tosse; Febre; Letargia; Secreção nasal.</span>

                    A prevenção é feita por meio da vacinação, e o tratamento é de suporte.
                </div>
            </div>
            <button class="btn-modal-fechar" onclick="modalParainfluenza.close()">FECHAR</button>
        </div>
    </dialog>

    <dialog id="modalTosseCanis" class="modal-css">
        <div class="infos">
            <div>
                <div class="title-modal">Tosse dos Canis</div>
                <div class="modal-body">
                    A Tosse dos Canis é uma infecção respiratória altamente contagiosa, geralmente causada por uma
                    combinação de vários agentes, incluindo o vírus da parainfluenza, adenovírus e bactérias como
                    Bordetella bronchiseptica.

                    Os sintomas incluem:

                    <span class="destaque">Tosse seca e persistente; Secreção nasal; Febre; Letargia.</span>

                    A prevenção inclui a vacinação e o tratamento de cães infectados com antibióticos e antivirais.
                </div>
            </div>
            <button class="btn-modal-fechar" onclick="modalTosseCanis.close()">FECHAR</button>
        </div>
    </dialog>

    <dialog id="modalRaiva" class="modal-css">
        <div class="infos">
            <div>
                <div class="title-modal">Raiva Canina</div>
                <div class="modal-body">
                    A raiva é uma doença viral grave que afeta o sistema nervoso central e pode ser transmitida para
                    humanos. É transmitida pela mordida ou arranhadura de um animal infectado.

                    Os sintomas incluem:

                    <span class="destaque">Excitação excessiva; Agressividade; Hipoatividade; Dificuldade de engolir;
                        Paralisia.</span>

                    A melhor forma de prevenção é a vacinação. A raiva é fatal se não tratada.
                </div>
            </div>
            <button class="btn-modal-fechar" onclick="modalRaiva.close()">FECHAR
        </div>
    </dialog>



</body>



<?php include("../inc/footer.php") ?>
<!--scroll JS-->
<script src="../js/scroll.js"></script>
<!--swiper JS -->
<script src="../js/swiper/swiper-bundle.min.js"></script>
<!--JS -->
<script src="../js/telainicial.js"></script>

</html>