<?php
// PHP code goes here
session_start();

$str=$_SESSION['st'];
$edn=$_SESSION['ed']; 
$nam=$_SESSION['nm'];




$hostname ="localhost";
$username ="root";
$password = "";
$databaseName= "booking";
echo $clz;



$connect = mysqli_connect($hostname,$username ,$password,$databaseName);
$query="INSERT INTO cart ( start, ends, t_id) VALUES ('$str','$edn','$nam')";

$result = mysqli_query($connect, $query);


header("Location:select.php");
?>