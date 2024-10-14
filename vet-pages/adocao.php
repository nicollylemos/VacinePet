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
 * @author Eduarda Oliveira de Souza
 * @version 1.0
 */
-->
<?php
include("../inc/header.php");
include("sidebar-vet.php");
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
    <link rel="stylesheet" href="../css/css/veterinarioo.css" />
    <link rel="stylesheet" href="../css/css/vetAdotar.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="calendar, events, reminders, javascript, html, css, open source coding" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>VacinePet</title>
</head>

<body>
    <section class="agendamento-atv">
        <div class="container">
            <div class="container-tabela">
                <div class="content">

                    <div class="row">
                        <div class="adoc-atv">
                            <a href="add-pet.php" style="text-decoration: none;">
                                <div class="row">
                                    <div class="col-xs-12 text-center p-0">
                                        <i class="fa-solid fa-plus fa-4x ico"></i>
                                    </div>
                                    <div class="text-adocao">
                                        <p style="font-family: baloo;">Adicionar Adoção</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="adoc-atv">
                            <a href="visualizar-pet.php" style="text-decoration: none;">
                                <div class="row">
                                    <div class="col-xs-12 text-center p-0">
                                        <i class="fa-solid fa-paw fa-4x ico"></i>
                                    </div>
                                    <div class="text-adocao">
                                        <p style="font-family: baloo;">Adoções Ativas</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>


</body>

</html>