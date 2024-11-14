 <?php
include("../inc/header.php");
include("sidebar-cliente.php");
include_once('../config.php');

// Verifica se o email e a senha estão definidos na sessão
if (!isset($_SESSION['email']) || !isset($_SESSION['senha_hash'])) {
    echo '<script>window.location.href = "../inc/login.php";</script>';
    exit;
}

// Verifica se o código do pet foi passado via GET
if (isset($_GET['cod_pet'])) {
    $cod_pet = $_GET['cod_pet'];

    // Consulta o pet
    $query_pet = "SELECT Cod_Pet, Nome_Pet, Raca, Idade, Sexo, Especie, Castracao 
                  FROM pet 
                  WHERE Cod_Pet = '$cod_pet' AND Cod_Tutor = (SELECT Cod_Tutor FROM tutor WHERE Email = '{$_SESSION['email']}')";
    $result_pet = mysqli_query($conexao, $query_pet);

    if ($result_pet && mysqli_num_rows($result_pet) > 0) {
        $row_pet = mysqli_fetch_assoc($result_pet);
        $nome_pet = $row_pet['Nome_Pet'];
        $raca_pet = $row_pet['Raca'];
        $idade_pet = $row_pet['Idade'];
        $sexo_pet = $row_pet['Sexo'];
        $especie_pet = $row_pet['Especie'];
        $castracao_pet = $row_pet['Castracao'];
    } else {
        echo "Pet não encontrado.";
        exit;
    }
} else {
    echo "Código do pet não encontrado.";
    exit;
}

// Verifica se o formulário foi enviado para atualizar os dados do pet
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome_pet = mysqli_real_escape_string($conexao, $_POST['nome']);
    $raca_pet = mysqli_real_escape_string($conexao, $_POST['raca']);
    $idade_pet = mysqli_real_escape_string($conexao, $_POST['idade']);
    $sexo_pet = mysqli_real_escape_string($conexao, $_POST['sexo']);
    $especie_pet = mysqli_real_escape_string($conexao, $_POST['especie']);
    $castracao_pet = mysqli_real_escape_string($conexao, $_POST['castracao']);

    // Atualiza os dados do pet no banco de dados
    $update_query = "UPDATE pet 
                     SET Nome_Pet = '$nome_pet', Raca = '$raca_pet', Idade = '$idade_pet', Sexo = '$sexo_pet', Especie = '$especie_pet', Castracao = '$castracao_pet' 
                     WHERE Cod_Pet = '$cod_pet'";

    if (mysqli_query($conexao, $update_query)) {
        echo "<script>window.location.href='meu-pet.php';</script>";
    } else {
        echo "Erro ao atualizar o pet: " . mysqli_error($conexao);
    }
}
?>

 <!DOCTYPE html>
 <html lang="pt-BR">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Editar Pet</title>
     <link rel="stylesheet" href="../css/css/EstiloUsuario.css">
     <link rel="stylesheet" href="../css/css/responsividade/tela-edit-tutor.css">
     <style>
     .container-editar {
         background-color: #ffffff;
         width: 600px;
         margin-bottom: 40px;
         display: inline-block;
         margin-left: 20px;
         box-shadow: 20px 30px 20px 20px rgba(194, 192, 192, 0.396);
         border-radius: 15px;
         padding: 15px;
         padding-left: 30px;

     }

     .form-section {
         margin-bottom: 30px;
     }

     h2 {
         margin-top: 20px;
         margin-bottom: 10px;
         margin-left: 10%;
     }

     .input-group {
         margin: 10px 0;
         text-align: center;
     }

     .input-group label {
         display: block;
         margin-bottom: 5px;
         text-align: left;
         margin-left: 10%;
     }

     .input-group input {
         width: 80%;
         padding: 10px;
         border: 1px solid #ccc;
         border-radius: 5px;

     }

     .input-group select {
         width: 80%;
         padding: 10px;
         border: 1px solid #ccc;
         border-radius: 5px;

     }

     .btn-submit {
         background-color: #52BACB;
         color: white;
         border-radius: 8px;
         cursor: pointer;
         width: 150px;
         border: 1px solid #52BACB;
         height: 40px;
         font-weight: 600;

     }

     .btn-cancel {
         height: 40px;
         background-color: transparent;
         color: #52BACB;
         border-radius: 8px;
         cursor: pointer;
         width: 150px;
         text-decoration: none;
         border: 3.5px solid #52BACB;
         font-weight: 600;
         padding: 5px;
     }

     .btn-submit:hover {
         background-color: #69c2d0;
         border-color: #69c2d0;
     }

     .btn-cancel:hover {
         color: #69c2d0;
         border-color: #69c2d0;

     }

     .input-button {
         margin-top: 60px;
         margin-bottom: 20px;
         text-align: center;
     }

     .input-button a {
         text-decoration: none;
         color: #52BACB;
     }
     </style>
 </head>

 <body>
     <div class="container">
         <div class="container-editar">
             <h2 id="title-editpet">Editar Pet</h2>
             <form method="POST" action="">
                 <div class="input-group">
                     <label for="nome">Nome do Pet</label>
                     <input type="text" id="nome" name="nome" value="<?php echo $nome_pet; ?>">
                 </div>
                 <div class="input-group">
                     <label for="especie">Espécie</label>
                     <select id="especie_select" name="especie" onchange="alternarSexo()">
                         <option value="Cachorro" <?php echo ($especie_pet == 'Macho') ? 'selected' : ''; ?>>Cachorro
                         </option>
                         <option value="Gato" <?php echo ($especie_pet == 'Gato') ? 'selected' : ''; ?>>Gato</option>
                     </select>
                 </div>
                 <div class="input-group">
                     <label for="raca">Raça</label>
                     <input type="text" id="raca" name="raca" value="<?php echo $raca_pet; ?>">
                 </div>

                 <div class="input-group">
                     <label for="idade">Idade</label>
                     <input type="number" id="idade" name="idade" value="<?php echo $idade_pet; ?>">
                 </div>

                 <div class="input-group">
                     <label for="sexo">Sexo</label>
                     <select id="sexo_select" name="sexo" onchange="alternarSexo()">
                         <option value="Macho" <?php echo ($sexo_pet == 'Macho') ? 'selected' : ''; ?>>Macho</option>
                         <option value="Fêmea" <?php echo ($sexo_pet == 'Fêmea') ? 'selected' : ''; ?>>Fêmea</option>
                     </select>

                 </div>
                 <div class="input-group">
                     <label for="castracao">Castrado</label>
                     <select id="castracao_select" name="castracao" onchange="alternarCastracao()">
                         <option value="Sim" <?php echo ($castracao_pet == 'Sim') ? 'selected' : ''; ?>>Sim</option>
                         <option value="Não" <?php echo ($castracao_pet == 'Não') ? 'selected' : ''; ?>>Não</option>
                     </select>

                 </div>

                 <div class="input-button">
                     <button type="submit" class="btn-submit">Salvar Alterações</button>

                     <a href="meu-pet.php" class="btn-cancel"> Cancelar </a>

                 </div>
         </div>




         </form>
     </div>
     </div>

 </body>

 </html>