<!DOCTYPE html>
<html>
<head>
	<title>student log-in page</title>

	<link rel="stylesheet" href="..\bootstrap/css/bootstrap.min.css">
   <script src="..\bootstrap/js/bootstrap.min.js"></script>

   
</head>

<body style = "position: fixed; background-image: url(../image/2.png);background-size: cover;" >

	<div class = "section" style = "height:450px; width:1000px;background-color:rgba(15,10,20,0.8);margin-top:10%;margin-left:10%;background-position: center;">

		
<div class="container" >
<div class="row">

<div class="panel panel-primary" style="margin:10% 2% 5% 20%; width:50% ; background-color:rgba(10,10,10,0.5);">
<div class="panel-heading">LOGIN</div>
<div class="panel-body" style="margin:auto;">
<p class="text-warning">log-in to continue</p>
<form role="form" action = "login_script.php" method = "post" name = "form" onsubmit="return validate()">
    <div class="form-group">
      
      
      <input type="email" class="form-control" id="email" placeholder="Email" name="email">
            
    </div>
    <div class="form-group">
      
      <input type="password" class="form-control" id="pwd" placeholder="Password" name="password">

      
    </div>
        <button type="submit" class="btn btn-primary">Login</button>
  </form>
</div>
<div class="panel-footer">Don't have an account? <a style="color:blue;text-decoration:none;" href="studentsignup.php" target="_self">Register</div>

</div>
</div>
</div>


				
	</div>

  <script type="text/javascript">
    function validate(){
      if(document.form.email.value == ""){
       alert("please provide E-mail !");
        document.form.email.focus();
        return false;
      }
      if (document.form.password.value == "" && document.form.password.value.length !=8){
        alert("please provide a password of atleast 8 characters long!");
        document.form.password.focus();
        return false;
      }
      return true;
    }
  </script>


</body>
</html>