<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/css/cadastropet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css">
    <title>Cadastro Pet</title>
</head>
<body>
<div class="container">
        <div class="blue-div">
            <h4 class="title-blue-div1">Vacine Pet<i class="fa-solid fa-paw fa-rotate-by" style="color: white; --fa-rotate-angle: 49deg; width: 20px; height:20px; font-size:15px;"></i></h4>
            <h1 class="title-blue-div2">Bem-vindo,</h1>
            <h3 class="title-blue-div3">Agende a vacinação do seu pet com praticidade e segurança. Cadastre-se agora!</h3>
            <div class="circle">
                <img src="path/to/dog-image.jpg" alt="Cachorro" class="dog-image">
            </div>
        </div>

        <div class="form">
            <form action="cadastro.php" method="post">
                <div class="title">
                    <h1>CADASTRO DO PET</h1>
                </div>
                <div class="sub-title">
                    <h5>Preencha o cadastro abaixo com as informações do seu pet.</h5>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <input type="text" maxlength="255" placeholder="Nome do Pet" class="form-control"
                            name="customer['name']">
                    </div>

                    <div class="form-group col-md-3">
                        <input type="text" maxlength="11" placeholder="Idade do Pet" class="form-control"
                            name="customer['cpf_cnpj']">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-5">
                        <input type="text" placeholder="Raça" maxlength="255" class="form-control"
                            name="customer['address']">
                    </div>

                    <div class="form-group col-md-3">
                        <input type="text" placeholder="Peso aproximado do Pet" maxlength="100" class="form-control"
                            name="customer['hood']">
                    </div>

                    <p></p>

                    <div class="form-control1" class="form-group col-md-3">
                        <p>Sexo:</p>
                        <input type="radio" id="sexo-m" value="Macho">
                        <label for="sexo-m">Macho</label><br>
                        <input type="radio" id="sexo-f" value="Fêmea">
                        <label for="sexo-f">Fêmea</label>
                    </div>
                        <p></p>
                    <div class="form-control1" class="form-group col-md-3">
                        <p>Qual o porte do seu Pet?</p>
                        <input type="radio" id="porte-p" value="Pequeno">
                        <label for="porte-p">Pequeno</label><br>
                        <input type="radio" id="porte-m" value="Médio">
                        <label for="porte-m">Médio</label><br>
                        <input type="radio" id="porte-g" value="Grande">
                        <label for="porte-g">Grande</label>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
