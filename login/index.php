<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
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
<h1><img src="pitfinalw.png"></h1>

<div id="login" align="right">
<center>
<h2>Customer login</h2></br>
<form action="" method="post">

<input id="name" name="username" placeholder="Enter your email" type="text">

<input id="password" name="password" placeholder="**********" type="password"><br>

<button class="button" type="submit" name="submit"><span><shadow>Login</shadow></span></button><br>
<span><div id="k"><?php echo $error; ?></div></span>

</form>
<a href="../register.php">
<div id="sign" ><p>Sign up</p></div></a>
</center>
</div>
</div>

</body>
</html>