<?php 

session_start();

$nome = $_SESSION['nome'];
$email = $_SESSION['email'];
$mensagem = $_SESSION['msg'];

if (!empty($mensagem)){
 echo $mensagem;
 $nome = $_SESSION['nome'];
 }

?>


<html>
<head>
  <title>Título da página</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="logada.css">
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stilesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   

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

 <h3> Seja Bem Vindo  <?php echo ($_SESSION['nome']); ?> </h3>



<div class="texto1">
  
      


                <a> <h1>Como Denunciar</h1>Consiga a maior quantidade de informações para identificar o agressor: nome completo, profissão, 
                  endereço residencial ou do trabalho. Sem saber quem ele é, nada se pode fazer.Em caso de atropelamento ou abandono, anote a placa do carro para identificação no Detran.Chame a polícia militar (disque 190): cabe a eles ir ao local do crime e registrar a ocorrência,
                   responsáveis que são pelo policiamento ostensivo. Caso haja recusa do policial ou delegado, cite o Artigo 139 do Código Penal, que prevê crime de prevaricação: receber notícia de crime e recusar-se a cumpri-la.</a>
</div>
    
   <div class="texto2">

            
                 
                <a><h1>Legislação</h1>Abandonar animais é crime federal (Lei 9.605/98).A principal lei
                   que protege os animais é a Lei Federal 9.605/98, conhecida como Lei 
                   dos Crimes Ambientais.</a>

</div>


<div class="texto3">
                      
                  
    <a><h1>Proteção aos animais</h1>Os animais existem em nosso universo jurídico desde 1934,
       quando Getúlio Vargas promulgou o Decreto Lei 24.645/34. Hoje uma farta legislação os
        protege a nível internacional, federal e municipal. O que falta é que essa legislação
         seja realmente cumprida, o que depende de cada um de nós.O seu silêncio é tudo que um
          criminoso precisa para continuar maltratando animais. Denuncie!</a>

</div>


   <div class="texto4">
                   
                 
                 <a>  <h1>Dica</h1>Escolha o animal que melhor
                   se adapta à sua vida. Nem sempre escolher um filhote é o ideal, pois eles podem
                    chorar, e ainda não são adestrados, necessitando de mais tempo de ensino. O porte
                     e a raça também devem ser verificados, de acordo com o estilo de vida de cada um.</a>

</div>
   

<div class="texto5"> 

  <h1>Por que adotar?</h1>
</div>

<div class="pata">
<img src="IMG/gc.png"width="320" height="205">
</div>

 <div class="texto6">
                      
 <a>Ao adotar, você ajuda a reduzir o número de cães e gatos abandonados.Os animais de rua já passaram por
    muito sofrimento e tudo o que precisam é de um lar para serem felizes de verdade!</a>

</div>

 <div class="pata1">
<img src="IMG/gc.png"width="320" height="205">
</div>
 
<div class="texto7">
                      
 <a>E não há recompensa maior do que vê-los se transformarem naquela coisinha alegre e saudável depois 
   de receberem uma boa dose de cuidado e carinho.</a>

</div>

<div class="gif">
 <img src="IMG/site.gif">. 
  </div>

  <div class="search-box">
    <input type="text" name="" class="search-txt" placeholder="Buscar"/>
    <a class="search-btn" href="#">
      <img src="IMG/search3.png" id="btnBusca" alt="Buscar"/>

    </a>
  </div>
    
    

 <div class="Sair"> 
     <a href="sair.php"><input type="submit" name="submit" href=""	value="Sair" 
     style=" background: transparent;
            border: none;
            outline: none;
            color: #fff;
            background: #6d6c67;
            padding: 15px 30px;
            cursor: pointer;
            border-radius: 10px;
            position: absolute;
            left: 20%;
            top:24%;" ></a>
        </div>
        
        <div class="Perfil">
         <a href='perfilusuario.php'><input type="submit" name="submit" href=""    value="Perfil"
            style=" background: transparent;
            border: none;
            outline: none;
            color: #fff;
            background: #6d6c67;
            padding: 15px 30px;
            cursor: pointer;
            border-radius: 10px;
            position: absolute;
            left: 12%;
            top:24%;" ></a>
        
        </div>


</body>

</html>
