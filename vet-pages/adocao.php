<?php
include("../inc/header.php");
include("sidebar-vet.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="../css/css/veterinarioo.css" />
    <link rel="stylesheet" href="../css/css/vet-adocao.css" />
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
                    <h1> Adoção</h1>
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

                        <div id="vizu" class="adoc-atv">
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
    <dialog class="modal" id="modalEdit">
        <div class="modalEdit">
            <h1>Editar Valor</h1>
            <p>Valor atual:</p>
            <div>R$ 149,99</div>
            <p>Novo valor:</p>
            <input type="number" maxlength="5" placeholder="Novo Valor" class="form-control" name="valor">
        </div>
        <button class="save">Salvar</button>
        <button class="close" onclick=" modalEdit.close()">Fechar</button>
        </div>
    </dialog>

</body>

</html>