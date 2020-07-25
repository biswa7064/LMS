<html>
<head>

<link rel="stylesheet" href="..\bootstrap/css/bootstrap.min.css">
<script src="..\bootstrap/js/bootstrap.min.js"></script>
</head>
<body style = "position: fixed; background-image: url(../image/2.png);background-size: cover;">

	<div class = "section" style = "height:450px; width:1000px;background-color:rgba(15,10,20,0.8);margin-top:10%;margin-left:10%;background-position: center;">


	<div class="container" style="margin:7% 0% 0% 30%; padding:auto;width:35%">
<h1 style = "color:green;"><b>Add book details</b></h1>
<div class="row">
<form role="form" action="add_book_script.php" method="post">
<div class="form-group">
	
<input type="text" class="form-control" id="book_id" name="book_id" placeholder="Book_Id" required>
</div>

<div class="form-group">
	
<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
</div>

<div class="form-group">
<input type="text" class="form-control" id="author" name="author" placeholder="Author" required>
</div>

<div class="form-group">
<input type="text" class="form-control" id="edition" name="edition" placeholder="Edition" required>
</div>



<div class="form-group">
<input type="number" class="form-control" id="numberofcopy" name="numberofcopy" placeholder="No_Of_Copy">
</div>

<button type="submit" class="btn btn-primary" >Add</button>
  </form>
</div>

</div>

</body>
</html>