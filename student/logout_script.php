<?php
session_start();
unset($_SESSION["email"]);
unset($_SESSION["password"]);
unset($_SESSION["name"]);
echo "successfully logged-out. Please wait for 15sec or "."<a href = 'studentlogin.php'>login again</a>" ;
header("Refresh:15; url = ../homepage.html");
?>