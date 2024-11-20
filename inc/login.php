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
    <link rel="icon" href="/VacinePet/imgs/logo-borda.png" type="image/x-icon">
    <title>Login</title>

    <style>
    #toggleSenha {
        font-size: 18px;
        color: #888;
    }

    #toggleSenha:hover {
        color: #000;
    }
    </style>
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


                    <div class="form-group mt-4">
                        <input type="text" maxlength="255" placeholder="Email" class="form-control" name="email">
                    </div>

                    <div class="form-group mt-4" style="position: relative;">
                        <input type="password" placeholder="Senha" class="form-control" name="senha" id="senha"
                            style="padding-right: 40px;">
                        <button type="button" id="toggleSenha"
                            style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); border: none; background: none; cursor: pointer;">
                            <i id="iconeOlho" class="fa fa-eye"></i>
                        </button>
                    </div>


                    <div class="final">
                        <div id="actions" class="mt-4">
                            <input type="submit" name="submit" class="btn btn-primary btn-custom" />
                        </div>
                        <div class="cad-text">
                            <h7>Não tem uma conta?</h7><a href="../usuario/cadastro.php"> Cadastre-se</a>
                        </div>
                        <?php
                        if (isset($_SESSION['login_erro'])) {
                            echo "<p style='color: red;'>" . $_SESSION['login_erro'] . "</p>";
                            // Remove a mensagem de erro para que não apareça novamente ao atualizar a página
                            unset($_SESSION['login_erro']);
                        }
                        if (isset($_SESSION['login_user'])) {
                            echo "<p style='color: red;'>" . $_SESSION['login_user'] . "</p>";
                            unset($_SESSION['login_user']);

                        }
                        ?>
                </form>
            </div>
        </div>
    </div>
</body>

<script>
const inputSenha = document.getElementById('senha');
const botaoToggle = document.getElementById('toggleSenha');
const iconeOlho = document.getElementById('iconeOlho');

botaoToggle.addEventListener('click', () => {
    // Alterna o tipo entre 'password' e 'text'
    const tipoAtual = inputSenha.getAttribute('type');
    inputSenha.setAttribute('type', tipoAtual === 'password' ? 'text' : 'password');

    // Alterna o ícone
    iconeOlho.classList.toggle('fa-eye');
    iconeOlho.classList.toggle('fa-eye-slash');
});
</script>


</html>