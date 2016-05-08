<?php
session_start(); // Starting Session

// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// Selecting Database
$db = mysql_select_db("budget", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = "select * from login where username='$username' AND password='$password'";
if(mysql_query($query)){

$_SESSION['login_user']=$username; // Initializing Session
echo "<script language='Javascript'> alert('Login success, Redirect to your profile page.'); 
location.href='userprofile.php';</script>";
 // Redirecting To Other Page
}
else {
echo "<script language='Javascript'> alert ('Username or Password is invalid')
location.href='login.html';</script>";
}

mysql_close($connection); // Closing Connection


?>