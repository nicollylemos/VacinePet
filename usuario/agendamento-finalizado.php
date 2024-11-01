
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento Confirmado</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css">
    <style>
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        overflow: auto;
        padding-top: 60px;
     
        background-color: #52BACB;
    }

    .modal-content {
        background-color: #fff;
        margin: 5% auto;
        padding: 20px;
        border: none;
        width: 100%;
        max-width: 600px;
        border-radius:15px;
        height: 400px;
    }

    .modal-content h2{
        font-family:baloo;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    .btn {
        background-color: #fa5909;
        color: white;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
    }

    .btn:hover {
        background-color: #e85c00;
    }
    </style>
</head>

<body>

   
    <div id="myModal" class="modal" style="display: block;">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Agendamento Confirmado!</h2>
            <p>O seu agendamento foi realizado com sucesso. Confira os detalhes:</p>

            <button class="btn" onclick="window.location.href='../index.php';">Voltar para a Página Inicial</button>

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