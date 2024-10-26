<?php
include("../inc/header.php");
include("sidebar-vet.php");

// Verifica se o usuário está autenticado
if (!isset($_SESSION['email']) || !$_SESSION['senha_hash']) {
    echo '<script type="text/javascript">';
    echo 'window.location.href = "../inc/login.php";';
    echo '</script>';
}

// Se o usuário não for o administrador, redireciona
if ($_SESSION['email'] !== 'lmonicagm@gmail.com') {
    echo '<script type="text/javascript">';
    echo 'window.location.href = "../index.php";';
    echo '</script>';
}

// Se chegou aqui, o usuário é o administrador e está autenticado
$logado = $_SESSION['email'];

// Verifica se foram enviados parâmetros de mês e ano
$mes = isset($_GET['mes']) ? $_GET['mes'] : date('m'); // Padrão: mês atual
$ano = isset($_GET['ano']) ? $_GET['ano'] : date('Y'); // Padrão: ano atual

// Consulta SQL com filtro de mês e ano
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
    agendamentos.situacao NOT IN ('Cancelado', 'Concluído') 
    AND MONTH(agendamentos.data_agendamento) = ? 
    AND YEAR(agendamentos.data_agendamento) = ?
ORDER BY 
    agendamentos.data_agendamento;";

// Prepara a consulta
$stmt = $conexao->prepare($sql);
$stmt->bind_param("ii", $mes, $ano);
$stmt->execute();
$result = $stmt->get_result();
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

    <title>VacinePet</title>
</head>

<body>
    <section class="agendamento-atv">
        <div class="container">
            <div class="container-tabela">
                <div class="content">
                    <h1>Agendamentos Ativos</h1>

                    <!-- Formulário de filtro por mês e ano -->
                    <form method="GET" action="">
                        <label for="mes">Mês:</label>
                        <select name="mes" id="mes">
                            <?php 
                            $meses = [
                                1 => 'Janeiro', 2 => 'Fevereiro', 3 => 'Março', 4 => 'Abril',
                                5 => 'Maio', 6 => 'Junho', 7 => 'Julho', 8 => 'Agosto',
                                9 => 'Setembro', 10 => 'Outubro', 11 => 'Novembro', 12 => 'Dezembro'
                            ];
                            foreach ($meses as $numero => $nome): ?>
                            <option value="<?= $numero ?>" <?= $numero == $mes ? 'selected' : '' ?>>
                                <?= $nome ?>
                            </option>
                            <?php endforeach; ?>
                        </select>

                        <label for="ano">Ano:</label>
                        <select name="ano" id="ano">
                            <?php for ($i = 2024; $i <= date('Y') + 10; $i++): ?>
                            <!-- Exibe até 10 anos no futuro -->
                            <option value="<?= $i ?>" <?= $i == $ano ? 'selected' : '' ?>><?= $i ?></option>
                            <?php endfor; ?>
                        </select>

                        <button type="submit">Buscar</button>
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
                                <th>...</th>
                            </tr>

                            <?php
                            // Verifica se há resultados
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
                                    echo "<td>";
                                    echo "<a href='viewAgend.php?id=" . $agendamento['id'] . "'>";
                                    echo "<button>";
                                    echo "<i class='fa-solid fa-eye icon'></i>";
                                    echo "</button>";
                                    echo "</a>";
                                    echo "<a href='editAgend.php?id=" . $agendamento['id'] . "'>";
                                    echo "<button>";
                                    echo "<i class='fa-solid fa-edit icon'></i>";
                                    echo "</button>";
                                    echo "</a>";
                                    echo "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='8'>Não há atendimentos agendados para este mês.</td></tr>";
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