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
			<li><a class="cont" href="<?php echo base_url("index.php/profile/address"); ?>"">Address</a></li>
			<li><a class="cont" href="<?php echo base_url("index.php/profile/account_details"); ?>">Account details</a></li>
			<li><a class="cont" href="<?php echo base_url("index.php/home/logout"); ?>">Logout</a></li>
		</ul>
	</div>
	<div class="col-md-9 col-md-offset-1">
		<h2>Hello <?php echo $this->session->userdata('fname'); ?> <?php echo $this->session->userdata('lname'); ?></h2>
		<br>
		<h4>From your account dashboard you can view your recent orders, manage your shipping and billing addresses and edit your password and account details.</h4>
	</div>
</div>