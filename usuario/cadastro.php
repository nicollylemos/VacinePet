<?php
$error_email = ''; // Variável para armazenar o erro do e-mail

if (isset($_POST['submit'])) {
    include_once('../config.php');

    // Verifica se os campos obrigatórios estão preenchidos
    $required_fields = [
        'tutor_nome',
        'tutor_datanasc',
        'tutor_cpf',
        'tutor_telefone',
        'tutor_email',
        'tutor_senha',
        'end_rua',
        'end_numero',
        'end_bairro',
        'end_cep',
        'end_cidade',
        'pet_nome',
        'pet_sexo',
        'pet_idade',
        'pet_castracao',
        'pet_porte',
        'pet_especie'
    ];

    $missing_fields = [];

    foreach ($required_fields as $field) {
        if (empty($_POST[$field])) {
            $missing_fields[] = $field;
        }
    }

    if (!empty($missing_fields)) {
        echo "Por favor, preencha todos os campos obrigatórios: ";
    } else {
        // Obtém os dados do formulário
        $nome = $_POST['tutor_nome'];
        $datanasc = $_POST['tutor_datanasc'];
        $cpf = $_POST['tutor_cpf'];
        $telefone = $_POST['tutor_telefone'];
        $email = $_POST['tutor_email'];
        $senha = password_hash($_POST['tutor_senha'], PASSWORD_DEFAULT);

        // Verifica se o e-mail já está cadastrado
        $query_email = "SELECT * FROM tutor WHERE email = '$email'";
        $result_email = mysqli_query($conexao, $query_email);

        if (mysqli_num_rows($result_email) > 0) {
            $error_email = "O e-mail já está cadastrado. Por favor, utilize outro e-mail.";
        } else {
            // Insere os dados do tutor
            $result = mysqli_query($conexao, "INSERT INTO tutor(nome, cpf, datanasc, telefone, email, senha) VALUES ('$nome', '$cpf', '$datanasc', '$telefone', '$email', '$senha')");

            if ($result) {
                // Obter o ID do tutor inserido
                $cod_tutor = mysqli_insert_id($conexao);

                // Insere o endereço
                $rua = $_POST['end_rua'];
                $numero = $_POST['end_numero'];
                $complemento = $_POST['end_complemento'] ?? null;
                $bairro = $_POST['end_bairro'];
                $cep = $_POST['end_cep'];
                $cidade = $_POST['end_cidade'];

                $result_endereco = mysqli_query($conexao, "INSERT INTO endereco(rua, numero, complemento, bairro, cep, cidade, cod_tutor) VALUES ('$rua', '$numero', '$complemento', '$bairro', '$cep', '$cidade', '$cod_tutor')");

                // Insere os dados do pet
                $nome_pet = $_POST['pet_nome'];
                $sexo = $_POST['pet_sexo'];
                $idade = $_POST['pet_idade'];
                $castracao = $_POST['pet_castracao'];
                $porte = $_POST['pet_porte'];
                $especie = $_POST['pet_especie'];
                $historico = $_POST['pet_historico'] ?? null;
                $raca = $_POST['pet_raca'];

                $result_pet = mysqli_query($conexao, "INSERT INTO pet(nome_pet, sexo, idade, castracao, porte, especie, historico, raca, cod_tutor) VALUES ('$nome_pet', '$sexo', '$idade', '$castracao', '$porte', '$especie', '$historico', '$raca', '$cod_tutor')");

                if ($result && $result_endereco && $result_pet) {
                    // Se tudo der certo, redireciona
                    header("Location: ../inc/login.php");
                    exit;
                } else {
                    echo "Erro ao salvar no banco de dados.";
                }
            }
        }

        // Fecha a conexão
        mysqli_close($conexao);
    }
}
?>



<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/css/cadastro.css">
    <link rel="stylesheet" href="../css/css/responsividade/telacadastra.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css">
    <title>VacinePet - Cadastro</title>
    <style>
        .hidden {
            display: none;
        }

        .error {
            border: 2px solid red;
        }

        .erro {
            border-color: red;
        }




        .text-danger {
            color: red;
            font-size: 14px;
        }
    </style>
    <title>Cadastro de Tutor</title>
</head>

<body>
    <div class="container">

        <!-- Modal para mensagens de erro -->
        <div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="errorModalLabel"
                            style="color: #FD811C; font-family: 'Baloo', sans-serif; font-size: 24px;">
                            Erro no Cadastro
                        </h5>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Por favor, preencha todos os campos obrigatórios e corretamente.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                            style="background-color: #52bacb; color: #fff;"
                            onmouseover="this.style.backgroundColor='#3a94a3';"
                            onmouseout="this.style.backgroundColor='#52bacb';">
                            Fechar
                        </button>

                    </div>
                </div>
            </div>
        </div>

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
            <form id="form" action="cadastro.php" method="POST" novalidate>
                <div id="etapa1" class="etapa">
                    <div class="title">
                        <h1 class="title-title">CADASTRO</h1>
                    </div>
                    <div class="sub-title">
                        <h5 class="sub-title-title sub1">Preencha o cadastro abaixo com suas informações pessoais.</h5>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control frm-ctrl required" oninput="nameValidate()"
                                name="tutor_nome" id="nome"
                                value="<?php echo isset($_POST['tutor_nome']) ? $_POST['tutor_nome'] : ''; ?>"
                                placeholder="Nome Completo">
                            <span class="span-required">Nome deve ter no mínimo 3 caracteres</span>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="date" class="form-control frm-ctrl required" name="tutor_datanasc"
                                id="datanasc" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control frm-ctrl required" name="tutor_cpf" id="cpf"
                                oninput="mascaraCPF(this)" placeholder="CPF" maxlength="14" autocomplete="off" required>

                        </div>
                        <div class="form-group col-md-6">
                            <input type="tel" class="form-control frm-ctrl required" name="tutor_telefone" id="telefone"
                                placeholder="(DDD) + Telefone" onkeyup="handlePhone(event)" maxlength="15">
                            <span class="span-required">Digite um número de telefone</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="email"
                                class="form-control frm-ctrl required <?php echo !empty($error_email) ? 'error' : ''; ?>"
                                name="tutor_email" id="email"
                                value="<?php echo isset($_POST['tutor_email']) ? $_POST['tutor_email'] : ''; ?>"
                                placeholder="Email">
                            <span class="span-required">Digite um email válido</span>
                            <?php if (!empty($error_email)): ?>
                                <span class="text-danger"><?php echo $error_email; ?></span>
                            <?php endif; ?>
                        </div>

                        <div class="form-group col-md-6">
                            <input type="password" class="form-control frm-ctrl required"
                                oninput="mainPasswordValidate()" name="tutor_senha" id="senha" placeholder="Senha">
                            <span class="span-required">Digite uma senha com no mínimo 8 caracteres</span>
                        </div>

                        <div class="div-botoess">
                            <button id="btn1" type="button" class="btn btn-primary btn-custom btn-cad"
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
                            <input type="text" class="form-control frm-ctrl required" name="end_cep" id="cep"
                                placeholder="CEP">
                            <span id="cep_error" style="color: red;"></span>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control frm-ctrl required" name="end_rua" id="rua"
                                placeholder="Rua" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="number" class="form-control frm-ctrl required" name="end_numero" id="numero"
                                placeholder="Número" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control frm-ctrl" name="end_complemento" id="complemento"
                                placeholder="Complemento" maxlength="50">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control frm-ctrl required" name="end_bairro" id="bairro"
                                placeholder="Bairro" required>
                        </div>
                        <div class="form-group col-md-6">
                            <select class="form-control frm-ctrl required" name="end_cidade" id="cidade" required>
                                <option value="" disabled selected>Selecione a cidade </option>
                                <option value="Sorocaba">Sorocaba</option>
                                <option value="Votorantim">Votorantim</option>
                                <option value="Caçapava">Caçapava</option>
                                <option value="Taubaté">Taubaté</option>
                            </select>
                        </div>

                        <div class="div-botoes">
                            <button id="btn2-ant" type="button" class="btn btn-secondary btn-custom btn-perso"
                                onclick="anteriorEtapa(1)">Anterior</button>
                            <button id="btn2-prox" type="button" class="btn btn-primary btn-custom"
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
                        <h5 id="sub" class="sub-title-title">Preencha com as informações do seu pet.</h5>
                    </div>

                    <div class="radio">
                        <div class="row">
                            <div class="col">

                                <select class="form-control frm-ctrl required" name="pet_especie" id="especie" required>
                                    <option value="" disabled selected>Selecione a espécie</option>
                                    <option value="Gato">Gato</option>
                                    <option value="Cachorro">Cachorro</option>
                                </select>

                                <select class="form-control frm-ctrl required" name="pet_sexo" id="sexo" required>
                                    <option value="" disabled selected> Selecione o sexo </option>
                                    <option value="Macho">Macho</option>
                                    <option value="Fêmea">Fêmea</option>
                                </select>

                                <select class="form-control frm-ctrl required" name="pet_castracao" id="castracao"
                                    required>
                                    <option value="" disabled selected>Seu pet é castrado?</option>
                                    <option value="Sim">Sim</option>
                                    <option value="Não">Não</option>
                                </select>

                                <select class="form-control frm-ctrl required" name="pet_porte" id="porte" required>
                                    <option value="" disabled selected>Qual o porte do seu Pet?</option>
                                    <option value="Pequeno">Pequeno</option>
                                    <option value="Médio">Médio</option>
                                    <option value="Grande">Grande</option>
                                </select>
                            </div>

                            <div class="col">
                                <input type="text" maxlength="255" placeholder="Nome do Pet"
                                    class="form-control frm-ctrl required" name="pet_nome" id="nome_pet">
                                <input type="text" placeholder="Raça do Pet" maxlength="255"
                                    class="form-control frm-ctrl required" name="pet_raca" id="raca_pet">
                                <input type="number" maxlength="2" placeholder="Idade do Pet"
                                    class="form-control frm-ctrl required" name="pet_idade" id="idade_pet">

                            </div>
                        </div>
                    </div>


                    <div class="div-botoes">
                        <button type="button" id="btn3-ant" class="btn btn-secondary btn-custom btn-perso"
                            onclick="anteriorEtapa(2)">Anterior</button>
                        <button type="button" id="btn3-prox" class="btn btn-primary btn-custom"
                            onclick="proximaEtapa(4)">Próximo</button>
                    </div>
                </div>

                <!-- Informações pet 2 -->
                <div id="etapa4" class="etapa hidden">
                    <div class="title">
                        <h1 class="title-title">CADASTRO</h1>
                    </div>
                    <div class="sub-title">
                        <h5 id="sub2" class="sub-title-title">Preencha com as informações do seu pet.</h5>
                    </div>
                    <div class="form-group mt-4 col-md-6" style="width: 530px;">
                        <textarea
                            placeholder="Em caso de necessidade, adicione informações relevantes sobre o pet que podem ser úteis para a veterinária, como histórico de saúde, alergias ou comportamento."
                            class="form-control add" name="pet_historico" style="height: 150px;"></textarea>
                    </div>


                    <div class="div-botoes">
                        <button id="btn4-ant" type="button" class="btn btn-secondary btn-custom btn-perso"
                            onclick="anteriorEtapa(3)">Anterior</button>
                        <input id="btn4-prox" type="submit" name="submit" class="btn btn-secondary btn-custom btn-perso"
                            value="Cadastrar">
                    </div>
                </div>


            </form>
</body>

<script>
    // Função de validação ao submeter o formulário
    document.getElementById('form').onsubmit = function (event) {
        const requiredFields = document.querySelectorAll('.required');
        let isValid = true;

        // Checa cada campo obrigatório
        requiredFields.forEach(field => {
            if (!field.value) {
                field.classList.add('error'); // Adiciona a classe error (borda vermelha)
                isValid = false;
            } else {
                field.classList.remove('error');
            }
        });

        // Se houver campos não preenchidos, exibe o modal e cancela o envio
        if (!isValid) {
            event.preventDefault(); // Impede o envio do formulário
            var modal = new bootstrap.Modal(document.getElementById('errorModal'), {
                backdrop: false // Desativa o fundo escurecido
            });
            modal.show();
        }

    };
</script>

<script>
    // Função para validar o CEP
document.getElementById('cep').addEventListener('blur', function() {
    var cepInput = this.value.replace(/\D/g, ''); // Remove caracteres não numéricos
    if (cepInput.length === 8) { // Verifica se o CEP tem 8 dígitos
        fetch(`https://viacep.com.br/ws/${cepInput}/json/`)
            .then(response => response.json())
            .then(data => {
                if (data.erro) {
                    this.classList.add("erro"); // Adiciona a classe de erro
                    alert("CEP inválido! Verifique e tente novamente.");
                } else {
                    this.classList.remove("erro"); // Remove a classe de erro
                    // Aqui você pode preencher outros campos automaticamente se desejar
                    document.getElementById('rua').value = data.logradouro;
                    document.getElementById('bairro').value = data.bairro;
                    document.getElementById('cidade').value = data.localidade;
                    // Adicione mais campos se necessário
                }
            })
            .catch(error => {
                console.error('Erro ao validar o CEP:', error);
                alert("Erro ao validar o CEP. Tente novamente mais tarde.");
            });
    } else {
        alert("Por favor, insira um CEP válido com 8 dígitos.");
    }
});

</script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    /Validação dos campos/

    const form = document.getElementById('form');
    const campos = document.querySelectorAll('.required');
    const spans = document.querySelectorAll('.span-required');
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;






    /Funções para aparecer e sumir o erro/

    function setError(index) {
        campos[index].style.border = '2px solid red';
        spans[index].style.display = 'block';
    }

    function removeError(index) {
        campos[index].style.border = '';
        spans[index].style.display = 'none';
    }
    /Validação do nome/

    function nameValidate() {
        if (campos[0].value.length < 3) {

            setError(0);
        } else {
            removeError(0)

        }
    }

    /Validação do email/

    function emailValidate() {
        if (!emailRegex.test(campos[2].value)) {
            setError(2);
        } else {
            removeError(2);
        }
    }

    /Validação de senha/

    function mainPasswordValidate() {
        const senha = document.getElementById('senha');
        const senhaSpan = document.querySelector(
            '#senha + .span-required'); // Seleciona o span que vem logo após o campo senha

        if (senha.value.length < 8) {
            senha.style.border = '2px solid red';
            senhaSpan.style.display = 'block';
        } else {
            senha.style.border = '';
            senhaSpan.style.display = 'none';
        }
    }
</script>



<script src="../js/cadastrar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>

<script>
    // Função para aplicar a máscara do CPF enquanto o usuário digita
    function mascaraCPF(cpf) {
        // Remove tudo que não é dígito
        cpf.value = cpf.value.replace(/\D/g, "");

        // Aplica a máscara com pontos e traço
        cpf.value = cpf.value.replace(/(\d{3})(\d)/, "$1.$2");
        cpf.value = cpf.value.replace(/(\d{3})(\d)/, "$1.$2");
        cpf.value = cpf.value.replace(/(\d{3})(\d{1,2})$/, "$1-$2");
    }

    // Função para validar o CPF, mantendo pontos e traços
    function validarCPF(cpf) {
        // Mantém os pontos e traço para a exibição, mas retira para a validação
        var cpfSemMascara = cpf.replace(/[^\d]+/g, ''); // Remove pontos e traço

        // Validação básica de formato
        if (cpfSemMascara == '' || cpfSemMascara.length != 11 || /^(\d)\1+$/.test(cpfSemMascara)) {
            return false;
        }

        // Validação dos dígitos verificadores
        var soma = 0, resto;
        for (var i = 1; i <= 9; i++) soma += parseInt(cpfSemMascara.substring(i - 1, i)) * (11 - i);
        resto = (soma * 10) % 11;
        if ((resto == 10) || (resto == 11)) resto = 0;
        if (resto != parseInt(cpfSemMascara.substring(9, 10))) return false;

        soma = 0;
        for (var i = 1; i <= 10; i++) soma += parseInt(cpfSemMascara.substring(i - 1, i)) * (12 - i);
        resto = (soma * 10) % 11;
        if ((resto == 10) || (resto == 11)) resto = 0;
        if (resto != parseInt(cpfSemMascara.substring(10, 11))) return false;

        return true;
    }

    // Aplicação da validação ao perder o foco (blur)
    document.getElementById("cpf").addEventListener("blur", function () {
        var cpfInput = this;
        if (!validarCPF(cpfInput.value)) {
            cpfInput.classList.add("erro");
            alert("CPF inválido! Verifique e tente novamente.");
        } else {
            cpfInput.classList.remove("erro");
        }
    });

</script>
</script>
<script>
    $('#cep').mask('00000-000');
    $('#telefone').mask('(00) 00000-0000');
    $('#money').mask("#.##0,00", {
        reverse: true
    });
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const requiredFields = document.querySelectorAll('.required');

    requiredFields.forEach((field, index) => {
        field.addEventListener('keydown', function (event) {
            if (event.key === 'Enter') {
                event.preventDefault(); // Impede o envio do formulário
                // Muda o foco para o próximo campo
                if (index < requiredFields.length - 1) {
                    requiredFields[index + 1].focus();
                }
            }
        });
    });
});
</script>




</html>