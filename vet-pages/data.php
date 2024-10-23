<?php
include("../inc/header.php");
include("sidebar-vet.php");
include_once($_SERVER['DOCUMENT_ROOT'] . '/VacinePet/config.php');

// Verificação de autenticação
if ($_SESSION['email'] !== 'lmonicagm@gmail.com') {
    echo '<script type="text/javascript">';
    echo 'window.location.href = "../index.php";';
    echo '</script>';
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="../css/css/vetAtend.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>VacinePet</title>
    <style>
    .sidebar {
        height: 400vh;
    }
    </style>
</head>

<body>
    <section class="agendamento-atv">
        <div class="container-conteudo">
            <div class="container">
                <h1>Disponibilizar Horários</h1>
                <h2>Selecione o Mês e o Ano</h2>
                <div class="row">
                    <div class="adoc-atv"><?php // Define o mês e o ano atuais
    $mes=isset($_POST['mes']) ? $_POST['mes'] : date('m');
    $ano=isset($_POST['ano']) ? $_POST['ano'] : date('Y');

    // Array de meses em português
    $meses=[ 1=>'Janeiro',
    2=>'Fevereiro',
    3=>'Março',
    4=>'Abril',
    5=>'Maio',
    6=>'Junho',
    7=>'Julho',
    8=>'Agosto',
    9=>'Setembro',
    10=>'Outubro',
    11=>'Novembro',
    12=>'Dezembro'
    ];

    // Formulário para selecionar o mês e ano
    echo "<form action='' method='POST'>";
    echo "<label for='mes'>Mês: </label>";
    echo "<select class='selecionar' name='mes'>";

    foreach ($meses as $num=> $nome) {
        $selected=($num==$mes) ? "selected": "";
        echo "<option value='$num' $selected>$nome</option>";
    }

    echo "</select>";

    echo "<label for='ano' style='margin-left: 20px;'>Ano: </label>";
    echo "<select class='selecionar' name='ano'>";

    for ($i=date('Y'); $i <=date('Y') + 2; $i++) {
        $selected=($i==$ano) ? "selected": "";
        echo "<option value='$i' $selected>$i</option>";
    }

    echo "</select>";

    echo "<input class='add-hora' type='submit' value='Buscar' style='margin-top: 10px;'>";
    echo "</form>";

    // Função para pegar o nome do dia da semana
    function diaSemana($numeroDia) {
        $diasSemana=['Domingo',
        'Segunda-feira',
        'Terça-feira',
        'Quarta-feira',
        'Quinta-feira',
        'Sexta-feira',
        'Sábado'];
        return $diasSemana[$numeroDia];
    }

    // Exibir dias e horários disponíveis
    if (isset($_POST['mes']) && isset($_POST['ano'])) {
        $diasNoMes=cal_days_in_month(CAL_GREGORIAN, $mes, $ano);

        echo "<h2>". $meses[$mes] . " de ". $ano . "</h2>";
        echo "<form action='' method='POST'>";
        echo "<table border='1'>";
        echo "<tr><th>Data</th><th>Dia da Semana</th><th>Horários Disponíveis</th><th>Selecionar</th></tr>";

        for ($dia=1; $dia <=$diasNoMes; $dia++) {
            $timestamp=mktime(0, 0, 0, $mes, $dia, $ano);
            $numeroDiaSemana=date('w', $timestamp);
            $nomeDiaSemana=diaSemana($numeroDiaSemana);

            echo "<tr>";
            echo "<td>". date('d/m/Y', $timestamp) . "</td>";
            echo "<td>". $nomeDiaSemana . "</td>";
            echo "<td>";
            echo "<input class='slct-hora' type='time' name='horarios[". date('Y-m-d', $timestamp) . "][]' />";
            echo "<button type='button' class='btn-add' onclick='addHorario(this)'>Adicionar Horário</button>";
            echo "<div class='horarios-adicionados' data-date='". date('Y-m-d', $timestamp) . "'></div>";
            echo "</td>";
            echo "<td><input type='checkbox' name='diasDisponiveis[]' value='". date('Y-m-d', $timestamp) . "'></td>";
            echo "</tr>";
        }

        echo "</table>";
        echo "<input type='submit'class='cad-hora' value='Cadastrar Dias Disponíveis'>";
        echo "</form>";
    }

    // Verifica se dias e horários foram selecionados
    if (isset($_POST['diasDisponiveis']) && isset($_POST['horarios'])) {
        $diasSelecionados=$_POST['diasDisponiveis'];
        $horariosSelecionados=$_POST['horarios'];

        // Inserir dados no banco de dados
        $stmt=$conexao->prepare("INSERT INTO dias_disponiveis (data_disponivel, nome_dia_semana, horario_disponivel) VALUES (?, ?, ?)");

        foreach ($diasSelecionados as $dia) {
            $timestamp=strtotime($dia);
            $nomeDiaSemana=diaSemana(date('w', $timestamp));

            if (isset($horariosSelecionados[$dia])) {
                foreach ($horariosSelecionados[$dia] as $horario) {
                    $stmt->bind_param("sss", $dia, $nomeDiaSemana, $horario);
                    $stmt->execute();
                }
            }
        }

        echo "Dias e horários cadastrados com sucesso!";
    }

    else {
        echo "<p>Nenhum dia ou horário foi selecionado.</p>";
    }

    ?></div>
                </div>
            </div>
        </div>
    </section>
    <script>
    function addHorario(button) {
        var container = button.nextElementSibling;
        var newInput = document.createElement('input');
        newInput.type = 'time';
        newInput.classList.add('slct-hora'); // Usando classList.add
        newInput.name = 'horarios[' + container.dataset.date + '][]';
        container.appendChild(newInput);
    }
    </script>
</body>

</html>