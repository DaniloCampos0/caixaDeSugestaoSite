<?php
include_once("config.php");

//criar a conexão

$conexao = mysqli_connect($host, $db_user,$db_password, $db_name);

//checar a conexao
if(!$conexao){
    die("Conexão com o Banco de Dados Falhou ". mysqli_connect_error());
}

?>