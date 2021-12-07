<?php
//Conectar–se ao BD
$dbhost = 'fdb20.awardspace.net';
$dbuser = '3141760_ada';
$dbpassword = 'jeniffer10';
$dbname = '3141760_ada';
//Efetua a conexão com o BD
$link = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname) or die('Error connecting to MySQL Server.');
//Obtém os valores do formulário
$Animal = $_POST['Animal'];
$Raca = $_POST['Raca'];
//Cria a Query SQL
$query = "INSERT INTO raca (Animal, Raca ) VALUES ('$Animal', '$Raca')";
$result = mysqli_query( $link, $query ) or die('Error querying database.');
//Fechar a conexão com o BD
mysqli_close($link);
header('location:cadastrarraca.html');
?>
