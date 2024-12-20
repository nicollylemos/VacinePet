<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento Confirmado</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css">
    <link rel="stylesheet" href="../css/css/agendconcluir.css">
    <link rel="stylesheet" href="../css/css/responsividade/telaconfirmaagendamento.css" />
    <link rel="icon" href="/VacinePet/imgs/logo-borda.png" type="image/x-icon">
    <style>

    </style>
</head>

<body>


    <div id="myModal" class="modal" style="display: block;">
        <div class="modal-content">
            <span class="close">&times;</span>
            <i class="fa-solid fa-house-medical-circle-check"></i>
            <h2>Agendamento Concluído</h2>
            <p>Parabéns por priorizar a saúde do seu pet! Lembre-se de verificar se seus dados estão atualizados em seu
                perfil. Em caso de dúvidas, entre em contato com o suporte para mais informações.</p>


            <button class="btn" onclick="window.location.href='/VacinePet/cliente-tela/index.php';">Finalizar</button>

        </div>
    </div>


    <script>
    var modal = document.getElementById("myModal");
    var span = document.getElementsByClassName("close")[0];
    // Quando o usuário clica no "x", fecha o modal
    span.onclick = function() {
        window.location.href = "/VacinePet/cliente-tela/index.php";
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