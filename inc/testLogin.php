<?php 
session_start();

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    // Inclui o arquivo de configuração para conectar ao banco de dados
    include_once('../config.php');

    // Verifica se a conexão foi bem-sucedida
    if (!$conexao) {
        die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
    }

    // Obtém os dados do formulário
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Usa prepared statement para evitar SQL Injection
    $stmt = $conexao->prepare("SELECT * FROM tutor WHERE email = ? LIMIT 1");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verifica se o usuário foi encontrado
    if ($tutor = $result->fetch_assoc()) {
        // Verifica a senha usando password_verify
        if (password_verify($senha, $tutor['Senha'])) {
            $_SESSION['email'] = $email;
            $_SESSION['senha_hash'] = $tutor['Senha']; // Armazena o hash da senha na sessão
            header('Location: ../index.php');
            exit();
        } else {
            $_SESSION['login_erro'] = "Falha ao logar: senha incorreta";
            header('Location: login.php');
            exit();
        }
    } else {
        $_SESSION['login_erro'] = "Falha ao logar: usuário não encontrado";
        header('Location: login.php');
        exit();
    }

    // Fecha o statement e a conexão
    $stmt->close();
    $conexao->close();
} else {
    // Redireciona para a página de login se os campos estiverem vazios
    header('Location: login.php');
    exit();
}
?>