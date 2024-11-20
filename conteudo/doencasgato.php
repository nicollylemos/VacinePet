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
    <link rel="stylesheet" href="../css/css/doencascats.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css">
    <link rel="stylesheet" href="../css/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../css/css/responsividade/teladoencascatss.css">
    <title>Doenças Felinas</title>

    <style>

    </style>
</head>

<body>
    <div class="conta">
        <section class="start">
            <div class="espaco"></div>
            <div class="escritos">
                <h1 class="title-start">Doenças Felinas</h1>
                <h4 class="sub-title-start">Conheça as doenças felinas e proteja seu melhor amigo!
                    Saber mais sobre infecções e problemas genéticos
                    é essencial para a saúde do seu gato. Identifique
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
                <h2 id="title-do">Principais Doenças Felinas</h2>
                <p class="subtitle">Conheça as principais doenças felinas e agende a vacinação com o veterinário<br>
                    para
                    garantir a saúde e bem-estar do seu pet.</p>
                <div class="vacinas-valor">
                    <div class="slide-container swiper">
                        <div class="slide-content">
                            <div class=" card-wrapper swiper-wrapper">
                                <div class="card swiper-slide" id="cardizinhos">
                                    <div class="image-content"><span class="overlay"></span>
                                        <div class="card-image"><i class="fa-solid fa-cat card-image card-img "></i>
                                        </div>
                                    </div>
                                    <div class="card-content">

                                        <h3 class="nome-vacina">
                                            Panleucopenia
                                        </h3>
                                        <p class="description">
                                            A panleucopenia é uma doença viral que ataca o aparelho digestivo
                                            dos gatos e acomete principalmente os filhotes não vacinados. É conhecida
                                            como a
                                            “parvovirose dos gatos”. Sua transmissão se dá principalmente pelo contato
                                            direto
                                            com as fezes de animais doentes. </p><button onclick="modal.showModal()"
                                            type="submit" class="btn-vacinas">Ver
                                            Mais</button></a>
                                    </div>
                                </div>
                                <div class=" card swiper-slide" id="cardizinhos">
                                    <div class="image-content"><span class="overlay"></span>
                                        <div class="card-image"><i class="fa-solid fa-cat card-image card-img "></i>
                                        </div>
                                    </div>
                                    <div class="card-content">


                                        <h3 class="nome-vacina">
                                            Calicivirose
                                        </h3>
                                        <p class="description"> A calicivirose é extremamente contagiosa e provoca um
                                            quadro de doença respiratória
                                            nos gatos, sendo muitas vezes confundida com outras doenças. No geral, o
                                            animal é
                                            infectado ao entrar em contato com outro gato que esteja com o
                                            calicivírus... </p><button onclick="modal2.showModal()" type="submit"
                                            class="btn-vacinas">Ver
                                            Mais</button>
                                    </div>
                                </div>
                                <div class=" card swiper-slide" id="cardizinhos">
                                    <div class="image-content"><span class="overlay"></span>
                                        <div class="card-image"><i class="fa-solid fa-cat card-image card-img "></i>
                                        </div>
                                    </div>
                                    <div class="card-content" id="cardizinhos">


                                        <h3 class="nome-vacina">
                                            Clamidiose
                                        </h3>
                                        <p class="description"> A clamidiose é uma infecção bacteriana que afeta em
                                            particular os
                                            olhos dos gatos. Frequentemente, a clamidiose ocorre ao mesmo tempo com
                                            outras
                                            infecções respiratórias. Se os olhos não forem tratados adequadamente, pode
                                            haver comprometimento permanente da visão... </p><button
                                            onclick="modal3.showModal()" type="submit" class="btn-vacinas">Ver
                                            Mais</button>
                                    </div>
                                </div>
                                <div class=" card swiper-slide" id="cardizinhos">
                                    <div class="image-content"><span class="overlay"></span>
                                        <div class="card-image"><i class="fa-solid fa-cat card-image card-img "></i>
                                        </div>
                                    </div>
                                    <div class="card-content">


                                        <h3 class="nome-vacina">
                                            Leucemia Viral Felina (FELV)
                                        </h3>
                                        <p class="description">A leucemia viral felina é uma doença incurável, causada
                                            por um
                                            vírus que afeta o sistema imune dos gatos, facilitando o aparecimento de
                                            infecções
                                            por bactérias e até mesmo de alguns tipos de tumor. Pode infectar gatos de
                                            qualquer
                                            idade...</p><button type="submit" onclick="modalLeucemia.showModal()"
                                            class="btn-vacinas">Ver
                                            Mais</button>
                                    </div>
                                </div>
                                <div class=" card swiper-slide" id="cardizinhos">
                                    <div class="image-content"><span class="overlay"></span>
                                        <div class="card-image"><i class="fa-solid fa-cat card-image card-img "></i>
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
                                            onclick="modal4.showModal()" class=" btn-vacinas">Ver
                                            Mais</button>
                                    </div>
                                </div>

                                <div class="card swiper-slide" id="cardizinhos">
                                    <div class="image-content"><span class="overlay"></span>
                                        <div class="card-image"><i class="fa-solid fa-cat card-image card-img "></i>
                                        </div>
                                    </div>
                                    <div class="card-content">


                                        <h3 class="nome-vacina">
                                            Adenovirose Respiratória
                                        </h3>
                                        <p class="description"> A adenovirose respiratória, também conhecida como
                                            rinotraqueíte felina, é uma condição viral causada principalmente pelo
                                            herpesvírus felino tipo 1 (FHV-1) e, em menor grau, pelo calicivírus felino.
                                        </p><button onclick="modal5.showModal()" class="btn-vacinas">Ver
                                            Mais</button>
                                    </div>
                                </div>
                                <div class="card swiper-slide" id="cardizinhos">
                                    <div class="image-content"><span class="overlay"></span>
                                        <div class="card-image"><i class="fa-solid fa-cat card-image card-img "></i>
                                        </div>
                                    </div>
                                    <div class="card-content">


                                        <h3 class="nome-vacina">
                                            Raiva
                                        </h3>
                                        <p class="description">A raiva é uma das doenças infecciosas de cães e gatos
                                            mais
                                            importantes porque é uma zoonose fatal. Geralmente é transmitida por meio da
                                            mordida
                                            de um animal infectado ou de animais que
                                            funcionam
                                            como reservatórios naturais... </p><button type="submit"
                                            onclick="modalRaiva.showModal()" class="btn-vacinas">Ver
                                            Mais</button>
                                    </div>
                                </div>
                                <div class="card swiper-slide" id="cardizinhos">
                                    <div class="image-content"><span class="overlay"></span>
                                        <div class="card-image"><i class="fa-solid fa-cat card-image card-img "></i>
                                        </div>
                                    </div>
                                    <div class="card-content">


                                        <h3 class="nome-vacina">
                                            Rinotraqueíte
                                        </h3>
                                        <p class="description">A rinotraqueíte é uma doença causada por um herpesvírus
                                            que
                                            acomete o trato respiratório superior dos gatos. A transmissão é muito fácil
                                            entre
                                            animais que convivem no mesmo ambiente...</p><button
                                            onclick="modal1.showModal()" type="submit" class="btn-vacinas">Ver
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

    <dialog id="modal1" class="modal-css">
        <div class="infos">
            <div>
                <div class="title-modal">RINOTRAQUEÍTE</div>
                <div class="modal-body">
                    A rinotraqueíte felina é uma enfermidade viral respiratória muito comum e
                    recorrente, principalmente nos meses mais frios do ano, e por isso é
                    popularmente chamada pelos tutores de gripe em gatos. Apesar da comparação
                    com a doença que acomete humanos, existem diferenças importantes que devem
                    ser esclarecidas ao dono do pet.

                    Os sintomas são:

                    <span class="destaque">Tosse;
                        Espirros;
                        Secreção nasal e ocular;
                        Febre.

                        Os gatos parecem gripados, com narinas entupidas, e podem ter
                        dificuldades para respirar.
                    </span>

                    A melhor forma de prevenir a rinotraqueíte é por meio da vacinação.
                    Converse com
                    o médico-veterinário e
                    mantenha a vacinação do seu pet em dia.

                </div>
            </div>
            <button class="btn-modal-fechar" onclick="modal1.close()">FECHAR</button>
    </dialog>
    <dialog id="modal2" class="modal-css">
        <div class="infos">
            <div>
                <div class="title-modal">Calcivirose</div>
                <div class="modal-body">
                    Isso destaca a importância da prevenção, especialmente em ambientes onde
                    vários gatos convivem, como abrigos e lares multi-gato.


                    Os sintomas são:

                    <span class="destaque">
                        Tosses;
                        Espirros;
                        Corrimentos nasais;
                        Febre;

                        Úlceras (feridas) na boca, algo que dificulta muito a ingestão de água e
                        alimentos.
                    </span>
                    A melhor forma de prevenir a coronavirose é por meio da vacinação.
                    Converse com
                    o médico-veterinário e
                    mantenha a vacinação do seu pet em dia.

                </div>
            </div>
            <button class="btn-modal-fechar" onclick="modal2.close()">FECHAR</button>
    </dialog>

    <dialog id="modal3" class="modal-css">
        <div class="infos">
            <div>
                <div class="title-modal">Clamidiose</div>
                <div class="modal-body">
                    Gatos filhotes são mais suscetíveis a infecções antes de serem vacinados. A
                    transmissão pode ocorrer quando a mãe lambe um filhote doente e depois lambe
                    um filhote saudável, passando a doença de um para o outro.

                    Essa mesma situação se aplica a gatos que vivem juntos e têm um laço muito
                    forte, e costumam dar banho um no outro.

                    O contágio também tem mais facilidade de ocorrer em felinos
                    imunossuprimidos, ou seja, com sistema imunológico fraco, independente da
                    idade.


                    Os sintomas são:

                    <span class="destaque">
                        Secreção ocular que lembra pus;
                        Olhos avermelhados ou fechados podem indicar a clamidiose.

                    </span>

                    A melhor forma de prevenir a clamidiose é por meio da
                    vacinação.
                    Converse com
                    o médico-veterinário e
                    mantenha a vacinação do seu pet em dia.

                </div>
            </div>
            <button class="btn-modal-fechar" onclick="modal3.close()">FECHAR</button>
    </dialog>

    <dialog id="modal4" class="modal-css">
        <div class="infos">
            <div>
                <div class="title-modal">Hepatite Infecciosa</div>
                <div class="modal-body">
                    A transmissão acontece principalmente quando um animal infectado lambe
                    outros gatos, já que o vírus é excretado em abundância na saliva. É uma
                    doença silenciosa, na maioria das vezes.

                    Os sintomas são:

                    <span class="destaque">

                        Perda de apetite e de peso;
                        Apatia;
                        Dificuldade para respirar;
                        Febre;
                        Anemia;
                        Anorexia.
                    </span>

                    Não existe tratamento específico.

                </div>
            </div>
            <button class="btn-modal-fechar" onclick="modal4.close()">FECHAR</button>
    </dialog>
    <dialog id="modal5" class="modal-css">
        <div class="infos">
            <div>
                <div class="title-modal">Adenovirose Respiratória</div>
                <div class="modal-body">
                    A Adenovirose Respiratória, também conhecida como Rinotraqueíte Felina, é uma condição viral causada
                    principalmente pelo herpesvírus felino tipo 1 (FHV-1) e, em menor grau, pelo calicivírus felino.
                    Essa doença afeta o trato respiratório superior dos gatos, causando sintomas semelhantes aos de um
                    resfriado comum.

                    Os principais sintomas da Adenovirose Respiratória incluem:

                    <span class="destaque">Espirros; Secreção nasal e ocular; Tosse seca ou produtiva; Febre;
                        Dificuldade para respirar; Perda de apetite; Letargia.</span>

                    A transmissão ocorre principalmente por contato direto com secreções nasais ou oculares de gatos
                    infectados, como tosse, espirros e até pelo compartilhamento de objetos contaminados.
                </div>
            </div>
            <button class="btn-modal-fechar" onclick="modal5.close()">FECHAR</button>
    </dialog>

    <dialog id="modalRaiva" class="modal-css">
        <div class="infos">
            <div>
                <div class="title-modal">Raiva</div>
                <div class="modal-body">
                    A raiva é uma doença viral grave que afeta o sistema nervoso central de cães, gatos e outros
                    mamíferos, sendo altamente contagiosa e potencialmente fatal. A transmissão ocorre principalmente
                    por meio da mordida ou arranhão de um animal infectado. Os sintomas mais comuns da raiva em felinos
                    incluem:

                    <span class="destaque">Excitação;
                        Agressividade extrema;
                        Medo ou ansiedade excessiva;
                        Paralisia progressiva;
                        Hiperatividade;
                        Dificuldade para engolir e salivação excessiva;
                        Comportamento errático e incoordenação.
                    </span>

                    Quando a doença avança, o gato pode apresentar dificuldades respiratórias, paralisia e, em último
                    caso, morte. A raiva é quase sempre fatal após o início dos sintomas.<br><br>



                </div>
            </div>
            <button class="btn-modal-fechar" onclick="modalRaiva.close()">FECHAR</button>
        </div>
    </dialog>

    <dialog id="modalLeucemia" class="modal-css">
        <div class="infos">
            <div>
                <div class="title-modal">Leucemia Viral Felina (FELV)</div>
                <div class="modal-body">
                    A Leucemia Viral Felina (FELV) é uma doença grave e incurável causada por um vírus que afeta o
                    sistema imunológico dos gatos. O vírus pode enfraquecer as defesas do animal, tornando-o mais
                    susceptível a infecções secundárias e até a alguns tipos de câncer.
                    Os principais sintomas da Leucemia Viral Felina (FELV) incluem:

                    <span class="destaque">Fadiga extrema; Perda de apetite; Perda de peso; Febre persistente; Anemia;
                        Infecções recorrentes (como problemas respiratórios); Linfadenopatia (aumento dos gânglios
                        linfáticos); Problemas de pele e gengivas.</span>

                    O diagnóstico precoce é fundamental para o controle da doença, e
                    os tratamentos disponíveis visam melhorar a qualidade de vida do gato, mas não curam a doença.


                </div>
            </div>
            <button class="btn-modal-fechar" onclick="modalLeucemia.close()">FECHAR</button>
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