<?php
include('login/login.php'); // Includes Login Script
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>pitfix</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="themes/pitfix/bootstrap.min.css" media="screen"/>
    <link href="themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>
  </head>
<body>
<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<div class="span6">Welcome!</div>
	<div class="span6">
	<div class="pull-right">
		
		<a href="admin/index.php"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> Admin? Login here! </span> </a> 
	</div>
	</div>
</div>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="index.php"><img src="themes/images/logo.png" alt="pitfix"/></a>
    <ul id="topMenu" class="nav pull-right">
	
<li><a href="index.php" role="button"  style="padding-right:0"><span class="btn btn-large btn-success">Home</span></a></li>
<li><a href="why.php" role="button"  style="padding-right:0"><span class="btn btn-large btn-success">Why PITFIX?</span></a></li>
	<li><a href="sell.php" role="button"  style="padding-right:0"><span class="btn btn-large btn-success">Send your e-waste here!</span></a></li>
	 <li class="">
<?php
if(!isset($_SESSION['login_user']))
{
echo ' <a href="login/index.php" role="button"  style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a> ';
}
else
{
echo ' <a href="login/logout.php" role="button"  style="padding-right:0"><span class="btn btn-large btn-success">Logout</span></a> ';
}
?>

	</li>
    </ul>
  </div>
</div>
</div>
</div>
<!-- Header End====================================================================== -->