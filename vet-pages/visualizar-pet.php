<?php
include("../inc/header.php");
include("sidebar-vet.php");
include_once('../config.php');  

$sql = "SELECT * FROM pet_adocao"; 
$result = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/css/veterinarioo.css" />
    <link rel="stylesheet" href="../css/css/vet-adocaoo.css" />
    <title>VacinePet</title>
</head>

<body>
    <section class="adocoes-atv">
        <div class="container">
            <div class="container-tabela">
                <div class="content">
                    <h1> Adoções Ativas</h1>
                    <div class="table">
                        <table>
                            <thead>
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
                            </thead>
                            <tbody>
                                <?php
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        echo "<td>" . $row['especie'] . "</td>";
                                        echo "<td>" . $row['nome'] . "</td>";
                                        echo "<td>" . $row['sexo'] . "</td>";
                                        echo "<td>" . $row['fase'] . "</td>";
                                        echo "<td>" . $row['porte'] . "</td>";
                                        echo "<td>" . $row['cidade'] . "</td>";
                                        $foto = $row['foto'];
                                        echo "<td><img src='$foto' alt='Foto do Pet' style='max-width: 100px;'></td>";
                                        echo "<td>";
                                        echo "<a href='deletar-adocao.php?cod_adocao=" . $row['cod_adocao'] . "'>";
                                        echo "<button>";
                                        echo"<i class='fa-solid fa-eye icon'></i>";
                                        echo"</button>";
                                        echo"</a>";
                                        echo "</td>";
                                        echo "<td>";
                                        echo "<a href='editar-adocao.php?cod_adocao=" . $row['cod_adocao'] . "'>";
                                        echo "<button>";
                                        echo"<i class='fa-solid fa-eye icon'></i>";
                                        echo"</button>";
                                        echo"</a>";
                                        echo "</td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='8'>Nenhuma adoção ativa encontrada.</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>