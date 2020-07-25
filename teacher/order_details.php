<html>
<head>

<link rel="stylesheet" href="..\bootstrap/css/bootstrap.min.css">

<script src="..\bootstrap/js/bootstrap.min.js"></script>

</head>
<body style = "position: relative; background-image: url('../image/2.png');background-size: cover;">

	<?php
$servername = "localhost";
$username = "root";
$password = "biswa@1234";

$conn = mysqli_connect($servername, $username, $password,"lms");



$sql = "select * from student_signup,add_book_student where add_book_student.id = student_signup.id ";


$qry = mysqli_query($conn, $sql);


$row = $qry-> fetch_assoc();
?>


	<div class="container " style = "background-size:cover;">
		<?php
	if(mysqli_num_rows($qry) > 0)	{
echo "<table class='table table-bordered text-center'>
<thead>

<tr>

<th style='text-align:center;''>Name_of_the_students</th>


<th style='text-align:center;''>Book_Id</th>

<th style='text-align:center;''>Edition</th>
<th style='text-align:center;''>Number_Of_Copy</th>

</tr>

</thead>";
while($row = $qry->fetch_assoc()){
echo "<tbody>
<tr>

<td>".$row['name']."</td>


<td>".$row['book_id']."</td>
<td>".$row['edition']."</td>
<td>".$row['numberofcopy']."</td>

</tr>


</tbody>";
}

echo "</table>";
}else{
	echo "0 results";
}

$conn->close();
?>
</div>

<a href = "welcome.php"><button type = "button" class = "btn btn-primary"  style = "display:block;margin-left: auto;margin-right:auto;">Back</button></a>



</body>
</html>