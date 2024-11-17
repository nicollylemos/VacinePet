<?php 
  include("../inc/header.php");
  include("sidebar-veterinaria.php");
 include_once('../config.php');
// Verifica se o email e a senha estão definidos na sessão
if (!isset($_SESSION['email']) || !isset($_SESSION['senha_hash'])) {
    // Se não houver sessão, redireciona para a página de login
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

// Caso contrário, o usuário está autenticado e pode acessar a página
$logado = $_SESSION['email'];

  // Alterna a classe com base no tipo da vacina
if(!empty($_GET['cod_vac']))
{
    $cod_vac = $_GET['cod_vac'];

    $sqlSelect = "SELECT * FROM vacina WHERE cod_vac=$cod_vac";
    $result = $conexao->query($sqlSelect);
    if ($result->num_rows > 0) {
        // Aqui você pode continuar para pegar os dados da vacina, por exemplo:
        while ($user_data = mysqli_fetch_assoc($result))
        { 
            $nome = $user_data['nome'];
            $tipo = $user_data['tipo'];
            $valor = $user_data['valor'];
        }
       
       
    } else
    {
        header('Location: valores-alt.php');
    }
   
}

?>

<!-- A tela de edição -->
<link rel="stylesheet" href="../css/css/edicaoo.css">
<link rel="stylesheet" href="../css/css/responsividade/telasvetpages.css">
<div class="container">
    <div class="conteudo-editar">
        <i class="fa-solid fa-pen-to-square icon"></i>
        <h2>Editar Valor</h2>
        <h1> <?php echo $nome ?>
        </h1>
        <p>Valor atual:</p>
        <div class="valor">R$ <?php echo $valor ?></div>

        <form method="POST" action="salvarEdit.php">

            <p> Novo valor:</p> <input type="hidden" name="cod_vac" value=" <?php echo $cod_vac ?>">
            <input type="number" id="valor" value="<?php echo number_format($valor, 2, '.', ''); ?>"
                class="form-control" name="valor" step="0.01">

            <button class="save" type="submit" name="update" id="update">Salvar</button>
            <br>
            <a href="valores-alt.php"> <button class="back">Voltar
                </button></a>
        </form>
    </div>
</div>