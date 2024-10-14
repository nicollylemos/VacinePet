<?php 
 include("../inc/header.php");
 include("sidebar-vet.php");
include_once('../config.php');

// Verifica se o email e a senha estão definidos na sessão
if (!isset($_SESSION['email']) || !isset($_SESSION['senha_hash'])) {
    echo '<script type="text/javascript">';
    echo 'window.location.href = "../index.php";';
    echo '</script>';
}

if ($_SESSION['email'] !== 'lmonicagm@gmail.com') {
    echo '<script type="text/javascript">';
    echo 'window.location.href = "../index.php";';
    echo '</script>';
 
}

// Caso contrário, o usuário está autenticado e pode acessar a página
$logado = $_SESSION['email'];
$sql = "SELECT * FROM vacina ORDER BY cod_vac ";
$result = $conexao->query($sql);

  // Alterna a classe com base no tipo da vacina

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
    <link rel="stylesheet" href="../css/css/VetEst.css" />
    <title>VacinePet</title>
    <style>
    </style>
</head>

<body>
    <section class="agendamento-atv">
        <div class="container">
            <div class="container-tabela">
                <div class="content">
                    <h1> Alteração de Valores</h1>
                    <div class="valores">

                        <?php
                            while ($user_data = mysqli_fetch_assoc($result))
                            {
                                echo"<div class='container-valores vac-cat'>";
                                echo"<tr>";
                                echo"<div class='id'>";
                                echo"<td>" . $user_data['cod_vac'] . "</td>";
                                echo"</div>";
                                echo"<div class='info-val'>";
                                echo"<td>" . $user_data['nome'] . "</td>";
                                echo"</div>";
                                echo"<div class='info-val'>";
                                echo"<td>" . $user_data['tipo'] . "</td>";
                                echo"</div>";
                                echo"<div class='info-val'>";
                                echo"<td>" . $user_data['valor'] . "</td>";
                                echo"</div>";
                                echo "<a href='editValor.php?cod_vac=" . $user_data['cod_vac'] . "'>";
                                echo "<button>";
                                echo"<i class='fa-solid fa-pen-to-square icon'></i>";
                                echo"</button>";
                                echo"</a>";
                                echo"</div>";
                            } 
                            ?>

                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>

</body>

</html>