<?php
include 'inc/adminhead.php';
?>
<div id="mainBody">
<div class="container">
	<hr class="soften">
	<P><h1>Admin</h1><img src="../themes/images/admin.png" style="width:10%" alt="Pitfix Admin"/></P>
	<hr class="soften"/>	
	<div class="row">
	<p>
	<a href="add.php"><button class="button"><span>ADD PRODUCT </span></button></a>
	<a href="product.php"><button class="button"><span>EDIT PRODUCTS</span></button></a>
	<a href="vieworder.php"><button class="button"><span>VIEW ORDERS</span></button></a>
	<a href="viewpickup.php"><button class="button"><span>VIEW PICKUP </span></button></a>
<div class="dropdown"><button class="dropbtn">REPORT</button>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>
     </p>
  		</div>
	</div>
	
</div>
</div>
<!-- MainBody End ============================= -->
<?php
include 'inc/adminfoot.php';
?>