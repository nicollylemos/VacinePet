<?php 
session_start();

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    // Acessa
    include_once('../config.php');
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Busca o usuário no banco de dados
    $sql_code = "SELECT * FROM tutor WHERE email = '$email' LIMIT 1";
    $sql_exec = $conexao->query($sql_code) or die($conexao->error);

    // Verifica se o usuário foi encontrado
    if ($tutor = $sql_exec->fetch_assoc()) {
        // Verifica a senha
        if (password_verify($senha, $tutor['Senha'])) {
            $_SESSION['email'] = $email;
            // Armazena o hash da senha na sessão
            $_SESSION['senha_hash'] = $tutor['Senha']; 
            header('Location: sistema.php');
            exit();
        } else {
            echo "Falha ao logar: senha incorreta";

        }
    } else {
        echo "Falha ao logar: usuário não encontrado";
    }
} else {
    // Redireciona para a página de login se os campos estiverem vazios
    header('Location: login.php');
    exit();
}
?>