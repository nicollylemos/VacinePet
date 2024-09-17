<?php 
if (isset($_POST['submit'])) {
    include_once('../config.php');

    // Informações do tutor
    $nome = $_POST['tutor_nome'];
    $cpf = $_POST['tutor_cpf'];
    $datanasc = $_POST['tutor_datanasc'];
    $telefone = $_POST['tutor_telefone'];
    $email = $_POST['tutor_email'];
    $senha = $_POST['tutor_senha'];

    // Inserir tutor
    $result = mysqli_query($conexao, "INSERT INTO tutor (nome, cpf, datanasc, telefone, email, senha) VALUES ('$nome', '$cpf', '$datanasc', '$telefone', '$email', '$senha')");

    if ($result) {
        // Obter o ID do tutor inserido
        $cod_tutor = mysqli_insert_id($conexao);

        // Informações do endereço
        $rua = $_POST['endereco_rua'];
        $numero = $_POST['endereco_numero'];
        $complemento = $_POST['enedereco_complemento'];
        $bairro = $_POST['endereco_bairro'];
        $cep = $_POST['endereco_cep'];
        $cidade = $_POST['endereco_cidade'];

        // Inserir endereço com o cod_tutor
        $result_endereco = mysqli_query($conexao, "INSERT INTO endereco(rua, numero, complemento, bairro, cep, cidade, cod_tutor) VALUES ('$rua', '$numero', '$complemento', '$bairro', '$cep', '$cidade', '$cod_tutor')");


        // Informações do Pet
        $nome_pet = $_POST['pet_nome'];
        $numero = $_POST['pet_sexo'];
        $complemento = $_POST['pet_idade'];
        $bairro = $_POST['endereco_bairro'];
        $cep = $_POST['endereco_cep'];
        $cidade = $_POST['endereco_cidade'];
        $result_pet = mysqli_query($conexao, "INSERT INTO endereco(rua, numero, complemento, bairro, cep, cidade, cod_tutor) VALUES ('$rua', '$numero', '$complemento', '$bairro', '$cep', '$cidade', '$cod_tutor')");

    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=10, minimum-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/css/cadastrar.css">
    <link rel="stylesheet" href="../css/css/responsividade/telacadastra.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css">
    <title>VacinePet - Cadastro</title>
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
                VacinePet
                <i class="fa-solid fa-paw fa-rotate-by"
                    style=" color: white;transform: rotate(49deg); width: 20px; height: 20px; font-size: 15px;"></i>
            </h4>
            <h1 class="title-blue-div2">Bem-vindo,</h1>
            <h3 class="title-blue-div3">
                Agende a vacinação do seu pet com praticidade e segurança.<br>
                Cadastre-se agora!
            </h3>
        </div>

        <div class="blue-div-resp">
            <h4 class="title-blue-div1">
                VacinePet
                <i class="fa-solid fa-paw fa-rotate-by"
                    style="  color: white;transform: rotate(49deg); width: 20px; height: 20px; font-size: 15px;"></i>
            </h4>
            <h1 class="title-blue-div2 titulo">Bem-vindo,</h1>
            <h3 class="title-blue-div3 titulo">
                Agende a vacinação do seu pet com praticidade e segurança.<br>
                Cadastre-se agora!
            </h3>
        </div>

        <div class="form">
            <form action="cadastro.php" method="POST">
                <!-- Informações pessoais -->
                <div id="etapa1" class="etapa">
                    <div class="title">
                        <h1 class="title-title">CADASTRO</h1>
                    </div>
                    <div class="sub-title">
                        <h5 class="sub-title-title sub1">Preencha o cadastro abaixo com suas informações pessoais.</h5>
                    </div>

                    <div class="form1">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" maxlength="255" placeholder="Nome Completo" class="form-control"
                                    name="tutor_nome">
                            </div>
                            <div id="cpf" class="form-group col-md-6">
                                <input type="text" maxlength="11" placeholder="CPF" class="form-control"
                                    name="tutor_cpf">
                            </div>
                        </div>


                        <!--MASCARA E LIMITE DE DIGITAÇÃO, APENAS NÚMEROS-->
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="date" class="form-control" placeholder="Data de Nascimento"
                                    name="tutor_datanasc" maxlength="10">
                            </div>
                            <div id="tele" class="form-group col-md-6">
                                <input type="text" placeholder="DDD + Telefone" maxlength="14" class="form-control"
                                    name="tutor_telefone">
                            </div>
                        </div>

                        <script>
                        // Máscara para a data de nascimento
                        document.querySelector('input[name="customer_birth_date"]').addEventListener('input', function(
                            e) {
                            let value = e.target.value.replace(/\D/g, ''); // Remove tudo que não é número
                            if (value.length > 8) {
                                value = value.slice(0, 8); // Limita a 8 dígitos
                            }
                            // Adiciona as barras conforme necessário
                            value = value.replace(/(\d{2})(\d{2})/, '$1/$2');
                            value = value.replace(/(\d{2})(\d{4})/, '$1/$2');
                            e.target.value = value;
                        });

                        // Máscara para o telefone
                        </script>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" placeholder="Email" maxlength="255" class="form-control"
                                    name="tutor_email">
                            </div>
                            <div id="senha" class="form-group col-md-6">
                                <input type="password" placeholder="Senha" maxlength="100" class="form-control"
                                    name="tutor_senha">
                            </div>
                        </div>
                    </div>
                    <div class="div-botoess">
                        <button type="button" class="btn btn-primary btn-custom btn-cad"
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
                            <input type="text" maxlength="255" placeholder="Rua" class="form-control"
                                name="endereco_rua">
                        </div>
                        <div id="num" class="form-group mt-4 col-md-6">
                            <input type="text" maxlength="10" placeholder="Número" class="form-control"
                                name="endereco_numero">
                        </div>
                        <div class="form-group mt-4 col-md-6">
                            <input type="text" maxlength="255" placeholder="Complemento" class="form-control"
                                name="enedereco_complemento">
                        </div>

                    </div>
                    <div class="div-botoes">
                        <button type="button" class="btn btn-secondary btn-custom btn-perso"
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
                            <input type="text" maxlength="8" placeholder="Bairro" class="form-control"
                                name="endereco_bairro">
                        </div>
                        <div id="cep" class="form-group mt-4 col-md-6">
                            <input type="text" maxlength="8" placeholder="CEP" class="form-control" name="endereco_cep">
                        </div>
                        <div class="form-group mt-4 col-md-6">
                            <input type="text" maxlength="255" placeholder="Cidade" class="form-control"
                                name="endereco_cidade">
                        </div>
                        <div id="sp" class="form-group mt-4 col-md-6">
                            <select class="form-control" name="endereco_estado">
                                <option value="SP">SP</option>
                            </select>
                        </div>
                    </div>
                    <div class="div-botoes">
                        <button type="button" id="btn-sec" class="btn btn-secondary btn-custom btn-perso"
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
                                    name="pet_nome">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" maxlength="255" placeholder="Espécie do Pet" class="form-control"
                                    name="pet_especie">
                            </div>
                            <div class="col-md-6">
                                <div class="form-control1">
                                    <p>Sexo:</p>
                                    <div class="radio-group">
                                        <input type="radio" id="sexo-m" name="pet_sexo" value="Macho">
                                        <label for="sexo-m">Macho</label>
                                        <input type="radio" id="sexo-f" name="pet_Sexo" value="Fêmea">
                                        <label for="sexo-f">Fêmea</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" maxlength="11" placeholder="Idade do Pet" class="form-control"
                                name="pet_idade">
                        </div>
                        <div class="col-md-6">
                            <div class="form-control1">
                                <p>Seu pet é castrado?</p>
                                <div class="radio-group">
                                    <input type="radio" id="sim" name="pet_castracao" value="Sim">
                                    <label for="sim">Sim</label>
                                    <input type="radio" id="nao" name="pet_castracao" value="Não">
                                    <label for="nao">Não</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" placeholder="Raça" maxlength="255" class="form-control" name="pet_Raca">
                        </div>
                        <div class="col-md-6">
                            <div class="form-control1">
                                <p>Qual o porte do seu Pet?</p>
                                <div class="radio-group">
                                    <input type="radio" id="porte-p" name="pet_porte" value="Pequeno">
                                    <label for="porte-p">Pequeno</label>
                                    <input type="radio" id="porte-m" name="pet_porte" value="Médio">
                                    <label for="porte-m">Médio</label>
                                    <input type="radio" id="porte-g" name="pet_porte" value="Grande">
                                    <label for="porte-g">Grande</label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="div-botoes">
                        <button type="button" id="btn-etapa4" class="btn btn-secondary btn-custom btn-perso"
                            onclick="anteriorEtapa(3)">Anterior</button>
                        <button type="button" id="btn-btn-etapa4" class="btn btn-primary btn-custom"
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
                    <div class="form-group mt-4 col-md-6" style="width: 530px;">
                        <input type="text"
                            placeholder="Utilize esse espaço para adicionar mais informações sobre o pet."
                            class="form-control add" name="pet_historico">
                    </div>

                    <div class="quad-blue">
                        <div class="upload-section">
                            <label for="file-upload" class="custom-file-upload">
                                <i id="anexo" class="fa fa-cloud-upload"></i>
                                <div class="tab"></div>
                                <h3 class="anexo">Anexe aqui a foto do seu pet</h3>
                            </label>
                            <input id="file-upload" type="file" name="pet_foto_pet" />
                        </div>
                    </div>
                    <div class="div-botoes">
                        <button type="button" class="btn btn-secondary btn-custom btn-perso"
                            onclick="anteriorEtapa(4)">Anterior</button>
                        <input type="submit" name="submit" class="btn btn-primary btn-custom"
                            onclick="proximaEtapa(6)"></input>
                    </div>
                </div>

                <!-- Tela de confirmação -->
                <div id="etapa6" class="etapa hidden">
                    <div class="check">
                        <h1 class="title-sucesso">Cadastro realizado com sucesso! <i class="fas fa-check-circle"
                                style="color: green;"></i></h1>
                    </div>
                    <div class="p">
                        <p><br>Seu cadastro foi realizado com sucesso e agora você pode prosseguir para o
                            agendamento.
                            <br><br>Caso
                            queira realizar o agendamento depois, clique em "Finalizar".
                        </p>
                    </div>
                    <div class="div-botoes2">
                        <button type="button" class="btn btn-primary btn-custom btn-perso1"
                            onclick="finalizar()">Finalizar</button>
                        <button type="button" class="btn btn-primary btn-custom"
                            onclick="agendamento()">Agendar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="../js/cadastro.js"></script>
</body>

</html>