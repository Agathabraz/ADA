<?php
session_start();
$nome = $_SESSION['nome'];
$email = $_SESSION['email'];
$mensagem = $_SESSION['msg'];
$senha = $_SESSION['senha'];



if (!empty($mensagem)){
    echo $mensagem;
    $nome = $_SESSION['nome'];
    $email = $_SESSION['email'];
    $senha = $_SESSION['senha'];
    }
    ?>

    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
    <meta charset="utf-8">

    <title>Clientes - Alteração</title>
    
    <link rel="stylesheet" type="text/css" href="altera.css">
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stilesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">

  </head>





<body>

<div class="logo">
    <img src="IMG/ada.png">
</div>

<div class="Rede">
      <ul>
          <li><a href="https://pt-br.facebook.com/" target="blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="https://www.instagram.com/?hl=pt-br" target="blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          <li><a href="https://twitter.com/" target="blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>

      </ul>
</div>    
 

<nav id="menu">
   <ul>

      <li><a href="doar.html"> Doar</a></li>
      <li><a href="cadastro.html"> Cadastro</a></li>
      <li><a href="adote.html"> Adote</a></li>
      <li><a href="#"> Chat</a></li>

 </ul>
</nav>





<form method="POST" action="altera.php">

    

<div class="box">

    <h2>Dados pessoais</h2>

<label>Usuário:</label>
<input type="text" name="nome" placeholder="Alteração Usuário" value="<?=$nome?>"><br><br>

<label>Email:</label>
<input type="email" name="email" placeholder="Alteração Email" value="<?=$email?>"><br><br>

<label>Senha:</label>
<input type="password" name="senha" placeholder="Alteração Senha" value="<?=$senha?>"><br><br>





 <div class="Voltar"> 
    <a href="homelogada.php"><input type="button" name="submit"	value="Voltar" ></a>

    <input type="submit" name="btnAlterar" value="Alterar">

  </div>



</div>

</form>


</body>
</html>
