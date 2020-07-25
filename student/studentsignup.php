<html>
<head>

<link rel="stylesheet" href="..\bootstrap/css/bootstrap.min.css">
<script src="..\bootstrap/js/bootstrap.min.js"></script>
<script src = "angular.js"></script>
</head>
<body style = "position: fixed; background-image: url(../image/2.png);background-size: cover;">

	<div class = "section" style = "height:450px; width:1000px;background-color:rgba(15,10,20,0.8);margin-top:10%;margin-left:10%;background-position: center;">


	<div class="container" style="margin:7% 0% 0% 30%; padding:auto;width:35%">
<h1 style = "color:green;"><b>SIGN-UP</b></h1>
<div class="row">
<form role="form" action="signup_script.php" method="post" name = "form" ng-app = "" onsubmit = "return show()" novalidate>
<div class="form-group">
	
<input type="text" class="form-control" id="name" name="name" placeholder="Name" required ng-model = "name">
<span class = "form-text text-danger" style = "color:red;" ng-show = "form.name.$touched && form.name.$invalid">Name is required</span>

</div>

<div class="form-group">
	
<input type="email" class="form-control" id="email" name="email" placeholder="Email" ng-model = "email" required/>
<span ng-show = "form.email.$error.required && form.email.$touched " class = "form-text text-danger" style = "color:red;">Email is required</span>
<span ng-show = "form.email.$invalid && form.email.$touched && form.email.$dirty" class = "form-text text-danger" style = "color:red;">please enter correct email</span>
</div>

<div class="form-group">
<input type="password" class="form-control" id="password" name="password_1" placeholder="Password" required ng-model = "password_1" ng-minlength = "4" ng-maxlength = "8">

<span ng-if = "form.password_1.$touched && form.password_1.$error.required" style = "color:red;">password field can't be empty</span>

<span ng-if = "form.password_1.$dirty && form.password_1.$error.minlength" style = "color:red;">atleast 4 characters need</span>

<span ng-if = "form.password_1.$dirty && form.password_1.$error.maxlength" style = "color:red;">maximum 8 characters need</span>

</div>

<div class="form-group">
<input type="number" class="form-control" id="contact" name="contact" placeholder="Contact" required>
</div>



<div class="form-group">
<input type="text" class="form-control" id="address" name="address" placeholder="Address">
</div>

<button type="submit" name = "submit" class="btn btn-primary" ng-disabled = "form.$prestine || form.$dirty && form.$invalid || form.name.$error.required" >Submit</button>
  </form>

  <script>
  	function show(){
  		if(document.form.contact.value == ""){
  		alert("contact number is needed.");
  		document.form.contact.focus();
  		return false;
  		
  	}

  	return true;
  }
  </script>
</div>

</div>

</body>
</html>