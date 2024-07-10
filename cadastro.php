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
        <form action="cadastro.php" method="post">
            <div class="title">
                <h1 class="title-title">CADASTRO</h1>
            </div>
            <div class="sub-title">
                <h5 class="sub-title-title">Preencha o cadastro abaixo com suas informações.</h5>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <input type="text" maxlength="255" placeholder="Nome Completo" class="form-control" name="customer['name']">
                </div>
                <div class="form-group col-md-6">
                    <input type="text" maxlength="11" placeholder="CPF" class="form-control" name="customer['cpf_cnpj']">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <input type="date" placeholder="Data de Nascimento" maxlength="255" class="form-control" name="customer['address']">
                </div>
                <div class="form-group col-md-6">
                    <input type="text" placeholder="DDD + Telefone" maxlength="100" class="form-control" name="customer['hood']">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <input type="text" placeholder="Email" maxlength="255" class="form-control" name="customer['address']">
                </div>
                <div class="form-group col-md-6">
                    <input type="text" placeholder="Senha" maxlength="100" class="form-control" name="customer['hood']">
                </div>
            </div>
        </form> 
        
    <div class="final">
        <div id="actions" class="mt-4">
            <button type="submit" class="btn btn- btn-custom">FINALIZAR</button>
        </div>
    </div> 
    </div>   
</div>
</body>
</html>
