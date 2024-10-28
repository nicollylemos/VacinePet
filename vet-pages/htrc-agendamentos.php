<?php
include("../inc/header.php");
include("sidebar-veterinaria.php");
include_once('../config.php');

// Verifica se o usuário está autenticado
if (!isset($_SESSION['email']) || !$_SESSION['senha_hash']) {
    echo '<script type="text/javascript">';
    echo 'window.location.href = "../inc/login.php";';
    echo '</script>';
    exit;
}

// Se o usuário não for o administrador, redireciona
if ($_SESSION['email'] !== 'lmonicagm@gmail.com') {
    echo '<script type="text/javascript">';
    echo 'window.location.href = "../index.php";';
    echo '</script>';
    exit;
}

// Variáveis para filtros de pesquisa
$mes = $_POST['mes'] ?? date('m');
$ano = $_POST['ano'] ?? date('Y');
$situacao = $_POST['situacao'] ?? '';

// Consulta SQL com filtros dinâmicos
$sql = "SELECT 
    agendamentos.id, 
    agendamentos.data_agendamento, 
    agendamentos.horario_agendamento, 
    agendamentos.servico,
    agendamentos.situacao,
    pet.Nome_Pet AS nome_pet, 
    pet.Especie AS especie_pet,  
    tutor.Nome AS nome_tutor
FROM 
    agendamentos
JOIN 
    tutor ON agendamentos.cod_tutor = tutor.Cod_Tutor
JOIN 
    pet ON agendamentos.cod_pet = pet.Cod_Pet
WHERE 
    MONTH(agendamentos.data_agendamento) = ? 
    AND YEAR(agendamentos.data_agendamento) = ?
    AND agendamentos.situacao NOT IN ('Pendente', 'Confirmado')";  // Filtra situações

// Adiciona o filtro de situação se selecionado
if (!empty($situacao)) {
    $sql .= " AND agendamentos.situacao = ?";
}

$sql .= " ORDER BY agendamentos.id";

$query = $conexao->prepare($sql);
if (!empty($situacao)) {
    $query->bind_param("iis", $mes, $ano, $situacao);
} else {
    $query->bind_param("ii", $mes, $ano);
}
$query->execute();
$result = $query->get_result();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/css/VetEst.css" />
    <link rel="stylesheet" href="../css/css/responsividade/telas-vetpages.css" />
    <title>VacinePet</title>
</head>

<body>
    <section class="agendamento-atv">
        <div class="container">
            <div class="container-tabela">
                <div class="content">
                    <h1>Histórico Agendamentos</h1>

                    <!-- Formulário de Filtro -->
                    <form class="form" method="POST">
                        <label for="mes">Mês:</label>
                        <select name="mes" id="mes">
                            <?php
                            $meses = [
                                1 => 'Janeiro', 2 => 'Fevereiro', 3 => 'Março', 4 => 'Abril', 
                                5 => 'Maio', 6 => 'Junho', 7 => 'Julho', 8 => 'Agosto', 
                                9 => 'Setembro', 10 => 'Outubro', 11 => 'Novembro', 12 => 'Dezembro'
                            ];
                            
                            foreach ($meses as $numero => $nome) {
                                $selected = ($numero == $mes) ? 'selected' : '';
                                echo "<option value='$numero' $selected>$nome</option>";
                            }
                            ?>
                        </select>

                        <label class="ano" for="ano">Ano:</label>
                        <select name="ano" id="ano">
                            <?php
                            for ($y = 2024; $y <= 2034; $y++) {
                                $selected = ($y == $ano) ? 'selected' : '';
                                echo "<option value='$y' $selected>$y</option>";
                            }
                            ?>
                        </select>

                        <label class="situ" for="situacao">Situação:</label>
                        <select name="situacao" id="situacao">
                            <option value="" <?= $situacao == '' ? 'selected' : '' ?>>Todas</option>
                            <option value="Cancelado" <?= $situacao == 'Cancelado' ? 'selected' : '' ?>>Cancelado
                            </option>
                            <option value="Concluído" <?= $situacao == 'Concluído' ? 'selected' : '' ?>>Concluído
                            </option>
                        </select>

                        <button id="btn-htrc" class="btn-busca" type="submit">Buscar</button>
                    </form>

                    <div class="table">
                        <table>
                            <tr>
                                <th>Agendamento</th>
                                <th>Data</th>
                                <th>Hora</th>
                                <th>Serviço</th>
                                <th>Pet</th>
                                <th>Tutor</th>
                                <th>Situação</th>
                            </tr>
                            <?php
                            if ($result->num_rows > 0) {
                                while ($agendamento = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . $agendamento['id'] . "</td>";
                                    echo "<td>" . date('d/m/Y', strtotime($agendamento['data_agendamento'])) . "</td>";
                                    echo "<td>" . date('H:i', strtotime($agendamento['horario_agendamento'])) . "</td>";
                                    echo "<td>" . $agendamento['servico'] . "</td>";
                                    echo "<td>" . $agendamento['nome_pet'] . "</td>"; 
                                    echo "<td>" . $agendamento['nome_tutor'] . "</td>";
                                    echo "<td>" . $agendamento['situacao'] . "</td>"; 
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='7'>Não há registro de atendimentos.</td></tr>";
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>