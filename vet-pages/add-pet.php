<?php 
include("../inc/header.php");  
include("sidebar-vet.php");    
include_once('../config.php'); 

// Verifica se o email e a senha estão definidos na sessão
if (!isset($_SESSION['email']) || !isset($_SESSION['senha_hash'])) {
    header('Location: login.php');
    exit;
}

// Verifica se o email na sessão é diferente do permitido
if ($_SESSION['email'] !== 'lmonicagm@gmail.com') {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
    exit;
}

$logado = $_SESSION['email'];




?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="../css/css/veterinarioo.css" />
    <link rel="stylesheet" href="../css/css/vet-adocaoo.css" />
    <meta name="keywords" content="calendar, events, reminders, javascript, html, css, open source coding" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>VacinePet</title>

    <!-- Adicionando a função de preview de imagem -->
    <script>
    function previewImagem(event) {
        const imgPreview = document.getElementById('imgPreview');
        const file = event.target.files[0];

        // Verifica se há um arquivo e se é uma imagem
        if (file) {
            const reader = new FileReader();

            reader.onload = function(e) {
                imgPreview.src = e.target.result; // Define a imagem de preview
            };

            reader.readAsDataURL(file); // Lê o arquivo como URL de dados
        }
    }
    </script>
</head>

<body>

    <section>
        <div class="container">
            <form action="adcPet.php" method="post" enctype="multipart/form-data">
                <!-- área de campos do formulário -->
                <div class="row">
                    <h2 id="new">Nova Adoção <i class="fa-solid fa-paw pata"></i></h2>

                    <!-- Espécie -->
                    <div>
                        <label>Espécie:</label>
                        <select name="pet_especie">
                            <option>Gato</option>
                            <option>Cachorro</option>
                        </select>
                    </div>

                    <!-- Nome -->
                    <div>
                        <label>Nome:</label>
                        <input type="text" maxlength="50" name="pet_nome">
                    </div>

                    <!-- Sexo -->
                    <div>
                        <label>Sexo:</label>
                        <select name="pet_sexo">
                            <option>Macho</option>
                            <option>Fêmea</option>
                        </select>
                    </div>
                </div>

                <!-- Fase -->
                <div>
                    <label>Fase:</label>
                    <select name="pet_fase">
                        <option>Filhote</option>
                        <option>Adulto</option>
                    </select>
                </div>

                <!-- Porte -->
                <div>
                    <label>Porte:</label>
                    <select name="pet_porte">
                        <option>Pequeno</option>
                        <option>Médio</option>
                        <option>Grande</option>
                    </select>
                </div>

                <!-- Cidade -->
                <div>
                    <label>Cidade:</label>
                    <select name="pet_cidade">
                        <option>Sorocaba - SP</option>
                        <option>Votorantim - SP</option>
                    </select>
                </div>

                <!-- Campo de upload de foto -->
                <div>
                    <label for=" foto">Foto:</label>
                    <input type="file" id="foto" name="pet_foto_pet" accept="image/*" onchange="previewImagem(event)">
                </div>

                <!-- Imagem de preview -->
                <div>
                    <img id="imgPreview" src="../imgs/semimagem.png"
                        class="form-picture shadow rounded p-2 mb-2 bg-body" alt="Preview da Imagem"
                        style="max-width: 300px; max-height: 300px;" />
                </div>

                <!-- Botões de ação -->
                <div>
                    <button type="submit" class="btn-salvar">Salvar</button>
                    <button class="btn-voltar">
                        <a href="adocao.php">Voltar</a>
                    </button>
                </div>
            </form>
        </div>
    </section>

</body>

</html>