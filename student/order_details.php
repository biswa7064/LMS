<?php
session_start();
?>

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



$sql = "select * from add_book_student"; 
$qry = mysqli_query($conn, $sql);
$row = $qry-> fetch_assoc();
?>

	<div class="container " style = "background-size:cover;">
	<?php
	if(mysqli_num_rows($qry) > 0)	{
echo "<table class='table table-bordered text-center'>
<thead>

<tr>
<th style='text-align:center;color:black;font-size:22px;' name = 'book_id'>Book_Id</th>
<th style='text-align:center; color:black;font-size:22px;''name = 'subject'>Subject</th>
<th style='text-align:center;color:black;font-size:22px;''name = 'author'>Author</th>
<th style='text-align:center;color:black;font-size:22px;''name = 'edition'>Edition</th>
<th style='text-align:center;color:black;font-size:22px;'' name = 'nuberofcopy'>Number_Of_Copy</th>

</tr>

</thead>";

while($row = $qry->fetch_assoc()){

echo "<tbody>
	
<tr>
	
<td style = 'color:white;'> ". $row['book_id']."</td>
<td  style = 'color:white;'> ". $row['subject']."</td>
<td style = 'color:white;'>".$row['author']."</td>
<td style = 'color:white;'> ". $row['edition']."</td>
<td style = 'color:white;'> ".$row['numberofcopy']."</td>

</tr>



</tbody>";
}

echo "</table>";
}else{
	echo "0 results";
}

$conn ->close();
?>

</div>





<a href = "after_login.php"><button type = "button" class = "btn btn-primary"  style = "display:block;margin-left: auto;margin-right:auto;">Back</button></a>



</body>
</html>