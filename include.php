<?php 
require_once 'conexao.php';

$curso = $_GET['u_curso'];
$nome = $_GET['u_nome'];
$tipo = $_GET['u_tipo'];
$conteudo = $_GET['u_conteudo'];
 
$consulta = "INSERT INTO `sugestao` (`conteudo`,`curso`, `nome`, `tipo`) VALUES ('$conteudo', '$curso', '$nome', '$tipo')";

echo $consulta;

$retorno = mysqli_query($conexao, $consulta);

if($retorno){
    echo("Registro Inserido com sucesso!!!");
    header('Location: index.php');
}
?>