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

// Consulta o endereço do tutor logado
$sql_endereco = "SELECT Cep, Rua, Cidade, Bairro, Complemento, Numero 
                 FROM endereco 
                 WHERE Cod_Tutor = '$cod_tutor'";
$result_endereco = mysqli_query($conexao, $sql_endereco);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Tutor</title>
    <link rel="stylesheet" href="styles.css">
    <style>
    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: red;
        height: 350px;
    }

    .section {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: red;
    }

    .tutor {
        background-color: green;
    }

    .endereco {
        background-color: blue;
    }
    </style>
</head>

<body>
    <div class="container">
        <!-- Dados do Tutor -->
        <div class="section tutor">
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
            echo "<button>";
            echo"<i class='fa-solid fa-pen-to-square icon'></i>";
            echo"</button>";
            echo"</a>";
            ?>
            </div>
        </div>

        <!-- Endereço do Tutor -->
        <div class="section endereco">
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
            <?php endwhile; ?>
            <?php else: ?>
            <p>Endereço não cadastrado.</p>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>