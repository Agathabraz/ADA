<?php
//Conectar–se ao BD
$dbhost = 'fdb20.awardspace.net';
$dbuser = '3141760_ada';
$dbpassword = 'jeniffer10';
$dbname = '3141760_ada';
//Efetua a conexão com o BD
$link = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname) or die('Error connecting to MySQL Server.');
//Obtém os valores do formulário
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$sexo = $_POST['sexo'];
$nascimento= $_POST['nascimento'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
//Cria a Query SQL
$query = "INSERT INTO usuario (nome, sobrenome, sexo, nascimento, email, senha, endereco, numero, estado, cidade ) VALUES ('$nome', '$sobrenome', '$sexo','$nascimento', '$email', '$senha','$endereco','$numero','$estado','$cidade')";
$result = mysqli_query( $link, $query ) or die('Error querying database.');
//Fechar a conexão com o BD
mysqli_close($link);
header('location:homelogada.php');
?>
