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
    <link rel="stylesheet" href="../css/css/EstiloUsuario.css">
    <link rel="stylesheet" href="../css/css/responsividade/telameu-pet.css">

</head>
<style>
* {
    text-transform: capitalize;
}



.btn-add:hover,
.btn-apg:hover {
    padding: 8px;
    transition: 0.3s;
}

.container-pet {
    height: 300px;
}
</style>

<body>
    <div class="container meuPet">
        <!-- Meus Pets -->

        <h2>Meus Pets</h2>

        <?php if (mysqli_num_rows($result_pets) > 0): ?>
        <?php while ($user_data = mysqli_fetch_assoc($result_pets)): ?>
        <div class="container-pet">

            <div class="info-val">
                <p class="nome-pet"> <?php echo $user_data['Nome_Pet']; ?></p>
            </div>
            <div class="content-pet">
                <div class="info-val">
                    <span><strong>Espécie:</strong> <?php echo $user_data['Especie']; ?></span>
                </div>
                <div class="info-val">
                    <span><strong>Raça:</strong> <?php echo $user_data['Raca']; ?></span>
                </div>
                <div class="info-val">
                    <span><strong>Idade:</strong> <?php echo $user_data['Idade']; ?></span>
                </div>
                <div class="info-val">
                    <span><strong>Sexo:</strong> <?php echo $user_data['Sexo']; ?></span>
                </div>

                <div class="info-val">
                    <span><strong>Castrado:</strong> <?php echo $user_data['Castracao']; ?></span>
                </div>

            </div>
            <a href="editPet.php?cod_pet=<?php echo $user_data['Cod_Pet']; ?>">
                <button class="btn-edit">
                    <i class="fa-solid fa-pen-to-square icon"></i> Editar Pet
                </button>
            </a>

        </div>
        <?php endwhile; ?>
        <?php else: ?>
        <p>Você ainda não cadastrou nenhum pet.</p>
        <?php endif; ?>
        <div class="btn-top">
            <a href="addPet.php" class="btn-add">
                <i class="fa-solid fa-plus"></i> Novo Pet
            </a>
            <a href="apgPet.php" class="btn-apg">
                <i class="fa-solid fa-trash"></i> Apagar Pet
            </a>
        </div>
    </div>
</body>

</html>