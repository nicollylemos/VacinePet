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

  // Consulta SQL para obter o cod_tutor com base no e-mail do tutor logado
$logado     = $_SESSION['email'];
$queryTutor = "SELECT cod_tutor FROM tutor WHERE email = ?";
$stmtTutor  = $conexao->prepare($queryTutor);
$stmtTutor->bind_param('s', $logado);
$stmtTutor->execute();
$resultTutor = $stmtTutor->get_result();

  // Verifica se o tutor foi encontrado
if ($resultTutor->num_rows > 0) {
    $rowTutor  = $resultTutor->fetch_assoc();
    $cod_tutor = $rowTutor['cod_tutor'];       // Pega o cod_tutor
} else {
    echo "Tutor não encontrado.";
    exit;
}

  // Consulta os pets do tutor
$queryPets = "SELECT cod_pet, nome_pet FROM pet WHERE cod_tutor = ?";
$stmtPets  = $conexao->prepare($queryPets);
$stmtPets->bind_param('i', $cod_tutor);
$stmtPets->execute();
$resultPets = $stmtPets->get_result();

  // Array com os meses em português
$meses = [
    1 => 'Janeiro',  2  => 'Fevereiro', 3  => 'Março',    4  => 'Abril',
    5 => 'Maio',     6  => 'Junho',     7  => 'Julho',    8  => 'Agosto',
    9 => 'Setembro', 10 => 'Outubro',   11 => 'Novembro', 12 => 'Dezembro'
];

                                                          // Verifica se o mês e ano foram enviados via POST, senão usa os valores padrão
$mes = isset($_POST['mes']) ? $_POST['mes'] : date('m');  // Mês atual se não enviado
$ano = isset($_POST['ano']) ? $_POST['ano'] : date('Y');  // Ano atual se não enviado
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=10, minimum-scale=1.0">
    <title>Agendamento</title>
    <link rel="stylesheet" href="../css/css/agenEstilo.css">
    <link rel="stylesheet" href="../css/css/responsividade/telaagenda.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css">

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

</head>

<body>
    <div class="container">
        <div id="blue-div" class="blue-div">
            <h2 class="logo">VacinePet <i class="fa-solid fa-paw fa-rotate-by"
                    style="color: #fffff; --fa-rotate-angle: 49deg; width: 13px; height:7px; font-size:15px;"></i></h2>
        </div>
        <div class="quad">
            <div class="form">

                <h1>AGENDAMENTO</h1>
                <form action="" method="POST">
                    <div class="form-inline">
                        <label for="mes">Selecione o Mês:</label>

                        <select name="mes" id="mes">
                            <?php
            // Exibe os meses para o usuário escolher
            foreach ($meses as $numero => $nome) {
                $selected = ($numero == $mes) ? "selected" : "";
                echo "<option value='$numero' $selected>$nome</option>";
            }
            ?>
                        </select>

                        <label for="ano">Selecione o Ano:</label>
                        <select name="ano" id="ano">
                            <?php
            // Exibe os anos para o usuário escolher
            for ($i = date('Y'); $i <= date('Y') + 2; $i++) {
                $selected = ($i == $ano) ? "selected" : "";
                echo "<option value='$i' $selected>$i</option>";
            }
            ?>
                        </select>

                        <input type="submit" value="Verificar Disponibilidade">
                    </div>
                </form>


                <?php
                    if (isset($_POST['mes']) && isset($_POST['ano'])) {
                        // Consulta os horários disponíveis para o mês e ano selecionados
                        $query = "SELECT data_disponivel, nome_dia_semana, horario_disponivel 
                                FROM dias_disponiveis 
                                WHERE MONTH(data_disponivel) = ? AND YEAR(data_disponivel) = ?
                                ORDER BY data_disponivel, horario_disponivel";

                        $stmt = $conexao->prepare($query);
                        $stmt->bind_param('ii', $mes, $ano);
                        $stmt->execute();
                        $result = $stmt->get_result();

                        // Exibe os horários disponíveis
                        if ($result->num_rows > 0) {
                            echo "<form action='processar_agendamento.php' method='POST'>";
                            echo "<label for='pet'>Selecione o Pet:</label><br>";
                            echo "<select class='custom-select' name='pet' id='pet' required>";
                            while ($rowPet = $resultPets->fetch_assoc()) {
                                echo "<option value='" . $rowPet['cod_pet'] . "'>" . $rowPet['nome_pet'] . "</option>";
                            }
                            echo "</select><br><br>";
                            echo "<input type='hidden' name='situacao' value='Pendente'>";

                            echo "<label for='servico'>Selecione o Serviço:</label><br>";
                            echo "<select class='custom-select' name='servico' required>";
                            echo "<option value='Vacina'>Vacina</option>";
                            echo "<option value='Castração'>Castração</option>";
                            echo "</select><br><br>";

                            echo "<label for='agendamento'>Selecione a Data e Horário:</label><br>";
                            echo "<select name='agendamento' id='agendamento'  required>";
                            while ($row = $result->fetch_assoc()) {
                                $data          = date('d/m/Y', strtotime($row['data_disponivel']));
                                $nomeDiaSemana = $row['nome_dia_semana'];
                                $horario       = date('H:i', strtotime($row['horario_disponivel']));
                                echo "<option value='" . $row['data_disponivel'] . " " . $row['horario_disponivel'] . "'>";
                                echo "$data ($nomeDiaSemana) - $horario</option>";
                            }
                            echo "</select><br><br>";

                            echo "<input type='submit' value='Confirmar Agendamento'>";
                            echo "</form>";
                        } else {
                            echo "Não há horários disponíveis para o mês e ano selecionados.";
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</body>

</html>