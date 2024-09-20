<!--
 /**
 * @file login.php
 * @brief Página de login de usuários cadastrados.
 *
 * Este arquivo contém o formulário de login. O usuário adiciona seu email e sua senha cadastrada 
 para acessar sua conta e seus dados.
 * 
 * @date 2024-09-20
 * @author Rafaela Mansano Fernandes
 * @version 1.0
 */
-->

<!DOCTYPE html>
<html lang="pt-br">
<!--
    * @brief Cabeçalho HTML contendo informações de metadados e links para arquivos CSS externos.
    * @details Inclui links para a estilização da página, o ícone do site e bibliotecas externas como FontAwesome.
-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=10, minimum-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/css/entrar.css">
    <link rel="stylesheet" href="../css/css/responsividade/telaentra.css">
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
                        <h1 class="title-login"> LOGIN </h1>
                    </div>

                    <div class="form-group mt-4">
                        <input type="text" maxlength="255" placeholder="Email" class="form-control"
                            name="customer['name']">
                    </div>

                    <div class="form-group mt-4">
                        <input type="password" maxlength="11" placeholder="Senha" class="form-control"
                            name="customer['cpf_cnpj']">
                    </div>

                    <div class="esquecer">
                        <a href="recuperar.php">Esqueceu sua senha?</a>
                    </div>

                    <div class="final">
                        <div id="actions" class="mt-4">
                            <button type="submit" class="btn btn-primary btn-custom">ENTRAR</button>
                        </div>
                        <div class="cad-text">
                            <h7>Não tem uma conta?</h7><a href="cadastro.php"> Cadastre-se</a>
                        </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>