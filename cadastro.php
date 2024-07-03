<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <!-- Incluindo CSS do Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <!-- Incluindo seu arquivo de estilo personalizado -->
    <link rel="stylesheet" href="css/css/cadastro.css">
    <!-- Importando arquivo JavaScript -->
    <script src="js/cadastro.js" defer></script>
</head>

<body>
    <div class="container">
        <div class="blue-div">
            <h4>Vacine Pet</h4>
            <h1>Bem-vindo,</h1>
            <h3>Agende a vacinação do seu pet com praticidade e segurança. Cadastre-se agora!</h3>
        </div>

        <div class="quad">
            <div class="form">
                <form action="cadastro.php" method="post">
                    <div class="title">
                        <h1>CADASTRO</h1>
                    </div>
                    <div class="sub-title">
                        <h5>Preencha o cadastro abaixo com suas informações.</h5>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" maxlength="255" placeholder="Nome Completo" class="form-control"
                                name="customer['name']">
                        </div>

                        <div class="form-group col-md-3">
                            <input type="text" maxlength="11" placeholder="CPF" class="form-control"
                                name="customer['cpf_cnpj']">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="campo3">Data de Nascimento</label>
                            <input type="date" class="form-control" name="customer['birthdate']">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-5">
                            <input type="text" placeholder="DDD + Telefone" maxlength="255" class="form-control"
                                name="customer['address']">
                        </div>

                        <div class="form-group col-md-3">
                            <input type="text" placeholder="Email" maxlength="100" class="form-control"
                                name="customer['hood']">
                        </div>

                        <div class="form-group col-md-2">
                            <input type="text" maxlength="8" placeholder="Senha" class="form-control"
                                name="customer['zip_code']">
                        </div>

                        <div class="steps">
                            <span class="circle active">1</span>
                            <span class="circle">2</span>
                            <span class="circle">3</span>
                            <span class="circle">4</span>
                            <div class="progress-bar">
                                <span class="indicator"></span>
                            </div>

                            <div class="buttons">
                                <button id="prev" disabled>Prev</button>
                                <button id="next">Next</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
