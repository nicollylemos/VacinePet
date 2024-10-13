<?php
// Inicia a sessão
session_start();

// Conexão com o banco de dados
include_once($_SERVER['DOCUMENT_ROOT'] . '/VacinePet/config.php');

// Verifica se o usuário está logado
if (!isset($_SESSION['email']) || !isset($_SESSION['senha_hash'])) {
    echo "Usuário não está logado.";
    exit;
}

// Consulta para obter o código do tutor
$logado = $_SESSION['email'];
$queryTutor = "SELECT cod_tutor FROM tutor WHERE email = ?";
$stmtTutor = $conexao->prepare($queryTutor);
$stmtTutor->bind_param('s', $logado);
$stmtTutor->execute();
$resultTutor = $stmtTutor->get_result();
$rowTutor = $resultTutor->fetch_assoc();
$cod_tutor = $rowTutor['cod_tutor'];

// Dados do agendamento
$cod_pet = $_POST['pet'];
$servico = $_POST['servico'];
$dataHorarioSelecionado = $_POST['agendamento'];
list($data_agendamento, $horario_agendamento) = explode(" ", $dataHorarioSelecionado);

// Inserir o agendamento na tabela agendamentos
$queryAgendamento = "INSERT INTO agendamentos (cod_tutor, cod_pet, data_agendamento, horario_agendamento, servico) 
                     VALUES (?, ?, ?, ?, ?)";
$stmtAgendamento = $conexao->prepare($queryAgendamento);
$stmtAgendamento->bind_param('iisss', $cod_tutor, $cod_pet, $data_agendamento, $horario_agendamento, $servico);
$stmtAgendamento->execute();

// Remover o horário da tabela de dias_disponiveis
$queryExcluir = "DELETE FROM dias_disponiveis WHERE data_disponivel = ? AND horario_disponivel = ?";
$stmtExcluir = $conexao->prepare($queryExcluir);
$stmtExcluir->bind_param('ss', $data_agendamento, $horario_agendamento);
$stmtExcluir->execute();

// Definir uma variável para mostrar o modal
$modalShow = true;
?>

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
    }


    .modal-content {
        background-color: #fff;
        margin: 5% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        max-width: 500px;
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

    <?php if ($modalShow): ?>
    <div id="myModal" class="modal" style="display: block;">

        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Agendamento Confirmado!</h2>
            <p>O seu agendamento foi realizado com sucesso. Confira os detalhes:</p>
            <p><strong>Pet:</strong> <?= htmlspecialchars($_POST['pet']); ?></p>
            <p><strong>Serviço:</strong> <?= htmlspecialchars($_POST['servico']); ?></p>
            <p><strong>Data:</strong> <?= $data_agendamento; ?></p>
            <p><strong>Horário:</strong> <?= $horario_agendamento; ?></p>

            <button class="btn" onclick="window.location.href='cadastro.php';">Voltar para a Página Inicial</button>
        </div>
    </div>
    <?php endif; ?>

    <script>
    var modal = document.getElementById("myModal");


    var span = document.getElementsByClassName("close")[0];
    // Quando o usuário clica no <