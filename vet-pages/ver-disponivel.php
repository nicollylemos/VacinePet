<?php
include("../inc/header.php");
include("sidebar-veterinaria.php");
include_once($_SERVER['DOCUMENT_ROOT'] . '/VacinePet/config.php');

if ($_SESSION['email'] !== 'lmonicagm@gmail.com') {
    echo '<script type="text/javascript">';
    echo 'window.location.href = "../index.php";';
    echo '</script>';
    exit;
}



// Verifica se um mês e ano foram enviados via POST, senão usa os valores padrão
$mes = isset($_POST['mes']) ? $_POST['mes'] : date('m'); // Mês atual se não enviado
$ano = isset($_POST['ano']) ? $_POST['ano'] : date('Y'); // Ano atual se não enviado

// Array com os meses em português
$meses = [
    1 => 'Janeiro', 2 => 'Fevereiro', 3 => 'Março', 4 => 'Abril',
    5 => 'Maio', 6 => 'Junho', 7 => 'Julho', 8 => 'Agosto',
    9 => 'Setembro', 10 => 'Outubro', 11 => 'Novembro', 12 => 'Dezembro'
];
echo"  <link rel='stylesheet' href='../css/css/vetAtendimento.css' />";
echo "<div class='container'>";
// Formulário para selecionar mês e ano
echo "<h1>Atendimentos Disponíveis</h1>";
echo "<h2>Selecione o Mês e o Ano</h2>";
echo "<form action='' method='POST'>";
echo "<label for='mes'>Mês:</label>";
echo "<select class='selecionar' name='mes'>";
foreach ($meses as $num => $nome) {
    $selected = ($num == $mes) ? "selected" : "";
    echo "<option value='$num' $selected>$nome</option>";
}
echo "</select>";

echo "<label for='ano' style='margin-left: 20px;'>Ano:</label>";
echo "<select class='selecionar' name='ano'>";
for ($i = date('Y'); $i <= date('Y') + 10; $i++) { // Exibe o ano atual e mais dois
    $selected = ($i == $ano) ? "selected" : "";
    echo "<option value='$i' $selected>$i</option>";
}
echo "</select>";

echo "<input type='submit' style='margin-left: 20px;' class='cad-hora' value='Verificar Disponibilidade'>";
echo "</form>";

// Após a seleção, exibe os dias e horários disponíveis para o mês e ano escolhidos
if (isset($_POST['mes']) && isset($_POST['ano'])) {
    // Consulta os dias e horários disponíveis para o mês e ano selecionados
    $query = "SELECT data_disponivel, nome_dia_semana, horario_disponivel 
              FROM dias_disponiveis 
              WHERE MONTH(data_disponivel) = ? AND YEAR(data_disponivel) = ? 
              ORDER BY data_disponivel, horario_disponivel";

    $stmt = $conexao->prepare($query);
    $stmt->bind_param('ii', $mes, $ano);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verifica se há resultados
    if ($result->num_rows > 0) {
        echo "<h2>Horários disponíveis para " . $meses[$mes] . " de " . $ano . "</h2>";


        // Exibe os dias e horários disponíveis
        while ($row = $result->fetch_assoc()) {
            $data = date('d/m/Y', strtotime($row['data_disponivel']));
            $nomeDiaSemana = $row['nome_dia_semana'];
            $horario = date('H:i', strtotime($row['horario_disponivel']));

           
            echo $data . " (" . $nomeDiaSemana . ") - " . $horario . "<br>";
        }

        echo "<a href='gerencia-atend.php' class='ver-hora'><i class='fa-solid fa-arrow-left icon'></i>Voltar</a>";
        echo "</form>";
    } else {
        echo "Não há dias ou horários disponíveis para o mês selecionado.";
    }
echo"</div>";
    // Fecha a conexão
    $stmt->close();
    $conexao->close();
}
?>