<?php
include_once('../config.php');  // Inclui a conexão com o banco de dados

// Verifica se o código da adoção foi passado via GET
if (isset($_GET['cod_adocao'])) {
    $cod_adocao = $_GET['cod_adocao'];

    // Recupera os detalhes da adoção e a foto associada
    $result = mysqli_query($conexao, "SELECT * FROM pet_adocao WHERE cod_adocao = '$cod_adocao'");
    
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $nome_pet = $row['nome'];
        $foto_pet = $row['foto'];  // Nome do arquivo da imagem
        
        // Verifica se há uma imagem associada e se o arquivo existe
        if ($foto_pet && file_exists('/VacinePet/vet-pages/uploads/' . $foto_pet)) {
            // Deleta o arquivo de imagem
            unlink('/VacinePet/vet-pages/uploads/' . $foto_pet); // Exclui o arquivo da pasta uploads
        }
        
        // Se o usuário confirmar, deletar o registro
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $sql = "DELETE FROM pet_adocao WHERE cod_adocao = '$cod_adocao'";
            
            if (mysqli_query($conexao, $sql)) {
                echo "<script>alert('Adoção deletada com sucesso.'); window.location.href='visualizar-pet.php';</script>";
            } else {
                echo "Erro ao deletar adoção: " . mysqli_error($conexao);
            }
        }
    } else {
        echo "Adoção não encontrada.";
    }
} else {
    echo "Código da adoção não fornecido.";
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Adoção</title>
    <link rel="stylesheet" href="../css/css/veterinarioo.css" />
</head>

<body>
    <section class="deletar-adocao">
        <div class="container">
            <h1>Confirmar Exclusão da Adoção</h1>
            <p>Você tem certeza de que deseja excluir a adoção do pet
                <strong><?php echo isset($nome_pet) ? $nome_pet : ''; ?></strong>?
            </p>

            <?php if (isset($foto_pet) && $foto_pet != ''): ?>
            <p><strong>Foto:</strong></p>
            <p><?php echo $foto_pet; ?></p> <!-- Exibe o nome do arquivo -->
            <img src="<?php echo $foto_pet; ?>" alt="Foto do Pet" style="max-width: 300px;">
            <?php else: ?>
            <p>Não há foto disponível para este pet.</p>
            <?php endif; ?>

            <form action="deletar-adocao.php?cod_adocao=<?php echo $cod_adocao; ?>" method="POST">
                <button type="submit" class="btn-danger">Deletar Adoção</button>
                <a href="visualizar-pet.php" class="btn-voltar">Cancelar</a>
            </form>
        </div>
    </section>
</body>

</html>