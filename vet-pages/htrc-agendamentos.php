<?php 
 include("../inc/header.php");
 include("sidebar-vet.php");
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
    <link rel="stylesheet" href="../css/css/vetdrmoni.css" />
    <title>VacinePet</title>
</head>

<body>
    <section class="agendamento-atv">
        <div class="container">
            <div class="container-tabela">
                <div class="content">
                    <h1> Histórico de Agendamentos</h1>
                    <div class="table">
                        <table>
                            <tr>
                                <th>Agendamento</th>
                                <th>Data</th>
                                <th>Hora</th>
                                <th>Tutor</th>
                                <th>Pet</th>
                                <th>Situação</th>
                                <th>Visualizar</th>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>28/01/2025</td>
                                <td>16:00</td>
                                <td>Nicolly Lemos</td>
                                <td>Bagu Lemos</td>
                                <td>Pendente</td>
                                <td>
                                    <button onclick="modalView.showModal()"> <i class="fa-solid fa-eye"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>28/01/2024</td>
                                <td>16:00</td>
                                <td>Nicolly Lemos</td>
                                <td>Bagu
                                </td>
                                <td>Pendente</td>
                                <td>
                                    <button onclick="modalView.showModal()"> <i class="fa-solid fa-eye"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>28/01/2025</td>
                                <td>16:00</td>
                                <td>Nicolly Lemos</td>
                                <td>Bagu Lemos</td>
                                <td>Pendente</td>
                                <td>
                                    <button onclick="modalView.showModal()"> <i class="fa-solid fa-eye"></i></button>
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

</body>

</html>