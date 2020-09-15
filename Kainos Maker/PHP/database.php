<?php
	function execute($query){
	 $link = connect();
	 
	 $result = mysqli_query($link, $query) or die(mysqli_error($link));
	 
	 
	 closed($link);
	 
	 return $result;
	}
?>