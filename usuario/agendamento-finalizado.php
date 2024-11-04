<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento Confirmado</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css">
    <link rel="stylesheet" href="../css/css/agendamento-modal.css">
    <style>

    </style>
</head>

<body>


    <div id="myModal" class="modal" style="display: block;">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>AGENDAMENTO CONFIRMADO </h2>
            <p>Parabéns por priorizar a saúde do seu pet! Lembre-se de verificar se seus dados estão atualizados em seu
                perfil.</p>


            <button class="btn" onclick="window.location.href='../index.php';">Finalizar</button>

        </div>
    </div>


    <script>
    var modal = document.getElementById("myModal");
    var span = document.getElementsByClassName("close")[0];
    // Quando o usuário clica no "x", fecha o modal
    span.onclick = function() {
        modal.style.display = "none";
    }
    // Quando o usuário clica fora do modal, ele também é fechado
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>

</body>

</html>