<div class="row">
	<img src="https://upload.lotsop.com//media/images/sitesetting/91430117714_11.jpg">
	<div class="container-fluid col-md-12 text-center" style="padding: 5%;">
		<h1>Call a <span class="th-bold">tailor</span></h1>
<p>Sizes are for mannequins. Create your own custom fit with DesignMee tailor at your doorstep at no added cost!
Now forget trying to chase the mythical 'Perfect fit' and let us create your own.</p>

	</div>
	<div class="col-md-6 col-md-offset-3 col-xs-12 col-sm-6 col-sm-offset-3">
        <?php $attributes = array("name" => "tailor");
            echo form_open("home/tailor", $attributes);?>
		<div class="col-md-12 col-xs-12"><input class="th-btn-inv col-md-12 th-form" type="text" name="name" placeholder="Name" required>
		</div>
		<div class="col-md-12 col-xs-12"><input class="th-btn-inv col-md-12 th-form" type="number" name="no" placeholder="Mobile No" required>
		</div>
		<div class="col-md-12 col-xs-12"><input class="th-btn-inv col-md-12 th-form" type="text" name="city" placeholder="City" required>
		</div>
		<div class="col-md-12 col-xs-12"><textarea class="th-btn-inv col-md-12 th-form" style="height: 200px;" type="text" name="req" placeholder="Please Submit Your Specifications And requirements" required></textarea>
		</div>
		<div class="col-md-12 col-xs-12"><button type="submit" class="btn th-btn pull-right">SUBMIT</button></div>
		<?php echo form_close(); ?>
	</div>
</div>