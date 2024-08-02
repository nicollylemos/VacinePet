<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/css/cadpet.css">
    <script src="steps.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css">
    <title>Cadastro Pet</title>
</head>
<body>
<div class="container">
    <div class="blue-div">
        <h4 class="title-blue-div1">Vacine Pet<i class="fa-solid fa-paw fa-rotate-by" style="color: white; --fa-rotate-angle: 49deg; width: 20px; height:20px; font-size:15px;"></i></h4>
        <h1 class="title-blue-div2">Bem-vindo,</h1>
        <h3 class="title-blue-div3">Agende a vacinação do seu pet com praticidade e segurança.<br> Cadastre-se agora!</h3>
        <div class="bola">
            <img src="css/css/img/dogcadpet.png" class="imagem" alt="Dog"/>
        </div>
    </div>

    <div class="form">
        <form action="cadastropet.php" method="post">
            <div class="title">
                <h1 class="title-title">CADASTRO DO PET</h1>
            </div>
            <div class="sub-title">
                <h5 class="sub-title-title">Preencha o cadastro abaixo com as informações do seu pet.</h5>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <input type="text" maxlength="255" placeholder="Nome do Pet" class="form-control" name="customer['name']">
                </div>
                <div class="col-md-6">
                    <div class="form-control1">
                        <p>Sexo:</p>
                        <div class="radio-group">
                            <input type="radio" id="sexo-m" name="sexo" value="Macho">
                            <label for="sexo-m">Macho</label>
                            <input type="radio" id="sexo-f" name="sexo" value="Fêmea">
                            <label for="sexo-f">Fêmea</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <input type="text" maxlength="11" placeholder="Idade do Pet" class="form-control" name="customer['cpf_cnpj']">
                </div>
                <div class="col-md-6">
                    <div class="form-control1">
                        <p>Seu pet é castrado?</p>
                        <div class="radio-group">
                            <input type="radio" id="sim" name="castrado" value="Sim">
                            <label for="sim">Sim</label>
                            <input type="radio" id="nao" name="castrado" value="Não">
                            <label for="nao">Não</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <input type="text" placeholder="Raça" maxlength="255" class="form-control" name="customer['address']">
                </div>
                <div class="col-md-6">
                    <div class="form-control1">
                        <p>Qual o porte do seu Pet?</p>
                        <div class="radio-group">
                            <input type="radio" id="porte-p" name="porte" value="Pequeno">
                            <label for="porte-p">Pequeno</label>
                            <input type="radio" id="porte-m" name="porte" value="Médio">
                            <label for="porte-m">Médio</label>
                            <input type="radio" id="porte-g" name="porte" value="Grande">
                            <label for="porte-g">Grande</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <input type="text" placeholder="Peso aproximado do Pet" maxlength="100" class="form-control" name="customer['hood']">
                </div>
            </div> 
        </form> 
        
    <div class="final">
        <div id="actions" class="mt-4">
            <button type="submit" class="btn btn- btn-custom">PRÓXIMO</button>
        </div>
    </div> 
    <div class="hiper-final">
        <a class="hiper-final" href="index.php">Gostaria de cadastrar seu pet depois? Clique Aqui.</a>
    </div>
    </div>   
</div>
<script src="js/cadastro.js"></script>
</body>
</html>
