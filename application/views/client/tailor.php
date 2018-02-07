<div class="row" style="padding-top: 3%;">
	<div class="col-md-6" style="padding: 0;">
		<img style="width:100%;" src="http://www.iconworldoftile.com/albums/products/display/digital-glazed-vitrified-and-porcelain-tiles-600x1200mm-onyx-ice-grande-preview.jpg">
	</div>
	<div class="col-md-6">
		<div class="container-fluid col-md-12 text-center" style="padding-bottom: 5%;">
			<h1>Call a <span class="th-bold">tailor</span></h1>
	<p>Sizes are for mannequins. Create your own custom fit with DesignMee tailor at your doorstep at no added cost!
	Now forget trying to chase the mythical 'Perfect fit' and let us create your own.</p>

		</div>
		<div class="col-md-8 col-md-offset-2 col-xs-12 col-sm-6 col-sm-offset-3">
	        <?php $attributes = array("name" => "tailor");
	            echo form_open("home/tailor", $attributes);?>
			<div class="col-md-12 col-xs-12"><input class="th-btn-inv col-md-12 th-form" type="text" name="name" placeholder="Name" required>
			</div>
			<div class="col-md-12 col-xs-12"><input class="th-btn-inv col-md-12 th-form" type="number" name="no" placeholder="Mobile No" required>
			</div>
			<div class="col-md-12 col-xs-12"><input class="th-btn-inv col-md-12 th-form" type="text" name="city" placeholder="City" required>
			</div>
			<div class="col-md-12 col-xs-12"><textarea class="th-btn-inv col-md-12 th-form" style="height: 150px;" type="text" name="req" placeholder="Please Submit Your Specifications And requirements" required></textarea>
			</div>
			<div class="col-md-12 col-xs-12 th-pb th-pt"><button type="submit" class="btn th-btn pull-right">SUBMIT</button></div>
			<?php echo form_close(); ?>
		</div>
	</div>
	<div class="th-gap th-pt"></div><div class="th-gap"></div><div class="th-gap"></div><div class="th-gap"></div>
    <div class="col-md-12 col-xs-12 col-sm-12 cover-img" style="background-image: url('<?php echo base_url();?>media/image/newsletter.jpg'); height: 400px;">
	    <div class="text-center" style="color: #fff;position: absolute;top:15%;left:0;right:0;" >
		    <h1 class="th-pad text-center" style="color: #fff;">News<span class="th-bold">Letter</span></h1>
		    <div class="col-md-6 col-md-offset-3 th-pt" > 
			    <input class="col-md-8 col-xs-6 th-btn" type="email"  id="subemail" style="background-color:#fff;" placeholder="Email-id">
			    <button class="col-md-4 col-xs-6 th-btn btn" type="submit" name="" onclick="javascript:subscribe('');">Subscribe</button>
		    </div>
		</div>
	</div>
</div>
<script>
         function subscribe() {
             var email =document.getElementById("subemail").value;
             $.ajax({
                 type: 'POST',
                 url: '<?php echo base_url(); ?>index.php/home/subscribe',
                 data:'&email='+email,
                 beforeSend: function () {
                     $('.loading').show();
                 },
                 success: function (html) {
                     $('#subcribed').html(html);
                     $('.loading').fadeOut("slow");
                 }
             });
         }
</script>