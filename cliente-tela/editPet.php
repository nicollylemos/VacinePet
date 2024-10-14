<?php
include("../inc/header.php");
include("sidebar-cliente.php");
include_once('../config.php');

// Verifica se o email e a senha estão definidos na sessão
if (!isset($_SESSION['email']) || !isset($_SESSION['senha_hash'])) {
    echo '<script>window.location.href = "../inc/login.php";</script>';
    exit;
}

// Verifica se o código do pet foi passado via GET
if (isset($_GET['cod_pet'])) {
    $cod_pet = $_GET['cod_pet'];

    // Consulta o pet
    $query_pet = "SELECT Cod_Pet, Nome_Pet, Raca, Idade, Sexo, Especie, Castracao 
                  FROM pet 
                  WHERE Cod_Pet = '$cod_pet' AND Cod_Tutor = (SELECT Cod_Tutor FROM tutor WHERE Email = '{$_SESSION['email']}')";
    $result_pet = mysqli_query($conexao, $query_pet);

    if ($result_pet && mysqli_num_rows($result_pet) > 0) {
        $row_pet = mysqli_fetch_assoc($result_pet);
        $nome_pet = $row_pet['Nome_Pet'];
        $raca_pet = $row_pet['Raca'];
        $idade_pet = $row_pet['Idade'];
        $sexo_pet = $row_pet['Sexo'];
        $especie_pet = $row_pet['Especie'];
        $castracao_pet = $row_pet['Castracao'];
    } else {
        echo "Pet não encontrado.";
        exit;
    }
} else {
    echo "Código do pet não encontrado.";
    exit;
}

// Verifica se o formulário foi enviado para atualizar os dados do pet
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome_pet = mysqli_real_escape_string($conexao, $_POST['nome']);
    $raca_pet = mysqli_real_escape_string($conexao, $_POST['raca']);
    $idade_pet = mysqli_real_escape_string($conexao, $_POST['idade']);
    $sexo_pet = mysqli_real_escape_string($conexao, $_POST['sexo']);
    $especie_pet = mysqli_real_escape_string($conexao, $_POST['especie']);
    $castracao_pet = mysqli_real_escape_string($conexao, $_POST['castracao']);

    // Atualiza os dados do pet no banco de dados
    $update_query = "UPDATE pet 
                     SET Nome_Pet = '$nome_pet', Raca = '$raca_pet', Idade = '$idade_pet', Sexo = '$sexo_pet', Especie = '$especie_pet', Castracao = '$castracao_pet' 
                     WHERE Cod_Pet = '$cod_pet'";

    if (mysqli_query($conexao, $update_query)) {
        echo "<script>window.location.href='meu-pet.php';</script>";
    } else {
        echo "Erro ao atualizar o pet: " . mysqli_error($conexao);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pet</title>
    <link rel="stylesheet" href="styles.css">
    <style>
    .container {
        max-width: 800px;
        margin: 0 auto;
    }

    .form-section {
        margin-bottom: 30px;
    }

    h2 {
        margin-top: 20px;
        margin-bottom: 10px;
    }

    .input-group {
        margin: 10px 0;
    }

    .input-group label {
        display: block;
        margin-bottom: 5px;
    }

    .input-group input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .btn-submit {
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-submit:hover {
        background-color: #45a049;
    }

    .btn-cancel {
        padding: 10px;
        background-color: #f44336;
        color: white;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-cancel:hover {
        background-color: #d32f2f;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-section">
            <h2>Editar Pet</h2>
            <form method="POST" action="">
                <div class="input-group">
                    <label for="nome">Nome do Pet</label>
                    <input type="text" id="nome" name="nome" value="<?php echo $nome_pet; ?>" required>
                </div>

                <div class="input-group">
                    <label for="raca">Raça</label>
                    <input type="text" id="raca" name="raca" value="<?php echo $raca_pet; ?>" required>
                </div>

                <div class="input-group">
                    <label for="idade">Idade</label>
                    <input type="number" id="idade" name="idade" value="<?php echo $idade_pet; ?>" required>
                </div>

                <div class="input-group">
                    <label for="sexo">Sexo</label>
                    <input type="text" id="sexo" name="sexo" value="<?php echo $sexo_pet; ?>" required>
                </div>

                <div class="input-group">
                    <label for="especie">Espécie</label>
                    <input type="text" id="especie" name="especie" value="<?php echo $especie_pet; ?>" required>
                </div>

                <div class="input-group">
                    <label for="castracao">Castrado?</label>
                    <input type="text" id="castracao" name="castracao" value="<?php echo $castracao_pet; ?>" required>
                </div>

                <div class="input-group">
                    <button type="submit" class="btn-submit">Salvar Alterações</button>
                    <a href="meu-pet.php" class="btn-cancel">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>