<?php
session_start();
?>

<?php
$servername = "localhost";
$username = "root";
$password = "biswa@1234";

$conn = mysqli_connect($servername, $username, $password,"lms");


$email = $_POST['email'];
$password_1 = $_POST['password'];

$email = mysqli_real_escape_string($conn, $email);
$password_1 = mysqli_real_escape_string($conn, $password_1);


$sql = "select * from admin_login where email = '$email' and password = '$password_1'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

$_SESSION['id'] = $_row['id'];
$_SESSION["name"] = $row['name'];

if($count == 1){
	//echo "<h2>login successful.</h2>";
	
	header ("location: welcome.php");
}else{
	echo "<h2>Invalid email or password.</h2>";
}

if(isset($_SESSION['id'])){
	header("Location:teacherlogin.php");
}

?>