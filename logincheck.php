<?php
include("db.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
 $username=mysqli_real_escape_string($con,$_POST['username']);
 $password=mysqli_real_escape_string($con,$_POST['password']);


 $sql="SELECT id FROM student WHERE username='$username' and password='$password'";
 
 
  $_SESSION['login_user']=$username;
  header("location: profile.php");
 
}
?>