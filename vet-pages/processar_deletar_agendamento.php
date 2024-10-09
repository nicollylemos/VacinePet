<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/VacinePet/config.php');

if (isset($_POST['agendamentos'])) {
    $agendamentos = $_POST['agendamentos'];

    // Prepare a query para deletar os agendamentos
    $query = "DELETE FROM dias_disponiveis WHERE CONCAT(data_disponivel, ' ', horario_disponivel) IN (";
    $query .= implode(',', array_fill(0, count($agendamentos), '?')) . ")";

    $stmt = $conexao->prepare($query);

    // Bind dos parâmetros
    $types = str_repeat('s', count($agendamentos)); // 's' para string
    $stmt->bind_param($types, ...$agendamentos);

    // Executa a deleção
    if ($stmt->execute()) {
        echo "Agendamentos deletados com sucesso!";
    } else {
        echo "Erro ao deletar agendamentos.";
    }

    $stmt->close();
}

$conexao->close();
?>