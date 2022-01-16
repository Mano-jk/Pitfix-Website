<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_admin'])){
header("location: ../index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>
<link href="style.css" rel="stylesheet" type="text/css">

</head>
<body background="index.jpg">
<div id="main">
<h1><a href="../../index.php"><img src="pitfinalw.png"></a></h1>

<div id="login" align="right">
<center>
<h2>Admin login</h2></br>
<form action="" method="post">

<input id="name" name="username" placeholder="Enter your username" type="text">

<input id="password" name="password" placeholder="**********" type="password"><br>

<button class="button" type="submit" name="submit"><span><shadow>Login</shadow></span></button><br>
<span><div id="k"><?php echo $error; ?></div></span>

</form>

</center>
</div>
</div>

</body>
</html>