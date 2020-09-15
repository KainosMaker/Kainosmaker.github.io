<?php
	require 'configuration.php';
	require 'connect.php';
	require 'database.php';
	
	$email = $_POST["userEmail"];
	$assunto = $_POST["assuntoUser"];
	$mensagem = $_POST["mesage"];
	
	$query = "insert into faleConosco (email, assunto, mensagem) values ('$email', '$assunto', '$mensagem')";
	
	$valid = execute($query);
    
	if($valid){
		header('location: ../Fale Conosco.html');
	}
?>