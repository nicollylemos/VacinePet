<!--/**
* Conexão com o banco de dados MySQL.
* A função `new mysqli()` cria uma conexão com o banco de dados usando as variáveis especificadas.
*
* @param string $dbHost O endereço do servidor do MySQL.
* @param string $dbUserName O nome do usuário do banco de dados.
* @param string $dbPassword A senha do banco de dados.
* @param string $dbName O nome do banco de dados a ser conectado.
*
* @return mysqli Retorna uma conexão com o banco de dados MySQL.
*-->
<?php
    /** nome do host do MySQL */
    $dbHost = 'localhost';
    /** Usuário do banco de dados MySQL */
    $dbUserName = 'root';
    /** Senha do banco de dados MySQL */
    $dbPassword = '';
    /** O nome do banco de dados*/
    $dbName = 'vacinepet';

    $conexao = new mysqli($dbHost,$dbUserName,$dbPassword,$dbName);
  
   /*if($conexao->connect_errno)
    {
        echo "Erro";
    }
    else
    { 
        echo "Conexão efetuada com sucesso.";
    }*/

?>