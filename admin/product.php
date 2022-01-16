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
	<h3>products</h3>	
		<?php	
		include('db.php');
		

    $sql = "SELECT * FROM `products`";
    $res = query($sql);
		echo '
		<div class="row-fluid">
		<div class="span6">
		<table class="table table-bordered">
          <tr>				
		  <th>#ProductID</th>
            <th>ProductName</th>
			<th>ProductPrice</th>
            <th>features</th>
			<th>ProductShortDesc</th>
            <th>ProductLongDesc</th>
			<th>ProductImage</th>
			<th></th>
          </tr>
        </thead>
        <tbody>';
if($res->num_rows > 0)
    {
        while($row = $res->fetch_assoc())
        {
            echo "<tr>
			<td>".$row['ProductID']."</td>
			<td>".$row['ProductName']."</td>
			<td>".$row['ProductPrice']."</td>
			<td>".$row['features']."</td>
			<td>".$row['ProductShortDesc']."</td>
			<td>".$row['ProductLongDesc']."</td>
			<td>"; echo "<img src='up/"; echo $row['ProductImage'] ; echo "' alt='pitfix'  height='150' width='150'>"; echo "</td>
	
			<td><a href='deletepro.php?id=".$row['ProductID']."'><button name='button1' class='button1'><span>Delete</span></button></a></td>
			</tr>";
        }
       // echo $_SESSION['id'];

    }
	echo "</tbody></table></div></div>";
?>


</div>
</div>
</div>
</div>
</div>
<!-- MainBody End ============================= -->
<?php
include 'inc/adminfoot.php';
?>