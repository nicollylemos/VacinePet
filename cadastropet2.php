<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/css/cadpet2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css">
    <title>Cadastro do Pet</title>
</head>
<body>
<div class="container">
    <div class="blue-div">
        <h4 class="title-blue-div1">Vacine Pet<i class="fa-solid fa-paw fa-rotate-by" style="color: white; --fa-rotate-angle: 49deg; width: 20px; height:20px; font-size:15px;"></i></h4>
        <h1 class="title-blue-div2">Bem-vindo,</h1>
        <h3 class="title-blue-div3">Agende a vacinação do seu pet com praticidade e segurança.<br> Cadastre-se agora!</h3>
        <div class="bola">
            <img src="css/css/img/dogcadpet.png" class="imagem" alt="Foto do Pet">
        </div>
    </div>

    <div class="form">
        <form action="cadastro.php" method="post">
            <div class="title">
                <h1 class="title-title">CADASTRO DO PET</h1>
            </div>
            <div class="sub-title">
                <h5 class="sub-title-title">Preencha o cadastro abaixo com as informações do seu pet.</h5>
            </div>
            
            <div class="form-group">
                <label class="label-info">Informações Adicionais:</label>
                <textarea id="msg" class="form-control" rows="3" placeholder="Utilize esse espaço para adicionar mais informações sobre o Pet"></textarea>
            </div>
            
            <div class="quad-blue">
            <div class="upload-section">
                <label for="file-upload" class="custom-file-upload">
                    <i id="anexo" class="fa fa-cloud-upload"></i> 
                    <div class="tab"></div>
                    <h3 class="anexo">Anexe aqui a foto do seu pet</h3>
                </label>
                <input id="file-upload" type="file" />
            </div>
            </div>

            <div class="final">
                <button type="submit" class="btn btn-custom">FINALIZAR</button>
            </div>

            <div class="hiper-final">
                <a class="hiper-final" href="index.php">Gostaria de cadastrar seu pet depois? Clique Aqui.</a>
            </div>
        </form> 
    </div>   
</div>
</body>
</html>
