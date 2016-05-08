<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>INSERT DATA</title>
</head>

<body>
<?php
include('config.php');

//Fetching Values from URL  
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$dob=$_POST['dob'];
$race=$_POST['race'];
$religion=$_POST['religion'];
$address=$_POST['address'];
$zip=$_POST['zip'];
$town = $_POST['town'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];
$mobile = $_POST['mobile'];
$home = $_POST['home'];
$universityName = $_POST['universityName'];
$matricNo = $_POST['matricNo'];
$programCode = $_POST['programCode'];
$programName = $_POST['programName'];
$faculty = $_POST['faculty'];
$cSem = $_POST['cSem'];
$totalSem = $_POST['totalSem'];
$totalYear = $_POST['totalYear'];
$financial = $_POST['financial'];
$othersF = $_POST['othersF'];
$acc = $_POST['acc'];
$bankName = $_POST['bankName'];
$address2=$_POST['address2'];
$zip2=$_POST['zip2'];
$town2 = $_POST['town2'];
$city2 = $_POST['city2'];
$state2 = $_POST['state2'];
$country2 = $_POST['country2'];
$username = $_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$answer=$_POST['answer'];


//Insert query 
$query = "INSERT INTO register VALUES(NULL,'$fname','$lname','$gender','$age','$dob','$race','$religion','$address','$zip','$town','$city','$state','$country','$mobile','$home','$universityName','$matricNo','$programCode','$programName','$faculty','$cSem','$totalSem','$totalYear','$financial','$othersF','$acc','$bankName','$address2','$zip2','$town2','$city2','$state2','$country2','$username', '$email', '$password','$answer')";
if(mysql_query($query))
{
    echo "<script language='Javascript'> alert('Data successfully submitted'); 
location.href='login.html';</script>";
	
}
else 
{
	echo "<script language='Javascript'> alert('Something is wrong somewhere (@@)'); 
location.href='index.html';</script>";
}
	
?>
</body>
</html>