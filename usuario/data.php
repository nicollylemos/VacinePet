<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/VacinePet/config.php');

// Verifica se um mês e ano foram enviados via POST, senão usa os valores padrão
$mes = isset($_POST['mes']) ? $_POST['mes'] : date('m'); // Mês atual se não enviado
$ano = isset($_POST['ano']) ? $_POST['ano'] : date('Y'); // Ano atual se não enviado

// Array com os meses em português
$meses = [
    1 => 'Janeiro', 2 => 'Fevereiro', 3 => 'Março', 4 => 'Abril',
    5 => 'Maio', 6 => 'Junho', 7 => 'Julho', 8 => 'Agosto',
    9 => 'Setembro', 10 => 'Outubro', 11 => 'Novembro', 12 => 'Dezembro'
];

// Formulário para selecionar mês e ano
echo "<h2>Selecione o Mês e o Ano</h2>";
echo "<form action='' method='POST'>";
echo "<label for='mes'>Mês:</label>";
echo "<select name='mes'>";
foreach ($meses as $num => $nome) {
    $selected = ($num == $mes) ? "selected" : "";
    echo "<option value='$num' $selected>$nome</option>";
}
echo "</select>";

echo "<label for='ano'>Ano:</label>";
echo "<select name='ano'>";
for ($i = date('Y'); $i <= date('Y') + 2; $i++) { // Exibe o ano atual e mais dois anos
    $selected = ($i == $ano) ? "selected" : "";
    echo "<option value='$i' $selected>$i</option>";
}
echo "</select>";

echo "<input type='submit' value='Verificar Disponibilidade'>";
echo "</form>";

// Função para retornar o nome do dia da semana em português
function diaSemana($numeroDia) {
    $diasSemana = ['Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado'];
    return $diasSemana[$numeroDia];
}

// Se o mês e o ano forem selecionados, exibe os dias e horários disponíveis
if (isset($_POST['mes']) && isset($_POST['ano'])) {
    // Pega o número total de dias no mês
    $diasNoMes = cal_days_in_month(CAL_GREGORIAN, $mes, $ano);

    // Exibe o formulário para seleção dos dias e horários disponíveis
    echo "<h2>Selecione os dias e horários disponíveis para " . $meses[$mes] . " de " . $ano . "</h2>";
    echo "<form action='' method='POST'>";
    echo "<table border='1'>";
    echo "<tr><th>Data</th><th>Dia da Semana</th><th>Horários Disponíveis</th><th>Selecionar</th></tr>";

    for ($dia = 1; $dia <= $diasNoMes; $dia++) {
        // Obtém o timestamp para o dia atual
        $timestamp = mktime(0, 0, 0, $mes, $dia, $ano);
        
        // Pega o número do dia da semana (0 = Domingo, 6 = Sábado)
        $numeroDiaSemana = date('w', $timestamp);
        
        // Pega o nome do dia da semana
        $nomeDiaSemana = diaSemana($numeroDiaSemana);
        
        // Exibe a linha com a data, o nome do dia da semana e a seleção de horários
        echo "<tr>";
        echo "<td>" . date('d/m/Y', $timestamp) . "</td>";
        echo "<td>" . $nomeDiaSemana . "</td>";
        echo "<td>";
        
        // Seleção de horários (você pode personalizar esses horários conforme a necessidade)
        echo "<label><input type='checkbox' name='horarios[" . date('Y-m-d', $timestamp) . "][]' value='08:00'> 08:00 </label><br>";
        echo "<label><input type='checkbox' name='horarios[" . date('Y-m-d', $timestamp) . "][]' value='10:00'> 10:00 </label><br>";
        echo "<label><input type='checkbox' name='horarios[" . date('Y-m-d', $timestamp) . "][]' value='14:00'> 14:00 </label><br>";
        echo "<label><input type='checkbox' name='horarios[" . date('Y-m-d', $timestamp) . "][]' value='16:00'> 16:00 </label><br>";
        
        echo "</td>";
        echo "<td><input type='checkbox' name='diasDisponiveis[]' value='" . date('Y-m-d', $timestamp) . "'></td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "<input type='submit' value='Cadastrar Dias Disponíveis'>";
    echo "</form>";
}

// Verifica se algum dia foi selecionado
if (isset($_POST['diasDisponiveis']) && isset($_POST['horarios'])) {
    $diasSelecionados = $_POST['diasDisponiveis'];
    $horariosSelecionados = $_POST['horarios'];

    // Prepara a inserção de dados no banco de dados
    $stmt = $conexao->prepare("INSERT INTO dias_disponiveis (data_disponivel, nome_dia_semana, horario_disponivel) VALUES (?, ?, ?)");

    // Percorre os dias selecionados e insere cada um no banco de dados com seus horários
    foreach ($diasSelecionados as $dia) {
        $timestamp = strtotime($dia);
        $nomeDiaSemana = diaSemana(date('w', $timestamp));

        if (isset($horariosSelecionados[$dia])) {
            foreach ($horariosSelecionados[$dia] as $horario) {
                $stmt->bind_param("sss", $dia, $nomeDiaSemana, $horario); // "sss" = três strings
                $stmt->execute();
            }
        }
    }

    echo "Dias e horários cadastrados com sucesso!";
} else {
    echo "Nenhum dia ou horário foi selecionado.";
}

// Fecha a conexão
$conexao->close();
?>