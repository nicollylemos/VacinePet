<?php
include_once('../config.php');

// Informações do Pet
$especie = $_POST['pet_especie'];
$nome = $_POST['pet_nome'];
$sexo = $_POST['pet_sexo'];
$fase = $_POST['pet_fase'];
$porte = $_POST['pet_porte'];
$cidade = $_POST['pet_cidade'];

// Processar a imagem
if (isset($_FILES['pet_foto_pet']) && $_FILES['pet_foto_pet']['error'] == 0) {
    $foto_tmp = $_FILES['pet_foto_pet']['tmp_name'];  // Arquivo temporário
    $foto_nome = $_FILES['pet_foto_pet']['name'];      // Nome do arquivo
    $foto_ext = pathinfo($foto_nome, PATHINFO_EXTENSION);  // Extensão do arquivo
    
    // Validação da extensão do arquivo (apenas imagens)
    $extensoes_permitidas = array('jpg', 'jpeg', 'png', 'gif');
    if (!in_array(strtolower($foto_ext), $extensoes_permitidas)) {
        die("Formato de imagem não permitido.");
    }

    // Gerar um nome único para o arquivo (evitar conflito de nomes)
    $novo_nome_foto = uniqid() . '.' . $foto_ext;

    // Caminho onde a foto será salva (pasta no mesmo diretório)
    $diretorio = './uploads/';  // Pasta onde as imagens serão salvas
    $caminho_foto = $diretorio . $novo_nome_foto;

    // Mover o arquivo da pasta temporária para o diretório de uploads
    if (move_uploaded_file($foto_tmp, $caminho_foto)) {
        // Inserção dos dados na tabela pet_adocao, incluindo o caminho da foto
        $result_adocao = mysqli_query($conexao, "INSERT INTO pet_adocao(especie, nome, sexo, fase, porte, cidade, foto) 
        VALUES ('$especie', '$nome', '$sexo', '$fase', '$porte', '$cidade', '$caminho_foto')");
        
        if ($result_adocao) {
            header('Location: visualizar-pet.php');
        } else {
            echo "Erro ao cadastrar adoção: " . mysqli_error($conexao);
        }
    } else {
        echo "Erro ao fazer upload da foto.";
    }
} else {
    echo "Nenhuma foto foi enviada.";
}
?>