<?php 
include("../inc/header.php");
include("sidebar-cliente.php");
include_once('../config.php');

// Verifica se o email e a senha estão definidos na sessão
if (!isset($_SESSION['email']) || !isset($_SESSION['senha_hash'])) {
    // Se não houver sessão, redireciona para a página de login
    header('Location: login.php');
    exit;
}

// Consulta os agendamentos do tutor logado
$sql = "SELECT a.id, a.data_agendamento, a.horario_agendamento, a.servico, a.situacao, 
               p.Nome_Pet, p.Raca, p.Idade, p.Sexo, p.Especie, p.Castracao
        FROM agendamentos a
        JOIN pet p ON a.cod_pet = p.Cod_Pet
        WHERE a.cod_tutor = '$cod_tutor'
        ORDER BY a.data_agendamento DESC";

$result = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Agendamentos</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h1>Meus Agendamentos</h1>

        <?php if (mysqli_num_rows($result) > 0): ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Horário</th>
                    <th>Serviço</th>
                    <th>Pet</th>
                    <th>Raça</th>
                    <th>Idade</th>
                    <th>Sexo</th>
                    <th>Situação</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo date('d/m/Y', strtotime($row['data_agendamento'])); ?></td>
                    <td><?php echo $row['horario_agendamento']; ?></td>
                    <td><?php echo $row['servico']; ?></td>
                    <td><?php echo $row['Nome_Pet']; ?></td>
                    <td><?php echo $row['Raca']; ?></td>
                    <td><?php echo $row['Idade']; ?></td>
                    <td><?php echo $row['Sexo']; ?></td>
                    <td><?php echo $row['situacao']; ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <?php else: ?>
        <p>Você ainda não realizou nenhum agendamento.</p>
        <?php endif; ?>
    </div>
</body>

</html>