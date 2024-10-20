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

    // Consulta os dados de endereço do tutor
    $query_endereco = "SELECT Cod_End, Cep, Rua, Cidade, Bairro, Complemento, Numero 
                       FROM endereco WHERE Cod_Tutor = '$cod_tutor'";
    $result_endereco = mysqli_query($conexao, $query_endereco);

    if ($result_endereco && mysqli_num_rows($result_endereco) > 0) {
        $row_endereco = mysqli_fetch_assoc($result_endereco);
        $cep = $row_endereco['Cep'];
        $rua = $row_endereco['Rua'];
        $cidade = $row_endereco['Cidade'];
        $bairro = $row_endereco['Bairro'];
        $complemento = $row_endereco['Complemento'];
        $numero = $row_endereco['Numero'];
    } else {
        echo "Endereço não encontrado.";
        exit;
    }
} else {
    echo "Código do tutor não encontrado.";
    exit;
}

// Verifica se o formulário foi enviado para atualização dos dados
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cep = mysqli_real_escape_string($conexao, $_POST['cep']);
    $rua = mysqli_real_escape_string($conexao, $_POST['rua']);
    $cidade = mysqli_real_escape_string($conexao, $_POST['cidade']);
    $bairro = mysqli_real_escape_string($conexao, $_POST['bairro']);
    $complemento = mysqli_real_escape_string($conexao, $_POST['complemento']);
    $numero = mysqli_real_escape_string($conexao, $_POST['numero']);

    // Atualiza o endereço do tutor no banco de dados
    $update_query = "UPDATE endereco 
                     SET Cep = '$cep', Rua = '$rua', Cidade = '$cidade', Bairro = '$bairro', Complemento = '$complemento', Numero = '$numero' 
                     WHERE Cod_Tutor = '$cod_tutor'";

    // Executa a atualização no banco de dados
    if (mysqli_query($conexao, $update_query)) {
        echo "<script> alert('Endereço atualizado com sucesso!'); window.location.href='index.php';</script>";
    } else {
        echo "Erro ao atualizar o endereço: " . mysqli_error($conexao);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Endereço do Tutor</title>
    <link rel="stylesheet" href="../css/css/EstiloUsuario.css">
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
        font-size: 15px;

    }

    .btn-cancel {
        padding: 5px;
        background-color: transparent;
        color: #52BACB;
        border-radius: 8px;
        cursor: pointer;
        width: 150px;
        text-decoration: none;
        border: 3.5px solid #52BACB;
        font-weight: 600;
        display: inline-block;
        /* Adiciona inline-block para permitir definir a largura */
        box-sizing: border-box;
        /* Garante que padding e borda sejam incluídos na largura */
        text-align: center;
        /* Centraliza o texto dentro do botão */
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
        margin-top: 60px;
        margin-bottom: 20px;
        text-align: center;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="container-editar">
            <h2>Editar Endereço do Tutor</h2>
            <form method="POST" action="">
                <div class="input-group">
                    <label for="cep">CEP</label>
                    <input type="text" id="cep" name="cep" value="<?php echo $cep; ?>" required>
                </div>

                <div class="input-group">
                    <label for="rua">Rua</label>
                    <input type="text" id="rua" name="rua" value="<?php echo $rua; ?>" required>
                </div>

                <div class="input-group">
                    <label for="cidade">Cidade</label>
                    <input type="text" id="cidade" name="cidade" value="<?php echo $cidade; ?>" required>
                </div>

                <div class="input-group">
                    <label for="bairro">Bairro</label>
                    <input type="text" id="bairro" name="bairro" value="<?php echo $bairro; ?>" required>
                </div>

                <div class="input-group">
                    <label for="complemento">Complemento</label>
                    <input type="text" id="complemento" name="complemento" value="<?php echo $complemento; ?>">
                </div>

                <div class="input-group">
                    <label for="numero">Número</label>
                    <input type="text" id="numero" name="numero" value="<?php echo $numero; ?>" required>
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