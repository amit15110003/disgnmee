<div class="container" style="padding: 5% 0;">
	<div class="col-md-offset-3 col-md-6 col-xs-12">
		<div class="col-md-12 col-xs-12 text-center" style="padding: 5% 0;"><h1>log<span class="th-bold">In</span></h1><hr></div>
		<?php $attributes = array("name" => "loginform");
            echo form_open("login/login", $attributes);?>
		  <div class="col-md-12 col-xs-12">
		    <label>Email<span style="color: red;">*</span></label>
		    <input type="email" class="th-btn-inv col-md-12 th-form" placeholder="Email" name="email">
		  </div>
		  <div class="col-md-12 col-xs-12">
		    <label>Password<span style="color: red;">*</span></label>
		    <input type="password" class="th-btn-inv col-md-12 th-form" placeholder="Password" name="password">
		  </div>
		  <div class="col-md-12 col-xs-12" style="padding-top:15px;">
		  	<button type="submit" class="btn th-btn col-xs-12">Login</button>
		  </div>
		<?php echo form_close(); ?>
		<div class="col-md-12 col-xs-12 text-center" style="padding-top: 15px;padding-bottom: 15px;">
			<a style="text-transform: capitalize;" href="#">lost password?</a>&nbsp;OR&nbsp;<a style="text-transform: capitalize;" href="<?php echo base_url();?>index.php/signup" style="text-decoration:none;">don't have an account</a>&nbsp;YET?
		</div>
		<div class="col-md-12 col-xs-12 col-xs-12 text-center">OR<hr></div>
		<div class="col-md-6 col-xs-12">
		 <a href="<?php echo $loginURL;?>" class="col-md-12 col-xs-12 col-xs-12 th-form text-center" style="background-color: #e24825;color: #fff;">Login with Google</a>
		</div>
		<div class="col-md-6 col-xs-12">
		 <a href="<?php echo $authUrl;?>" class="col-md-12 col-xs-12 th-form text-center" style="background-color: #385499;color: #fff;">Login with Facebook</a>
		</div>
		 
</div>
</div>