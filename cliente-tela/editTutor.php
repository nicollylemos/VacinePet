<?php 
include("../inc/header.php");
include("sidebar-cliente.php");
include_once('../config.php');

// Verifica se o email e a senha estão definidos na sessão
if (!isset($_SESSION['email']) || !isset($_SESSION['senha_hash'])) {
    // Se não houver sessão, redireciona para a página de login
    header('Location: login.php');
    exit;
}

// Verifica se o código do tutor foi passado via GET
if (isset($_GET['cod_tutor'])) {
    $cod_tutor = $_GET['cod_tutor'];

    // Consulta os dados do tutor
    $query_tutor = "SELECT Cod_Tutor, Nome, CPF, Telefone, Email FROM tutor WHERE Cod_Tutor = '$cod_tutor'";
    $result_tutor = mysqli_query($conexao, $query_tutor);

    if ($result_tutor && mysqli_num_rows($result_tutor) > 0) {
        $row_tutor = mysqli_fetch_assoc($result_tutor);
        $nome_tutor = $row_tutor['Nome'];
        $cpf_tutor = $row_tutor['CPF'];
        $telefone_tutor = $row_tutor['Telefone'];
        $email_tutor = $row_tutor['Email'];
    } else {
        echo "Tutor não encontrado.";
        exit;
    }
} else {
    echo "Código do tutor não encontrado.";
    exit;
}

// Verifica se o formulário foi enviado para atualização dos dados
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome_tutor = mysqli_real_escape_string($conexao, $_POST['nome']);
    $cpf_tutor = mysqli_real_escape_string($conexao, $_POST['cpf']);
    $telefone_tutor = mysqli_real_escape_string($conexao, $_POST['telefone']);
    $email_tutor = mysqli_real_escape_string($conexao, $_POST['email']);
    
    // Verifica se o campo de senha foi preenchido e se as senhas coincidem
    if (!empty($_POST['senha']) && $_POST['senha'] === $_POST['confirmar_senha']) {
        $senha_tutor = mysqli_real_escape_string($conexao, $_POST['senha']);
        $senha_hash = password_hash($senha_tutor, PASSWORD_DEFAULT);

        // Atualiza a senha do tutor no banco de dados
        $update_query = "UPDATE tutor 
                         SET Nome = '$nome_tutor', CPF = '$cpf_tutor', Telefone = '$telefone_tutor', Email = '$email_tutor', Senha = '$senha_hash' 
                         WHERE Cod_Tutor = '$cod_tutor'";

        // Atualiza a senha também na sessão para manter o tutor logado
        $_SESSION['senha_hash'] = $senha_hash;
    } else {
        $update_query = "UPDATE tutor 
                         SET Nome = '$nome_tutor', CPF = '$cpf_tutor', Telefone = '$telefone_tutor', Email = '$email_tutor' 
                         WHERE Cod_Tutor = '$cod_tutor'";
    }

    // Executa a atualização no banco de dados
    if (mysqli_query($conexao, $update_query)) {
        echo "<script> window.location.href='index.php';</script>";
    } else {
        echo "Erro ao atualizar os dados: " . mysqli_error($conexao);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Dados do Tutor</title>
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
        display: inline-block;
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        border-radius: 5px;
        text-align: center;
        cursor: pointer;
        text-decoration: none;
    }

    .btn-submit:hover {
        background-color: #45a049;
    }

    .btn-cancel {
        display: inline-block;
        padding: 10px;
        background-color: #f44336;
        color: white;
        border-radius: 5px;
        text-align: center;
        cursor: pointer;
        text-decoration: none;
    }

    .btn-cancel:hover {
        background-color: #d32f2f;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-section">
            <h2>Editar Dados do Tutor</h2>
            <form method="POST" action="">
                <div class="input-group">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" value="<?php echo $nome_tutor; ?>" required>
                </div>

                <div class="input-group">
                    <label for="cpf">CPF</label>
                    <input type="text" id="cpf" name="cpf" value="<?php echo $cpf_tutor; ?>" required>
                </div>

                <div class="input-group">
                    <label for="telefone">Telefone</label>
                    <input type="text" id="telefone" name="telefone" value="<?php echo $telefone_tutor; ?>" required>
                </div>


                <input type="hidden" id="email" name="email" value="<?php echo $email_tutor; ?>" required>


                <!-- Novo campo para editar a senha -->
                <div class="input-group">
                    <label for="senha">Nova Senha</label>
                    <input type="password" id="senha" name="senha" placeholder="Digite uma nova senha">
                </div>

                <div class="input-group">
                    <label for="confirmar_senha">Confirmar Nova Senha</label>
                    <input type="password" id="confirmar_senha" name="confirmar_senha"
                        placeholder="Confirme a nova senha">
                </div>

                <div class="input-group">
                    <button type="submit" class="btn-submit">Salvar Alterações</button>
                    <a href="index.php" class="btn-cancel">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>