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
            header('Location: ../index.php');
            exit();
        } else {
            // Define a mensagem de erro
            $_SESSION['login_erro'] = "Falha ao logar: senha incorreta";
            header('Location: login.php');
            exit();
        }
    } else {
        // Define a mensagem de erro
        $_SESSION['login_erro'] = "Falha ao logar: usuário não encontrado";
        header('Location: login.php');
        exit();
    }
} else {
    // Redireciona para a página de login se os campos estiverem vazios
    header('Location: login.php');
    exit();
}
?>