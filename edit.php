<?php
	include 'includes/connection.php';
	
	$query = mysqli_query($con, "SELECT * FROM profile WHERE id = '$_GET[id]'");

	$row = mysqli_fetch_assoc($query);

    $id= $row['id'];
	$name = $row['name'];
	$email = $row['email'];
	$phone = $row['phone'];
	$gender = $row['gender'];

	$arr = ["id"=>$id,"name"=>$name, "email"=>$email, "phone"=>$phone, "gender"=>$gender];

	$data = [
		"result" => $arr
	];

	header('Content-Type: Application/json');
	echo json_encode($data);