<?php 
 include("../inc/header.php");
 include("sidebar-veterinaria.php");
include_once('../config.php');

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

// Caso contrário, o usuário está autenticado e pode acessar a página
$logado = $_SESSION['email'];

// Alterna a classe com base no tipo da vacina
if(!empty($_GET['id'])) {
    // Pega o id do agendamento da URL
    $id_agendamento = $_GET['id'];  // Certifique-se de sanitizar este valor para evitar SQL Injection

    // Consulta SQL para pegar as informações do tutor e do endereço
    $sqlSelect = "
        SELECT t.cod_tutor, t.nome, t.email, t.telefone, e.cep, e.rua, e.cidade, e.bairro, e.complemento, e.numero
        FROM agendamentos a
        JOIN tutor t ON a.cod_tutor = t.cod_tutor
        LEFT JOIN endereco e ON a.cod_tutor = e.cod_tutor  -- Aqui estou assumindo que o endereço está relacionado ao cod_tutor
        WHERE a.id = ?
    ";

    // Prepara a consulta
    $query = $conexao->prepare($sqlSelect);
    $query->bind_param('i', $id_agendamento);  // 'i' indica que estamos passando um inteiro como parâmetro
    $query->execute();

    // Executa e obtém o resultado
    $result = $query->get_result();
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<!--
    * @brief Cabeçalho HTML contendo informações de metadados e links para arquivos CSS externos.
    * @details Inclui links para a estilização da página, o ícone do site e bibliotecas externas como FontAwesome.
-->

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="calendar, events, reminders, javascript, html, css, open source coding" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/css/edicaoo.css">
    <link rel="stylesheet" href="../css/css/responsividade/telasvetpages.css">
    <title>VacinePet</title>
    <style>
    </style>
</head>

<body>
    <!-- A tela de edição -->
    <div class="container">
        <div class="conteudo-editar">
            <h2>Sobre Agendamento</h2>

            </hbre o2>
            <p class="infos"><?php if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo "Nome do Tutor: " . $row['nome'] . "<br>";
            echo "CEP: " . $row['email'] . "<br>";
            echo "Nome do Tutor: " . $row['telefone'] . "<br>";
            echo "CEP: " . $row['cep'] . "<br>";
            echo "Rua: " . $row['rua'] . "<br>";
            echo "Cidade: " . $row['cidade'] . "<br>";
            echo "Bairro: " . $row['bairro'] . "<br>";
            echo "Complemento: " . $row['complemento'] . "<br>";
            echo "Número: " . $row['numero'] . "<br>";
        } else {
            echo "Nenhum resultado encontrado para este agendamento.";
        }
        ?>
            </p>
            <a href="index.php"> <button class="back">Voltar
                </button></a>
        </div>
    </div>
</body>

</html>