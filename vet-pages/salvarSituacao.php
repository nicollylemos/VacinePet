<?php 
 include("../inc/header.php");
 include("sidebar-vet.php");
include_once('../config.php');


if (!isset($_SESSION['email']) || !isset($_SESSION['senha_hash'])) {
    header('Location: login.php');
    exit;
}


if ($_SESSION['email'] !== 'lmonicagm@gmail.com') {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}

if (isset($_POST['update'])) {
    $id_agendamento = $_POST['id_agendamento'];
    $situacao = $_POST['situacao'];

   
    $sqlUpdate = "UPDATE agendamentos SET situacao = ? WHERE id = ?";
    $query = $conexao->prepare($sqlUpdate);
    $query->bind_param('si', $situacao, $id_agendamento);  // 'si' -> string e inteiro
    $query->execute();

    if ($query->affected_rows > 0) {
       
    header("Location: index.php");
    exit;
    } else {
        echo "Erro ao atualizar a situação.";
    }

    header("Location: editSituacao.php?id=" . $id_agendamento);
    exit;
}