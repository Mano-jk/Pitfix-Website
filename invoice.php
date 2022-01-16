<html>
<head>
<link href="themes/css/button.css" rel="stylesheet"/>
<img src="themes/images/logoblack.png"><hr>


<center>
<h3>I N V O I C E</h3><hr></br>
<h1>Order Details</h1> </br>
<?php
	 $id=$_REQUEST['ProductID'];
	 $link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");	
	 mysql_select_db("pitfix",$link) or die ("Cannot select the database!");
	 include('admin/db.php');
$sql = "SELECT * FROM `orders` WHERE productid='$id'";
    $res = query($sql);
if($res->num_rows > 0)
    {
        while($row = $res->fetch_assoc())
        {
            echo "
			<div class='row-fluid'>
		<div class='span6'>
		<table border='0'>
          
			<tr><th>Product name	:	</th><td>".$row['product name']."</td></tr>
			<tr><th>Price	:	</th><td>".$row['price']."</td></tr>
			<tr><th>Order Time	:	</th><td>".$row['time']."</td></tr>
			<tr><th>First Name	:	</th><td>".$row['fname']."</td></tr>
            <tr><th>e-mail	:	</th><td>".$row['Email']."</td></tr>
			<tr><th>Address	:	</th><td>".$row['Address']."</td></tr>
			<tr><th>City	:	</th><td>".$row['City']."</td></tr>
			<tr><th>Zip	:	</th><td>".$row['Zip']."</td></tr>
			<tr><th>phone	:	</th><td>".$row['Phone']."</td>
          </tr>
        </thead>
        <tbody> ";
        }

    }echo "</tbody></table></div></div>";
?>
</br></br></br><button class="button" onclick="print1()">PRINT</button>
<a href="index.php"><button class="button">HOME</button></a>
</center>

<script>
function print1() {
    window.print();
}
</script>
<footer>
<hr>
<p>Contact information: <a href="mailto:customer@pitfix.com">customer@pitfix.com</a>. Regestered address for pitfix davangere. 577004</p>
<hr>
</footer>
</head>
</html>