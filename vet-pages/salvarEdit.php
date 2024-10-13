<?php

    include_once('../config.php'); 

    if(isset($_POST['update']))
    {
        $cod_vac = $_POST['cod_vac'];
        $valor = $_POST['valor'];

        $sqlUpdate = "UPDATE vacina SET valor = '$valor' WHERE cod_vac= '$cod_vac'";

        $result = $conexao->query($sqlUpdate);
    }
    header('Location: valores-alt.php');
?>