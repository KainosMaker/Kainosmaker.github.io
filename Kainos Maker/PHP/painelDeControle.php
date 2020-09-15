<html>
<head>
<title>testeeee</title>
<meta charset="utf-8">
<?php

    if(empty($_POST["user"])){
		header('location: ../Login.html');
		header('');
	}
	session_start();
   
	require 'configuration.php';
	require 'connect.php';
	require 'database.php';

	//function Validation($user, $senha){
	//$nome = $_POST["name"];
	$user = $_POST["user"];
	//$email = $_POST["email"];
	$senha = $_POST["userPassword"];
	//$nascimento = $_POST["nascimento"];
	
	
	
	//$query = "insert into informacoes (nome, usuario, email, senha, nascimento) values ('$nome','$user','$email','$senha','$nascimento')";
   
		$query = "select * from informacoes where usuario = '$user'";
		
         //echo $query;
	     //echo $senha;
	$teste = execute($query);
	//var_dump($teste);
	$testando = $teste -> fetch_array();
	
	if($testando["usuario"] == $user){
			if($testando["senha"] == $senha){
				$_SESSION["usuario"] = $user;
				?><META http-equiv="refresh" content="0;KainosMakerWithLogin.php"></META><?php
			}else{
				?><META http-equiv="refresh" content="0;ERROR/Not_User.php"></META><?php
			}
	}else{
		?><META http-equiv="refresh" content="0;ERROR/Not_User.php"></META><?php
	}
	
?>
</head>

<body>

</body>
</html>