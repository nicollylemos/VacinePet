<?php 
    session_start();
    unset($_SESSION["email"]);
    unset($_SESSION["nome"]);
    session_destroy();
    header("Location: /VacinePet/index.php");
    exit;
?>