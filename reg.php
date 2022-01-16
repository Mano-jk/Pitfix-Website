
<?php
$fname=$_REQUEST['fname']; 
	 $lname=$_REQUEST['lname'];
	 $email=$_REQUEST['mail'];
	 $pass=$_REQUEST['pass'];
	 
	 $link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
	
	 mysql_select_db("pitfix",$link) or die ("Cannot select the database!");
	 $query="INSERT INTO customers ( email, password, firstname, lastname) values ( '".$email."', '".$pass."', '".$fname."','".$lname."')";
		
		  if(!mysql_query($query,$link))
		  {
			  die ("An unexpected error occured while saving the record, Please try again!");}
		  else
		 {
			header("location: login/index.php");
		 }

?>