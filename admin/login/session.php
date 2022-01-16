<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("pitfix", $connection);

session_start();// Starting Session
// Storing Session
$admin_check=$_SESSION['login_admin'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select name from admin where name='$admin_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['name'];
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location:login/index.php'); // Redirecting To Home Page
}
?>