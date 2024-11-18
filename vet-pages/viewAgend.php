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

// Pega o id do agendamento da URL
if (!empty($_GET['id'])) {
    $id_agendamento = $_GET['id'];

    // Consulta SQL para pegar as informações do tutor, endereço, pet e agendamento
    $sqlSelect = "
        SELECT 
            t.nome AS nome_tutor, t.email, t.telefone,
            e.cep, e.rua, e.cidade, e.bairro, e.complemento, e.numero,
            p.nome_pet, p.raca, p.idade, p.sexo, p.especie, p.porte, p.castracao,
            a.data_agendamento, a.horario_agendamento, a.servico, a.situacao
        FROM agendamentos a
        JOIN tutor t ON a.cod_tutor = t.cod_tutor
        LEFT JOIN endereco e ON t.cod_tutor = e.cod_tutor
        JOIN pet p ON a.cod_pet = p.cod_pet
        WHERE a.id = ?
    ";

    // Prepara a consulta
    $query = $conexao->prepare($sqlSelect);
    $query->bind_param('i', $id_agendamento);
    $query->execute();

    // Executa e obtém o resultado
    $result = $query->get_result();
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VacinePet</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="../css/css/viewAgend.css">
    <link rel="stylesheet" href="../css/css/responsividade/telasvetpages.css">
</head>

<body>
    <div class="container">
        <div class="conteudo-editar">
            <h2>Sobre o Agendamento</h2>
            <p class="infos">
                <?php 
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();

               
                    echo "<h3>Dados do Tutor</h3>";
                    echo "<span>Nome:</span> " . $row['nome_tutor'] . "<br>";
                    echo "<span>Email:</span> " . $row['email'] . "<br>";
                    echo "<span>Telefone:</span> " . $row['telefone'] . "<br>";

                    echo "<h3>Endereço</h3>";
                    echo "<span>CEP:</span> " . $row['cep'] . "<br>";
                    echo "<span>Rua:</span> " . $row['rua'] . "<br>";
                    echo "<span>Cidade:</span> " . $row['cidade'] . "<br>";
                    echo "<span>Bairro:</span> " . $row['bairro'] . "<br>";
                    echo "<span>Complemento:</span> " . $row['complemento'] . "<br>";
                    echo "<span>Número:</span> " . $row['numero'] . "<br>";

                    echo "<h3>Dados do Pet</h3>";
                    echo "<span>Nome do Pet:</span> " . $row['nome_pet'] . "<br>";
                    echo "<span>Raça:</span> " . $row['raca'] . "<br>";
                    echo "<span>Idade:</span> " . $row['idade'] . "<br>";
                    echo "<span>Sexo:</span> " . $row['sexo'] . "<br>";
                    echo "<span>Espécie:</span> " . $row['especie'] . "<br>";
                    echo "<span>Porte:</span> " . $row['porte'] . "<br>";
                    echo "<span>Castrado:</span> " . ($row['castracao'] ? "Sim" : "Não") . "<br>";

                    echo "<h3>Dados do Agendamento</h3>";
                   // Formatar a data
                $data_formatada = date('d/m/Y', strtotime($row['data_agendamento']));

                // Formatar a hora
                $hora_formatada = date('H:i', strtotime($row['horario_agendamento']));

                echo "<span>Data:</span> " . $data_formatada . "<br>";
                echo "<span>Horário:</span> " . $hora_formatada . "<br>";
                    echo "<span>Serviço:</span> " . $row['servico'] . "<br>";
                    echo "<span>Situação:</span> " . $row['situacao'] . "<br>";
                } else {
                    echo "Nenhum resultado encontrado para este agendamento.";
                }
                ?>
            </p>
            <a href="index.php"> <button class="back">Voltar</button></a>
        </div>
    </div>
</body>

</html>