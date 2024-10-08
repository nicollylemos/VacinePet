<!--
 /**
 * @file agendamento.php
 * @brief Página de agendamento de serviços para pets (castração de felinos ou vacinação ).
 *
 * Este arquivo contém o formulário de agendamento, dividido em etapas. O usuário pode selecionar
 * a data, horário, serviço desejado e fornecer informações sobre o pet e o proprietário.
 * 
 * O formulário é estruturado em várias etapas, permitindo uma experiência de usuário fluida e organizada.
 *
 * @date 2024-09-20
 * @author Eduarda Oliveira de Souza
 * @version 1.0
 */
-->
<!DOCTYPE html>
<html lang="pt-BR">

<!--
    * @brief Cabeçalho HTML contendo informações de metadados e links para arquivos CSS externos.
    * @details Inclui links para a estilização da página, o ícone do site e bibliotecas externas como FontAwesome e Swiper.
-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=10, minimum-scale=1.0">
    <link rel="stylesheet" href="../css/css/responsividade/telaagenda.css">
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/css/agendar.css">
    <link rel="stylesheet" href="../css/css/calendarioo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <title>Agendamento</title>
    <style>
    .hidden {
        display: none;
    }
    </style>
</head>

<body>


    <div class="container">
        <div class="blue-div-resp">
            <h2 class="logo">VacinePet <i class="fa-solid fa-paw fa-rotate-by"
                    style="color: #fffff; --fa-rotate-angle: 49deg; width: 13px; height:7px; font-size:15px;"></i></h2>
        </div>

        <div class="quad">
            <div class="form">
                <h2 class="logo-resp" style="font-family:baloo; color:white;">VacinePet <i
                        class="fa-solid fa-paw fa-rotate-by"
                        style="color: #fffff; --fa-rotate-angle: 49deg; width: 13px; height:7px; font-size:15px;"></i>
                </h2>
            </div>
            <?php
        // Inclui o arquivo de configuração apenas uma vez
        include_once($_SERVER['DOCUMENT_ROOT'] . '/VacinePet/config.php');

        // Verifica se um mês e ano foram enviados via POST, senão usa os valores padrão
        $mes = isset($_POST['mes']) ? $_POST['mes'] : date('m'); // Mês atual se não enviado
        $ano = isset($_POST['ano']) ? $_POST['ano'] : date('Y'); // Ano atual se não enviado

        // Array com os meses em português
        $meses = [
            1 => 'Janeiro', 2 => 'Fevereiro', 3 => 'Março', 4 => 'Abril',
            5 => 'Maio', 6 => 'Junho', 7 => 'Julho', 8 => 'Agosto',
            9 => 'Setembro', 10 => 'Outubro', 11 => 'Novembro', 12 => 'Dezembro'
        ];

        // Formulário para selecionar mês e ano
        echo "<h2>Selecione o Mês e o Ano</h2>";
        echo "<form action='' method='POST'>";
        echo "<label for='mes'>Mês:</label>";
        echo "<select name='mes'>";
        foreach ($meses as $num => $nome) {
            $selected = ($num == $mes) ? "selected" : "";
            echo "<option value='$num' $selected>$nome</option>";
        }
        echo "</select>";

        echo "<label for='ano'>Ano:</label>";
        echo "<select name='ano'>";
        for ($i = date('Y'); $i <= date('Y') + 2; $i++) { // Exibe o ano atual e mais dois
            $selected = ($i == $ano) ? "selected" : "";
            echo "<option value='$i' $selected>$i</option>";
        }
        echo "</select>";

        echo "<input type='submit' value='Verificar Disponibilidade'>";
        echo "</form>";

        // Após a seleção, exibe os dias e horários disponíveis para o mês e ano escolhidos
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['mes']) && isset($_POST['ano'])) {
            // Consulta os dias e horários disponíveis para o mês e ano selecionados
            $query = "SELECT data_disponivel, nome_dia_semana, horario_disponivel 
                      FROM dias_disponiveis 
                      WHERE MONTH(data_disponivel) = ? AND YEAR(data_disponivel) = ? 
                      ORDER BY data_disponivel, horario_disponivel";

            $stmt = $conexao->prepare($query);
            $stmt->bind_param('ii', $mes, $ano);
            $stmt->execute();
            $result = $stmt->get_result();

            // Verifica se há resultados
            if ($result->num_rows > 0) {
                echo "<h2>Agendar um Horário para " . $meses[$mes] . " de " . $ano . "</h2>";
                echo "<form action='processar_agendamento.php' method='POST'>";
                echo "<label for='data'>Selecione uma data e horário:</label><br>";

                // Exibe os dias e horários disponíveis
                while ($row = $result->fetch_assoc()) {
                    $data = date('d/m/Y', strtotime($row['data_disponivel']));
                    $nomeDiaSemana = $row['nome_dia_semana'];
                    $horario = date('H:i', strtotime($row['horario_disponivel']));

                    echo "<input type='radio' name='agendamento' value='" . $row['data_disponivel'] . " " . $row['horario_disponivel'] . "'> ";
                    echo $data . " (" . $nomeDiaSemana . ") - " . $horario . "<br>";
                }

                echo "<input type='submit' value='Confirmar Agendamento'>";
                echo "</form>";
            } else {
                echo "Não há dias ou horários disponíveis para o mês selecionado.";
            }

            // Fecha a conexão
            $stmt->close();
            $conexao->close();
        }
        ?>
        </div>
    </div>
    </div>