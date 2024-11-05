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

// Processa o formulário de cadastro de pet
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome_pet = $_POST['nome_pet'];
    $raca_pet = $_POST['raca_pet'];
    $idade_pet = $_POST['idade_pet'];
    $sexo_pet = $_POST['sexo_pet'];
    $especie_pet = $_POST['especie_pet'];
    $castracao_pet =$_POST['castracao_pet'];
    $porte_pet =$_POST['porte_pet'];

    // Insere o pet no banco de dados
    $sql_insert = "INSERT INTO pet (Nome_Pet, Raca, Idade, Sexo, Especie, Castracao, Porte, Cod_Tutor) 
                   VALUES ('$nome_pet', '$raca_pet', '$idade_pet', '$sexo_pet', '$especie_pet', '$castracao_pet', '$porte_pet',  '$cod_tutor')";

    if (mysqli_query($conexao, $sql_insert)) {
        echo '<script>alert("Pet cadastrado com sucesso!"); window.location.href="meu-pet.php";</script>';
    } else {
        echo "Erro ao cadastrar pet: " . mysqli_error($conexao);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Pet</title>
    <link rel="stylesheet" href="../css/css/EstiloUsuario.css">
    <style>
    .container-adicionar {
        background-color: #ffffff;
        width: 600px;
        margin-bottom: 40px;
        display: inline-block;
        margin-left: 20px;
        box-shadow: 20px 30px 20px 20px rgba(194, 192, 192, 0.396);
        border-radius: 15px;
        padding: 15px;
        padding-left: 30px;

    }

    .form-section {
        margin-bottom: 30px;
    }

    h2 {
        margin-top: 20px;
        margin-bottom: 10px;
        margin-left: 10%;
    }

    .form-group {
        margin: 10px 0;
        text-align: center;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
        text-align: left;
        margin-left: 10%;
    }

    .form-group input {
        width: 80%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;

    }

    .form-group select {
        width: 80%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;

    }

    .btn-submit {
        background-color: #52BACB;
        color: white;
        border-radius: 8px;
        cursor: pointer;
        width: 150px;
        border: 1px solid #52BACB;
        height: 40px;
        font-weight: 600;
        font-size: 15px;

    }

    .btn-cancel {
        padding: 5px;
        background-color: transparent;
        color: #52BACB;
        border-radius: 8px;
        cursor: pointer;
        width: 150px;
        text-decoration: none;
        border: 3.5px solid #52BACB;
        font-weight: 600;
        display: inline-block;
        /* Adiciona inline-block para permitir definir a largura */
        box-sizing: border-box;
        /* Garante que padding e borda sejam incluídos na largura */
        text-align: center;
        /* Centraliza o texto dentro do botão */
    }

    .btn-submit:hover {
        background-color: #69c2d0;
        border-color: #69c2d0;
    }

    .btn-cancel:hover {
        color: #69c2d0;
        border-color: #69c2d0;
    }

    .input-button {
        margin-top: 60px;
        margin-bottom: 20px;
        text-align: center;
    }

    .input-button a {
        text-decoration: none;
        color: #52BACB;
    }
    </style>
</head>

<body>
    <div class="container">

        <div class="container-adicionar">
            <h2>Adicionar Pet</h2>
            <form method="POST" action="">
                <div class="form-group">
                    <label for="nome_pet">Nome do Pet:</label>
                    <input type="text" id="nome_pet" name="nome_pet">
                </div>
                <div class="form-group">
                    <label for="especie_pet">Espécie:</label>
                    <select id="especie_pet" name="especie_pet">
                        <option value="Cachorro">Cachorro</option>
                        <option value="Gato">Gato</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="raca_pet">Raça:</label>
                    <input type="text" id="raca_pet" name="raca_pet">
                </div>
                <div class="form-group">
                    <label for="idade_pet">Idade:</label>
                    <input type="number" id="idade_pet" name="idade_pet">
                </div>
                <div class="form-group">
                    <label for="sexo_pet">Sexo:</label>
                    <select id="sexo_pet" name="sexo_pet">
                        <option value="Macho">Macho</option>
                        <option value="Fêmea">Fêmea</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="castracao_pet">Castração:</label>
                    <select id="castracao_pet" name="castracao_pet">
                        <option value="Sim">Sim</option>
                        <option value="Não">Não</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="porte_pet">Porte:</label>
                    <select id="porte_pet" name="porte_pet">
                        <option value="Pequeno">Pequeno</option>
                        <option value="Médio">Médio</option>
                        <option value="Grande">Grande</option>
                    </select>
                </div>
                <div class="input-button">
                    <button type="submit" class="btn-submit">Cadastrar Pet</button>

                    <a href="meu-pet.php" class="btn-cancel">Cancelar</a>
                </div>
            </form>
        </div>
    </div>

</body>

</html>