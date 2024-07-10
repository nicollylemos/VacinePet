<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/css/agend.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css">
    <title>Agendamento</title>
</head>
<body>

<div class="container">
            <div class="blue-div">
                <h2 class="logo">VacinePet <i class="fa-solid fa-paw fa-rotate-by" style="color: #fffff; --fa-rotate-angle: 49deg; width: 13px; height:7px; font-size:15px;"></i></h2>
                <img src="imgs/cachorro-agend.png" class="imagem-animais">
            </div>

            

            <div class="quad">
                <div class="form">
                    <form action="login.php" method="post">

                        <div class="title">
                            <h1 class="title-agendamento"> AGENDAMENTO <i style="color: #fa5909; --fa-rotate-angle: 49deg;"></i></h1>
                            <h6 class="subtitle">Verifique as informações abaixo e altere em caso <br> de necessidade para prosseguir com o agendamento.</h6>
                        </div>
                        
                        <div class="form-group mt-4">
                            <input type="text" maxlength="255" placeholder="Nome Completo" class="form-control" name="customer['name']">
                        </div>
                        <div class="form-group mt-4">
                            <input type="text" maxlength="11" placeholder="Email" class="form-control" name="customer['cpf_cnpj']">
                        </div>
                        <div class="form-group mt-4">
                            <input type="text" maxlength="11" placeholder="Telefone" class="form-control" name="customer['cpf_cnpj']">
                        </div>

                       
                    </form>
                </div>
            </div>
        </div>
    
</body>
</html>