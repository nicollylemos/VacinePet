<?php
include("../inc/header.php");
include("sidebar-veterinaria.php");
include_once($_SERVER['DOCUMENT_ROOT'] . '/VacinePet/config.php');

// Verificação de autenticação
if ($_SESSION['email'] !== 'lmonicagm@gmail.com') {
    echo '<script type="text/javascript">';
    echo 'window.location.href = "../index.php";';
    echo '</script>';
    exit;
}

// Array com os meses em português
$meses = [
    1 => 'Janeiro', 2 => 'Fevereiro', 3 => 'Março', 4 => 'Abril',
    5 => 'Maio', 6 => 'Junho', 7 => 'Julho', 8 => 'Agosto',
    9 => 'Setembro', 10 => 'Outubro', 11 => 'Novembro', 12 => 'Dezembro'
];

// Obtendo o mês atual
$mesAtual = date('n');

echo "<link rel='stylesheet' href='../css/css/vetAtendimento.css' />";
echo "<div class='container'>";
echo "<h1>Apagar Atendimentos</h1>";
echo "<h2>Selecione Mês e Ano:</h2>";
echo "<form action='' method='POST'>";
echo "<label for='mesDelete'>Mês: </label>";
echo "<select class='selecionar' name='mesDelete'>";
foreach ($meses as $num => $nome) {
    $selected = ($num == $mesAtual) ? "selected" : "";
    echo "<option value='$num' $selected>$nome</option>";
}
echo "</select>";

echo "<label for='anoDelete'> Ano: </label>";
echo "<select class='selecionar' name='anoDelete'>";
for ($i = date('Y'); $i <= date('Y') + 10; $i++) {
    echo "<option value='$i'>$i</option>";
}
echo "</select>";

echo "<input type='submit' class='add-hora' name='verAgendamentos' value='Buscar'>";
echo "</form>";

// Se o usuário clicar para ver agendamentos
if (isset($_POST['verAgendamentos'])) {
    $mesDelete = $_POST['mesDelete'];
    $anoDelete = $_POST['anoDelete'];

    $query = "SELECT data_disponivel, nome_dia_semana, horario_disponivel 
              FROM dias_disponiveis 
              WHERE MONTH(data_disponivel) = ? AND YEAR(data_disponivel) = ? 
              ORDER BY data_disponivel, horario_disponivel";

    $stmt = $conexao->prepare($query);
    $stmt->bind_param('ii', $mesDelete, $anoDelete);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<form action='processar_deletar_agendamento.php' method='POST' onsubmit='return validarSelecao()'>";
        echo "<h3>Selecione o agendamento para deletar:</h3>";

        while ($row = $result->fetch_assoc()) {
            $data = date('d/m/Y', strtotime($row['data_disponivel']));
            $nomeDiaSemana = $row['nome_dia_semana'];
            $horario = date('H:i', strtotime($row['horario_disponivel']));

            echo "<input type='checkbox' name='agendamentos[]' value='" . $row['data_disponivel'] . " " . $row['horario_disponivel'] . "'> ";
            echo $data . " (" . $nomeDiaSemana . ") - " . $horario . "<br>";
        }

        echo "<input type='submit' class='ver-hora' value='Deletar Agendamentos'>";
        echo "</form>";
    } else {
        echo "Não há agendamentos disponíveis para o mês selecionado.";
    }
    echo "</div>";
    
    $stmt->close();
    $conexao->close();
}
?>

<script type="text/javascript">
function validarSelecao() {
    const checkboxes = document.querySelectorAll("input[name='agendamentos[]']");
    let selecionado = false;

    checkboxes.forEach((checkbox) => {
        if (checkbox.checked) {
            selecionado = true;
        }
    });

    if (!selecionado) {
        alert("Por favor, selecione pelo menos um agendamento para deletar.");
    }

    return selecionado;
}
</script>