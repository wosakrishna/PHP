<?php
	include 'includes/connection.php';

	
	$query = mysqli_query($con, "UPDATE profile SET name ='$_POST[nm]', email = '$_POST[em]', phone ='$_POST[ph]' , gender ='$_POST[gn]' WHERE id ='$_POST[id]'");

	if($query){
		echo "Data submitted";
	}else
	{
		echo "data not submitted";
	}

?>