<?php 
include("../inc/header.php");
include("sidebar-vet.php");
include_once('../config.php');

if (!isset($_SESSION['email']) || !isset($_SESSION['senha_hash'])) {
    echo '<script>window.location.href = "../inc/login.php";</script>';
}

if ($_SESSION['email'] !== 'lmonicagm@gmail.com') {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    echo '<script>window.location.href = "../inc/login.php";</script>';
}

if (isset($_POST['update'])) {
    $id_agendamento = $_POST['id_agendamento'];
    $situacao = $_POST['situacao'];

    $sqlUpdate = "UPDATE agendamentos SET situacao = ? WHERE id = ?";
    $query = $conexao->prepare($sqlUpdate);
    $query->bind_param('si', $situacao, $id_agendamento);  // 'si' -> string e inteiro
    $query->execute();

    if ($query->affected_rows > 0) {
        echo '<script>window.location.href = "index.php";</script>';
    } else {
        echo "Erro ao atualizar a situação.";
        echo '<script>window.location.href = "index.php";</script>';
    }
}