<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=10, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/css/entrar.css">
    <link rel="stylesheet" href="css/css/responsividade/telaentra.css">
    <meta name="viewport"
        content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=10, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css">
    <title>Login</title>
</head>

<body>

    <div class="container">
        <div class="yellow-div">
            <div class="cilindros cilindro1"></div>
            <div class="cilindros cilindro2"></div>
            <div class="cilindros cilindro3"></div>
            <div class="cilindros cilindro4"></div>
            <div class="cilindros cilindro5"></div>
        </div>

        <div class="quad">
            <div class="form">
                <form action="login.php" method="post">

                    <div class="title">
                        <h1 class="title-login"> LOGIN <i style="color: #fa5909; --fa-rotate-angle: 49deg;"></i></h1>
                    </div>

                    <div class="form-group mt-4">
                        <input type="text" maxlength="255" placeholder="Email" class="form-control"
                            name="customer['name']">
                    </div>

                    <div class="form-group mt-4">
                        <input type="password" maxlength="11" placeholder="Senha" class="form-control"
                            name="customer['cpf_cnpj']">
                    </div>

                    <a href="#" class="esquecer">Esqueceu sua senha?</a>

                    <div class="final">
                        <div id="actions" class="mt-4">
                            <button type="submit" class="btn btn-primary btn-custom">ENTRAR</button>
                    </div>
                        <div class="cad-text">
                            <h7>Não tem uma conta?</h7><a href="#" class="criar">Cadastre-se</a>
                        </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>