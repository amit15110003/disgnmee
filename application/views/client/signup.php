
<div class="container" style="padding: 5% 0;">
	<div class="col-md-offset-3 col-md-6">
		<div class="col-md-12 text-center" style="padding: 5% 0;"><h1>sign<span class="th-bold">Up</span></h1><hr></div>
		<?php $attributes = array("name" => "loginform");
            echo form_open("signup/index", $attributes);?>
           <div class="col-md-6">
		    <label>First Name <span style="color: red;">*</span></label>
		    <input type="text" class="th-btn-inv col-md-12 th-form" placeholder="First Name" name="fname">
		  </div>
		   <div class="col-md-6">
		    <label>Last Name<span style="color: red;">*</span></label>
		    <input type="text" class="th-btn-inv col-md-12 th-form" placeholder="Last Name" name="lname">
		  </div>
		  <div class="col-md-12">
		    <label>Email<span style="color: red;">*</span></label>
		    <input type="email" class="th-btn-inv col-md-12 th-form" placeholder="Email" name="email">
		  </div>
		  <div class="col-md-12">
		    <label>Password<span style="color: red;">*</span></label>
		    <input type="password" class="th-btn-inv col-md-12 th-form" placeholder="Password" name="password">
		  </div>
		  <div class="col-md-12" style="padding-top:15px;">
		  	<button type="submit" class="btn th-btn"> Signup</button>
		  </div>
		<?php echo form_close(); ?>
	</div>
</div>