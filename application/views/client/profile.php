<div class="container-fluid" style="padding:10% 5%;">
    <div class="col-md-12">
        <ol class="breadcrumb">
                  <li><a class="hitem hidden-xs" href="#">User Profile</a></li>
        </ol>
    </div>  
    <div class="col-md-2 mini-menu hidden-xs">
        <ul><a href="<?php echo base_url("index.php/profile"); ?>" class="hitem" >My Account</a><br><br>
            <li><a class="cont" href="<?php echo base_url("index.php/orders"); ?>"> Orders</a></li>
            <li><a class="cont" href="<?php echo base_url("index.php/wishlist"); ?>"> Wishlist</a></li>
            <li><a class="cont" href="<?php echo base_url("index.php/profile/address"); ?>"">Address</a></li>
            <li><a class="cont" style="color: black;" href="<?php echo base_url("index.php/profile/account_details"); ?>">Account details</a></li>
            <li><a class="cont" href="<?php echo base_url("index.php/home/logout"); ?>">Logout</a></li>
        </ul>
    </div>
    <div class="col-md-9 col-md-offset-1">
      <!-- Edit Account Details -->
        <div class="col-md-12  col-xs-12 clps">
          <div class="col-md-12  col-xs-12">
            <div class="col-md-10 col-xs-12">
              <p>Account Details</p>
              <p style="text-transform: capitalize;"><?php echo $fname;?> <?php echo $lname;?></p>
            </div>
            <div class="col-md-2 col-xs-12 th-pb">
              <button type="button" class="th-btn-inv-sm cbtn col-md-12 col-xs-12" data-toggle="collapse" data-target="#address">Edit</button>
            </div>
          </div>
          <div id="address" class="collapse col-md-12  col-xs-12 ">
        <?php $attributes = array("name" => "account_details");
                    echo form_open("profile/account_details", $attributes);?>
              <div class="col-md-6">
                <label>First Name <span style="color: red;">*</span></label>
                <input class="th-btn-inv col-md-12 th-form" type="text" name="fname" value="<?php echo $fname; ?>" style="text-transform: capitalize;" required>
              </div>
              <div class="col-md-6">
                <label>Last Name<span style="color: red;">*</span></label>
                <input class="th-btn-inv col-md-12 th-form" type="text" name="lname" value=" <?php echo $lname; ?>" style="text-transform: capitalize;" required>
              </div>
              <div class="col-md-6">
                <label>Phone <span style="color: red;">*</span></label>
                <input class="th-btn-inv col-md-12 th-form" type="number" name="contact" value="<?php echo $contact; ?>" required>
              </div>
              <div class="col-md-12 th-pt">
                <button type="submit" class="btn th-btn col-md-3 col-xs-12" data-toggle="collapse" data-target="#address">Update</button>
            </div>
              <?php echo form_close(); ?>
          </div>
        </div>
      <!-- Change Password -->
        <div class="col-md-12  col-xs-12 clps">
          <div class="col-md-12  col-xs-12">
            <div class="col-md-10 col-xs-12">
              <p>Password Change</p>
              <p style="text-transform: capitalize;">************</p>
            </div>
            <div class="col-md-2 col-xs-12 th-pb ">
              <button type="button" class="th-btn-inv-sm cbtn col-md-12 col-xs-12" data-toggle="collapse" data-target="#pass">Edit</button>
            </div>
          </div>
          <div id="pass" class="collapse col-md-12  col-xs-12 ">
        <?php $attributes = array("name" => "password");
                    echo form_open("profile/password", $attributes);?>
              <div class="col-md-6">
                <label>New Password</label>
                <input class="th-btn-inv col-md-12 th-form" type="Password" name="pass" style="text-transform: capitalize;" required>
              </div>
              <div class="col-md-12 th-pt">
                <button type="submit col-md-3 col-xs-12" class="btn th-btn" data-toggle="collapse" data-target="#address">Update</button>
            </div>
              <?php echo form_close(); ?>
          </div>
        </div>
      </div>
  </div>
</div>
