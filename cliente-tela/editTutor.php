<?php 
include("../inc/header.php");
include("sidebar-cliente.php");
include_once('../config.php');

// Verifica se o email e a senha estão definidos na sessão
if (!isset($_SESSION['email']) || !isset($_SESSION['senha_hash'])) {
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

$erro_senha = "";

// Verifica se o formulário foi enviado para atualização dos dados
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome_tutor = mysqli_real_escape_string($conexao, $_POST['nome']);
    $cpf_tutor = mysqli_real_escape_string($conexao, $_POST['cpf']);
    $telefone_tutor = mysqli_real_escape_string($conexao, $_POST['telefone']);
    $email_tutor = mysqli_real_escape_string($conexao, $_POST['email']);
    
    // Verifica se o campo de senha foi preenchido e se as senhas coincidem
    if (!empty($_POST['senha']) && !empty($_POST['confirmar_senha'])) {
        if ($_POST['senha'] === $_POST['confirmar_senha']) {
            $senha_tutor = mysqli_real_escape_string($conexao, $_POST['senha']);
            $senha_hash = password_hash($senha_tutor, PASSWORD_DEFAULT);

            $update_query = "UPDATE tutor 
                             SET Nome = '$nome_tutor', CPF = '$cpf_tutor', Telefone = '$telefone_tutor', Email = '$email_tutor', Senha = '$senha_hash' 
                             WHERE Cod_Tutor = '$cod_tutor'";

            $_SESSION['senha_hash'] = $senha_hash;
        } else {
            $erro_senha = "As senhas não coincidem. Por favor, tente novamente.";
        }
    } else {
        $update_query = "UPDATE tutor 
                         SET Nome = '$nome_tutor', CPF = '$cpf_tutor', Telefone = '$telefone_tutor', Email = '$email_tutor' 
                         WHERE Cod_Tutor = '$cod_tutor'";
    }

    // Executa a atualização no banco de dados se não houve erro nas senhas
    if (empty($erro_senha)) {
        if (mysqli_query($conexao, $update_query)) {
            echo "<script> window.location.href='index.php';</script>";
        } else {
            echo "Erro ao atualizar os dados: " . mysqli_error($conexao);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Dados do Tutor</title>
    <link rel="stylesheet" href="../css/css/EstiloUsuario.css">
    <link rel="stylesheet" href="../css/css/responsividade/tela-edit-tutor.css">
</head>
<style>
.container-editar {
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

* {
    text-transform: capitalize;
}


.form-section {
    margin-bottom: 30px;
}

h2 {
    margin-top: 20px;
    margin-bottom: 10px;
    margin-left: 10%;
}

.input-group {
    margin: 10px 0;
    text-align: center;
}

.input-group label {
    display: block;
    margin-bottom: 5px;
    text-align: left;
    margin-left: 10%;
}

.input-group input {
    width: 80%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    text-transform: capitalize;

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

}

.btn-cancel {
    height: 40px;
    background-color: transparent;
    color: #52BACB;
    border-radius: 8px;
    cursor: pointer;
    width: 150px;
    text-decoration: none;
    border: 3.5px solid #52BACB;
    font-weight: 600;
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
    margin-top: 40px;
    margin-bottom: 20px;
    text-align: center;
}
</style>

<body>
    <div class="container">
        <div class="container-editar">
            <h2>Editar Dados do Tutor</h2>
            <form method="POST" action="">
                <div class="input-group">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" value="<?php echo $nome_tutor; ?>" required>
                </div>

                <div class="input-group">
                    <label for="cpf">CPF</label>
                    <input type="text" id="cpf" name="cpf" value="<?php echo $cpf_tutor; ?>">
                </div>

                <div class="input-group">
                    <label for="telefone">Telefone</label>
                    <input type="text" id="telefone" name="telefone" value="<?php echo $telefone_tutor; ?>">
                </div>

                <input type="hidden" id="email" name="email" value="<?php echo $email_tutor; ?>">

                <div class="input-group">
                    <label for="senha">Nova Senha</label>
                    <input type="password" id="senha" name="senha" placeholder="Digite uma nova senha">
                </div>

                <div class="input-group">
                    <label for="confirmar_senha">Confirmar Nova Senha</label>
                    <input type="password" id="confirmar_senha" name="confirmar_senha"
                        placeholder="Confirme a nova senha">
                </div>

                <!-- Exibe mensagem de erro se as senhas não coincidem -->
                <?php if (!empty($erro_senha)) { ?>
                <p style="color:red;text-align:center;"><?php echo $erro_senha; ?></p>
                <?php } ?>

                <div class="input-button">
                    <button type="submit" class="btn-submit">Salvar Alterações</button>
                    <a href="index.php"> <button class="btn-cancel">Cancelar
                        </button></a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>