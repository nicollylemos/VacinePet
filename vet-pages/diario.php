<!--
 /**
 * @file diario.php
 * @brief Página de diario pessoal do profissional (calendário disponível).
 *
 * Este arquivo contém um calendário com a função de adicionar eventos e compromissos
  escolhidos pelo profissional, marcando o nome do evento, seu início e seu término.
 * @date 2024-09-20
 * @author Nicolly Lemos da Silva
 * @version 1.0
 */
-->
<?php
include("../inc/header.php");
include("sidebar-veterinaria.php");

if ($_SESSION['email'] !== 'lmonicagm@gmail.com') {
    echo '<script type="text/javascript">';
    echo 'window.location.href = "../index.php";';
    echo '</script>';
    exit;
}
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
    <link rel="stylesheet" href="../css/css/diariovetd.css" />

    <title>VacinePet</title>
</head>

<body>
    <section class="diario">
        <div id="container-diario" class="container">
            <div class="right">

                <div class="calendar">
                    <div class="month">
                        <i class="fas fa-angle-left prev"></i>
                        <div class="date"></div>
                        <i class="fas fa-angle-right next"></i>
                    </div>
                    <div class="weekdays">
                        <div>Dom</div>
                        <div>Seg</div>
                        <div>Ter</div>
                        <div>Qua</div>
                        <div>Qui</div>
                        <div>Sex</div>
                        <div>Sab</div>
                    </div>
                    <div class="days"></div>
                    <div class="goto-today">
                        <div class="goto">
                            <input type="text" placeholder="mm/yyyy" class="date-input" />
                            <button class="goto-btn">Buscar</button>
                        </div>
                        <button class="today-btn">Hoje</button>
                    </div>
                </div>
            </div>
            <div class="left">
                <div class="today-date">
                    <div class="event-day"></div>
                    <div class="event-date"></div>
                </div>
                <div class="events"></div>
                <div class="add-event-wrapper">
                    <div class="add-event-header">
                        <div class="title">Adicionar Evento</div>
                        <i class="fas fa-times close"></i>
                    </div>
                    <div class="add-event-body">
                        <div class="add-event-input">
                            <input type="text" placeholder="Nome Evento" class="event-name" />
                        </div>
                        <div class="add-event-input">
                            <input type="text" placeholder="Início" class="event-time-from" />
                        </div>
                        <div class="add-event-input">
                            <input type="text" placeholder="Término" class="event-time-to" />
                        </div>
                    </div>
                    <div class="add-event-footer">
                        <button class="add-event-btn">Adicionar</button>
                    </div>
                </div>
                <div class="btn-add">
                    <button class="add-event">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
            </div>

        </div>
    </section>

    <script src="../js/diary.js"></script>
</body>

</html>