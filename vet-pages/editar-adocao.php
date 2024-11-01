<?php
include_once('../config.php');

// Verifica se o código do pet foi passado via GET
if (isset($_GET['cod_adocao'])) {
    $cod_adocao = $_GET['cod_adocao'];

    // Recupera os detalhes do pet
    $result = mysqli_query($conexao, "SELECT * FROM pet_adocao WHERE cod_adocao = '$cod_adocao'");

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $especie = $row['especie'];
        $nome_pet = $row['nome'];
        $sexo_pet = $row['sexo'];
        $fase_pet = $row['fase'];
        $porte_pet = $row['porte'];
        $cidade_pet = $row['cidade'];
        $foto_pet = $row['foto'];  // Nome do arquivo da imagem
    } else {
        echo "Pet não encontrado.";
        exit;
    }
} else {
    echo "Código do pet não fornecido.";
    exit;
}

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pet_especie = $_POST['pet_especie'];
    $pet_nome = $_POST['pet_nome'];
    $pet_sexo = $_POST['pet_sexo'];
    $pet_fase = $_POST['pet_fase'];
    $pet_porte = $_POST['pet_porte'];
    $pet_cidade = $_POST['pet_cidade'];

    // Verifica se uma nova foto foi enviada
    if (isset($_FILES['pet_foto_pet']) && $_FILES['pet_foto_pet']['error'] == UPLOAD_ERR_OK) {
        // Caminho da nova foto
        $novo_nome_foto = 'uploads/' . basename($_FILES['pet_foto_pet']['name']);

        // Exclui a foto antiga se existir
        if ($foto_pet && file_exists($foto_pet)) {
            unlink($foto_pet);
        }

        // Move a nova foto para o diretório
        move_uploaded_file($_FILES['pet_foto_pet']['tmp_name'], $novo_nome_foto);
        $foto_pet = $novo_nome_foto; // Atualiza o nome da foto
    }

    // Atualiza os detalhes do pet no banco de dados
    $sql = "UPDATE pet_adocao SET especie='$pet_especie', nome='$pet_nome', sexo='$pet_sexo', fase='$pet_fase', porte='$pet_porte', cidade='$pet_cidade', foto='$foto_pet' WHERE cod_adocao='$cod_adocao'";
    
    if (mysqli_query($conexao, $sql)) {
        echo "Pet atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar o pet: " . mysqli_error($conexao);
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pet</title>
    <link rel="stylesheet" href="../css/css/veterinarioo.css" />
</head>

<body>
    <section class="editar-adocao">
        <div class="container">
            <h1>Editar Pet</h1>

            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="pet_especie">Espécie:</label>
                    <input type="text" id="pet_especie" name="pet_especie" value="<?php echo $especie; ?>" required>
                </div>

                <div class="form-group">
                    <label for="pet_nome">Nome do Pet:</label>
                    <input type="text" id="pet_nome" name="pet_nome" value="<?php echo $nome_pet; ?>" required>
                </div>

                <div class="form-group">
                    <label for="pet_sexo">Sexo:</label>
                    <select id="pet_sexo" name="pet_sexo" required>
                        <option value="Macho" <?php echo ($sexo_pet == 'Macho') ? 'selected' : ''; ?>>Macho</option>
                        <option value="Fêmea" <?php echo ($sexo_pet == 'Fêmea') ? 'selected' : ''; ?>>Fêmea</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="pet_fase">Fase:</label>
                    <input type="text" id="pet_fase" name="pet_fase" value="<?php echo $fase_pet; ?>" required>
                </div>

                <div class="form-group">
                    <label for="pet_porte">Porte:</label>
                    <input type="text" id="pet_porte" name="pet_porte" value="<?php echo $porte_pet; ?>" required>
                </div>

                <div class="form-group">
                    <label for="pet_cidade">Cidade:</label>
                    <input type="text" id="pet_cidade" name="pet_cidade" value="<?php echo $cidade_pet; ?>" required>
                </div>

                <div class="form-group">
                    <label for="pet_foto_pet">Foto do Pet:</label>
                    <?php if ($foto_pet): ?>
                    <img src="<?php echo $foto_pet; ?>" alt="Foto atual" style="max-width: 200px;">
                    <?php endif; ?>
                    <input type="file" id="pet_foto_pet" name="pet_foto_pet">
                </div>

                <button type="submit" class="btn-primary">Atualizar Pet</button>
                <a href="visualizar-adocoes.php" class="btn-voltar">Cancelar</a>
            </form>
        </div>
    </section>
</body>

</html>
