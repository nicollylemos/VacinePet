<?php
    session_start();
    // print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        // Acessa
        include_once('../config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // print_r('Email: ' . $email);
        // print_r('<br>');
        // print_r('Senha: ' . $senha);

        $sql_code = "select * from tutor where email = '$email'  LIMIT 1";
        $sql_exec = $conexao ->query($sql_code) or die($conexao->error);

        $tutor = $sql_exec->fetch_assoc();

        if(password_verify($senha, $tutor ['Senha'])){

            echo "Usuario logado";

        }
        else{
            echo "Falha ao logar";
        }


        
    }

    
?>