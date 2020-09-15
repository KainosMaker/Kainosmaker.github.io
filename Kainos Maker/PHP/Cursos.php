<!DOCTYPE html>
<html>
<head lang="pt-br">
 <title> Cursos </title>
  <meta charset="utf-8">  
    <link rel="shortcut icon" href="../IMAGES/Favicon-Kainos-Maker.png">    
    <link rel="stylesheet" type="text/css" href="../CSS/Kainos_CSS_cursos.css" media="screen">
    <link rel="stylesheet" type="text/css" href="../CSS/rodapeUniversal.css" media="screen">
    <link rel="stylesheet" type="text/css" href="../CSS/headerUniversal.css" media="screen">
    <link rel="stylesheet" type="text/css" href="../CSS/phone/Kainos_CSS_cursos_phone.css" media="(max-width: 480px)">
    <meta name="viewport" content="width=device-width">
    <script src="../JavaScript/teste.js"></script>

    <style type="text/css">

      button#body{
      width: 1350px;
      border: none;
      margin-top: -20px;
      height: 10px;
      background-color: #00ff37;
     
    }
    div#div p{
      font-family: 'Exo 2', sans-serif;
      text-align: center;
      font-size: 16pt;
      margin-top: 0px;
      padding-bottom: 15px;
      border: none;
      
    
    }
    div#div{
      background-color: #ffff;
      margin-top: -10px;
      margin-left: -10px;
      width: 1350px;
    }
    </style>


    <script type="text/javascript">
      
    function teste(valor){
      var i = 0;
      while(i <100){
        for(i = 0 ; i < 100 ; i++){
    
          document.getElementById("body").style.backgroundColor ="#00ff37";
          document.getElementById("body").style.transform = "scaleX(0)";

          document.getElementById("body").style.transition = "transform 3s ease";
        }
      }
      setTimeout(function(){document.getElementById("div").style.opacity = "0";}, 3100);
    setTimeout(function(){document.getElementById("div").style.position = "absolute"}, 3000);
    setTimeout(function(){document.getElementById("div").style.marginTop = "300px"}, 3000);
    }

    </script>
    <!--<script src="JavaScript/mobile.js"></script>-->
  
</head>


<body  onmousemove="teste();">

<div id="div">
  <button id="body"></button>
 <p> Email registrado com Sucesso! </p>

</div>

 <header>
        <nav id="menu">

        <img id="mobile" src="../IMAGES/menuIcone.png" onclick="mostraMenu(1);" width="150">
        
     
    

          <a id="logo" href="../Kainos Maker.html" accesskey="h"><img id="logo1" src="../IMAGES/Logo Kainos LG.png"></a>
          <ul id="menuPrincipal">
          <li class="bP"><a class="botoes" href="../cursos.html"><span> CURSOS </span></a></li>
          <li class="bP" id="especial"><!-- <a class="botoes" href="Login.html"> --> LOGIN <!-- </a> --></li>
          <li class="bP"><a class="botoes" href="../Loja.html"> LOJA </a></li>
          <li class="bP"><a class="botoes" href="../sobre.html"> SOBRE </a></li>
          <li class="bP"><a class="botoes" href="../Fale Conosco.html"> FALE CONOSCO </a></li>
          
        </ul>
      </nav>
    </header>
    <div id= interface>
    <div id="ocult"> 
    <div id="cursos">
	  
	 <h1>EM BREVE!</h1>
     
	 <form method="post" action="sendMail.php">
	    <label for="email">Quer ser avisado quando algum curso estiver liberado ?</font></label>
		<input type="email" name="email" id="email" placeholder="Insira seu E-mail" size="25">
		<p>*Enviaremos um e-mail somente se algum curso  for liberado!</p>
		<input type="submit" value="Inscrever-se" id="submit">
    <input type="hidden" name="id" value="1">
	 </form>
	 

	 </div>
  </div>
  </div>
	    <footer id="rodape">
      <ul id="L">
      
      <li id="y"><a href="https://www.instagram.com/kainosmakermao/" target="_blank">
      <figure id="instagram">
       
       <figcaption>.</figcaption>
      </figure></a>

       <a href="#" target="_blank">
       <img class="redes" id="Facebook" src="../IMAGES/FacebookLogo.png" width="30"></a>  <a href="#" target="_blank"><img class="redes" id="Youtube" src="../IMAGES/YoutubeLogo.png" width="30"></a></li>

      <h1> PARCERIA </h1>
      </ul>
      <ul>

      <li><figure id="NR">
      <a href="https://www.instagram.com/northrobotic/" target="_blank"><img id="NR" src="../IMAGES/Parceira_NR.png"
          onmousemove="mudaFoto(1);" onmouseout="mudaFoto(2);"></a>
           <figcaption>.</figcaption>
      </figure></li>

      <li><figure id="CEBAC">
      <a href="https://www.instagram.com/cebac_oficial/" target="_blank"><img id="CEBAC" src="../IMAGES/Parceira_CBAC.png"
          onmousemove="mudaFoto(3);" onmouseout="mudaFoto(4);"></a>
           <figcaption>.</figcaption>
      </figure></li>
      
      <li><figure id="EDU">
      <a href="https://www.instagram.com/eduinovam/" target="_blank"><img id="EDUINOVAM"
          src="../IMAGES/Parceira_EDUINOVAM.png" onmousemove="mudaFoto(5);" onmouseout="mudaFoto(6);"></a>
          <figcaption>.</figcaption>
      </figure></li>
      
      <li><figure id="RBAC">
      <a href="https://www.instagram.com/aprendizagemcriativabrasil/" target="_blank"><img id="RBAC"
        src="../IMAGES/Parceira_RBAC.png" onmousemove="mudaFoto(7);" onmouseout="mudaFoto(8);"></a>
         <figcaption>.</figcaption>
      </figure></li>

      <li><figure id="CDF">
      <a href="https://www.instagram.com/cdfcasadafisica/" target="_blank"><img id="CDF"
        src="../IMAGES/Parceira_RBAC.png" onmousemove="mudaFoto(7);" onmouseout="mudaFoto(8);"></a>
         <figcaption>.</figcaption>
      </figure></li>

        </ul>
        
        <p>&copy;Copyright - <span id="empresa"> Kainos Maiker </span> . Todos os direitos reservados.</p>
    </footer>
</body>
</html>