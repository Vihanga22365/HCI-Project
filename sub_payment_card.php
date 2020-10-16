<?php

	session_start();
	
	include 'db_connect.php';

	$method = mysqli_real_escape_string($connect,$_POST['method']);
	$cnumber = mysqli_real_escape_string($connect,$_POST['cnumber']);
	$cfname = mysqli_real_escape_string($connect,$_POST['cfname']);
	$clname = mysqli_real_escape_string($connect,$_POST['clname']);
	$country = mysqli_real_escape_string($connect,$_POST['country']);
	$city = mysqli_real_escape_string($connect,$_POST['city']);
	$house = mysqli_real_escape_string($connect,$_POST['house']);
	$post = mysqli_real_escape_string($connect,$_POST['post']);
	$exp = mysqli_real_escape_string($connect,$_POST['exp']);
	$cvv = mysqli_real_escape_string($connect,$_POST['cvv']);
	$email = mysqli_real_escape_string($connect,$_POST['email']);

	$sql1 = "SELECT * FROM payment WHERE email = '$email'";
	$result1 = mysqli_query($connect,$sql1) or die(mysqli_error($connect)); 
	$row1 = mysqli_fetch_assoc($result1);
	$pid = $row1['id'];


	$insert_query = mysqli_query($connect,"INSERT INTO `payment_card`(`pid`, `method`, `cnumber`, `cfname`, `clname`, `country`, `city`, `house`, `post`, `exp`, `cvv`) VALUES ('$pid', '$method', '$cnumber', '$cfname', '$clname', '$country', '$city', '$house', '$post', '$exp', '$cvv')");

	if($insert_query){
		echo '1';
	} else {
		echo '0';
	}


?>