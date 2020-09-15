<?php
	session_start();
	require 'configuration.php';
	require 'connect.php';
	require 'database.php';
	
	$id = $_POST["id"];

	$email = $_POST["email"];
	
	if($id == 1){
	$query = "insert into avisocursos (email) values ('$email')";
	
	$valid = execute($query);
    
	if($valid){
		$_SESSION["valid"] = $valid;
		header('location: Cursos.php');
	}
	}else if($id == 0){

	$query = "insert into avisoLoja (email) values ('$email')";
	
	$valid = execute($query);
    
	if($valid){
		$_SESSION["valid"] = $valid;
		header('location: loja.php');
	}
	
	}
?>