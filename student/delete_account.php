<?php
session_start();
?>

<html>
<body>
	<?php

	$servername = "localhost";
	$username = "root";
	$password = "biswa@1234";

	$conn = mysqli_connect($servername, $username, $password,"lms");
	$id = $_SESSION['id'];

	$sql = "delete from student_signup where id = '$id'";

	if(!mysqli_query($conn,$sql)){
		echo "record not deleted.";
	}else{
		echo "record deleted.";
		header("refresh:3;url =  ../homepage.html");
	}
	

	mysqli_close($conn);
	?>
</body>
</html>
