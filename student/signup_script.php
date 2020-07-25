<?php

if(isset($_POST['submit'])){
 

$name = $_POST["name"];
$email = $_POST["email"];
$password1 = $_POST["password_1"];
$contact = $_POST["contact"];
$address = $_POST["address"];

//database connection
$servername = "localhost";
$username = "root";
$password = "biswa@1234";

$conn = mysqli_connect($servername, $username, $password,"lms");

$check = mysqli_query($conn , "select * from student_signup where name = '$name' and email = '$email'");
$checkrows = mysqli_num_rows($check);



if($checkrows == 0){

	$sql = "INSERT IGNORE INTO student_signup (name, email, password, contact, address) VALUES ('$name', '$email', '$password1', '$contact', '$address')";
	$result = mysqli_query($conn,$sql) or die ("connection error");
	mysqli_close($conn);


	echo "New record created successfully."."<h3 style = 'color:green'>". "Wait for 2sec!</h3>";
  header("Refresh:2; url= studentlogin.php");
  
		
}else{

echo "<h2 style = 'color:red'>"."Name already exist. Try another please</h2>";
header("refresh:3; url = studentsignup.php");
  
} 


};



?>