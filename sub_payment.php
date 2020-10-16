<?php

	session_start();
	
	include 'db_connect.php';


	$title = mysqli_real_escape_string($connect,$_POST['title']);
	$fname = mysqli_real_escape_string($connect,$_POST['fname']);
	$lname = mysqli_real_escape_string($connect,$_POST['lname']);
	$email = mysqli_real_escape_string($connect,$_POST['email']);
	$phone = mysqli_real_escape_string($connect,$_POST['phone']);
	$pass = mysqli_real_escape_string($connect,$_POST['pass']);

	$insert_query = mysqli_query($connect,"INSERT INTO `payment`(`title`, `fname`, `lname`, `email`, `phone`, `pass`) VALUES ('$title', '$fname', '$lname', '$email', '$phone', '$pass')");

	if($insert_query){
		echo $email;
	} else {
		echo '0';
	}

?>