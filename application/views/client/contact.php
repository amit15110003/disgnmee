<div class="spacer"></div>
<div id="startchange"></div>
<div class="page-header">
		<h1>Contact us</h1>
</div>
<div class="container" style="padding-top:5%;padding-bottom:5%;">
	<div class="col-md-offset-1 col-md-6" style="padding-top:10%;">
			<h3>
				We would love to hear from you!
			</h3>
		    <h4><b> ADDRESS</b>:  B74, Chattarpur Extension, New Delhi</h4>
		    <h4><b>CONTACT</b>:   +919654925861</h4>
			<h4><b> EMAIL</b>:  info@thehippogriff.com</span></h4>
			

	</div>
    <div class="col-md-4" style="background-color: #f1f2f4;border-radius:10px;">
        <h2>Get in Touch</h2>
        <?php $attributes = array("name" => "loginform");
            echo form_open("home/contact", $attributes);?>
        <div style="padding-top: 25px;"><input type="text" class="form-control" placeholder="Name" name="name">
        </div>
        <div style="padding-top: 25px;"><input type="email" class="form-control" placeholder="Email" name="email">
        </div>
        <div style="padding-top: 25px;"><input type="number" class="form-control" placeholder="Phone Number" name="mob">
        </div>
        <div style="padding-top: 25px;"><input type="text" class="form-control" placeholder="Subject" name="sub"></div>
        <div style="padding-top: 25px;"><input type="text" class="form-control" placeholder="Message" name="msg"></div>

        <div style="padding-top: 25px;padding-bottom:25px;"><button type="submit" class="theme-btn-lg col-md-12" > SEND MESSAGE</button></div>
        <?php echo form_close(); ?>
<br><br><br>
</div>
</div>
<div class="container"></div>