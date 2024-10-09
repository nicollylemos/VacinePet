<?php
include("../inc/header.php");
include("sidebar-vet.php");
// Verifica se o usuário está autenticado
if (!isset($_SESSION['email']) || !isset($_SESSION['senha'])) {
    echo '<script type="text/javascript">';
    echo 'window.location.href = "../inc/login.php";';
    echo '</script>';
    exit;
}

// Se o usuário não for o administrador, redireciona
if ($_SESSION['email'] !== 'lmonicagm@gmail.com') {
    echo '<script type="text/javascript">';
    echo 'window.location.href = "../index.php";';
    echo '</script>';
    exit;
}

// Se chegou aqui, o usuário é o administrador e está autenticado
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
                    <h1> Agendamentos Ativos</h1>
                    <div class="table">
                        <table>
                            <tr>
                                <th>Agendamento</th>
                                <th>Data</th>
                                <th>Hora</th>
                                <th>Tutor</th>
                                <th>Pet</th>
                                <th>Situação</th>
                                <th>...</th>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>28/01/2025</td>
                                <td>16:00</td>
                                <td>Nicolly Lemos</td>
                                <td>Bagu Lemos Raimundo Carvalho</td>
                                <td>Pendente</td>
                                <td>

                                    <!-- com variável -->
                                    <button onclick="modalView.showModal()"> <i class="fa-solid fa-eye"></i></button>
                                    <button onclick="modalCheck.showModal()"> <i class="fa-solid fa-check"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>28/01/2025</td>
                                <td>16:00</td>
                                <td>Nicolly Lemos</td>
                                <td>Bagu
                                </td>
                                <td>Pendente</td>
                                <td>
                                    <i class="fa-solid fa-eye"></i>
                                    <i class="fa-solid fa-check"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>28/01/2025</td>
                                <td>16:00</td>
                                <td>Nicolly Lemos da Silva Oliveira Santos Raimunda</td>
                                <td>Bagu Lemos</td>
                                <td>Pendente</td>
                                <td>
                                    <i class="fa-solid fa-eye"></i>
                                    <i class="fa-solid fa-check"></i>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <dialog class="modal" id="modalView">
        <h1>Visualizar</h1>
        <div class="infos">
            <div>
                <div class="tp-dados">Nome do Tutor:</div>
                <p>Nicolly Lemos</p>
            </div>
            <div>
                <div class="tp-dados">Nome do Pet:</div>
                <p>Bagu Lemos
                </p>
            </div>
            <div>
                <div class="tp-dados">Data do Atendimento:</div>
                <p>28/06/2024</p>
            </div>
            <div>
                <div class="tp-dados">Horário:</div>
                <p>16:00</p>
            </div>
            <div>
                <div class="tp-dados">Endereço:</div>
                <p>Rua Benedito de Almeida</p>
            </div>
            <div class="obv">
                <div class="obv-title">Observações:</div>
                <div class="txt">Ele é fofo e lindooo</div>
            </div>
        </div>
        <button class="close" onclick=" modalView.close()">Fechar</button>

    </dialog>
    <dialog class="modal" id="modalCheck">
        <div class="modalCheck">
            <h1>Alterar Situação</h1>
            <p>Este agendamento está atualmente pendente.</p>
            <div class="alt-situ">
                <select>
                    <option value="1">Finalizado</option>
                    <option value="2">Cancelado</option>
                </select>
            </div>
            <button class="save">Salvar</button>
            <button class="close" onclick=" modalCheck.close()">Fechar</button>
        </div>
    </dialog>
</body>

</html>