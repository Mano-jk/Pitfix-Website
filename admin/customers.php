<div id="mainBody">
	<div class="container">
	<div class="row">
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.php">Home</a> <span class="divider">/</span></li>
		<li class="active">CUSTOMERS</li>
    </ul>
	<h3>CUSTOMERS</h3>
<div>
<?php	

    $sql = "SELECT * FROM `customers`";
    $res = query($sql);
		echo '
		<div class="row-fluid">
		<div class="span6">
		<table class="table table-bordered">
          <tr>
			<th>Customer id</th>
			<th>First Name</th>
            <th>Last Name</th>
			<th>e-mail</th>

          </tr>

        <tbody>';
if($res->num_rows > 0)
    {
        while($row = $res->fetch_assoc())
        {
            echo "<tr>
			<td>".$row['id']."</td>
			<td>".$row['firstname']."</td>
			<td>".$row['lastname']."</td>
			<td>".$row['email']."</td>

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

