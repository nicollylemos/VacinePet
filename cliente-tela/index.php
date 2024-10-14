<?php 
include("../inc/header.php");
include("sidebar-cliente.php");
include_once('../config.php');

// Verifica se o email e a senha estão definidos na sessão
if (!isset($_SESSION['email']) || !isset($_SESSION['senha_hash'])) {
    echo 'window.location.href = "../inc/login.php";';
    echo '</script>';
    exit;
  
}

// Consulta o tutor logado
$email = $_SESSION['email'];
$query_tutor = "SELECT Cod_Tutor, Nome, CPF, Telefone, Email FROM tutor WHERE Email = '$email'";
$result_tutor = mysqli_query($conexao, $query_tutor);

if ($result_tutor && mysqli_num_rows($result_tutor) > 0) {
    $row_tutor = mysqli_fetch_assoc($result_tutor);
    $cod_tutor = $row_tutor['Cod_Tutor'];
    $nome_tutor = $row_tutor['Nome'];
    $cpf_tutor = $row_tutor['CPF'];
    $telefone_tutor = $row_tutor['Telefone'];
    $email_tutor = $row_tutor['Email'];
} else {
    echo "Tutor não encontrado.";
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

// Consulta o endereço do tutor logado
$sql_endereco = "SELECT Cod_End, Cep, Rua, Cidade, Bairro, Complemento, Numero 
                 FROM endereco 
                 WHERE Cod_Tutor = '$cod_tutor'";
$result_endereco = mysqli_query($conexao, $sql_endereco);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Agendamentos</title>
    <link rel="stylesheet" href="styles.css">
    <style>
    .container {
        max-width: 800px;
        margin: 0 auto;
    }

    .section {
        margin-bottom: 30px;
    }

    h2 {
        margin-top: 20px;
        margin-bottom: 10px;
    }

    .info {
        margin: 5px 0;
    }

    .info strong {
        display: inline-block;
        width: 150px;
    }

    .agendamento-item {
        display: flex;
        justify-content: space-between;
        margin: 10px 0;
    }

    .agendamento-item div {
        flex: 1;
    }
    </style>
</head>

<body>
    <div class="container">
        <!-- Dados do Tutor -->
        <div class="section">
            <h2>Dados do Tutor</h2>
            <div class="info">
                <strong>Nome:</strong> <?php echo $nome_tutor; ?>
            </div>
            <div class="info">
                <strong>CPF:</strong> <?php echo $cpf_tutor; ?>
            </div>
            <div class="info">
                <strong>Telefone:</strong> <?php echo $telefone_tutor; ?>
            </div>
            <div class="info">
                <strong>Email:</strong> <?php echo $email_tutor; ?>
            </div>
            <div class="info">
                <?php 
                echo "<a href='editTutor.php?cod_tutor=" . $cod_tutor . "'>";
                echo "Editar Tutor"; // Adicione o texto ou conteúdo desejado dentro do link
                echo "</a>";
                ?>


            </div>
        </div>

        <!-- Agendamentos -->
        <div class="section">
            <h2>Meus Agendamentos</h2>
            <?php if (mysqli_num_rows($result) > 0): ?>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <div class="agendamento-item">
                <div><strong>Pet:</strong> <?php echo $row['Nome_Pet']; ?></div>
                <div><strong>Data:</strong> <?php echo date('d/m/Y', strtotime($row['data_agendamento'])); ?></div>
                <div><strong>Hora:</strong> <?php echo $row['horario_agendamento']; ?></div>
                <div><strong>Serviço:</strong> <?php echo $row['servico']; ?></div>
                <div><strong>Situação:</strong> <?php echo $row['situacao']; ?></div>

            </div>
            <?php endwhile; ?>
            <?php else: ?>
            <p>Você ainda não realizou nenhum agendamento.</p>
            <?php endif; ?>
        </div>

        <!-- Endereço do Tutor -->
        <div class="section">
            <h2>Endereço Cadastrado</h2>
            <?php if (mysqli_num_rows($result_endereco) > 0): ?>
            <?php while ($row_end = mysqli_fetch_assoc($result_endereco)): ?>
            <div class="info">
                <strong>CEP:</strong> <?php echo $row_end['Cep']; ?>
            </div>
            <div class="info">
                <strong>Rua:</strong> <?php echo $row_end['Rua']; ?>
            </div>
            <div class="info">
                <strong>Cidade:</strong> <?php echo $row_end['Cidade']; ?>
            </div>
            <div class="info">
                <strong>Bairro:</strong> <?php echo $row_end['Bairro']; ?>
            </div>
            <div class="info">
                <strong>Complemento:</strong> <?php echo $row_end['Complemento']; ?>
            </div>
            <div class="info">
                <strong>Número:</strong> <?php echo $row_end['Numero']; ?>
            </div>
            <div class="info">
                <?php 
                echo "<a href='editEndereco.php?cod_tutor=" .$cod_tutor . "'>";
                echo "Editar Tutor"; // Adicione o texto ou conteúdo desejado dentro do link
                echo "</a>";
                ?>


            </div>
            <?php endwhile; ?>
            <?php else: ?>
            <p>Endereço não cadastrado.</p>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>