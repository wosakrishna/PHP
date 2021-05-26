<?php
	include 'includes/connection.php';

	$errors = ["name" => "", "email" => "", "phone" => "", "gender" => ""];	

	$success = ["msg" => ""];

	if(empty($_POST['nm']))
	{
		$errors['name'] = "Name is empty";
	}
	elseif(!preg_match("/^[a-zA-Z ]{5,10}$/", $_POST['nm']))
	{
		$errors['name'] = "Name is not valid of length 5-10";
	}
	
	if(empty($_POST['em']))
	{
		$errors['email'] = "Email is empty";
	}
	elseif(!filter_var($_POST['em'], FILTER_VALIDATE_EMAIL))
	{
		$errors['email'] = "Email is not valid";
	}else{
		$checkEmail = mysqli_query($con, "SELECT * FROM profile WHERE email='$_POST[em]'");
		if(mysqli_num_rows($checkEmail)==1){
			$errors['email'] = "Email already exists";
		}
	}
	
	if(empty($_POST['ph']))
	{
		$errors['phone'] = "Phone is empty";
	}
	elseif(!preg_match("/^[0-9]{10}$/", $_POST['ph']))
	{
		$errors['phone'] = "Enter Phone no of length 10";
	}
	else{
		$checkPhone = mysqli_query($con, "SELECT * FROM profile WHERE phone='$_POST[ph]'");
		if(mysqli_num_rows($checkPhone)==1){
			$errors['phone'] = "Contact already exists";
		}
	}
	
	if(empty($_POST['gn']))
	{
		$errors['gender'] = "Gender is empty";
	}
	elseif(!preg_match("/^(Male|Female)$/", $_POST['gn']))
	{
		$errors['gender'] = "Enter Male or Female";
	}


	if(array_filter($errors)){
		$data = [
			"result" => $errors
		];
	}else{
		$query = mysqli_query($con, "INSERT INTO profile (name, email, `phone`, `gender`) VALUES ('$_POST[nm]', '$_POST[em]', '$_POST[ph]', '$_POST[gn]')");
		if($query){
			$success['msg'] = "Data Submitted with name is'$_POST[nm]' and Email is  '$_POST[em]'";
			$data = [
				"result" => $success
			];
		}
	}

	header('Content-Type: Application/json');
	echo json_encode($data)
?>