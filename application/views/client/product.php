<div class="spacer"></div>
<div id="startchange"></div>
<div class="container-fluid single-product" style="padding-top: 10%;padding-left: 5%;padding-right: 5%;">
	<div class="col-md-1 center-block hidden-xs">
		<div id="gallery_01">
 		<div class="col-md-12 side-img active">
			<a  href="#" class="elevatezoom-gallery active" data-update="" data-image="<?php echo base_url(); ?>uploads/thumb/<?php echo $picture;?>" 
			data-zoom-image="<?php echo base_url(); ?>uploads/<?php echo $picture;?>">
			<img src="<?php echo base_url(); ?>uploads/thumb/<?php echo $picture;?>"  height="120" class="img-responsive center-block"  /></a>
		</div>
		<?php
			if(!empty($query)){
			 foreach ($query as $row) {?>
 		<div class="col-md-12 side-img">
			<a  href="#" class="elevatezoom-gallery hidden-xs"
			     data-image="<?php echo base_url(); ?>uploads/thumb/<?php echo $row->img; ?>"
			     data-zoom-image="<?php echo base_url(); ?>uploads/<?php echo $row->img; ?>"
			    ><img src="<?php echo base_url(); ?>uploads/thumb/<?php echo $row->img; ?>"  height="120" class="img-responsive center-block"  /></a>
		</div>
		<?php }}?>
		</div>
	</div>
	<div class="col-md-5 col-xs-12 col-md-offset-1" style="padding-bottom: 30px;">
	    <div class="col-md-12 single-product-img">
	    	<div class="single-product-image center-block ">
				<img  class="img-responsive center-block" id="zoom_03" src="<?php echo base_url(); ?>uploads/thumb/<?php echo $picture;?>" 
				data-zoom-image="<?php echo base_url(); ?>uploads/<?php echo $picture;?>"/>
			</div>
		</div>
	</div>
	<div class="col-md-5">
		<div class="row" style="padding-top:0px;margin-top: 0px;">
			<div class="col-md-12 col-xs-12 " style="padding-top: 0px;margin-top: -10px;">
				<h1 style="padding-top: 0px;margin-top: 0px;"><?php echo $title; ?> </h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">

				<div style="font-size: 2em; color: #000;font-weight: 400;"><b>₹</b> <?php echo $price; ?></div>
				<p><?php $Descr=entity_decode($Descr,$charset = NULL); echo auto_typography(html_escape($Descr)); ?></p>
			</div>
			<div class="col-md-12">
				<a class="col-md-12 text-right pral" href="" data-toggle="modal" data-target="#personalize" style="padding-right: 0px;">Personalize</a>
				<div class="th-gap"></div>
				<p class="col-md-8" style="padding-left: 0px;">Select Size:</p>
				<a class="col-md-4 text-right pral" href="" data-toggle="modal" data-target="#size" style="padding-right: 0px;">Size Chart</a>
				<div class="modal fade bs-example-modal-lg" id="size" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
				  <div class="modal-dialog modal-lg" role="document">
				    <div class="modal-content">
				      ...
				    </div>
				  </div>
				</div>
				<div class="modal fade bs-example-modal-sm" id="personalize" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
				  <div class="modal-dialog modal-sm" role="document">
				    <div class="modal-content">
						<ul class="perstyle">	      
				            <li><a href="<?php echo base_url(""); ?>index.php/home/tailor">Call a Tailor</a></li>
				            <li><a href="<?php echo base_url(""); ?>index.php/home/designer">Call a Designer</a></li>
				            <li><a href="">Live Chat</a></li>
			        	</ul>
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
						    <div class="modal-content">
						      	<div class="row text-center">
						      		<div class="col-md-2 col-md-offset-1">
						      			<p><span class="th-bold">Hem(2)</span></p>
						      			<div class="scl">
							      			<label>
											    <input type="radio" name="hem" value="Type 1"  <?php if($hem=="Type 1"){echo "checked";} ?> />
											    <div>
												    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/hem1.jpg">
												    <p>Type 1</p>
											    </div>
										  	</label>
							      			<label>
											    <input type="radio" name="hem" value="Type 2" <?php if($hem=="Type 2"){echo "checked";} ?>/>
											    <div>
												    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/hem2.jpg">
												    <p>Type 2</p>
												</div>
										  	</label>
										</div>
						    		</div>
						      		<div class="col-md-2">
						      			<p><span class="th-bold">Cuff(3)</span></p>
						      			<div class="scl">
							      			<label>
											    <input type="radio" name="cuff" value="French Cuff" <?php if($cuff=="French Cuff"){echo "checked";} ?>/>
											    <div>
												    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/cuff1.jpg">
												    <p>French </p>
												</div>
										  	</label>
							      			<label>
											    <input type="radio" name="cuff" value="Single Round Cuff" <?php if($cuff=="Single Round Cuff"){echo "checked";} ?>/>
											    <div>
												    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/cuff2.jpg">
												    <p>Single Round </p>
												</div>
										  	</label>
							      			<label>
											    <input type="radio" name="cuff" value="Two Button Cuff" <?php if($cuff=="Two Button Cuff"){echo "checked";} ?>/>
											    <div>
												    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/cuff3.jpg">
												    <P>Two Button </P>
												</div>
										  	</label>
										</div>
						    		</div>
						      		<div class="col-md-2">
						      			<p><span class="th-bold">Collar(10)</span></p>
						      			<div class="scl">
							      			<label>
											    <input type="radio" name="collar" value="Button Down Collar" <?php if($collar=="Button Down Collar"){echo "checked";} ?>/>
											    <div>
												    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/collar1.jpg">
												    <p>Button Down </p>
												</div>
										  	</label>
							      			<label>
											    <input type="radio" name="collar" value="Spread Collar" <?php if($collar=="Spread Collar"){echo "checked";} ?>/>
											    <div>
												    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/collar2.jpg">
												    <p>Spread </p>
												</div>
										  	</label>
							      			<label>
											    <input type="radio" name="collar" value="Band Collar" <?php if($collar=="Band Collar"){echo "checked";} ?>/>
											    <div>
												    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/collar3.jpg">
												    <p>Band </p>
												</div>
										  	</label>
							      			<label>
											    <input type="radio" name="collar" value="Cutaway Collar" <?php if($collar=="Cutaway Collar"){echo "checked";} ?>/>
											    <div>
												    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/collar4.jpg">
												    <p>Cutaway </p>
												</div>
										  	</label>
							      			<label>
											    <input type="radio" name="collar" value="Hidden Button Collar" <?php if($collar=="Hidden Button Collar"){echo "checked";} ?> />
											    <div>
												    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/collar5.jpg">
												    <p>Hidden Button </p>
												</div>
										  	</label>
							      			<label>
											    <input type="radio" name="collar" value="Pin Collars" <?php if($collar=="Pin Collars"){echo "checked";} ?>/>
											    <div>
												    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/collar6.jpg">
												    <p>Pin </p>
												</div>
										  	</label>
							      			<label>
											    <input type="radio" name="collar" value="Classic Collar"  <?php if($collar=="Classic Collar"){echo "checked";} ?>/>
											    <div>
												    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/collar7.jpg">
												    <p>Classic </p>
												</div>
										  	</label>
							      			<label>
											    <input type="radio" name="collar" value="Straight Point Collar" <?php if($collar=="Straight Point Collar"){echo "checked";} ?> />
											    <div>
												    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/collar8.jpg">
												    <p>Straight</p>
												</div>
										  	</label>
							      			<label>
											    <input type="radio" name="collar" value="Winged Tip Collar" <?php if($collar=="Winged Tip Collar"){echo "checked";} ?>/>
											    <div>
												    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/collar9.jpg">
												    <p>Winged Tip </p>
												</div>
										  	</label>
							      			<label>
											    <input type="radio" name="collar" value="Club Collar" <?php if($collar=="Club Collar"){echo "checked";} ?>/>
											    <div>
												    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/collar10.jpg">
												    <p>Club </p>
												</div>
										  	</label>
									  	</div>
						    		</div>
						      		<div class="col-md-2">
						      			<p><span class="th-bold">Sleeve(2)</span></p>
						      			<div class="scl">
							      			<label>
											    <input type="radio" name="sleeve" value="Half Sleeve" <?php if($sleeve=="Half Sleeve"){echo "checked";} ?> />
											    <div>
												    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/sleeve1.jpg">
												    <p>Half </p>
												</div>
										  	</label>
							      			<label>
											    <input type="radio" name="sleeve" value="Full Sleeve" <?php if($sleeve=="Full Sleeve"){echo "checked";} ?> />
											    <div>
												    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/sleeve2.jpg">
												    <p>Full </p>
												</div>
										  	</label>
										</div>
						    		</div>
						      		<div class="col-md-2">
						      			<p><span class="th-bold">Placket(4)</span></p>
						      			<div class="scl">
							      			<label>
											    <input type="radio" name="placket" value="Conventional" <?php if($placket=="Conventional"){echo "checked";} ?> />
											    <div>
												    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/placket1.jpg">
												    <p>Conventional</p>
												</div>
										  	</label>
							      			<label>
											    <input type="radio" name="placket" value="Concealed" <?php if($placket=="Concealed"){echo "checked";} ?>/>
											    <div>
												    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/placket2.jpg">
												    <p>Concealed</p>
												</div>
										  	</label>
							      			<label>
											    <input type="radio" name="placket" value="French" <?php if($placket=="French"){echo "checked";} ?>/>
											    <div>
												    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/placket3.jpg">
												    <p>French</p>
												</div>
										  	</label>
							      			<label>
											    <input type="radio" name="placket" value="Contrast" <?php if($placket=="Contrast"){echo "checked";} ?>/>
											    <div>
												    <img class="img-responsive center-block" src="<?php echo base_url();?>media/image/customize/placket4.jpg">
												    <p>Contrast</p>
												</div>
										  	</label>
									  	</div>
						    		</div>
						    	</div>
						    	<div class="modal-footer" style="margin-bottom: -45px;padding-bottom: 0px;">
							        <button type="button" class="th-btn col-xs-6 col-md-3 col-md-offset-2" data-dismiss="modal">Done</button>
							        <button type="button" class="th-btn-inv  col-xs-6 col-md-3 col-md-offset-2" data-dismiss="modal">Cancel</button>
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
		<div class="col-md-3 " style="padding: 10px;">
	    <div class="col-sm-12 col-md-12 tile"  style="padding: 0px;">
		<a href="<?php echo base_url("index.php/product/details/$category/$title"); ?>">
			<div class="col-md-12 cover-img" style="background-image: url('<?php echo base_url();?>uploads/thumb/<?php echo $row->picture;?>');"></div>
			<p  class="text-center uc"><span><?php echo $row->title; ?></span><br><span class="rate">₹<?php echo $row->price;?></span></p>
		</a>
		</div>
		</div>
        <?php }?>
</div></div>