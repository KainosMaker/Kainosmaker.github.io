<html>
<head lang="pt-br">
 <meta charset="UTF-8">
 <title>Login</title>
 <link rel="shortcut icon" href="https://instagram.fmao1-1.fna.fbcdn.net/v/t51.2885-19/s150x150/69284276_2475614015815382_3796595513063636992_n.jpg?_nc_ht=instagram.fmao1-1.fna.fbcdn.net&_nc_ohc=S_1tvrckOW0AX-_hjv0&oh=1b31c0b26b25a8c6fc79b0c75bda83f4&oe=5F4FCA4A" />
 <link rel="stylesheet" text="text/class" href="../../CSS/Kainos_CSS_Login.css" >

</head>

<body>
<div id="interface">
 <header>
   <nav id="menu">
     <a id="logo" href="Kainos Maker.html"><img src="../../IMAGES/Logo Kainos LG.png" ></a>
     <ul id="menuPrincipal">
	  <li class="bP"><a class="botoes" href="../../cursos.html" > CURSOS </a></li>
	  <li class="bP"><a class="botoes" href="../../Login.html"> LOGIN </a></li>
	  <li class="bP"><a class="botoes" href="#"> PRODUTOS </a></li>
	  <li class="bP"><a class="botoes" href="#"> SOBRE </a></li>
	  <li class="bP"><a class="botoes" href="../../Fale Conosco.html"> FALE CONOSCO</a></li>	 
	 </ul>
   </nav>
  </header>
  
  <form method="post" action="../painelDeControle.php">
  <div id="Form">
  <legend> Usuário </legend>
    <input type="text" size="40" maxlength="35" name="user" id="userName" placeholder="Insira Seu E-mail ou UserName" required>
	<legend> Senha </legend>
	<input type="password" size="40" maxlength="35" name="userPassword" id="userPass" placeholder="Insira Sua Senha" required>
	<input type="submit" value="Entrar" name="botaoEnviar" id="bE">
	<div id="suporte">
	<a href="#">Cadastre-se</a> | <a href="#">Esqueceu a Senha ?</a>
    </div>
  </div>
  </form>
  
   
  <footer id="rodape">
    <a class="rodape" href="https://www.instagram.com/kainosmakermao/" target="_blank"> Instagram </a> | <a class="rodape" href="https://www.facebook.com/kainosmaker/" target="_blank"> Facebook </a>
	
  </footer>
  </div>
   <script>
    alert("Usuário Inexistente ou Senha Incorreta!");
 </script>
</body>
</html>
