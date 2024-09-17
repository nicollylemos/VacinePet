<!DOCTYPE html>
<html lang="pt-BR">

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
        <h2 class="logo" style="font-family:baloo; color:white;">VacinePet <i class="fa-solid fa-paw fa-rotate-by"
                style="color: #fffff; --fa-rotate-angle: 49deg; width: 13px; height:7px; font-size:15px;"></i></h2>
    </div>

    <div class="container">
        <div id="blue-div" class="blue-div">
            <h2 class="logo">VacinePet <i class="fa-solid fa-paw fa-rotate-by"
                    style="color: #fffff; --fa-rotate-angle: 49deg; width: 13px; height:7px; font-size:15px;"></i></h2>
        </div>

        <div class="quad">
            <div class="form">
                <form id="agendamentoForm" action="agendamento.php" method="post" onsubmit="return false;">
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
                        <div class="form-group mt-4">
                            <input id="form-control" type="text" maxlength="255" placeholder="Nome Completo"
                                class="form-control" name="nome">
                        </div>
                        <div class="form-group mt-4">
                            <input id="form-control" type="email" maxlength="255" placeholder="Email"
                                class="form-control" name="email">
                        </div>
                        <div class="form-group mt-4">
                            <input id="form-control" type="text" maxlength="11" placeholder="Telefone"
                                class="form-control" name="telefone">
                        </div>
                        <div class="form-group mt-4">
                            <input id="form-control" type="text" maxlength="11" placeholder="CPF" class="form-control"
                                name="cpf">
                        </div>
                        <button id="btn-dois" type="button" class="btn btn-secondary btn-custom"
                            onclick="anteriorEtapa(1)">Anterior</button>
                        <button id="btn-dois" type="button" class="btn btn-primary btn-custom"
                            onclick="proximaEtapa(3)">Próximo</button>
                    </div>

                    <!-- Etapa 3: endereço 1 -->
                    <div id="etapa3" class="hidden">
                        <div class="title">
                            <h1 class="title-agendamento">ENDEREÇO (1/2)</h1>
                            <h6 id="sub">Verifique as informações abaixo e altere em caso de necessidade</h6>
                        </div>
                        <div class="form-group mt-4">
                            <input id="form-control" type="text" maxlength="255" placeholder="Rua" class="form-control"
                                name="rua">
                        </div>
                        <div class="form-group mt-4">
                            <input id="form-control" type="text" maxlength="10" placeholder="Número"
                                class="form-control" name="numero">
                        </div>
                        <div class="form-group mt-4">
                            <input id="form-control" type="text" maxlength="255" placeholder="Complemento"
                                class="form-control" name="complemento">
                        </div>
                        <div class="form-group mt-4">
                            <input id="form-control" type="text" maxlength="255" placeholder="Bloco (Apto.)"
                                class="form-control" name="bloco">
                        </div>
                        <button id="btn-tres" type="button" class="btn btn-secondary btn-custom"
                            onclick="anteriorEtapa(2)">Anterior</button>
                        <button id="btn-tres" type="button" class="btn btn-primary btn-custom"
                            onclick="proximaEtapa(4)">Próximo</button>
                    </div>

                    <!-- Etapa 4: endereço 2 -->
                    <div id="etapa4" class="hidden">
                        <div class="title">
                            <h1 class="title-agendamento">ENDEREÇO (2/2)</h1>
                            <h6 id="sub">Verifique as informações abaixo e altere em caso de necessidade</h6>
                        </div>
                        <div class="form-group mt-4">
                            <input id="form-control" type="text" maxlength="8" placeholder="Bairro" class="form-control"
                                name="bairro">
                        </div>
                        <div class="form-group mt-4">
                            <input id="form-control" type="text" maxlength="8" placeholder="CEP" class="form-control"
                                name="cep">
                        </div>
                        <div class="form-group mt-4">
                            <input id="form-control" type="text" maxlength="255" placeholder="Cidade"
                                class="form-control" name="cidade">
                        </div>
                        <div class="form-group mt-4">
                            <select id="form-control" class="form-control" name="estado">
                                <option value="SP">SP</option>
                            </select>
                        </div>
                        <button id="btn-quatro" type="button" class="btn btn-secondary btn-custom"
                            onclick="anteriorEtapa(3)">Anterior</button>
                        <button id="btn-quatro" type="button" class="btn btn-primary btn-custom"
                            onclick="proximaEtapa(5)">Próximo</button>
                    </div>

                    <!-- Etapa 5: informações sobre o pet 1 -->
                    <div id="etapa5" class="hidden">
                        <div class="title">
                            <h1 id="sobre" class="title-agendamento">SOBRE O PET (1/2)</h1>
                            <h6 id="sub" class="subtitle2">Verifique as informações abaixo e altere em caso de
                                necessidade</h6>
                        </div>
                        <div class="form-group mt-4">
                            <input id="form-control" type="text" maxlength="255" placeholder="Nome do Pet"
                                class="form-control" name="nomePet">
                        </div>
                        <div class="form-group mt-4">
                            <input id="form-control" type="text" maxlength="10" placeholder="Peso Aproximado"
                                class="form-control" name="peso">
                        </div>
                        <div class="form-group mt-4">
                            <input id="form-control" type="text" maxlength="255" placeholder="Raça" class="form-control"
                                name="raca">
                        </div>
                        <div class="form-group mt-4">
                            <input id="form-control" type="text" maxlength="3" placeholder="Idade" class="form-control"
                                name="idade">
                        </div>
                        <button id="btn-cinco" type="button" class="btn btn-secondary btn-custom"
                            onclick="anteriorEtapa(4)">Anterior</button>
                        <button id="btn-cinco" type="button" class="btn btn-primary btn-custom"
                            onclick="proximaEtapa(6)">Próximo</button>
                    </div>

                    <!-- Etapa 6: informações sobre o pet 2 -->
                    <div id="etapa6" class="hidden">
                        <div class="title">
                            <h1 id="sobre" class="title-agendamento">SOBRE O PET (2/2)</h1>
                            <h6 id="sub" class="subtitle2">Verifique as informações abaixo e altere em caso de
                                necessidade</h6>
                        </div>
                        <div id="radio" class="form-group mt-4">
                            <label>Sexo:</label><br>
                            <input type="radio" id="sexoM" name="sexo" value="M">
                            <label for="sexoM">Macho</label>
                            <input type="radio" id="sexoF" name="sexo" value="F">
                            <label for="sexoF">Fêmea</label>
                        </div>
                        <div id="radio" class="form-group mt-4">
                            <label>Castrado:</label><br>
                            <input type="radio" id="castradoSim" name="castrado" value="sim">
                            <label for="castradoSim">Sim</label>
                            <input type="radio" id="castradoNao" name="castrado" value="nao">
                            <label for="castradoNao">Não</label>
                        </div>
                        <div id="radio" class="form-group mt-4">
                            <label>Porte:</label><br>
                            <input type="radio" id="portePequeno" name="porte" value="pequeno">
                            <label for="portePequeno">Pequeno</label>
                            <input type="radio" id="porteMedio" name="porte" value="medio">
                            <label for="porteMedio">Médio</label>
                            <input type="radio" id="porteGrande" name="porte" value="grande">
                            <label for="porteGrande">Grande</label>
                        </div>

                        <div class="form-group mt-4">
                            <input id="form-control" type="text" placeholder="Histórico" class="form-control"
                                name="historico"></input>
                        </div>
                        <button id="btn-seis" type="button" class="btn btn-secondary btn-custom"
                            onclick="anteriorEtapa(5)">Anterior</button>
                        <button id="btn-seis" type="button" class="btn btn-primary btn-custom"
                            onclick="enviarForm()">Enviar</button>
                    </div>

                    <!-- Etapa 7: tela de agradecimento -->
                    <div id="etapa7" class="hidden">
                        <div class="title">
                            <h1 id="sucesso" class="title-agendamentos">Agendamento realizado com sucesso! <i
                                    class="fas fa-check-circle" style="color: green;"></i></h1>

                            <p id="span">Realizado em: <span id="dataHoraAgendamento"></span></p>


                            <h6 id="agradecimento" class="subtitle">Em breve entraremos em contato para confirmar os
                                detalhes.<br><br>
                                Agradecemos por confiar no VacinePet!</h6>
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