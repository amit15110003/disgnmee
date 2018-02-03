<div class="container-fluid" style="padding:10% 5%;">
    <div class="col-md-12">
        <ol class="breadcrumb">
                  <li><a class="hitem" href="#">User Profile</a></li>
        </ol>
    </div>  
    <div class="col-md-2 mini-menu">
        <ul><a href="<?php echo base_url("index.php/profile"); ?>" class="hitem" >My Account</a><br><br>
            <li><a class="cont" href="<?php echo base_url("index.php/orders"); ?>"> Orders</a></li>
            <li><a class="cont" href="<?php echo base_url("index.php/wishlist"); ?>"> Wishlist</a></li>
            <li><a class="cont" style="color: black;" href="<?php echo base_url("index.php/profile/address"); ?>"">Address</a></li>
            <li><a class="cont" href="<?php echo base_url("index.php/profile/account_details"); ?>">Account details</a></li>
            <li><a class="cont" href="<?php echo base_url("index.php/home/logout"); ?>">Logout</a></li>
        </ul>
    </div>
    <div class="col-md-9 col-md-offset-1">
    	<!-- Edit existing address -->
        <div class="col-md-12  col-xs-12 clps">
          <div class="col-md-12  col-xs-12">
            <div class="col-md-9 col-xs-6">
              <p>Address</p>
              <p style="text-transform: capitalize;"><?php echo $fname;?> <?php echo $lname;?></p>
            </div>
            <div class="col-md-3 col-xs-6 ">
              <button type="button" class="th-btn-inv cbtn" data-toggle="collapse" data-target="#address">Edit</button>
            </div>
          </div>
          <div id="address" class="collapse col-md-12  col-xs-12 ">
				     <?php $attributes = array("name" => "billing");
      					echo form_open("profile/address", $attributes);?>
              <div class="col-md-6">
				<label>First Name <span style="color: red;">*</span></label>
              	<input class="th-btn-inv col-md-12 th-form" type="text" name="fname" value="<?php echo $fname;?>" required>
              </div>
              <div class="col-md-6">
				<label>Last Name<span style="color: red;">*</span></label>
              	<input class="th-btn-inv col-md-12 th-form" type="text" name="lname" value="<?php echo $lname;?>" required>
              </div>
              <div class="col-md-6">
				<label>Email address</label>
              	<input class="th-btn-inv col-md-12 th-form" type="email" name="mail" placeholder="Email">
          	  </div>
              <div class="col-md-6">
				<label>Phone <span style="color: red;">*</span></label>
              	<input class="th-btn-inv col-md-12 th-form" type="number" name="mob" value="<?php echo $mob;?>" required>
          	  </div>
              <div class="col-md-12">
				<label for="exampleInputEmail1";>Street address<span style="color: red;">*</span></label>
              	<input class="th-btn-inv col-md-12 th-form" type="text" placeholder="House number and street name"  name="addr" value="<?php echo $addr;?>" required>
          	  </div>
              <div class="col-md-12">
				<label for="exampleInputEmail1";>Town/City<span style="color: red;">*</span></label>
              	<input class="th-btn-inv col-md-12 th-form" type="text" name="town" value="<?php echo $town;?>" required>
         	  </div>
              <div class="col-md-12">
				<label>State<span style="color: red;">*</span></label>
              	<input class="th-btn-inv col-md-12 th-form" type="text"  name="state" required>
          	  </div>
              <div class="col-md-12">
				<label>Zip/Postal Code<span style="color: red;">*</span></label>
              	<input class="th-btn-inv col-md-12 th-form" type="number" name="pin" value="<?php echo $pin;?>" required>
          	  </div>
              <div class="col-md-12">
				<label>Country<span style="color: red;">*</span></label>
              	<input class="th-btn-inv col-md-12 th-form" type="text" name="country" value="<?php echo $country;?>">
          	  </div>
              <div class="col-md-12">
              	<button type="submit" class="btn th-btn" data-toggle="collapse" data-target="#address">Continue</button>
          	</div>
      				<?php echo form_close(); ?>
          </div>
        </div>
    	<!-- Add new address -->
        <div class="col-md-12  col-xs-12 clps">
          <div class="col-md-12  col-xs-12">
            <div class="col-md-9 col-xs-6">
              <p>Add New</p>
              <p style="text-transform: capitalize;">+</p>
            </div>
            <div class="col-md-3 col-xs-6 ">
              <button type="button" class="th-btn-inv cbtn" data-toggle="collapse" data-target="#add_ress">Add</button>
            </div>
          </div>
          <div id="add_ress" class="collapse col-md-12  col-xs-12 ">
				     <?php $attributes = array("name" => "billing");
      					echo form_open("profile/address", $attributes);?>
              <div class="col-md-6">
				<label>First Name <span style="color: red;">*</span></label>
              	<input class="th-btn-inv col-md-12 th-form" type="text" name="fname" required>
              </div>
              <div class="col-md-6">
				<label>Last Name<span style="color: red;">*</span></label>
              	<input class="th-btn-inv col-md-12 th-form" type="text" name="lname" required>
              </div>
              <div class="col-md-6">
				<label>Email address</label>
              	<input class="th-btn-inv col-md-12 th-form" type="email" name="mail" placeholder="Email">
          	  </div>
              <div class="col-md-6">
				<label>Phone <span style="color: red;">*</span></label>
              	<input class="th-btn-inv col-md-12 th-form" type="number" name="mob" required>
          	  </div>
              <div class="col-md-12">
				<label for="exampleInputEmail1";>Street address<span style="color: red;">*</span></label>
              	<input class="th-btn-inv col-md-12 th-form" type="text" placeholder="House number and street name"  name="addr" value="<?php echo $addr;?>" required>
          	  </div>
              <div class="col-md-12">
				<label for="exampleInputEmail1";>Town/City<span style="color: red;">*</span></label>
              	<input class="th-btn-inv col-md-12 th-form" type="text" name="town" required>
         	  </div>
              <div class="col-md-12">
				<label>State<span style="color: red;">*</span></label>
              	<input class="th-btn-inv col-md-12 th-form" type="text"  name="state" required>
          	  </div>
              <div class="col-md-12">
				<label>Zip/Postal Code<span style="color: red;">*</span></label>
              	<input class="th-btn-inv col-md-12 th-form" type="number" name="pin" required>
          	  </div>
              <div class="col-md-12">
				<label>Country<span style="color: red;">*</span></label>
              	<input class="th-btn-inv col-md-12 th-form" type="text" name="country" value="INDIA">
          	  </div>
              <div class="col-md-12">
              	<button type="submit" class="btn th-btn" data-toggle="collapse" data-target="#add_ress">Continue</button>
          	</div>
      				<?php echo form_close(); ?>
          </div>
        </div>
	</div>
</div>	
