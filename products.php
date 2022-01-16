<?php
include 'inc/header.php';

?>
<div id="mainBody" >
	<div class="container">
	<div class="row">

    <ul class="breadcrumb">
		<li><a href="index.php">Home</a> <span class="divider">/</span></li>
		
		<li class="active">Products Name</li>
    </ul>
	<h3>Recycled Products<small class="pull-right">products are available </small></h3>	
	<hr class="soft"/>
	<p>
		have a look at our recycled smartphones at a smart price.
	</p>
				<hr class="soft"/>
		
			<br class="clr"/>
<div class="tab-content" align="center">
<div class="tab-pane  active" id="blockView">
<div class="span9">

<?php	
include('admin/db.php');

    $sql = "SELECT * FROM `products`";
    $res = query($sql);


 
if($res->num_rows > 0)
    {
        while($row = $res->fetch_assoc())
        {
            echo 	'

		<ul class="thumbnails">
			<li class="span3">
			  <div class="thumbnail">
				<a href="product_detail.php"><img src="admin/up/'; echo $row["ProductImage"]; echo '" alt="pitfix"/></a>
				<div class="caption">
				  <h5>'; echo $row["ProductName"]; echo '</h5>
				  
				   <h4 style="text-align:center"><a class="btn" href="product_detail.php"> 
				   <i class="icon-zoom-in"></i></a> <a class="btn" href="buynow.php?id='; echo $row["ProductID"] ; echo '&pname='; echo $row["ProductName"] ; echo '&pprice='; echo $row["ProductPrice"] ; echo '">BUY NOW
				   <i class="icon-shopping-cart"></i></a> 
				   <a class="btn btn-primary" href="product_detail.php"> Rs. '; echo $row["ProductPrice"];  echo '</a></h4>
				</div>
			  </div>
			</li>
		

	  ';
	}}
	else{
       // echo $_SESSION['id'];
echo 'no items to display';
    }
?>
  </ul>
</div>
</div>
</div>

</div>
</div>
<!-- MainBody End ============================= -->

<?php
include 'inc/footer.php';
?>