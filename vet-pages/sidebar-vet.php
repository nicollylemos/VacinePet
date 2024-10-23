<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/VacinePet/config.php');


$logado = null; // Inicializa como null
$admin = null;  // Inicializa como null
$nome = null;
$tutorDados = null; // Inicializa a variável para armazenar os dados do tutor

if (isset($_SESSION['email']) && isset($_SESSION['senha_hash'])) {
    $logado = $_SESSION['email'];
    // Se for o email do administrador
    if ($logado === 'lmonicagm@gmail.com') {
        $admin = $_SESSION['email']; // Define o admin
        $logado = null; // Remove o logado
    }
    
    // Prepare a consulta para obter o cod_tutor
    $query = "SELECT cod_tutor FROM tutor WHERE email = ?";
    
    // Cria um statement
    $stmt = $conexao->prepare($query);
    
    // Assumindo que você está armazenando a senha em texto claro, o que não é recomendado
    // Caso contrário, você deve substituir pela forma de hash que você está usando
    $stmt->bind_param('s', $_SESSION['email']);
    
    // Executa a consulta
    $stmt->execute();
    
    // Armazena o resultado
    $stmt->store_result();
    
    // Verifica se foi encontrado algum resultado
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($cod_tutor);
        $stmt->fetch();

        // Agora que temos o cod_tutor, vamos buscar todos os dados do tutor
        $queryTutor = "SELECT * FROM tutor WHERE Cod_Tutor = ?";
        
        // Prepara a nova consulta
        $stmtTutor = $conexao->prepare($queryTutor);
        $stmtTutor->bind_param('i', $cod_tutor); // 'i' porque Cod_Tutor é um inteiro
        $stmtTutor->execute();
        
        // Armazena o resultado
        $resultTutor = $stmtTutor->get_result();
        
        // Verifica se foi encontrado algum resultado
        if ($resultTutor->num_rows > 0) {
            // Puxa todos os dados do tutor
            $tutorDados = $resultTutor->fetch_assoc(); // Armazena os dados em um array associativo
        } 
        
        // Fecha o statement do tutor
        $stmtTutor->close();
    } 
    // Fecha o statement
    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VacinePet</title>
    <link rel="stylesheet" href="../css/css/sidebarvet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css">
</head>

<body>
    <section class="menu-sidebar">
        <nav class="sidebar">
            <header>
                <div class="image-text">
                    <div class="text logo-text"><span class="hello">
                            <?php echo "Olá, " .  $tutorDados['Nome']; ?></span></div>
                </div><i class=" fa-solid fa-angle-left"></i>
            </header>
            <div class="menu-bar">
                <div class="menu">
                    <ul class="menu-links">
                        <li class="nav-link"><a href="index.php"><i class="fa-solid fa-bars-progress icon"></i><span
                                    class="text nav-text">Agendamentos
                                    Ativos</span></a></li>
                        <li class="nav-link"><a href="htrc-agendamentos.php"><i
                                    class="fa-solid fa-clock-rotate-left icon"></i><span class="text nav-text">Histórico
                                    Agendamentos</span></a></li>
                        <li class="nav-link"><a href="diario.php"><i class="fa-solid fa-calendar-days icon"></i><span
                                    class="text nav-text">Meu Diário</span></a></li>
                    </ul>
                    <ul class="menu-links">
                        <li class="nav-link"><a href="valores-alt.php"><i class="fa-solid fa-money-bill icon"></i><span
                                    class="text nav-text">Alteração de
                                    Valores</span></a></li>
                    </ul>
                    <li class="nav-link"><a href="adocao.php"><i class="fa-solid fa-paw icon"></i><span
                                class="text nav-text">Adoção</span></a></li>
                    <li class="nav-link"><a href="gerencia-atend.php"><i class="fa-solid fa-clock icon"></i><span
                                class="text nav-text">Gerenciar Atendimento</span></a></li>
                    <li class="nav-link"><a href="configuracao.php"><i class="fa-solid fa-cog icon"></i><span
                                class="text nav-text">Configuração</span></a></li>

                </div>
            </div>
        </nav>
    </section>
    <section class="home">
        <div class="content"></div>
    </section>
    <script>
    const body = document.querySelector('body'),
        sidebar = body.querySelector('nav'),
        toggle = body.querySelector(".fa-solid"),
        modeSwitch = body.querySelector(".toggle-switch"),
        modeText = body.querySelector(".mode-text");

    toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        }

    ) searchBtn.addEventListener("click", () => {
            sidebar.classList.remove("close");
            separacao.classList.remove("close");
        }

    ) modeSwitch.addEventListener("click", () => {
            body.classList.toggle("dark");

            if (body.classList.contains("dark")) {
                modeText.innerText = "Light mode";
            } else {
                modeText.innerText = "Dark mode";

            }
        }

    );
    </script>
</body>

</html>