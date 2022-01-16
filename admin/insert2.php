
    <?php 

	 
	 $ProductName=$_REQUEST['ProductName'];
	 $ProductPrice=$_REQUEST['ProductPrice'];
	 $features=$_REQUEST['features'];
	 $ProductShortDesc=$_REQUEST['ProductShortDesc'];
	 $ProductLongDesc=$_REQUEST['ProductLongDesc'];
	$ProductImage=$_FILES['ProductImage']['name'];
	 
	 //image upload
$path = 'up/';
$ProductImg = $path . $_FILES['ProductImage']['name'];
move_uploaded_file($_FILES['ProductImage']['tmp_name'], $ProductImg);

//end
	
	 $link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
	
	 mysql_select_db("pitfix",$link) or die ("Cannot select the database!");
	 $query="INSERT INTO products ( ProductName, ProductPrice, features, ProductShortDesc, ProductLongDesc, ProductImage) values ('".$ProductName."', '".$ProductPrice."', '".$features."','".$ProductShortDesc."','".$ProductLongDesc."','".$ProductImage."')";
		
		  if(!mysql_query($query,$link))
		  {die ("An unexpected error occured while saving the record, Please try again!");}
		  else
		 {
			 echo "<script type='text/javascript'>alert('success!')
			 window.location.href='add.php';
			 </script>";
		  }
		   
	 ?>
	 

