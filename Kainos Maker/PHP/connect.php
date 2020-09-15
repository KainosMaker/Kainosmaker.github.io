<?php
function closed($link){
	mysqli_close($link) or die(mysqli_error($link));
}

function connect(){
	
	$link = mysqli_connect(Host, user, psw, data) or die(mysqli_connect_error());
	
	return $link;
}
?>