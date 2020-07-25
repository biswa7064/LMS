<?php
$servername = "localhost";
$username = "root";
$password = "biswa@1234";

$conn = mysqli_connect($servername, $username, $password,"lms");

if(!$conn){
	die("connection failed: ". mysqli_connect_error());
}
echo("connected successfully.");
?>