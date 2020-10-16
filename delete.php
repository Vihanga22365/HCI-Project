<?php
// PHP code goes here
session_start();

$id=$_SESSION['idd'];


echo $id;


$hostname ="localhost";
$username ="root";
$password = "";
$databaseName= "booking";
echo $clz;



$connect = mysqli_connect($hostname,$username ,$password,$databaseName);
$query="DELETE FROM `cart` WHERE id=$id";

$result = mysqli_query($connect, $query);


header("Location:cart.php");
?>