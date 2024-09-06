<?php 
 include("../inc/header.php");
 include("sidebar-cliente.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="calendar, events, reminders, javascript, html, css, open source coding" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/css/tela-clientes.css" />
    <title>VacinePet</title>
</head>

<body>
    <section class="meu-perfil">
        <div class="container">
            <div class="infos-basica">
                <div class="infos-pessoais">
                    <h1>Meu Perfil</h1>
                    <p>Aqui você poderá editar suas informações básicas e profissionais.</p>
                    <div class="form-group mt-4">
                        <input id="form-control" type="text" maxlength="255" placeholder="Nome Completo"
                            class="form-control" id="nome" name="nome">
                    </div>
                    <div class="form-group mt-4">
                        <input id="form-control" type="email" maxlength="255" placeholder="Email" class="form-control"
                            id="email" name="email">
                    </div>
                    <div class="form-group mt-4">
                        <input id="form-control" type="text" maxlength="11" placeholder="Telefone" class="form-control"
                            id="telefone" name=" telefone">
                    </div>
                    <div class="form-group mt-4">
                        <input id="form-control" type="text" maxlength="11" placeholder="CPF" class="form-control"
                            name="cpf">
                    </div>
                </div>
                <div class="info-loc">
                    <div class="form-group mt-4">
                        <input id="form-control" type="text" maxlength="255" placeholder="Rua" class="form-control"
                            name="rua">
                    </div>
                    <div class="form-group mt-4">
                        <input id="form-control" type="text" maxlength="10" placeholder="Número" class="form-control"
                            name="numero">
                    </div>
                    <div class="form-group mt-4">
                        <input id="form-control" type="text" maxlength="255" placeholder="Complemento"
                            class="form-control" name="complemento">
                    </div>
                    <div class="form-group mt-4">
                        <input id="form-control" type="text" maxlength="255" placeholder="Bloco (Apto.)"
                            class="form-control" name="bloco">
                    </div>

                </div>
            </div>
        </div>
    </section>

</body>

</html>