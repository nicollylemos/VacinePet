<?php 
include("../inc/header.php");
include("sidebar-cliente.php");
include_once('../config.php');

// Verifica se o email e a senha estão definidos na sessão
if (!isset($_SESSION['email']) || !isset($_SESSION['senha_hash'])) {
    echo '<script>window.location.href = "../inc/login.php";</script>';
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

// Consulta os pets do tutor logado
$sql_pets = "SELECT Cod_Pet, Nome_Pet, Raca, Idade, Sexo, Especie, Castracao 
             FROM pet 
             WHERE Cod_Tutor = '$cod_tutor'";
$result_pets = mysqli_query($conexao, $sql_pets);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Pets</title>
    <link rel="stylesheet" href="styles.css">
    <style>
    .container {
        max-width: 800px;
        margin: 0 auto;
    }


    .container-pet .id {
        flex: 0.5;
        padding: 5px;
    }

    .btn-edit {
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
        padding: 5px;
        border-radius: 5px;
        text-decoration: none;
    }

    .btn-edit:hover {
        background-color: #45a049;
    }

    .icon {
        margin-left: 5px;
    }
    </style>
</head>

<body>
    <div class="container">
        <!-- Meus Pets -->
        <div class="section">
            <h2>Meus Pets</h2>
            <?php if (mysqli_num_rows($result_pets) > 0): ?>
            <?php while ($user_data = mysqli_fetch_assoc($result_pets)): ?>
            <div class="container-pet">
                <div class="info-val">
                    <span><strong>Nome:</strong> <?php echo $user_data['Nome_Pet']; ?></span>
                </div>
                <div class="info-val">
                    <span><strong>Raça:</strong> <?php echo $user_data['Raca']; ?></span>
                </div>
                <div class="info-val">
                    <span><strong>Idade:</strong> <?php echo $user_data['Idade']; ?> anos</span>
                </div>
                <div class="info-val">
                    <span><strong>Sexo:</strong> <?php echo $user_data['Sexo']; ?></span>
                </div>
                <div class="info-val">
                    <span><strong>Espécie:</strong> <?php echo $user_data['Especie']; ?></span>
                </div>
                <div class="info-val">
                    <span><strong>Castrado:</strong> <?php echo $user_data['Castracao']; ?></span>
                </div>
                <a href="editPet.php?cod_pet=<?php echo $user_data['Cod_Pet']; ?>" class="btn-edit">
                    <button>
                        <i class="fa-solid fa-pen-to-square icon"></i> Editar Pet
                    </button>
                </a>
            </div>
            <?php endwhile; ?>
            <?php else: ?>
            <p>Você ainda não cadastrou nenhum pet.</p>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>