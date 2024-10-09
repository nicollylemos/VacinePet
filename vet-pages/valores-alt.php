<?php 
 include("../inc/header.php");
 include("sidebar-vet.php");
session_start();
include_once('../config.php');

// Verifica se o email e a senha estão definidos na sessão
if (!isset($_SESSION['email']) || !isset($_SESSION['senha'])) {
    // Se não houver sessão, redireciona para a página de login
    header('Location: login.php');
    exit;
}

// Verifica se o email na sessão é diferente do permitido
if ($_SESSION['email'] !== 'lmonicagm@gmail.com') {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
    exit;
}

// Caso contrário, o usuário está autenticado e pode acessar a página
$logado = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<!--
    * @brief Cabeçalho HTML contendo informações de metadados e links para arquivos CSS externos.
    * @details Inclui links para a estilização da página, o ícone do site e bibliotecas externas como FontAwesome.
-->

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="calendar, events, reminders, javascript, html, css, open source coding" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/css/veterinarioo.css" />
    <title>VacinePet</title>
</head>

<body>
    <section class="agendamento-atv">
        <div class="container">
            <div class="container-tabela">
                <div class="content">
                    <h1> Alteração de Valores</h1>
                    <div class="valores">
                        <div class="container-valores vac-cat">
                            <div class="id">01</div>
                            <div>V4</div>
                            <div>Gato</div>
                            |
                            <div>149,99</div>
                            <button onclick="modalEdit.showModal()"> <i
                                    class="fa-solid fa-pen-to-square icon"></i></button>
                        </div>
                        <div class="container-valores vac-dog">
                            <div class="id">02</div>
                            <div>V8</div>
                            <div>Cachorro</div>
                            |
                            <div>149,99</div></button>
                            <button onclick="modalEdit.showModal()"> <i class="fa-solid fa-pen-to-square icone"></i>
                        </div>
                        <div class="container-valores vac-cat">
                            <div class="id">03</div>
                            <div>Antirrábic</div>
                            <div>Cachorro</div>
                            |
                            <div>149,99</div>
                            <button onclick="modalEdit.showModal()"> <i
                                    class="fa-solid fa-pen-to-square icon"></i></button>
                        </div>
                        <div class="container-valores vac-dog">
                            <div class="id">04</div>
                            <div>V8</div>
                            <div>Cachorro</div>
                            |
                            <div>149,99</div>
                            <button onclick="modalEdit.showModal()"> <i
                                    class="fa-solid fa-pen-to-square icone"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <dialog class="modal" id="modalEdit">
        <div class="modalEdit">
            <h1>Editar Valor</h1>
            <p>Valor atual:</p>
            <div>R$ 149,99</div>
            <p>Novo valor:</p>
            <input type="number" maxlength="5" placeholder="Novo Valor" class="form-control" name="valor">
        </div>
        <button class="save">Salvar</button>
        <button class="close" onclick=" modalEdit.close()">Fechar</button>
        </div>
    </dialog>

</body>

</html>