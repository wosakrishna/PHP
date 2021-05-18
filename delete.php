<?php
	include 'includes/connection.php';
	
	$query = mysqli_query($con, "DELETE FROM profile WHERE id ='$_GET[id]'");

	if($query){
		echo "Data deleted";
	}else{
		echo "data not deleted";
	}

?>