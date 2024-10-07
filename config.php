<?php
    define('BASE_URL', '/VacinePet/');  
    /* nome do host do MySQL */
    $dbHost = 'localhost';
    /* Usuário do banco de dados MySQL */
    $dbUserName = 'root';
    /* Senha do banco de dados MySQL */
    $dbPassword = '';
    /* O nome do banco de dados*/
    $dbName = 'vacinepet';

    $conexao = new mysqli($dbHost,$dbUserName,$dbPassword,$dbName);

  /*if($conexao->connect_errno)
    {
        echo "Erro, deu merda";
    }
    else
    { 
        echo "Conexão efetuada com sucesso.";
    }
    */
?>