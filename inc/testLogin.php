<?php
session_start();

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    include_once('../config.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Prepare a consulta
    $sql = "SELECT * FROM tutor WHERE email = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows < 1) {
        // Email não encontrado
        header('Location: login.php?error=email_invalido');
    } else {
        $row = $result->fetch_assoc();
        
        // Verifica a senha
        if (password_verify($senha, $row['senha'])) {
            $_SESSION['email'] = $email;
            header('Location: sistema.php');
        } else {
            // Senha incorreta
            header('Location: login.php?error=senha_incorreta');
        }
    }
} else {
    // Não acessa
    header('Location: login.php?error=campos_vazios');
}
?>
