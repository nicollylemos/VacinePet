<!--
 /**
 * @file add-pet.php
 * @brief Página de adicionar pet para adoção (disponível apenas para o profissional).
 *
 * Este arquivo contém um formulário para adicionar um novo pet para a página de adoção,
 podendo ser acessada apenas pelo profissional, com os campos de: espécie, nome (opcional),
 sexo, fase (filhote ou adulto), porte, cidade(Sorocaba ou Votorantim) e upload de foto. 
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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="../css/css/veterinarioo.css" />
    <link rel="stylesheet" href="../css/css/vet-adocaoo.css" />
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
            <h2 id="new" style="font-family: baloo; color:#41a4b3; font-size:38px">Nova Adoção <i
                    class="fa-solid fa-paw pata" style="color: #41a4b3;"></i></h2>

            <form id="form" action="add.php" method="post">
                <!-- area de campos do form -->
                <div class="row">
                    <div class="form-group col-md-7 " style="margin-bottom: 20px;">
                        <label class="label">Espécie:</label>
                        <select id="form-control">
                            <option>Gato</option>
                            <option>Cachorro</option>
                        </select>
                    </div>

                    <div class="form-group col-md-3" style="margin-bottom: 20px;">
                        <label class="label">Nome:</label>
                        <input type="text" maxlength="11" class="form-control" name="customer['cpf_cnpj']">
                    </div>

                    <div class="form-group col-md-2" style="margin-bottom: 20px;">
                        <label class="label">Sexo:</label>
                        <select id="form-control">
                            <option>Macho</option>
                            <option>Fêmea</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-5" style="margin-bottom: 20px;">
                        <label class="label">Fase:</label>
                        <select id="form-control">
                            <option>Filhote</option>
                            <option>Adulto</option>
                        </select>
                    </div>
                </div>

                <div class="form-group col-md-3" style="margin-bottom: 20px;">
                    <label class="label">Porte:</label>
                    <select id="form-control">
                        <option>Pequeno</option>
                        <option>Médio</option>
                        <option>Grande</option>
                    </select>
                </div>

                <div class="form-group col-md-3" style="margin-bottom: 20px;">
                    <label class="label">Cidade:</label>
                    <select id="form-control">
                        <option>Sorocaba - SP</option>
                        <option>Votorantim - SP</option>
                    </select>
                </div>

                <div class="row">
                    <div class="form-group col-md-3" style="margin-bottom: 20px;">
                        <label class="label" for="foto">Foto:</label>
                        <input type="file" maxlength="8" class="form-picture" id="foto" name="foto">
                    </div>
                    <div class="form-group col-md-3" style="margin-bottom: 20px;">
                        <label for="img">Pré-visualização</label>
                        <img maxlength="8" class="form-picture shadow rounded p-2 mb-2 bg-body" id="imgPreview"
                            src="../imgs/semimagem.png">
                    </div>
                </div>

                <div id="actions" class="row mt-2" style="margin-bottom: 20px;">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-warning" style="color:#ffffff;"> <i
                                class="fa-solid fa-sd-card"></i> Salvar</button>
                        <a href="adocao.php" class="btn btn-outline-secondary"> <i class="fa-solid fa-arrow-left"></i>
                            Voltar</a>
                    </div>
                </div>

               
            </form>
        </div>
    </section>
</body>

</html>