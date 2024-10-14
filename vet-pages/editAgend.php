<?php 
include("../inc/header.php");  // Subindo dois níveis para acessar o header.php
include("sidebar-vet.php");    // Subindo um nível para acessar sidebar-vet.php
include_once('../config.php'); // Subindo dois níveis para acessar config.php

// Verifica se o email e a senha estão definidos na sessão
if (!isset($_SESSION['email']) || !isset($_SESSION['senha_hash'])) {
    // Se não houver sessão, redireciona para a página de login
    header('Location: login.php');
    exit;
}

// Verifica se o email na sessão é diferente do permitido
if ($_SESSION['email'] !== 'lmonicagm@gmail.com') {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
    exit;
}


$logado = $_SESSION['email'];


if (!empty($_GET['id'])) {
    $id_agendamento = $_GET['id'];  

    
    $sqlSelect = "
        SELECT a.situacao
        FROM agendamentos a
        WHERE a.id = ?
    ";

    $query = $conexao->prepare($sqlSelect);
    $query->bind_param('i', $id_agendamento);  
    $query->execute();

    $result = $query->get_result();
    $row = $result->fetch_assoc();  
}

?>

<div class="container">
    <div class="conteudo-editar">
        <h1>Editar Situação do Agendamento</h1>


        <?php if ($result->num_rows > 0): ?>
        <p><strong>Situação Atual:</strong> <?php echo htmlspecialchars($row['situacao']); ?></p>
        <form method="POST" action="salvarSituacao.php">
            <input type="hidden" name="id_agendamento" value="<?php echo $id_agendamento; ?>">
            <p><strong>Editar Situação:</strong></p>
            <select name="situacao" class="form-control">
                <option value="Agendado" <?php echo ($row['situacao'] == 'Agendado') ? 'selected' : ''; ?>>Agendado
                </option>
                <option value="Confirmado" <?php echo ($row['situacao'] == 'Confirmado') ? 'selected' : ''; ?>>
                    Confirmado</option>
                <option value="Cancelado" <?php echo ($row['situacao'] == 'Cancelado') ? 'selected' : ''; ?>>Cancelado
                </option>
                <option value="Concluído" <?php echo ($row['situacao'] == 'Concluído') ? 'selected' : ''; ?>>Concluído
                </option>
            </select>
            <button class="save" type="submit" name="update" id="update">Salvar</button>
        </form>

        <?php else: ?>
        <p>Nenhum agendamento encontrado para este ID.</p>
        <?php endif; ?>
    </div>
</div>