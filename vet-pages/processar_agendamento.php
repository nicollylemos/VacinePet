<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/VacinePet/config.php');

// Verifica se os dados foram enviados
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data_agendamento = $_POST['agendamento']; // Data e horário selecionados
    list($data, $horario) = explode(" ", $data_agendamento); // Divide data e horário
    $servico = $_POST['servico'];
    $cod_tutor = $_POST['cod_tutor'];
    $cod_pet = $_POST['cod_pet'];

    // Insere o agendamento na tabela
    $query = "INSERT INTO agendamentos (data_agendamento, horario_agendamento, servico, cod_tutor, cod_pet) 
              VALUES (?, ?, ?, ?, ?)";
    
    $stmt = $conexao->prepare($query);
    $stmt->bind_param('ssssi', $data, $horario, $servico, $cod_tutor, $cod_pet);

    if ($stmt->execute()) {
        echo "Agendamento realizado com sucesso!";
        
        // Remove a data e horário selecionados da tabela dias_disponiveis
        $deleteQuery = "DELETE FROM dias_disponiveis WHERE data_disponivel = ? AND horario_disponivel = ?";
        $deleteStmt = $conexao->prepare($deleteQuery);
        $deleteStmt->bind_param('ss', $data, $horario);
        $deleteStmt->execute();
        $deleteStmt->close();
    } else {
        echo "Erro ao realizar o agendamento: " . $stmt->error;
    }

    // Fecha a conexão
    $stmt->close();
    $conexao->close();
}
?>