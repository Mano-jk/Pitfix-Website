<?php
include 'inc/header.php';
?>
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	

	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active">Registration</li>
    </ul>
	<h3> Registration</h3>	
		
	<div class="well">
	
	<form class="form-horizontal" action="reg.php" method="post">
		
		<h4>Registration</h4>
		<div class="control-group">
			<label class="control-label" for="inputFname">First Name<sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="fname" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputLname">Last Name</label>
			<div class="controls">
			  <input type="text" name="lname">
			</div>
		</div>
		
		
		
		<div class="control-group">
			<label class="control-label" for="address">e-mail<sup>*</sup></label>
			<div class="controls">
			  <input type="email" name="mail" required /> 
			  </div>
		</div>
		
		
		<div class="control-group">
			<label class="control-label" for="city">Password<sup>*</sup></label>
			<div class="controls">
			  <input type="password" name="pass" required /> 
			</div>
		</div>
			  	 <center> 	<div class="control-group">
		<input class="btn btn-large btn-success" type="submit" value="submit" />
		</div></center>
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