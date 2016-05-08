<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
echo "<script language='Javascript'> alert ('You has Log out')
location.href='index.html';</script>"; // Redirecting To Home Page
}
?>