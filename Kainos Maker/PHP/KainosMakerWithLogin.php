<!doctype html>
<html>
<head lang="pt-br">
 <title> Kainos Maker </title>
 <meta charset="utf-8">
 <link rel="shortcut icon" href="https://instagram.fmao1-1.fna.fbcdn.net/v/t51.2885-19/s150x150/69284276_2475614015815382_3796595513063636992_n.jpg?_nc_ht=instagram.fmao1-1.fna.fbcdn.net&_nc_ohc=S_1tvrckOW0AX-_hjv0&oh=1b31c0b26b25a8c6fc79b0c75bda83f4&oe=5F4FCA4A" />
 
 <link rel="stylesheet" href="../CSS/Kainos_CSS_index.css" >

</head>

<body>
<?php 
session_start();
 if(empty($_SESSION["usuario"])){
	 header('location: ../Login.html');
 }
?>
 <div id="interface">
  <header>
   <nav id="menu">
     <a id="logo" href="Kainos Maker.html"><img src="../IMAGES/Logo Kainos LG.png" ></a>
     <ul id="menuPrincipal">
	  <li class="bP"><a class="botoes" href="#" onmousemove="menuResponsivo(1)" onmouseout="menuResponsivo(2)"> CURSOS </a></li>
	  <li class="bP" ><a class="botoes" href="Login.html"> LOGIN </a></li>
	  <li class="bP" ><a class="botoes" href="#"> PRODUTOS </a></li>
	  <li class="bP"><a class="botoes" href="#"> SOBRE </a></li>
	  <li class="bP"><a class="botoes" href="Fale Conosco.html"> FALE CONOSCO</a></li>
     <li class="bP"><a id="especial" href="#"> <img id="userImage" src="IMAGES/User_Login_PHP.png" width="35" height="35"> <span> <?php  echo $_SESSION["usuario"];?> </span> </a>
	  <ul id="menuPrincipal">
        <li><a href="#"> Painel de Controle </a></li>
		<li><a href="#"> Painel de Controle </a></li>
        <li><a href="#"> Sair </a></li>		
	  </ul>
	 </li>
     </ul>
    </nav>
   </header>
  <section id="artigosHomePage" >
  <article id="conteudo">
	
	 <h1> Olá,<?php echo $_SESSION["usuario"]; ?>! <h1>
	 
	 <p>Abaixo estão Alguns Artigos Testes para você se deliciar com eles ok, <?php echo $_SESSION["usuario"]; ?> ?</p>
	 
  </article>
  <ul id="artigosEmLinha">
  
  <li><article id="Artigos1">
  <a href="#" a class="tituloArtigo"><figure>
    <img src="../IMAGES/Artigo_1_Imagem.jpg" width="270" height="210">
    <figcaption>
	 <h1> . </h1>
	</figcaption></a>
  </figure>
   <h2> <a href="#" a class="tituloArtigo">Alunos criam uma Horta Automatizada com materiais Recicláveis</a></h2>
    <p>Foi com o microcontrolador Micro:Bit Que os alunos da Escola Joge de Rezende Sobrinho ...</p>  
    <a id="lerMais" href="#" target="_self"> Ler Mais </a>
	</article></li>
	
	
	<li><article id="Artigos1">
	<a href="#" a class="tituloArtigo"><figure>
    <img src="../IMAGES/Artigo_2_Imagem.jpg" width="270" height="210">
    <figcaption>
	 <h1> . </h1>
	</figcaption></a>
  </figure>
   <h2> <a href="#" a class="tituloArtigo">Alunos criam um radar que calcula a velocidade de um carro</a></h2>
    <p>Os alunos da Escola Joge de Rezende Sobrinho, por meio do Micro:Bit fizeram um mini-radar que é capaz de calcular a velocidade de um ...</p>  
    <a id="lerMais" href="#" target="_self"> Ler Mais </a></li>
	
	
	<li><article id="Artigos1">
	<a href="#" a class="tituloArtigo"><figure>
    <img src="../IMAGES/Artigo_3_Imagem.jpg" width="270" height="210">
    <figcaption>
	 <h1> . </h1>
	</figcaption></a>
  </figure>
   <h2> <a href="#" a class="tituloArtigo">Quer perder peso? Esses caras pensaram nisso!</a></h2>
    <p>"Tornozeleira contra obesidade" é um contador de passos que indicam quantas calorias você pode perder baseado em  ...</p>  
    <a id="lerMais" href="#" target="_self"> Ler Mais </a></li>
	
	
	<li><article id="Artigos1">
	<a href="#" a class="tituloArtigo"><figure>
    <img src="../IMAGES/Artigo_4_Imagem.jpg" width="270" height="210">
    <figcaption>
	 <h1> . </h1>
	</figcaption></a>
  </figure>
   <h2> <a href="#" a class="tituloArtigo">Um drone controlado por Micro:bit!</a></h2>
    <p>Sim! Estas meninas passaram dia e noite batendo cabeça de como fariam pra controlar os motores com o micro:bit. ...</p>  
    <a id="lerMais" href="#" target="_self"> Ler Mais </a></li>
  </ul>
  
  </section>
  <footer id="rodape">
    <a href="https://www.instagram.com/kainosmakermao/" target="_blank"> Instagram </a> | <a href="#" target="_blank"> Facebook </a>
  </footer>
 </div>
</body>

</html>