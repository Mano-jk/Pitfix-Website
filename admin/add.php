<?php
include 'inc/adminhead.php';
?>
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	
<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.php">Home</a> <span class="divider">/</span></li>
		<li class="active">Add Products</li>
    </ul>
	<h3>Add Products</h3>	
	<div class="well">
	
<form id="form1" name="form1" method="post" action="insert2.php" enctype="multipart/form-data">
		
		<h4>Add Products</h4>
		<table align="center" cellpadding="0" bgcolor="#FFFFFF" width="800" border="0">
  <tr>
   

      <p align="center">&nbsp;</p>
      
        <table align="center" width="291" border="0">
          
           <tr><div class="controls">
            <td><strong>ProductName</strong>:</td>
            <td><input type="text" name="ProductName" id="textfield1" required/></td>
            </div></tr>
          <tr><div class="controls">
            <td><strong>ProductPrice</strong></td>
            <td><input type="text" name="ProductPrice" id="textfield2" required/></td>
            </div></tr>
           <tr><div class="controls">
            <td><strong>features</strong></td>
            <td><input type="text" name="features" id="textfield3" required/></td>
            </div></tr>
          <tr><div class="controls">
            <td><strong>ProductShortDesc</strong></td>
            <td><input type="text" name="ProductShortDesc" id="textfield4" required/></td>
            </div></tr>
		   <tr><div class="controls">
            <td><strong>ProductLongDesc</strong></td>
            <td><input type="text" name="ProductLongDesc" id="textfield4" required/></td>
            </div></tr>
 <tr><div class="controls">
            <td><strong>ProductImage</strong></td>
            <td> <input type="file" name="ProductImage" id="ProductImage" required> </td>
			  </div>
          </tr>

      
         
        </table>
        <p align="center">
          
            <input type="submit" name="button" class="button1" value="Submit" /></p>
         </form>
</tr>
</table>
		</div>
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
include 'inc/adminfoot.php';
?>