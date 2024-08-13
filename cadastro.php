<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/css/cad.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css">
    <title>Cadastro</title>
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="blue-div">
            <h4 class="title-blue-div1">
                Vacine Pet
                <i class="fa-solid fa-paw fa-rotate-by"
                    style="color: white; --fa-rotate-angle: 49deg; width: 20px; height: 20px; font-size: 15px;"></i>
            </h4>
            <h1 class="title-blue-div2">Bem-vindo,</h1>
            <h3 class="title-blue-div3">
                Agende a vacinação do seu pet com praticidade e segurança.<br>
                Cadastre-se agora!
            </h3>
            <div class="bola">
                
            </div>
            <img src="css/css/img/dogcadpet.png" class="imagem" alt="Dog" />
        </div>

        <div class="form">
            <form action="cadastro.php" method="post">
                <!-- Informações pessoais -->
                <div id="etapa1" class="etapa">
                    <div class="title">
                        <h1 class="title-title">CADASTRO</h1>
                    </div>
                    <div class="sub-title">
                        <h5 class="sub-title-title">Preencha o cadastro abaixo com suas informações pessoais.</h5>
                    </div>

                    <div class="form1">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" maxlength="255" placeholder="Nome Completo" class="form-control"
                                    name="customer_name">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" maxlength="11" placeholder="CPF" class="form-control"
                                    name="customer_cpf_cnpj">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="date" placeholder="Data de Nascimento" class="form-control"
                                    name="customer_birth_date">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" placeholder="DDD + Telefone" maxlength="100" class="form-control"
                                    name="customer_phone">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" placeholder="Email" maxlength="255" class="form-control"
                                    name="customer_email">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="password" placeholder="Senha" maxlength="100" class="form-control"
                                    name="customer_password">
                            </div>
                        </div>
                    </div>
                    <div class="div-botoess">
                        <button type="button" class="btn btn-primary btn-custom"
                            onclick="proximaEtapa(2)">Próximo</button>
                    </div>
                </div>

                <!-- Endereço 1 -->
                <div id="etapa2" class="etapa hidden">
                    <div class="title">
                        <h1 class="title-title">CADASTRO</h1>
                    </div>
                    <div class="sub-title">
                        <h5 class="sub-title-title">Preencha com suas informações de endereço.</h5>
                    </div>
                    <div class="row">
                        <div class="form-group mt-4 col-md-6">
                            <input type="text" maxlength="255" placeholder="Rua" class="form-control" name="rua">
                        </div>
                        <div class="form-group mt-4 col-md-6">
                            <input type="text" maxlength="10" placeholder="Número" class="form-control" name="numero">
                        </div>
                        <div class="form-group mt-4 col-md-6">
                            <input type="text" maxlength="255" placeholder="Complemento" class="form-control"
                                name="complemento">
                        </div>
                        <div class="form-group mt-4 col-md-6">
                            <input type="text" maxlength="255" placeholder="Bloco (Apto.)" class="form-control"
                                name="bloco">
                        </div>
                    </div>
                    <div class="div-botoes">
                        <button type="button" class="btn btn-secondary btn-custom"
                            onclick="anteriorEtapa(1)">Anterior</button>
                        <button type="button" class="btn btn-primary btn-custom"
                            onclick="proximaEtapa(3)">Próximo</button>
                    </div>
                </div>

                <!-- Endereço 2 -->
                <div id="etapa3" class="etapa hidden">
                    <div class="title">
                        <h1 class="title-title">CADASTRO</h1>
                    </div>
                    <div class="sub-title">
                        <h5 class="sub-title-title">Preencha com suas informações de endereço.</h5>
                    </div>
                    <div class="row">
                        <div class="form-group mt-4 col-md-6">
                            <input type="text" maxlength="8" placeholder="Bairro" class="form-control" name="bairro">
                        </div>
                        <div class="form-group mt-4 col-md-6">
                            <input type="text" maxlength="8" placeholder="CEP" class="form-control" name="cep">
                        </div>
                        <div class="form-group mt-4 col-md-6">
                            <input type="text" maxlength="255" placeholder="Cidade" class="form-control" name="cidade">
                        </div>
                        <div class="form-group mt-4 col-md-6">
                            <select class="form-control" name="estado">
                                <option value="SP">SP</option>
                            </select>
                        </div>
                    </div>
                    <div class="div-botoes">
                        <button type="button" class="btn btn-secondary btn-custom"
                            onclick="anteriorEtapa(2)">Anterior</button>
                        <button type="button" class="btn btn-primary btn-custom"
                            onclick="proximaEtapa(4)">Próximo</button>
                    </div>
                </div>

                <!-- Informações pet 1 -->
                <div id="etapa4" class="etapa hidden">
                    <div class="title">
                        <h1 class="title-title">CADASTRO</h1>
                    </div>
                    <div class="sub-title">
                        <h5 class="sub-title-title">Preencha com as informações do seu pet.</h5>
                    </div>

                    <div class="radio">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" maxlength="255" placeholder="Nome do Pet" class="form-control"
                                    name="pet_name">
                            </div>
                            <div class="col-md-6">
                                <div class="form-control1">
                                    <p>Sexo:</p>
                                    <div class="radio-group">
                                        <input type="radio" id="sexo-m" name="pet_sex" value="Macho">
                                        <label for="sexo-m">Macho</label>
                                        <input type="radio" id="sexo-f" name="pet_sex" value="Fêmea">
                                        <label for="sexo-f">Fêmea</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" maxlength="11" placeholder="Idade do Pet" class="form-control"
                                name="pet_age">
                        </div>
                        <div class="col-md-6">
                            <div class="form-control1">
                                <p>Seu pet é castrado?</p>
                                <div class="radio-group">
                                    <input type="radio" id="sim" name="pet_neutered" value="Sim">
                                    <label for="sim">Sim</label>
                                    <input type="radio" id="nao" name="pet_neutered" value="Não">
                                    <label for="nao">Não</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" placeholder="Raça" maxlength="255" class="form-control" name="pet_breed">
                        </div>
                        <div class="col-md-6">
                            <div class="form-control1">
                                <p>Qual o porte do seu Pet?</p>
                                <div class="radio-group">
                                    <input type="radio" id="porte-p" name="pet_size" value="Pequeno">
                                    <label for="porte-p">Pequeno</label>
                                    <input type="radio" id="porte-m" name="pet_size" value="Médio">
                                    <label for="porte-m">Médio</label>
                                    <input type="radio" id="porte-g" name="pet_size" value="Grande">
                                    <label for="porte-g">Grande</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" placeholder="Peso aproximado do Pet" maxlength="100" class="form-control"
                                name="pet_weight">
                        </div>
                    </div>
                    <div class="div-botoes">
                        <button type="button" class="btn btn-secondary btn-custom"
                            onclick="anteriorEtapa(3)">Anterior</button>
                        <button type="button" class="btn btn-primary btn-custom"
                            onclick="proximaEtapa(5)">Próximo</button>
                    </div>
                </div>

                <!-- Informações pet 2 -->
                <div id="etapa5" class="etapa hidden">
                    <div class="title">
                        <h1 class="title-title">CADASTRO</h1>
                    </div>
                    <div class="sub-title">
                        <h5 class="sub-title-title">Preencha com as informações do seu pet.</h5>
                    </div>
                    <div class="form-group">
                        <label class="label-info">Informações Adicionais:</label>
                        <textarea id="msg" class="form-control" rows="3"
                            placeholder="Utilize esse espaço para adicionar mais informações sobre o Pet"></textarea>
                    </div>

                    <div class="quad-blue">
                        <div class="upload-section">
                            <label for="file-upload" class="custom-file-upload">
                                <i id="anexo" class="fa fa-cloud-upload"></i>
                                <div class="tab"></div>
                                <h3 class="anexo">Anexe aqui a foto do seu pet</h3> 
                            </label>
                            <input id="file-upload" type="file"/>
                        </div>
                    </div>
                    <div class="div-botoes">
                        <button type="button" class="btn btn-secondary btn-custom"
                            onclick="anteriorEtapa(4)">Anterior</button>
                        <button type="button" class="btn btn-primary btn-custom"
                            onclick="proximaEtapa(6)">Enviar</button>
                    </div>
                </div>

                <!-- Tela de confirmação -->
                <div id="etapa6" class="etapa hidden">
                    <h1 class="title-sucesso">Cadastro realizado com sucesso! <i class="fas fa-check-circle"
                            style="color: green;"></i></h1>
                    <p><br>Seu cadastro foi realizado com sucesso e agora você pode prosseguir para o agendamento.
                        <br><br>Caso
                        queira realizar o agendamento depois, clique em "Finalizar".
                    </p>
                    <div class="div-botoes"> <button type="button" class="btn btn-primary btn-custom"
                            onclick="finalizar()">Finalizar</button>
                        <button type="button" class="btn btn-primary btn-custom"
                            onclick="agendamento()">Agendar</button>
                    </div>

                </div>
            </form>
        </div>
    </div>

    <script src="js/cadastro.js"></script>
</body>

</html>