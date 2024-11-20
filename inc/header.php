<?php
session_start();
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
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/css/modal-agend.css">
    <link rel="stylesheet" href="../css/css/responsividade/modal.css">
    <link rel="icon" href="/VacinePet/imgs/logo-borda.png" type="image/x-icon">



    <style>
    body {

        margin: 0;
        font-family: Arial, Helvetica, sans-serif;

    }

    @font-face {
        font-family: 'league';
        src: url("../font/league/LeagueSpartan-Bold.ttf");
    }

    @font-face {
        font-family: 'poppins';
        src: url("../font/poppins/Poppins-Regular.ttf");
    }

    .no-scroll {
        position: fixed;
        overflow: hidden;
        width: 100%;
    }

    .topnav .logo:hover {
        color: #FA5909;
    }

    .topnav {

        overflow: hidden;
        background-color: white;
        border-bottom: 1px solid #ddd;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 16px;

    }

    .topnav .logo {
        font-size: 24px;
        font-family: baloo;
        color: #FA5909;
    }

    .topnav .menu {
        display: flex;
        gap: 15px;
        position: relative;
    }

    .topnav a {
        display: block;
        color: #3e3e3e;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
        font-weight: 600;
        font-family: poppins;

    }

    .topnav a:hover {
        color: #52BACB;
    }

    .topnav .buttons {
        display: flex;
        gap: 1px;
    }

    .topnav .entrar:hover {
        background-color: #7bcdd9;
        border-color: #7bcdd9;
    }

    .topnav .cad:hover {
        border-color: #7bcdd9;
        color: #7bcdd9;
    }

    .cad {
        cursor: pointer;
        font-size: 18px;
        border-radius: 10px;
        background-color: transparent;
        border-radius: 5px;
        border: 3.5px solid #52BACB;
        width: 150px;
        letter-spacing: 0.5px;
        text-decoration: none;
        color: #52BACB;
        font-family: baloo;
        padding: 1%;
    }

    .login {
        display: inline;
        cursor: pointer;
        font-size: 18px;
        border-radius: 10px;
        background-color: #52BACB;
        border-radius: 2px;
        border: 3.5px solid #52BACB;
        width: 150px;

        letter-spacing: 0.5px;
        text-decoration: none;
        color: #fff;
        font-family: baloo;
        padding: 1%;
    }

    .topnav .icon {
        display: none;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        padding: 12px 16px;
        z-index: 1;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    @media screen and (max-width: 1309px) {
        .buttons {
            position: relative;
            top: -70px;
        }

        .login {
            width: 150px !important;
        }

        .cad {
            width: 150px !important;
        }

        .topnav .menu a {
            display: none;

        }

        .topnav .menu {
            display: block;
        }

        .topnav .buttons {
            display: none;
        }

        .topnav .icon {
            display: block;
        }
    }

    @media screen and (max-width: 1309px) {
        .topnav.responsive {
            position: relative;
            flex-direction: column;
            align-items: flex-start;
            z-index: 10000;
            height: 100vh;
        }

        .topnav.responsive .menu {
            display: block;
            width: 100%;
        }

        .topnav.responsive .menu a {
            display: block;
            text-align: left;
            width: 100%;
            padding: 14px 16px;
            box-sizing: border-box;
        }

        .topnav.responsive .buttons {
            display: block;
            width: 100%;
            padding: 0 16px;
            z-index: -20;
        }

        .topnav.responsive .buttons .login,
        .topnav.responsive .buttons .cad {
            width: auto;
            margin: 5px 0;
            position: relative;
            top: 30px;
        }

        .topnav.responsive .icon {
            position: absolute;
            right: 16px;
            top: 16px;
        }
    }
    </style>
</head>

<body>

    <div class="topnav" id="myTopnav">
        <a href="/VacinePet/index.php" class="logo">VacinePet<i class="fa-solid fa-paw fa-rotate-by"
                style="color: #FA5909; --fa-rotate-angle: 49deg; width: 18px; height: 6px; font-size: 13px;"></i></a>
        <div class="menu">
            <a href="/VacinePet/index.php">Início</a>
            <a href="/VacinePet/conteudo/profissional.php">Profissional</a>
            <?php if ($admin || $logado) : ?>

            <a href="/VacinePet/usuario/agendamento.php">Agendamento</a>
            <?php endif; ?>
            <?php if (!isset($_SESSION['email']) && !isset($_SESSION['senha_hash'])): ?>
            <a href="#" onclick="document.getElementById('modalLogin').showModal(); return false;">Agendamento</a>
            <?php endif; ?>
            <a href=" /VacinePet/conteudo/adocao.php">Adoção</a>
            <a href="/VacinePet/conteudo/castracao.php">Castração</a>
            <a href="/VacinePet/infos-page/sobre-vacinepet.php">Sobre</a>
        </div>

        <div class="buttons">
            <?php if ($admin): ?>
            <a href="/VacinePet/vet-pages/index.php"><i class="fa-solid fa-circle-user"
                    style="color: #52BACB; font-size: 25px;"></i>
                <?php echo "Bem-vinda, " .  $tutorDados['Nome']; ?>
            </a>
            <?php endif; ?>
            <?php if ($logado): ?>
            <a href="/VacinePet/cliente-tela/index.php"> <i class="fa-solid fa-circle-user"
                    style="color:  #52BACB;font-size: 25px;"></i>
                <?php echo "Bem-vindo, " .  $tutorDados['Nome']; ?></a>
            <?php endif; ?>
            <?php if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)): ?>
            <a href="/VacinePet/inc/login.php"><button class="login" style="border-radius:10px;">Entrar</button></a>
            <a href="/VacinePet/usuario/cadastro.php"><button class="cad"
                    style="border-radius:10px;">Cadastrar</button></a>
            <?php endif; ?>



        </div>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i> <!-- Aqui está o ícone de hambúrguer -->
        </a>
    </div>

    <script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        var body = document.body;
        var html = document.documentElement;
        if (x.className === "topnav") {
            x.className += " responsive"; // Abre o menu responsivo
            body.classList.add("no-scroll"); // Bloqueia a rolagem no body
        } else {
            x.className = "topnav"; // Fecha o menu
            body.classList.remove("no-scroll"); // Libera a rolagem no body
            html.classList.remove("no-scroll"); // Libera a rolagem no html
        }
    }
    </script>
    <dialog class="modalLog" id="modalLogin">
        <div class="modalLogin">
            <button class="close" onclick="document.getElementById('modalLogin').close()">
                <i class="fa-regular fa-circle-xmark"></i>
            </button>
            <h1> Aviso:<br> Login Necessário</h1>
            <p>Para realizar o agendamento, é necessário estar logado em sua conta. Por favor, faça login para
                continuar.</p>
            <a href="/VacinePet/inc/login.php" class="logar">
                <button class="entrar" style="border-radius:10px;">Entrar</button>
            </a>
            <p>Não tem uma conta? <a href="/VacinePet/usuario/cadastro.php" class="cadastrar">Cadastre-se aqui!</a></p>
        </div>
    </dialog>
</body>

</html>