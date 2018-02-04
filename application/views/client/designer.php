<div class="row" style="padding-top: 3%;">
	<div class="col-md-6" style="padding: 0;">
		<img style="width:100%;" src="http://www.iconworldoftile.com/albums/products/display/digital-glazed-vitrified-and-porcelain-tiles-600x1200mm-onyx-ice-grande-preview.jpg">
	</div>
	<div class="col-md-6">
		<div class="container-fluid col-md-12 text-center" style="padding: 5%;">
			<h1>Call a <span class="th-bold">designer</span></h1>
		<p>Explore your personal style with DesignMee.
		Melange of hand-picked international fabrics, and designs that are only limited by your imagination. 
		Book an appointment and let our designers walk you through the world of premium Bespoke fashion!</p>

		</div>
		<div class="col-md-8 col-md-offset-2 col-xs-12 col-sm-6 col-sm-offset-3">
	        <?php $attributes = array("name" => "designer");
	            echo form_open("home/designer", $attributes);?>
			<div class="col-md-12"><input class="th-btn-inv col-md-12 th-form" type="text" name="name" placeholder="Name" required></div>
			<div class="col-md-12"><input class="th-btn-inv col-md-12 th-form" type="number" name="no" placeholder="Mobile No" required></div>
			<div class="col-md-12"><input class="th-btn-inv col-md-12 th-form" type="text" name="city" placeholder="City" required></div>
			<div class="col-md-12"><textarea class="th-btn-inv col-md-12 th-form" style="height: 150px;" type="text" name="req" placeholder="Please Submit Your Specifications And requirements" required></textarea></div>
			<div class="col-md-12"><button type="submit" class="btn th-btn pull-right">SUBMIT</button></div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>