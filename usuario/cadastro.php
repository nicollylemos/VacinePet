<!--

/**
 * Este código realiza o cadastro de tutores, pets e seus respectivos endereços no banco de dados.
 * Utiliza a conexão com o banco de dados configurada previamente para inserir os dados fornecidos pelo formulário HTML.
 *
 * @version 1.0
 * @since 20/09/2024
 */
 --><?php 
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
        $complemento = $_POST['endereco_complemento'];
        $bairro = $_POST['endereco_bairro'];
        $cep = $_POST['endereco_cep'];
        $cidade = $_POST['endereco_cidade'];

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
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=10, minimum-scale=1.0">
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
            <form action="final-cadastro.html" method="POST">
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
                                <input type="text" maxlength="255" placeholder="Nome Completo"
                                    class="form-control frm-ctrl" name="tutor_nome">
                            </div>
                            <div id="cpf" class="form-group col-md-6">
                                <input type="text" maxlength="14" placeholder="CPF" id="cpf"
                                    class="form-control frm-ctrl" name="tutor_cpf">
                            </div>
                        </div>
                        <script>
                        document.getElementById('cpf').addEventListener('input', function(e) {
                            var value = e.target.value;
                            var cpfPattern = value.replace(/\D/g,
                                    '') // Remove qualquer coisa que não seja número
                                .replace(/(\d{3})(\d)/, '$1.$2') // Adiciona ponto após o terceiro dígito
                                .replace(/(\d{3})(\d)/, '$1.$2') // Adiciona ponto após o sexto dígito
                                .replace(/(\d{3})(\d)/, '$1-$2') // Adiciona traço após o nono dígito
                                .replace(/(-\d{2})\d+?$/, '$1'); // Impede entrada de mais de 11 dígitos
                            e.target.value = cpfPattern;
                        });
                        </script>


                        <!--MASCARA E LIMITE DE DIGITAÇÃO, APENAS NÚMEROS-->
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="date" class="form-control frm-ctrl" placeholder="Data de Nascimento"
                                    name="tutor_datanasc" maxlength="10">
                            </div>
                            <div id="tele" class="form-group col-md-6">
                                <input type="text" placeholder="DDD + Telefone" maxlength="14"
                                    class="form-control frm-ctrl" name="tutor_telefone">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" placeholder="Email" maxlength="255" class="form-control frm-ctrl"
                                    name="tutor_email" required>
                            </div>
                            <div id="senha" class="form-group col-md-6">
                                <input type="password" placeholder="Senha" maxlength="100" class="form-control frm-ctrl"
                                    name="tutor_senha" required>
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
                        <div id="cep" class="form-group  col-md-6">
                            <input type="text" maxlength="8" placeholder="CEP" class="form-control frm-ctrl"
                                name="endereco_cep">
                        </div>
                        <div class="form-group  col-md-6">
                            <input type="text" maxlength="255" placeholder="Rua" class="form-control frm-ctrl"
                                name="endereco_rua">
                        </div>
                        <div id="num" class="form-group col-md-6">
                            <input type="number" maxlength="5" placeholder="Número" class="form-control frm-ctrl"
                                name="endereco_numero">
                        </div>
                        <div class="form-group  col-md-6">
                            <input type="text" maxlength="255" placeholder="Complemento" class="form-control frm-ctrl"
                                name="endereco_complemento">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" maxlength="65" placeholder="Bairro" class="form-control frm-ctrl"
                                name="endereco_bairro">
                        </div>
                        <div class="form-group  col-md-6">
                            <input type="text" maxlength="25" placeholder="Cidade" class="form-control frm-ctrl"
                                name="endereco_cidade">
                        </div>
                    </div>
                    <div class="div-botoes">
                        <button type="button" class="btn btn-secondary btn-custom btn-perso"
                            onclick="anteriorEtapa(1)">Anterior</button>
                        <button type="button" class="btn btn-primary btn-custom"
                            onclick="proximaEtapa(3)">Próximo</button>
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
                                <p>Sexo:</p>
                                <select class="selecionar" name="pet_sexo" id="sexo">
                                    <option value="Macho">Macho</option>
                                    <option value="Fêmea">Fêmea</option>
                                </select>
                                <p>Nome:</p>
                                <input type="text" maxlength="255" placeholder="Nome do Pet"
                                    class="form-control frm-ctrl" name="pet_nome">
                                <p>Idade:</p>
                                <input type="number" maxlength="2" placeholder="Idade do Pet"
                                    class="form-control frm-ctrl" name="pet_idade">
                            </div>

                            <div class="col">
                                <p>Raça:</p>
                                <input type="text" placeholder="Raça" maxlength="255" class="form-control frm-ctrl"
                                    name="pet_raca">
                                <p>Seu pet é castrado?</p>
                                <select class="selecionar" name="pet_castracao" id="castracao">
                                    <option value="Sim">Sim</option>
                                    <option value="Não">Não</option>
                                </select>
                                <p>Qual o porte do seu Pet?</p>
                                <select class="selecionar" name="pet_porte" id="porte">
                                    <option value="Pequeno">Pequeno</option>
                                    <option value="Médio">Médio</option>
                                    <option value="Grande">Grande</option>
                                </select>
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
                        <button type="submit" class="btn btn-primary btn-custom">Enviar</button>
                    </div>
                </div>


            </form>
        </div>
    </div>
    <script>

    </script>
    <script src="../js/cadastro.js"></script>
</body>

</html>