<?php
	include 'includes/connection.php';
	
	$query = mysqli_query($con, "SELECT * FROM profile WHERE id = '$_GET[id]'");

	$row = mysqli_fetch_assoc($query);

	
	$name = $row['name'];
	$email = $row['email'];
	$phone = $row['phone'];
	$gender = $row['gender'];

	$arr = ["name"=>$name, "email"=>$email, "phone"=>$phone, "gender"=>$gender];

	$data = [
		"result" => $arr
	];

	header('Content-Type: Application/json');
	echo json_encode($data);


	/*{
		"key": 2,
		"key": True,
		"key3": [],
		"key4": {
			"k": "v",
			"k2": "v2"
		}
	}*/

	/*{
		"result": {
				"name":"dummy",
				"email":"Sneha@gmail.com",
				"phone":"9874563201",
				"gender":"Male"
		}
	}*/

