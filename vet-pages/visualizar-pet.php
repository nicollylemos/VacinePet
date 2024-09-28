<?php
include("../inc/header.php");
include("sidebar-vet.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/css/veterinarioo.css" />
    <link rel="stylesheet" href="../css/css/vet-adocaoo.css" />
    <title>VacinePet</title>
    <style>

    </style>
</head>


<body>
    <section class="adocoes-atv">
        <div class="container">
            <div class="container-tabela">
                <div class="content">
                    <h1> Adoções Ativas</h1>
                    <div class="table">
                        <table>
                            <tr>
                                <th>Espécie</th>
                                <th>Nome</th>
                                <th>Sexo</th>
                                <th>Fase</th>
                                <th>Porte</th>
                                <th>Cidade</th>
                                <th>Foto</th>
                                <th>Opções</th>
                            </tr>
                            <tr>

                                </td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>28/01/2025</td>
                                <td>16:00</td>
                                <td>Nicolly Lemos</td>
                                <td>Bagu
                                <td>Pendente</td>
                                </td>
                                <td>Opções</td>
                                <td>
                                    <a href="view.php?id=<?php echo $livro['id']; ?>" class="btn btn-sm btn-warning"><i
                                            class="fa fa-eye" style="margin-left: 20px; color: #787575;"></i></a>
                                    <a href="edit.php?id=<?php echo $livro['id']; ?>"
                                        class="btn btn-sm btn-secondary"><i class="fa fa-edit"
                                            style="margin-left: 20px; color: #787575;"></i></a>


                                    <a href="#" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#delete-modal" data-customer="<?php echo $livro['id']; ?>"><i
                                            class="fa fa-trash" style="margin-left: 20px; color: #787575;"></i></a>

                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

</body>

</html>