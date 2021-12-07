<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
  
  <title>Título da página</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="loginlogada.css">
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


<div class="Login">
    <form method="post" action="valida.php">
      <p class="Titulo_login">Login</p>
            <div class="inputBox">
                <label class="Email">Email:</label>
                <input class="Nome" type="text" name="email" >
                
        </div>
        
        <div class="inputBox">
          <label class="Senha">Senha:</label>
          <input class="Nome" type="password" name="senha" required="senha">
          
  </div>
  
  <a href="cadastro.html"><input type="button" name="submit" value="Cadastre-se" ></a>
  
  

      <div class="entrar"> 
        <input type="submit"	value="Entrar" >

    </div>
  </form>
</div>
</body>
</html>
