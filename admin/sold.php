
<div id="mainBody">
	<div class="container">
	<div class="row">
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.php">Home</a> <span class="divider">/</span></li>
		<li class="active">sold items</li>
    </ul>
	<h3>Sold items</h3>
			
	<?php	
	include('db.php');
    $sql = "SELECT * FROM `sold`";
    $res = query($sql);
		echo '
	<div class="row-fluid">
		<div class="span6">
<table  class="table table-bordered">
<tr>
		  <th>#SoldId</th>
            <th>#ProductID</th>
			<th>Product name</th>
			<th>Order Time</th>
            <th>Price</th>
			<th>First Name</th>
            <th>e-mail</th>
			<th>Address</th>
			<th>City</th>
			<th>Zip</th>
			<th>phone</th>
          </tr>  

        <tbody>';
		  
if($res->num_rows > 0)
    {
        while($row = $res->fetch_assoc())
        {
            echo "
		  <tr>
		  <td>".$row['soldid']."</td><td>".$row['productid']."</td>
			<td>".$row['product name']."</td><td>".$row['price']."</td>
			<td>".$row['time']."</td><td>".$row['fname']."</td>
			<td>".$row['Email']."</td><td>".$row['Address']."</td>
			<td>".$row['City']."</td><td>".$row['Zip']."</td>
			<td>".$row['Phone']."</td>
			</tr> ";
		}
       // echo $_SESSION['id'];

    }
	echo "</tbody></table></div></div>";
?>	

</div>
</div>
</div>
</div>