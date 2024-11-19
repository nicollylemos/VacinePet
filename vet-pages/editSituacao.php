<?php 
include("../inc/header.php");
include("sidebar-veterinaria.php");
include_once('../config.php');

if (!isset($_SESSION['email']) || !isset($_SESSION['senha_hash'])) {
    echo '<script>window.location.href = "../inc/login.php";</script>';
    exit;
}

if ($_SESSION['email'] !== 'lmonicagm@gmail.com') {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    echo '<script>window.location.href = "../inc/login.php";</script>';
    exit;
}

if (isset($_POST['update'])) {
    $id_agendamento = $_POST['id_agendamento'];
    $situacao = $_POST['situacao'];

    $sqlUpdate = "UPDATE agendamentos SET situacao = ? WHERE id = ?";
    $query = $conexao->prepare($sqlUpdate);
    $query->bind_param('si', $situacao, $id_agendamento);
    $query->execute();

    if ($query->affected_rows > 0) {
        echo '<script>alert("Situação atualizada com sucesso!"); window.location.href = "index.php";</script>';
    } else {
        echo '<script>alert("Erro ao atualizar a situação."); window.location.href = "index.php";</script>';
    }
}

// Obtendo o agendamento para exibição no formulário
$id_agendamento = $_GET['id'] ?? null;
if ($id_agendamento) {
    $sqlFetch = "SELECT id, situacao FROM agendamentos WHERE id = ?";
    $query = $conexao->prepare($sqlFetch);
    $query->bind_param('i', $id_agendamento);
    $query->execute();
    $resultado = $query->get_result();
    $agendamento = $resultado->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Situação do Agendamento</title>
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../css/css/edicaoo.css">
    <link rel="stylesheet" href="../css/css/responsividade/telasvetpages.css">
</head>

<body>
    <div class="container">
        <div class="conteudo-editar">
            <i class="fa-solid fa-pen-to-square icon"></i>

            <?php if (isset($agendamento)): ?>
            <h2>Atualizar Situação do Agendamento</h2>
            <form action="" method="POST">
                <input type="hidden" name="id_agendamento" value="<?php echo $agendamento['id']; ?>">

                <label for="id">ID do Agendamento:</label>
                <input type="text" name="id" value="<?php echo $agendamento['id']; ?>" disabled>

                <label for="situacao">Situação:</label>
                <select name="situacao" required>
                    <option value="pendente" <?php echo $agendamento['situacao'] == 'pendente' ? 'selected' : ''; ?>>
                        Pendente</option>
                    <option value="confirmado"
                        <?php echo $agendamento['situacao'] == 'confirmado' ? 'selected' : ''; ?>>
                        Confirmado</option>
                    <option value="cancelado" <?php echo $agendamento['situacao'] == 'cancelado' ? 'selected' : ''; ?>>
                        Cancelado</option>
                </select>
                <br>
                <button type="submit" class="save" name="update">Atualizar</button>
                <a href="index.php" class="back">Voltar</a>

            </form>
            <?php else: ?>
            <p>Agendamento não encontrado.</p>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>