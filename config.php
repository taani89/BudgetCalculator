<?php
$server = 'localhost';
$userid = 'root';
$password = '';
$dbname = 'budget';

$conn = mysql_connect("$server", "$userid", "$password");
mysql_select_db("$dbname", $conn) or die(mysql_error());

//echo 'database connected';

?>
