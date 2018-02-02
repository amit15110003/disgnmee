<div class="row">
	<img src="https://upload.lotsop.com//media/images/sitesetting/91430117714_11.jpg">
	<div class="container-fluid col-md-12 text-center" style="padding: 5%;">
		<h1>Call a <span class="th-bold">designer</span></h1>
<p>Explore your personal style with DesignMee.
Melange of hand-picked international fabrics, and designs that are only limited by your imagination. 
Book an appointment and let our designers walk you through the world of premium Bespoke fashion!</p>

	</div>
	<div class="col-md-6 col-md-offset-3">
        <?php $attributes = array("name" => "designer");
            echo form_open("home/designer", $attributes);?>
		<div class="col-md-12"><input class="th-btn-inv col-md-12 th-form" type="text" name="name" placeholder="Name" required></div>
		<div class="col-md-12"><input class="th-btn-inv col-md-12 th-form" type="number" name="no" placeholder="Mobile No" required></div>
		<div class="col-md-12"><input class="th-btn-inv col-md-12 th-form" type="text" name="city" placeholder="City" required></div>
		<div class="col-md-12"><textarea class="th-btn-inv col-md-12 th-form" style="height: 200px;" type="text" name="req" placeholder="Please Submit Your Specifications And requirements" required></textarea></div>
		<div class="col-md-12"><button type="submit" class="btn th-btn pull-right">SUBMIT</button></div>
		<?php echo form_close(); ?>
	</div>
</div>