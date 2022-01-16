		<?php	
			 $id=$_REQUEST['id']; 
		include('db.php');
			 $link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
	
	 mysql_select_db("pitfix",$link) or die ("Cannot select the database!");
	 $query="DELETE FROM products WHERE ProductID='$id'";
		  if(!mysql_query($query,$link))
		  {die ("An unexpected error occured while saving the record, Please try again!");}
		  else
		 {
			 echo "<script type='text/javascript'>alert('success!')
			 window.location.href='product.php';
			 </script>";
		  }
		   
	 ?>