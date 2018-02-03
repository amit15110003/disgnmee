<div class="spacer"></div>
<div id="startchange"></div>
<div class="container-fluid single-product" style="padding-top: 10%;padding-left: 5%;padding-right: 5%;">
	<div class="col-md-1 center-block hidden-xs">
		<div id="gallery_01">
 		<div class="col-md-12 side-img active">
			<a  href="#" class="elevatezoom-gallery active" data-update="" data-image="<?php echo base_url(); ?>uploads/thumb/<?php echo $picture;?>" 
			data-zoom-image="<?php echo base_url(); ?>uploads/<?php echo $picture;?>">
			<img src="<?php echo base_url(); ?>uploads/thumb/<?php echo $picture;?>" width="120" height="120" class="img-responsive center-block"  /></a>
		</div>
		<?php
			if(!empty($query)){
			 foreach ($query as $row) {?>
 		<div class="col-md-12 side-img">
			<a  href="#" class="elevatezoom-gallery"
			     data-image="<?php echo base_url(); ?>uploads/thumb/<?php echo $row->img; ?>"
			     data-zoom-image="<?php echo base_url(); ?>uploads/<?php echo $row->img; ?>"
			    ><img src="<?php echo base_url(); ?>uploads/thumb/<?php echo $row->img; ?>" width="120" height="120" class="img-responsive center-block"  /></a>
		</div>
		<?php }}?>
		</div>
	</div>
	<div class="col-md-6 center-block single-product-img">
	    <div class="col-md-12 center-block">
	    	<div class="single-product-image center-block ">
				<img  class="img-responsive center-block" id="zoom_03" src="<?php echo base_url(); ?>uploads/thumb/<?php echo $picture;?>" 
				data-zoom-image="<?php echo base_url(); ?>uploads/<?php echo $picture;?>"/>
			</div>
		</div>
	</div>
	<div class="col-md-5">
		<div class="row">
			<div class="col-md-12 col-xs-12 ">
				<h1><?php echo $title; ?> </h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">

				<div style="font-size: 2em; color: #000;font-weight: 400;"><b>₹</b> <?php echo $price; ?></div>
				<p><?php $Descr=entity_decode($Descr,$charset = NULL); echo auto_typography(html_escape($Descr)); ?></p>
			</div>
			<div class="col-md-12">
				<div class="th-gap"></div>
				<p class="col-md-8">Select Size:</p>
				<a class="col-md-4 pral" href="" data-toggle="modal" data-target="#size">Size Chart</a>
				<div class="modal fade bs-example-modal-lg" id="size" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
				  <div class="modal-dialog modal-lg" role="document">
				    <div class="modal-content">
				      ...
				    </div>
				  </div>
				</div>
				<br><br>
				<div style="padding: 0;" class="col-md-12" data-toggle="buttons">
				  <label class="btn th-btn-sm"><input type="radio" name="size" id="option1" value="XS" autocomplete="off"> XS </label>
				  <label class="btn th-btn-sm"><input type="radio" name="size" id="option2" value="S" autocomplete="off"> S </label>
				  <label class="btn th-btn-sm active"><input type="radio" name="size" id="option3" value="M" autocomplete="off" checked> M </label>
				  <label class="btn th-btn-sm"><input type="radio" name="size" id="option3" value="L" autocomplete="off"> L </label>
				  <label class="btn th-btn-sm"><input type="radio" name="size" id="option3" value="XL" autocomplete="off"> XL </label>
				  <label class="btn th-btn-sm"><input type="radio" name="size" id="option3" value="XXL" autocomplete="off"> XXL </label>
				</div>
			</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-6 col-xs-12" >
			            <?php if($this->session->userdata('uid')){?>
			           	<?php if(!empty($this->user->check_wish($this->session->userdata('uid'),$id))) {?>
			           	<button onclick="javascript:wishlist(<?php echo $id;?>);" class="th-btn-inv col-md-12 col-xs-12" id="wish"><span id="wishtext">Added To Wishlist</span></button>
			            <?php }else{?>
			            <button onclick="javascript:wishlist(<?php echo $id;?>);" class="th-btn-inv col-md-12 col-xs-12" id="wish"><span id="wishtext">Add To Wishlist</span></button>
			          	<?php } }else {?>
			          	<button class="th-btn-inv col-md-12 col-xs-12" href="#"  data-toggle="modal" data-target=".login">Add To Wishlist</button>
			          	<?php }?>
		        </div>
		        <div class="col-md-6 col-xs-12 btn-product" >
			            <button type="button" class="th-btn-inv col-md-12 col-xs-12" data-toggle="modal" data-target="#cst">Coustmize</button>
						<div class="modal fade bs-example-modal-lg" id="cst" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
						  <div class="modal-dialog modal-lg" role="document">
						    <div class="modal-content" style="height: 500px; overflow: auto; padding: 50px 0;">
						      	<div class="row text-center">
						      		<div class="col-md-2 col-md-offset-1">
						      			<p><span class="th-bold">Hem</span></p>
						      			<label>
										    <input type="radio" name="hem" value="Type 1" checked />
										    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/hem1.jpg">
										    <p>Type 1</p>
									  	</label>
						      			<label>
										    <input type="radio" name="hem" value="Type 2" />
										    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/hem2.jpg">
										    <p>Type 2</p>
									  	</label>
						    		</div>
						      		<div class="col-md-2">
						      			<p><span class="th-bold">Cuff</span></p>
						      			<label>
										    <input type="radio" name="cuff" value="French Cuff" />
										    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/cuff1.jpg">
										    <p>French Cuff</p>
									  	</label>
						      			<label>
										    <input type="radio" name="cuff" value="Single Round Cuff" checked />
										    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/cuff2.jpg">
										    <p>Single Round Cuff</p>
									  	</label>
						      			<label>
										    <input type="radio" name="cuff" value="Two Button Cuff" />
										    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/cuff3.jpg">
										    <P>Two Button Cuff</P>
									  	</label>
						    		</div>
						      		<div class="col-md-2">
						      			<p><span class="th-bold">Collar</span></p>
						      			<label>
										    <input type="radio" name="collar" value="Button Down Collar" />
										    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/collar1.jpg">
										    <p>Button Down Collar</p>
									  	</label>
						      			<label>
										    <input type="radio" name="collar" value="Spread Collar" />
										    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/collar2.jpg">
										    <p>Spread Collar</p>
									  	</label>
						      			<label>
										    <input type="radio" name="collar" value="Band Collar" />
										    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/collar3.jpg">
										    <p>Band Collar</p>
									  	</label>
						      			<label>
										    <input type="radio" name="collar" value="Cutaway Collar" />
										    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/collar4.jpg">
										    <p>Cutaway Collar</p>
									  	</label>
						      			<label>
										    <input type="radio" name="collar" value="Hidden Button Collar" />
										    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/collar5.jpg">
										    <p>Hidden Button Collar</p>
									  	</label>
						      			<label>
										    <input type="radio" name="collar" value="Pin Collars" />
										    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/collar6.jpg">
										    <p>Pin Collars</p>
									  	</label>
						      			<label>
										    <input type="radio" name="collar" value="Classic Collar"  checked />
										    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/collar7.jpg">
										    <p>Classic Collar</p>
									  	</label>
						      			<label>
										    <input type="radio" name="collar" value="Straight Point Collar" />
										    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/collar8.jpg">
										    <p>Straight Point Collar</p>
									  	</label>
						      			<label>
										    <input type="radio" name="collar" value="Winged Tip Collar" />
										    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/collar9.jpg">
										    <p>Winged Tip Collar</p>
									  	</label>
						      			<label>
										    <input type="radio" name="collar" value="Club Collar" />
										    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/collar10.jpg">
										    <p>Club Collar</p>
									  	</label>
						    		</div>
						      		<div class="col-md-2">
						      			<p><span class="th-bold">Sleeve</span></p>
						      			<label>
										    <input type="radio" name="sleeve" value="Half Sleeve" />
										    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/sleeve1.jpg">
										    <p>Half Sleeve</p>
									  	</label>
						      			<label>
										    <input type="radio" name="sleeve" value="Full Sleeve" checked />
										    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/sleeve2.jpg">
										    <p>Full Sleeve</p>
									  	</label>
						    		</div>
						      		<div class="col-md-2">
						      			<p><span class="th-bold">Placket</span></p>
						      			<label>
										    <input type="radio" name="placket" value="Conventional" checked />
										    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/placket1.jpg">
										    <p>Conventional</p>
									  	</label>
						      			<label>
										    <input type="radio" name="placket" value="Concealed" />
										    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/placket2.jpg">
										    <p>Concealed</p>
									  	</label>
						      			<label>
										    <input type="radio" name="placket" value="French" />
										    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/placket3.jpg">
										    <p>French</p>
									  	</label>
						      			<label>
										    <input type="radio" name="placket" value="Contrast" />
										    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/placket4.jpg">
										    <p>Contrast</p>
									  	</label>
						    		</div>
						    	</div>
						    </div>
						  </div>
						</div>
		        </div>
		        <div class="th-gap"></div>
				<div class="col-md-12 col-xs-12">
			            	<?php if(!empty($this->session->userdata('uid'))){?>
			                <div><button id="addcartbtn" class="th-btn col-md-12 col-xs-12" onclick="javascript:cartadd(<?php echo $id;?>);">ADD TO CART</button ></div>
			                <?php }else{?>
			                <div><button id="addcartbtn" class="th-btn col-md-12 col-xs-12" onclick="javascript:cartadd1(<?php echo $id;?>);">ADD TO CART</button ></div>
			                <?php }?>
	       		</div>
	    	</div>
	</div>
</div>
<div class="th-gap"></div>
<div class="container-fluid text-center txtny">
	<div class="col-md-8 col-md-offset-2 col-xs-12 col-sm-12">
	<h2>OUR PERFECT FIT GUARANTEE</h2>
	<div class="th-gap"></div>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus enim justo, consequat ac dolor consequat, tempus elementum purus. Aenean sapien tellus, facilisis nec vehicula nec, tempor eu magna. Nullam at posuere ante, nec pharetra mi. Morbi dapibus, arcu ut condimentum vulputate, felis tellus porttitor nisl, a tempus ex velit at massa. Maecenas sit amet porta turpis, vel feugiat nulla. Phasellus eu lectus rutrum felis molestie accumsan quis quis diam. Aenean pulvinar placerat pharetra.</p>
    </div>
</div>
<div class="th-gap"></div>
<div class="container-fluid">
      <h1 class="th-pad">also<span class="th-bold">suggested</span></h1>

<div class="th-gap"></div>
      <div class="col-md-12" style="padding-right: 5%;padding-left: 5%;">
	<?php foreach ($query2 as $row ) {
				$category=str_replace(' ', '-', $row->category);
				$title=str_replace(' ', '-', $row->title);?>
		<div class="col-md-3 ">
	    <div class="col-sm-12 col-md-12 tile"  style="padding: 0px;">
		<a href="<?php echo base_url("index.php/product/details/$category/$title"); ?>">
			<div class="col-md-12 cover-img" style="background-image: url('<?php echo base_url();?>uploads/thumb/<?php echo $row->picture;?>');"></div>
			<p  class="text-center uc"><span><?php echo $row->title; ?></span><br><span class="rate">₹<?php echo $row->price;?></span></p>
		</a>
		</div>
		</div>
        <?php }?>
</div></div>