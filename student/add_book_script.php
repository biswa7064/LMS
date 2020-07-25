<?php

$servername = "localhost";
$username = "root";
$password = "biswa@1234";

$conn = mysqli_connect($servername, $username, $password,"lms");

$book_id = $_POST['book_id'];
$subject = $_POST['subject'];
$author = $_POST['author'];
$edition = $_POST['edition'];
$numberofcopy  = $_POST['numberofcopy'];

$sql = "INSERT INTO add_book_student (book_id, subject, author, edition, numberofcopy) VALUES('$book_id', '$subject', '$author', '$edition', '$numberofcopy')";
$query = mysqli_query($conn, $sql);

if($query){
	echo "new record created successfully.";
}else{
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>