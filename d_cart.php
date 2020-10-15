<?php
// PHP code goes here




$hostname ="localhost";
$username ="root";
$password = "";
$databaseName= "booking";



$connect = mysqli_connect($hostname,$username ,$password,$databaseName);
$query = "SELECT * FROM cart";

$result = mysqli_query($connect, $query);
echo $result->num_rows;


?>