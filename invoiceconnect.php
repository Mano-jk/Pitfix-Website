<?php 
				
			include('admin/db.php');
	
    $sql = "SELECT * FROM `products`";
    $res = query($sql);	
				if($res->num_rows > 0)
    {
        while($row = $res->fetch_assoc())
        {
				echo $row["ProductID"] ;
	}}

				?>