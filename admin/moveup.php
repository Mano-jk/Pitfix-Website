<?php 
$id=$_REQUEST['id'];  

include('db.php');
 $link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
  mysql_select_db("pitfix",$link) or die ("Cannot select the database!");
	 $query="INSERT INTO recycle(`pid`, `name`, `address`, `e-mail`, `product`, `discription`, `product_weight`, `purchase_date`, `details`) SELECT `pid`, `name`, `address`, `e-mail`, `product`, `discription`, `product_weight`, `purchase_date`, `details` FROM `pickup` WHERE pid='$id';";
		  if(!mysql_query($query,$link))
		  {
			  die ("An unexpected error occured while <b>Sending to recycle table</b> the record, Please try again!");
			  }
		  else
		 {

		  echo "Record ".$id." sent to recycle successfully!";
		  }
		  
	 ?>
	 	<?php
		$query1="DELETE FROM pickup WHERE pid='$id';";
		if(!mysql_query($query1,$link))
		  {
			  die ("An unexpected error occured while <b>Deleting data in recycle table</b> the record, Please try again!");
			  }
		  else
		 {

		  echo "<br>deleted table successfully!
		  <script type='text/javascript'>alert('success!')
			 window.location.href='viewpickup.php';
			 </script>";
		  }		
	 
?>

