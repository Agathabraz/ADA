<?php
session_start();
$servidor = "fdb20.awardspace.net";
$usuario = "3141760_ada";
$senha = "jeniffer10";
$dbname = "3141760_ada";
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname) or die('Falha na Conexão do Banco de Dados');

$usuario = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);


if((!empty($usuario)) AND (!empty($senha))){
//Pesquisar o usuário no BD
$result_usuario = "SELECT  usuario_id, nome, email, senha FROM usuario WHERE email='$usuario' && senha ='$senha'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
$_SESSION['id'] = $row_usuario['usuario_id'];
$_SESSION['nome'] = $row_usuario['nome'];
$_SESSION['email'] = $row_usuario['email'];
$_SESSION['senha'] = $row_usuario['senha'];
if (($_SESSION['email'] == $usuario) AND ($_SESSION['senha']==$senha))
header("location:homelogada.php"); //criar uma página logada alo Fulano
else
header("Location: login.php");

}
else{
header("Location: login.php");
}
?>
