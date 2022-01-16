<html>
<?php
$ProductID=$_REQUEST['PID'];
$ProductName=$_REQUEST['PName'];
$ProductPrice=$_REQUEST['PPrice'];
$fname=$_REQUEST['fname']; 
	 $lname=$_REQUEST['lname'];
	 $email=$_REQUEST['email'];
	 $add=$_REQUEST['add'];
	 $city=$_REQUEST['city'];
	 $zip=$_REQUEST['zip'];
	  $mobile=$_REQUEST['mobile'];
	 
	 $link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
	
	 mysql_select_db("pitfix",$link) or die ("Cannot select the database!");
	 $query="INSERT INTO orders (`productid`, `product name`, `price`, `fname`, `lname`, `Email`, `Address`, `City`, `Zip`, `Phone`) values
	 ('".$ProductID."','".$ProductName."','".$ProductPrice."','".$fname."','".$lname."', '".$email."', '".$add."','".$city."','".$zip."','".$mobile."')";
		
		  if(!mysql_query($query,$link))
		  {
			  die ("An unexpected error occured while saving the record, Please try again!");}
		  else
		 {
			 echo "<center><h1>your order has been placed successfully!<br></h1><h3>Thanks for shopping with us</h3><hr>";
		 }
	 ?>
	 <body>
	 <a href='invoice.php?id=
	 <?php 
    $sql1 = "SELECT * FROM `orders`";
    $res1 = query($sql1);	
				if($res1->num_rows > 0)
    {
        while($row1 = $res->fetch_assoc())
        {
				echo $row1["productid"] ;
	}}

				?>
			 '><button>==Click here to get invoice==</button></a></center><hr>
			</body> </html>