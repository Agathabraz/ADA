<?php
session_start();
$dbhost = 'fdb20.awardspace.net';
$dbuser = '3141760_ada';
$dbpassword = 'jeniffer10';
$dbname = '3141760_ada';


$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname) or die('Falha na Conexão do
Banco de Dados');
$id = $_SESSION['id'];
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

if((!empty($nome)) AND (!empty($email))){
//Alterar o usuário no BD
 $query = "UPDATE usuario SET nome= '$nome', email='$email', senha='$senha' WHERE usuario_id='$id'";
 if (mysqli_query($conn, $query)){
 $_SESSION['msg'] ="Sucesso: Atualizado";
 $_SESSION['nome'] = $nome;
 $_SESSION['email'] = $email;
 $_SESSION['senha'] = $senha;
  header("Location: perfilusuario.php");
 }
 else
 $_SESSION['msg'] = "Aviso: Não foi atualizado!";
}else
header("Location: perfilusuario.php");


 mysqli_close($conn);
?>
