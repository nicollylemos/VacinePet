<!--
 /**
 * @file adocao.php
 * @brief Página de adoção para o usuário.
 *
 * Este arquivo contém um texto explicativo do funcionamento da adoção para 
 o usuário e todos os pets que estão disponíveis para adotar, que o profissional
 adicionou.
 * 
 * O formulário tem uma estética visual agradável, permitindo uma experiência de usuário fluida e organizada.
 *
 * @date 2024-09-20
 * @Nicolly Lemos da Silva
 * @version 1.0
 */
-->
<?php
include("../inc/header.php");
include("sidebar-veterinaria.php");

if ($_SESSION['email'] !== 'lmonicagm@gmail.com') {
    echo '<script type="text/javascript">';
    echo 'window.location.href = "../index.php";';
    echo '</script>';
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<!--
    * @brief Cabeçalho HTML contendo informações de metadados e links para arquivos CSS externos.
    * @details Inclui links para a estilização da página, o ícone do site e bibliotecas externas como FontAwesome.
-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="../css/css/vetGerenciar.css" />
    <link rel="stylesheet" href="../css/css/responsividade/telasvetpages.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="calendar, events, reminders, javascript, html, css, open source coding" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>VacinePet</title>
    <style>
#gerencia{
    padding-top: 20px;
  top: 10px;
  left: 320px;
  position: absolute;
}


    </style>
</head>

<body>
<div class="container">
    <section class="agendamento-atv">
   
        <div class="gerenciar" id="gerencia" >

            <div class="row">
                <!-- Disponibilizar Atendimentos -->
                <a href="data.php" style="text-decoration: none;">
                    <div class="adoc-atv">

                        <div class="col-xs-12 text-center p-0">
                            <i class="fa-solid fa-plus fa-4x ico" alt="Adicionar Atendimento"></i>
                        </div>
                        <div class="text-adocao">
                            <p style="font-family: baloo;">Disponibilizar Horários</p>
                        </div>

                    </div>
                </a>

                <!-- Deletar atendimentos -->
                <a href="deletar.php" style="text-decoration: none;">
                    <div class="adoc-atv">

                        <div class="col-xs-12 text-center p-0">
                            <i class="fa-solid fa-trash fa-4x ico" alt="Deletar Atendimento"></i>
                        </div>
                        <div class="text-adocao">
                            <p style="font-family: baloo;">Apagar<br> atendimentos</p>
                        </div>



                    </div>

                </a>

                <!-- Visualizar atendimentos -->
                <a href="ver-disponivel.php" style="text-decoration: none;">
                    <div class="adoc-atv">

                        <div class="col-xs-12 text-center p-0">
                            <i class="fa-regular fa-calendar fa-4x ico" alt="Visualizar Atendimento"></i>
                        </div>
                        <div class="text-adocao">
                            <p style="font-family: baloo;">Atendimentos disponíveis</p>
                        </div>
                    </div>
                </a>

            </div>
        </div>
        </div>
        </div>
      
    </section>
 
    </div>
</body>

</html>