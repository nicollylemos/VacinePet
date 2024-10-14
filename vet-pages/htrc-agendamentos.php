<?php
include("../inc/header.php");
include("sidebar-vet.php");

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

// Se chegou aqui, o usuário é o administrador e está autenticado
$logado = $_SESSION['email'];

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
    agendamentos.situacao NOT IN ('Pendente', 'Confirmado')  -- Filtra situações Cancelado e Concluído
ORDER BY 
    agendamentos.id;";

$result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="calendar, events, reminders, javascript, html, css, open source coding" />
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
                    <h1> Histórico Agendamentos </h1>
                    <div class="table">
                        <table>
                            <tr>
                                <th>Agendamento</th>
                                <th>Data</th>
                                <th>Hora</th>
                                <th>Serviço</th>
                                <th>Pet</th>
                                <th>Tutor</th>
                                <th>Situação </th>
                            </tr>
                            <?php
                            while ($agendamento = mysqli_fetch_assoc($result)) {
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
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>