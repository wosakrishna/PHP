<?php
	include 'includes/connection.php';
	
	$query = mysqli_query($con, "INSERT INTO profile (`name`, `email`, `phone`, `gender`) VALUES ('$_POST[nm]', '$_POST[em]', '$_POST[ph]', '$_POST[gn]')");

	if($query){
		echo "Data submitted";
		
	}
	else{
		echo "data not submitted";
	}

?>