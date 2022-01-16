<?php
include 'inc/header.php';
$id=$_REQUEST['id'];
$pname=$_REQUEST['pname'];
$pprice=$_REQUEST['pprice'];
?>
<div id="mainBody">
	<div class="container">
	<div class="row">
	
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active">ordering</li>
    </ul>
	<h3>Enter your order info</h3>	
	<div class="well">

	<form class="form-horizontal" action="buy.php" method="post">

		<h4>Your address</h4><br/>
<div class="control-group">
		<label class="control-label" for="inputFname">ProductID</label>
			<div class="controls">
			<input type="text" name="PID"  value="<?php echo "$id" ?>" readonly>
			</div>
		</div>
		<div class="control-group">
					<label class="control-label" for="inputFname">ProductName</label>
			<div class="controls">
			<input type="text" name="PName" value="<?php echo "$pname" ?>" readonly>
			</div>
		</div>
		<div class="control-group">
					<label class="control-label" for="inputFname">ProductPrice</label>
			<div class="controls">
			<input type="text" name="PPrice" value="<?php echo "$pprice" ?>" readonly>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputFname">First name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="inputFname" placeholder="First Name" name="fname" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputLname">Last name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="inputLname" placeholder="Last Name" name="lname" required>
			</div>
		</div>
		
		<div class="control-group">
		<label class="control-label" for="input_email">Email <sup>*</sup></label>
		<div class="controls">
		  <input type="text" id="input_email" placeholder="Email" name="email" required>
		</div>
	  </div>	  
		
		<div class="control-group">
			<label class="control-label" for="address">Address<sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="address" placeholder="Adress" name="add" required> 
			</div>
		</div>
		
		
		<div class="control-group">
			<label class="control-label" for="city">City<sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="city" placeholder="city" name="city" required> 
			</div>
			</div>
		<div class="control-group">
			<label class="control-label" for="postcode">Zip / Postal Code<sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="postcode" name="zip" placeholder="Zip / Postal Code" required> 
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="mobile">Mobile Phone </label>
			<div class="controls">
			  <input type="text"  name="mobile" id="mobile" placeholder="Mobile Phone" required> 
			</div>
		</div>
		
	
	<div class="control-group">
			<div class="controls">
			
				<button class="btn btn-primary">BUYNOW</button>
			</div>
		</div>		
	</form>
</div>

</div>
</div>
</div>
</div>
<!-- MainBody End ============================= -->
<?php
include 'inc/footer.php';
?>