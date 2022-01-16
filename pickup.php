

<?php


	 $name=$_POST['name']; 
	 $address=$_POST['address']; 
	 $email=$_POST['email'];
	 $product=$_POST['product'];
	 $desc=$_POST['desc'];
	 $weight=$_POST['weight'];
	 $pdate=$_POST['pdate'];
	$details=$_POST['details'];
	 
 $link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
	
	 mysql_select_db("pitfix",$link) or die ("Cannot select the database!");
$query="INSERT INTO `pickup`( `name`, `address`, `e-mail`, `product`, `discription`, `product_weight`, `purchase_date`, `details`) values ('".$name."','".$address."','".$email."', '".$product."', '".$desc."','".$weight."','".$pdate."','".$details."')";
	  if(!mysql_query($query,$link))
		  {die ("An unexpected error occured while saving the record, Please try again!");}
		  else
		 {
		  echo "<script type='text/javascript'>alert('Pickup Request accepted! we will pick it up soon.')
			 window.location.href='index.php';
			 </script>";
		 }
?>

