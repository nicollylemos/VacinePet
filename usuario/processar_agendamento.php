<?php
// Inicia a sessão
session_start();

include_once($_SERVER['DOCUMENT_ROOT'] . '/VacinePet/config.php');

if (!isset($_SESSION['email']) || !isset($_SESSION['senha_hash'])) {
    echo "Usuário não está logado.";
    exit;
}

$logado = $_SESSION['email'];
$queryTutor = "SELECT cod_tutor FROM tutor WHERE email = ?";
$decTutor = $conexao->prepare($queryTutor);
$decTutor->bind_param('s', $logado);
$decTutor->execute();
$resultTutor = $decTutor->get_result();
$rowTutor = $resultTutor->fetch_assoc();
$cod_tutor = $rowTutor['cod_tutor'];

$situacao = $_POST['situacao'];
$cod_pet = $_POST['pet'];
$servico = $_POST['servico'];
$dataHorarioSelecionado = $_POST['agendamento'];
list($data_agendamento, $horario_agendamento) = explode(" ", $dataHorarioSelecionado);

$queryAgendamento = "INSERT INTO agendamentos (cod_tutor, cod_pet, data_agendamento, horario_agendamento, servico, situacao) 
                     VALUES (?, ?, ?, ?, ?, ?)";
$decAgendamento = $conexao->prepare($queryAgendamento);
$decAgendamento->bind_param('iissss', $cod_tutor, $cod_pet, $data_agendamento, $horario_agendamento, $servico, $situacao);
$decAgendamento->execute();

$queryExcluir = "DELETE FROM dias_disponiveis WHERE data_disponivel = ? AND horario_disponivel = ?";
$decExcluir = $conexao->prepare($queryExcluir);
$decExcluir->bind_param('ss', $data_agendamento, $horario_agendamento);
$decExcluir->execute();

$modalShow = true;
echo "<script>window.location.href = 'agendamento-finalizado.php';</script>";
exit;

?>
