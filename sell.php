<?php include 'inc/header.php'; ?>

<!-- MainBody============================= -->

<div id="mainBody">
<div class="container">
	<hr class="soften">
	<h1>Send your e-waste to us</h1>
	<hr class="soften"/>	
	<div class="row">
		<div class="span4">
		<h4>Contact Details</h4>
		<p>	PITFIX,<br/> DAVANGERE, INDIA
			<br/><br/>
			pitfix3@gmail.com<br/>
			﻿Tel 08192240133<br/>
			web:pitfix3.com</p>		
		</div>
			
		<div class="span4">
		<h4>Opening Hours</h4>
			<h5> Monday - Friday</h5>
			<p>09:00am - 09:00pm<br/><br/></p>
			<h5>Saturday</h5>
			<p>09:00am - 07:00pm<br/><br/></p>
			<h5>Sunday</h5>
			<p>12:30pm - 06:00pm<br/><br/></p>
		</div>
		<div class="span4">
		<h4>Pick up Location and product details</h4>
		<form  id="form1" name="form1" class="form-horizontal" method="post" action="pickup.php">
        <fieldset>
          <div class="control-group">
           
              <input type="text" name="name"  style="height: 30px"; placeholder="name" class="input-xlarge" required/>
           
          </div>
		   <div class="control-group">
           
              <input type="email" name="email" style="height: 30px"; placeholder="email" class="input-xlarge" required/>
           
          </div>
		   <div class="control-group">
           
          <textarea rows="3" name="address"   id="address" placeholder="address" class="input-xlarge" required></textarea>
           
          </div>
	
		   <div class="control-group">
           
              <input type="text" name="product" style="height: 30px"; placeholder="Product name" class="input-xlarge" required/>
          
          </div>
		  <div class="control-group">
           
          <textarea rows="3" name="desc"   id="textarea" placeholder="Product Discription" class="input-xlarge" required></textarea>
           
          </div>
		  		
		  <div  class="control-group" >
           
              <input type="number" name="weight"  placeholder="Product weight" class="input-xlarge" style="height: 30px";" required/> (in kg)
          
          </div>
		  
		  
		  <div class="control-group">
           
              <input type="date" name="pdate" style="height: 30px"; placeholder="Purchase Date" class="input-xlarge" />  (purchase date)
          
          </div>
          <div class="control-group">
              <textarea rows="3" name="details"   id="textarea" placeholder="other details" class="input-xlarge"></textarea>
           
          </div>

            <button class="btn btn-large" type="submit">request pickup</button>

        </fieldset>
      </form>
		</div>
	</div>
	
</div>
</div>


<!-- MainBody End ============================= -->
<?php include 'inc/footer.php'; ?>