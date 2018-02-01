
<div class="container" style="padding-top:5%;padding-bottom:5%;">
	<div class="col-md-4 col-xs-12" style="padding-top: 10%;">
			<h2>We would love to hear from you!</h2>
		    <p><b> ADDRESS</b>:  D86 100 foot road Chatarpur enclave New Delhi 110074 // F379, 2nd floor DLF Mall of India, Sector -18 Noida 201301</p>
		    <p><b>CONTACT</b>:   +91-9810312151</p>
			<p><b> EMAIL</b>: <a href="mailto:contact@designmee.in">contact@designmee.in</a> </p>
			

	</div>
    <div class="col-md-offset-1 col-md-7 col-xs-12">
        <h2>Get in Touch</h2>
        <?php $attributes = array("name" => "loginform");
            echo form_open("home/contact", $attributes);?>
        <div class="col-md-12 col-xs-12"><input class="th-btn-inv col-md-12 th-form" type="text" name="name" placeholder="Name"></div>
        <div class="col-md-12 col-xs-12"><input class="th-btn-inv col-md-12 th-form" type="email" name="email" placeholder="Email" required></div>
        <div class="col-md-12 col-xs-12"><input class="th-btn-inv col-md-12 th-form" type="number" name="mob" placeholder="Phone Number" required></div>
        <div class="col-md-12 col-xs-12"><input class="th-btn-inv col-md-12 th-form" type="text" name="sub" placeholder="Subject"></div>
        <div class="col-md-12 col-xs-12"><textarea class="th-btn-inv col-md-12 th-form" style="height: 200px;" type="text" name="msg" placeholder="Message" required></textarea></div>
        <div class="col-md-12 col-xs-12"><button type="submit" class="btn th-btn pull-right">SEND MESSAGE</button></div>
        <?php echo form_close(); ?>
    <br>
    </div>
</div>