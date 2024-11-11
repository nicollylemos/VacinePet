<?php
include("../inc/header.php");
include("sidebar-veterinaria.php");

if ($_SESSION['email'] !== 'lmonicagm@gmail.com') {
    echo '<script type="text/javascript">';
    echo 'window.location.href = "../index.php";';
    echo '</script>';
}
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
    <link rel="stylesheet" href="../css/css/veterinarioo.css" />
    <link rel="stylesheet" href="../css/css/vetAdotar.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="calendar, events, reminders, javascript, html, css, open source coding" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="../css/css/responsividade/tela-vet-pages.css"/>
    <title>VacinePet</title>
</head>
<style>
    html,
    body {
        overflow-x: hidden;
        /* Esconde a rolagem horizontal */
    }

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

    .configuracao {
        position: relative;
        left: 180px;
        top: -1100px;
    }
    .title{
        color: #52BACB;
        font-family: baloo;
        font-size: 38px;
    }
</style>

<body>
    <section class="configuracao">
        <div id="container-sair" class="container">
            <h1 class="title"> Configuração</h1>
            <p>Deseja sair?</p>
            <a href="/VacinePet/inc/logout.php" class="logout">Sair</a>
        </div>
    </section>