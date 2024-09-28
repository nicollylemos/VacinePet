<?php
if (isset($_POST['submit'])) {
    // Inclui o arquivo de configuração para conectar ao banco de dados
    include_once('../config.php');

    // Obtém os dados do formulário
    $nome = $_POST['tutor_nome'];
    $datanasc = $_POST['tutor_datanasc'];
    $cpf = $_POST['tutor_cpf'];
    $telefone = $_POST['tutor_telefone'];
    $email = $_POST['tutor_email'];
    $senha = $_POST['tutor_senha'];

    $result = mysqli_query($conexao, "INSERT INTO tutor( nome, cpf, datanasc, telefone, email, senha) VALUES ('$nome', '$cpf', '$datanasc', '$telefone', '$email', '$senha')");

    if ($result) {
        // Obter o ID do tutor inserido
        $cod_tutor = mysqli_insert_id($conexao);

        // Informações do endereço
        $rua = $_POST['end_rua'];
        $numero = $_POST['end_numero'];
        $complemento = $_POST['end_complemento'];
        $bairro = $_POST['end_bairro'];
        $cep = $_POST['end_cep'];
        $cidade = $_POST['end_cidade'];

         /**
         * Inserção dos dados do tutor no banco de dados.
         * Utiliza uma query SQL para inserir o nome, CPF, data de nascimento, telefone, e-mail e senha do tutor.
         */
        $result_endereco = mysqli_query($conexao, "INSERT INTO endereco(rua, numero, complemento, bairro, cep, cidade, cod_tutor) VALUES ('$rua', '$numero', '$complemento', '$bairro', '$cep', '$cidade', '$cod_tutor')");

         // Informações do Pet
        $nome_pet = $_POST['pet_nome'];
        $sexo = $_POST['pet_sexo'];
        $idade = $_POST['pet_idade'];
        $castracao = $_POST['pet_castracao'];
        $porte = $_POST['pet_porte'];
        $especie = $_POST['pet_especie'];
        $historico = $_POST['pet_historico'];
        $raca = $_POST['pet_raca'];
        $foto_pet = $_POST['pet_foto_pet'];
            
        
        
         /**
         * Inserção dos dados de endereço no banco de dados.
         * Utiliza o ID do tutor (cod_tutor) para associar o endereço ao tutor.
         */
        $result_pet = mysqli_query($conexao, "INSERT INTO pet(nome_pet, sexo, idade, castracao, porte, especie, historico, raca, foto_pet, cod_tutor) VALUES ('$nome_pet', '$sexo', '$idade', '$castracao', '$porte', '$especie', '$historico', '$raca', '$foto_pet', '$cod_tutor')");

    }
    // Fecha a conexão
    mysqli_close($conexao);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/css/cadastrandos.css">
    <link rel="stylesheet" href="../css/css/responsividade/telacadastra.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css">
    <title>VacinePet - Cadastro</title>
    <style>
    .hidden {
        display: none;
    }
    </style>
    <title>Cadastro de Tutor</title>
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
                <div id="etapa1" class="etapa">
                    <div class="title">
                        <h1 class="title-title">CADASTRO</h1>
                    </div>
                    <div class="sub-title">
                        <h5 class="sub-title-title sub1">Preencha o cadastro abaixo com suas informações pessoais.</h5>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control frm-ctrl" name="tutor_nome" id="nome"
                                placeholder="Nome Completo" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="date" class="form-control frm-ctrl" name="tutor_datanasc" id="datanasc"
                                required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control frm-ctrl" name="tutor_cpf" id="cpf" placeholder="CPF"
                                maxlength="14" autocomplete="off" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="tel" class="form-control frm-ctrl" name="tutor_telefone" id="telefone"
                                placeholder="(DDD) + Telefone" onkeyup="handlePhone(event)" maxlength="15">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control frm-ctrl" name="tutor_email" id="email"
                                placeholder="Email" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="password" class="form-control frm-ctrl" name="tutor_senha" id="senha"
                                placeholder="Senha" required>
                        </div>

                        <div class="div-botoess">
                            <button type="button" class="btn btn-primary btn-custom btn-cad"
                                onclick="proximaEtapa(2)">Próximo</button>
                        </div>
                    </div>
                </div>
                <div id="etapa2" class="etapa hidden">
                    <div class="title">
                        <h1 class="title-title">CADASTRO</h1>
                        <h5 class="sub-title-title">Preencha com suas informações de endereço.</h5>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control frm-ctrl" name="end_cep" id="cep" placeholder="CEP">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control frm-ctrl" name="end_rua" id="rua" placeholder="Rua"
                                required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="number" class="form-control frm-ctrl" name="end_numero" id="numero"
                                placeholder="Número" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control frm-ctrl" name="end_complemento" id="complemento"
                                placeholder="Complemento" maxlength="50">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control frm-ctrl" name="end_bairro" id="bairro"
                                placeholder="Bairro" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control frm-ctrl" name="end_cidade" id="cidade"
                                placeholder="Cidade" required>
                        </div>

                        <div class="div-botoes">
                            <button type="button" class="btn btn-secondary btn-custom btn-perso"
                                onclick="anteriorEtapa(1)">Anterior</button>
                            <button type="button" class="btn btn-primary btn-custom"
                                onclick="proximaEtapa(3)">Próximo</button>
                        </div>
                    </div>
                </div>
                <!-- Informações pet 1 -->
                <div id="etapa3" class="etapa hidden">
                    <div class="title">
                        <h1 class="title-title">CADASTRO</h1>
                    </div>
                    <div class="sub-title">
                        <h5 class="sub-title-title">Preencha com as informações do seu pet.</h5>
                    </div>

                    <div class="radio">
                        <div class="row">
                            <div class="col">
                                <p>Espécie:</p>
                                <select class="selecionar" name="pet_especie" id="sexo">
                                    <option value="Gato">Gato</option>
                                    <option value="Fêmea">Cachorro</option>
                                </select>
                                <label for="especie">Espécie:</label>
                                <select class="selecionar" name="pet_sexo" id="sexo">
                                    <option value="Macho">Macho</option>
                                    <option value="Fêmea">Fêmea</option>
                                </select>
                                <label for="castracao">Seu pet é castrado?</label>
                                <select class="selecionar" name="pet_castracao" id="castracao">
                                    <option value="Sim">Sim</option>
                                    <option value="Não">Não</option>
                                </select>
                                <label for="porte">Qual o porte do seu Pet?</label>
                                <select class="selecionar" name="pet_porte" id="porte">
                                    <option value="Pequeno">Pequeno</option>
                                    <option value="Médio">Médio</option>
                                    <option value="Grande">Grande</option>
                                </select>
                            </div>

                            <div class="col">
                                <p>Nome:</p>
                                <input type="text" maxlength="255" placeholder="Nome do Pet"
                                    class="form-control frm-ctrl" name="pet_nome">
                                <p>Raça:</p>
                                <input type="text" placeholder="Raça" maxlength="255" class="form-control frm-ctrl"
                                    name="pet_raca">
                                <p>Idade:</p>
                                <input type="number" maxlength="2" placeholder="Idade do Pet"
                                    class="form-control frm-ctrl" name="pet_idade">

                            </div>
                        </div>
                    </div>


                    <div class="div-botoes">
                        <button type="button" id="btn-etapa4" class="btn btn-secondary btn-custom btn-perso"
                            onclick="anteriorEtapa(2)">Anterior</button>
                        <button type="button" id="btn-btn-etapa4" class="btn btn-primary btn-custom"
                            onclick="proximaEtapa(4)">Próximo</button>
                    </div>
                </div>

                <!-- Informações pet 2 -->
                <div id="etapa4" class="etapa hidden">
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
                            onclick="anteriorEtapa(3)">Anterior</button>
                        <input type="submit" name="submit" class="btn btn-secondary btn-custom btn-perso"
                            value="Cadastrar">
                    </div>
                </div>


            </form>
</body>
<script src="../js/cadastrar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>

<script>
$('#cep').mask('00000-000');
$('#telefone').mask('(00) 00000-0000');
$('#cpf').mask('000.000.000-00', {
    reverse: true
});
$('#money').mask("#.##0,00", {
    reverse: true
});
</script>
</script>

</html>