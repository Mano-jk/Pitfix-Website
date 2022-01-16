<?php
include 'inc/adminhead.php';
?>
<div id="mainBody">
	<div class="container">
	<div class="row">
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.php">Home</a> <span class="divider">/</span></li>
		<li class="active">View Orders</li>
    </ul>
	<h3>Pickup Requests</h3>	
			
		<?php	
		include('db.php');
		

    $sql = "SELECT * FROM `pickup`";
    $res = query($sql);
		echo '
		<div class="row-fluid">
		<div class="span6">
		<table class="table table-bordered">
          <tr>
		  <th>#PickupID</th>
            <th>name</th>
			<th>e-mail</th>
			<th>product</th>
            <th>discription</th>
			<th>product_weight</th>
            <th>purchase_date</th>
			<th>Details</th>
			<th></th>
			
          </tr>
        </thead>
        <tbody>';
if($res->num_rows > 0)
    {

        while($row = $res->fetch_assoc())
        {
			
            echo "
			
			<tr>
			
			<td>".$row['pid']."</td>
			<td>".$row['name']."</td>
			<td>".$row['e-mail']."</td>
			<td>".$row['product']."</td>
			<td>".$row['discription']."</td>
			<td>".$row['product_weight']."</td>
			<td>".$row['purchase_date']."</td>
			<td>".$row['details']."</td>
			<td><a href='moveup.php?id=".$row['pid']."'><button name='button1' class='button1'><span>Send to Recycle</span></button></a></td>
			</tr>";

		}
       // echo $_SESSION['id']";

    }
	echo "</tbody></table></div></div>";
?>


			
</div>
</div>
</div>
</div>
</div>
</div>
<!-- MainBody End ============================= -->
<?php
include 'inc/adminfoot.php';
?>