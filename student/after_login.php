<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>After_login</title>

	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<script src = "../bootstrap/jquery.js"></script>
   <script src="../bootstrap/js/bootstrap.min.js"></script>
	

</head>
<body style = "position: fixed; background-size: cover; background:url(../image/3.jpg);">



	<div class = "section" style = "height:450px; width:1000px;background-color:rgba(15,10,20,0.8);margin-top:10%;margin-left:10%;background-position: center;">
		<div>
			<a href = "delete_account.php"><button class = "btn btn-danger" type = "button">Delete account</button></a>

			<a href = "../homepage.html"><button type = "button" class = "btn btn-warning">home</button></a>
		
		<img src = "../image/6.png" style="height: 30%; width: 15%; margin-left: auto;margin-right: auto;display: block;">
		</div>

		<div class = "container" >
			<div class = "dropdown">
				<button class = "btn btn-info dropdown-toggle" type = "button" data-toggle = "dropdown" style= "margin-left:36%;margin-right: auto;display: block;">Chose from here <span class = "caret"></span></button>

				<ul class = "dropdown-menu" style= "margin-left:36%;margin-right: auto; background-color: gray;">
					<li><a href = "add_book.php">Add book</a></li>
					<li><a href = "order_details.php">show details</a></li>
					<li><a href = "book_gallery.html">Book gallery</a></li>
				</ul>
			</div>


			</div><br/>




<?php
if($_SESSION["name"]) {
?>
<p style = "color:white;font-size: 20px;">Welcome <?php echo $_SESSION["name"]; ?>. Click here to <a href="logout_script.php" tite="Logout">Logout.</a></p>
<?php
}
?>



			<div style="margin-top:12%;">
			<marquee behavior = "scroll" scrollamount = "10"><h1><q style="color:white;">A reader lives a thousand lives before he dies . . . The man who never reads lives only one.</q></h1></marquee>
			</div>

			
		
	</div>


</body>
</html>