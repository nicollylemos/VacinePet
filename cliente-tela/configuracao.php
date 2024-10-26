<?php
include("../inc/header.php");
include("sidebar-cliente.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<!--
    * @brief Cabeçalho HTML contendo informações de metadados e links para arquivos CSS externos.
    * @details Inclui links para a estilização da página, o ícone do site e bibliotecas externas como FontAwesome.
-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="../css/css/EstiloUsuario.css">
    <link rel="stylesheet" href="../css/css/responsividade/tela-config.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="calendar, events, reminders, javascript, html, css, open source coding" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>VacinePet</title>
    <style>
    .logout {
        margin-top: 30px;
        padding: 5px;
        background-color: transparent;
        color: #f44336;
        border-radius: 8px;
        cursor: pointer;
        width: 150px;
        text-decoration: none;
        border: 3.5px solid #f44336;
        font-weight: 600;
        display: inline-block;
        /* Adiciona inline-block para permitir definir a largura */
        box-sizing: border-box;
        /* Garante que padding e borda sejam incluídos na largura */
        text-align: center;
        /* Centraliza o texto dentro do botão */
    }
    </style>
</head>

<body>

    <div class="container">
        <h1>Configuração</h1>
        <p>Deseja sair?</p><a href="/VacinePet/inc/logout.php" class="logout">Sair</a>
    </div>

</body>

</html>