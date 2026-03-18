<?php
include_once('../../config/connect.php');
$edit_id = $_POST['edit_id'];
//
$sql_data="SELECT * FROM `usersmeta` WHERE `id`=$edit_id";
$result_data=mysqli_query($connection, $sql_data);
$row_data=mysqli_fetch_assoc($result_data);
?>
<div class="row row-sm">
	<div class="col-md-12">
		<div class="form-group">
			<label for="firstname">First Name</label>
			<input type="hidden" name="edit_id" id="edit_id" value="<?php echo $edit_id; ?>">
		    <input type="text" class="form-control" id="firstname" name="firstname" aria-describedby="username_des" placeholder="Enter First Name" required="required" value="<?php echo $row_data['firstname'] ?>">
		</div>
	</div><!--col-->
	<div class="col-md-12">
		<div class="form-group">
			<label for="lastname">Last Name</label>
		    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter Last Name" required="required" value="<?php echo $row_data['lastname'] ?>">
		</div>
	</div><!--col-->
	<div class="col-md-12">
		<div class="form-group">
			<label for="address1">Address 1</label>
		    <input type="text" class="form-control" id="address1" name="address1" placeholder="Enter Address 1" required="required" value="<?php echo $row_data['address1'] ?>">
		</div>
	</div><!--col-->
	<div class="col-md-12">
		<div class="form-group">
			<label for="address2">Address 2</label>
		    <input type="text" class="form-control" id="address2" name="address2" aria-describedby="email_des" placeholder="Enter Address 2" value="<?php echo $row_data['address2'] ?>">
		</div>
	</div><!--col-->
	<div class="col-md-12">
		<div class="form-group">
			<label for="city">City</label>
		    <input type="text" class="form-control" id="city" name="city" aria-describedby="email_des" placeholder="Enter city" required="required" value="<?php echo $row_data['city'] ?>">
		</div>
	</div><!--col-->
	<div class="col-md-12">
		<div class="form-group">
			<label for="state">Province</label>
		    <input type="text" class="form-control" id="state" name="state" aria-describedby="email_des" placeholder="Enter state" required="required" value="<?php echo $row_data['state'] ?>">
		</div>
	</div><!--col-->
	<div class="col-md-12">
		<div class="form-group">
			<label for="zip">Zip Code</label>
		    <input type="text" class="form-control" id="zip" name="zip" aria-describedby="email_des" placeholder="Enter zip code" required="required" value="<?php echo $row_data['zip'] ?>">
		</div>
	</div><!--col-->
	<div class="col-md-12">
		<div class="form-group">
			<label for="mobile">Mobile</label>
		    <input type="text" class="form-control" id="mobile" name="mobile" aria-describedby="email_des" placeholder="Enter mobile number" required="required" value="<?php echo $row_data['mobile'] ?>">
		</div>
	</div><!--col-->
	<div class="col-md-12">
		<button type="submit" class="btn">Update</button>
	</div><!--col-->
	<div class="col-md-12">
		<p id="error-place" style="color: red;"></p>
	</div><!--col-->

</div><!--row-->