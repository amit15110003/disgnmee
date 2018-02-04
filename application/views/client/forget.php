
<div class="container" style="padding-top: 10%;">
	<div class="col-md-offset-4 col-md-4 ">
        <?php $attributes = array("name" => "forget");
          echo form_open("forget", $attributes);?>
            <div class="col-md-12 col-xs-12" style="padding: 0;">
              <label>Email</label>
              <input type="email" class="th-btn-inv col-md-12 th-form" placeholder="Email" name="email">
            </div>
            <button class="btn th-btn col-xs-12" type="submit" name="submit">Send</button>
        <?php echo form_close(); ?>
</div></div>