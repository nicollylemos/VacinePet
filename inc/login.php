<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=10, minimum-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/css/entrar.css">
    <link rel="stylesheet" href="../css/css/responsividade/telaentra.css">
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
                <form method="POST" action="testLogin.php">
                    <div class="title">
                        <h1 class="title-login"> LOGIN </h1>
                    </div>

                    <?php
                        if (isset($_SESSION['login_erro'])) {
                            echo "<p style='color: red;'>" . $_SESSION['login_erro'] . "</p>";
                            // Remove a mensagem de erro para que não apareça novamente ao atualizar a página
                            unset($_SESSION['login_erro']);
                        }
                    ?>
                    <div class="form-group mt-4">
                        <input type="text" maxlength="255" placeholder="Email" class="form-control" name="email">
                    </div>

                    <div class="form-group mt-4">
                        <input type="password" maxlength="11" placeholder="Senha" class="form-control" name="senha">
                    </div>

                    <div class="esquecer">
                        <a href="recuperar.php">Esqueceu sua senha?</a>
                    </div>

                    <div class="final">
                        <div id="actions" class="mt-4">
                            <input type="submit" name="submit" class="btn btn-primary btn-custom" />
                        </div>
                        <div class="cad-text">
                            <h7>Não tem uma conta?</h7><a href="../usuario/cadastro.php"> Cadastre-se</a>
                        </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>