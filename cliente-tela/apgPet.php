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
$query_tutor = "SELECT Cod_Tutor FROM tutor WHERE Email = '$email'";
$result_tutor = mysqli_query($conexao, $query_tutor);

if ($result_tutor && mysqli_num_rows($result_tutor) > 0) {
    $row_tutor = mysqli_fetch_assoc($result_tutor);
    $cod_tutor = $row_tutor['Cod_Tutor'];
} else {
    echo "Tutor não encontrado.";
    exit;
}

// Verifica se o parâmetro 'delete' está presente na URL e se é um número válido
if (isset($_GET['delete']) && is_numeric($_GET['delete'])) {
    $cod_pet = $_GET['delete'];

    // Verifica se o pet pertence ao tutor logado
    $sql_check_pet = "SELECT Cod_Pet FROM pet WHERE Cod_Pet = '$cod_pet' AND Cod_Tutor = '$cod_tutor'";
    $result_check_pet = mysqli_query($conexao, $sql_check_pet);

    if ($result_check_pet && mysqli_num_rows($result_check_pet) > 0) {
        // Exclui o pet
        $sql_delete_pet = "DELETE FROM pet WHERE Cod_Pet = '$cod_pet'";
        if (mysqli_query($conexao, $sql_delete_pet)) {
            echo '<script>alert("Pet excluído com sucesso!"); window.location.href="apgPet.php";</script>';
        } else {
            echo "Erro ao excluir o pet: " . mysqli_error($conexao);
        }
    } else {
        echo "Pet não encontrado ou você não tem permissão para excluí-lo.";
    }
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
    <title>Apagar Pet</title>

</head>
<style>
.container {
    padding-top: 20px;
    max-width: 1100px;
    position: absolute;
    top: 90px;
    left: 320px;
}

.container-pet {
    background-color: #ffffff;
    width: 300px;
    margin-bottom: 40px;
    display: inline-block;
    margin-left: 20px;
    box-shadow: 20px 20px 20px rgba(194, 192, 192, 0.396);
    border-radius: 15px;
    padding: 15px;
    padding-left: 30px;
    height: 300px;

}

.btn-delete {
    background-color: transparent;
    border: 3.2px solid #f44336;
    border-radius: 5px;
    height: 35px;
    width: 150px;
    color: #f44336;
    margin-top: 30px;
    cursor: pointer;
    font-weight: 600;
}

.btn-delete:hover {
    border-color: #d32f2f;
    color: #d32f2f;
}

.nome-pet {
    margin-top: 5px;
    margin-bottom: 10px;
    font-family: baloo;
    font-size: 25px;
    color: #52BACB;

}

h2 {
    margin-left: 20px;
    font-family: baloo;
    font-size: 45px;
    color: #FD811C;

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
                    <p class="nome-pet"> <?php echo $user_data['Nome_Pet']; ?></p>
                </div>
                <div class="info-val">
                    <span><strong>Espécie:</strong> <?php echo $user_data['Especie']; ?></span>
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
                    <span><strong>Castrado:</strong> <?php echo $user_data['Castracao'] ? 'Sim' : 'Não'; ?></span>
                </div>
                <!-- Botão para excluir o pet -->
                <a href="apgPet.php?delete=<?php echo $user_data['Cod_Pet']; ?>"
                    onclick="return confirm('Tem certeza que deseja excluir este pet?');">
                    <button class="btn-delete">
                        <i class="fa-solid fa-trash icon"></i> Excluir Pet
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