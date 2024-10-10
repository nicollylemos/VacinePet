<!--
 /**
 * @file agendamento.php
 * @brief Página de agendamento de serviços para pets (castração de felinos ou vacinação ).
 *
 * Este arquivo contém o formulário de agendamento, dividido em etapas. O usuário pode selecionar
 * a data, horário, serviço desejado e fornecer informações sobre o pet e o proprietário.
 * 
 * O formulário é estruturado em várias etapas, permitindo uma experiência de usuário fluida e organizada.
 *
 * @date 2024-09-20
 * @author Eduarda Oliveira de Souza
 * @version 1.0
 */
-->
 
<!DOCTYPE html>
<html lang="pt-BR">

<!--
    * @brief Cabeçalho HTML contendo informações de metadados e links para arquivos CSS externos.
    * @details Inclui links para a estilização da página, o ícone do site e bibliotecas externas como FontAwesome e Swiper.
-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=10, minimum-scale=1.0">
    <link rel="stylesheet" href="../css/css/responsividade/telaagenda.css">
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/css/agendar.css">
    <link rel="stylesheet" href="../css/css/calendarioo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <title>Agendamento</title>
    <style>
    .hidden {
        display: none;
    }
    </style>
</head>

<body>

    <div class="blue-div-resp">
        <h2 class="logo-resp" style="font-family:baloo; color:white;">VacinePet <i class="fa-solid fa-paw fa-rotate-by"
                style="color: #fffff; --fa-rotate-angle: 49deg; width: 13px; height:7px; font-size:15px;"></i></h2>
    </div>

    <div class="container">
        <div id="blue-div" class="blue-div">
            <h2 class="logo">VacinePet <i class="fa-solid fa-paw fa-rotate-by"
                    style="color: #fffff; --fa-rotate-angle: 49deg; width: 13px; height:7px; font-size:15px;"></i></h2>
        </div>

        <div class="quad">
            <div class="form">
                <form id="agendamentoForm" action="/VacinePet/index.php" method="POST" onsubmit="return false;">
                    <!-- Etapa 1: introdução -->
                    <div id="etapa1">
                        <div class="title">
                            <h1 class="title-agendamento"> AGENDAMENTO <i
                                    style="color: #fa5909; --fa-rotate-angle: 49deg;"></i></h1>
                            <h6 class="subtitle-inicio">
                                Parabéns por priorizar a saúde do seu pet!
                                Agora, para prosseguir com o agendamento, selecione o dia e horário que melhor se
                                adequam à sua agenda.
                            </h6>


                        </div>
                        <div id="agendamento-container">
                            <label for="data">Escolha uma data:</label>
                            <input type="date" id="data" name="data">
                            <div id="horarios-disponiveis"></div>
                        </div>

                        <div id="servico" class="servico">
                            <p class="serviço">Escolha do serviço:</p>
                            <div class="radio-option">
                                <input type="radio" id="vacinar" name="service" value="vacinar">
                                <label for="vacinar">Vacina animal</label>
                            </div>
                            <div class="radio-option">
                                <input type="radio" id="castrar" name="service" value="castrar">
                                <label for="castrar">Castração de gatos</label>
                            </div>
                        </div>


                        <button id="btn-um" type="button" class="btn btn-primary btn-custom"
                            onclick="proximaEtapa(2)">Próximo</button>

                        <p id="rec" class="recado"> Atenção: O custo de deslocamento é ajustado conforme a localização
                            do atendimento.
                        </p>

                    </div>
                    <!-- Etapa 2: informações pessoais -->
                    <div id="etapa2" class="hidden">
                        <div class="title">
                            <h1 class="title-agendamento-um"> AGENDAMENTO <i
                                    style="color: #fa5909; --fa-rotate-angle: 49deg;"></i></h1>
                            <h6 id="sub" class="veri">Verifique as informações abaixo e altere em caso de necessidade
                            </h6>
                        </div>

                        <button id="final" type="button" class="btn btn-primary btn-custom"
                            onclick="finalizar()">Finalizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../js/agendamento.js"></script>
    <script src="../js/cale.js"></script>
</body>

</html>