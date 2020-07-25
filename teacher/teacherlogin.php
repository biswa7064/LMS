
<!DOCTYPE html>
<html>
<head>
	<title>Admin log-in page</title>
	<link rel="stylesheet" href="..\bootstrap/css/bootstrap.min.css">
   <script src="..\bootstrap/js/bootstrap.min.js"></script>
</head>

<body style = "position: fixed; background-image: url(../image/2.png);background-size: cover;">

	<div class = "section" style = "height:450px; width:1000px;background-color:rgba(15,10,20,0.8);margin-top:10%;margin-left:10%;background-position: center;">
    
    
    <h3 style = "color:green;">Welcome</h3>
  

		
<div class="container">
<div class="row">

<div class="panel panel-primary" style="margin:10% 2% 5% 20%; width:50% ; background-color:rgba(10,10,10,0.5);">
<div class="panel-heading">LOGIN</div>
<div class="panel-body" style="margin:auto;">
<p class="text-warning">log-in to continue</p>
<form role="form" action  = "login_script.php" method = "post" onsubmit = "return validate()" name = "form">
    <div class="form-group">
      
      <input type="email" class="form-control" id="email" placeholder="Email" name="email">
    </div>
    <div class="form-group">
      
      <input type="password" class="form-control" id="pwd" placeholder="Password" name="password">
    </div>
        <button type="submit" class="btn btn-primary">Login</button>
  </form>
</div>

</div>
</div>
</div>


				
	</div>


  <script>
    function validate(){
      if(document.form.email.value == ""){
        alert("Email field can't be empty!");
        document.form.email.focus();
        return false;
      }
      if(document.form.password.value == ""){
        alert("password can't be empty");
        document.form.password.focus();
        return false;
      }
      alert("Thank u for logging-in !");
      header("Refresh:1;url:welcome.php");
      return true;
      
    }
  </script>


</body>
</html>