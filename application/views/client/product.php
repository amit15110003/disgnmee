<div class="spacer"></div>
<div id="startchange"></div>
<div class="container-fluid single-product" style="padding-top: 10%;padding-left: 5%;padding-right: 5%;">
	<div class="col-md-1 center-block hidden-xs">
		<div id="gallery_01">
 		<div class="col-md-12 side-img active">
			<a  href="#" class="elevatezoom-gallery active" data-update="" data-image="<?php echo base_url(); ?>uploads/thumb/<?php echo $picture;?>" 
			data-zoom-image="<?php echo base_url(); ?>uploads/<?php echo $picture;?>">
			<img src="<?php echo base_url(); ?>uploads/thumb/<?php echo $picture;?>" width="100" height="100" class="img-responsive center-block"  /></a>
		</div>
		<?php
			if(!empty($query)){
			 foreach ($query as $row) {?>
 		<div class="col-md-12 side-img">
			<a  href="#" class="elevatezoom-gallery"
			     data-image="<?php echo base_url(); ?>uploads/thumb/<?php echo $row->img; ?>"
			     data-zoom-image="<?php echo base_url(); ?>uploads/<?php echo $row->img; ?>"
			    ><img src="<?php echo base_url(); ?>uploads/thumb/<?php echo $row->img; ?>" width="100" height="100" class="img-responsive center-block"  /></a>
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
				<a class="col-md-4 pral" href="" data-toggle="modal" data-target=".bs-example-modal-lg">Size Chart</a>
				<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
				  <div class="modal-dialog modal-lg" role="document">
				    <div class="modal-content">
				      ...
				    </div>
				  </div>
				</div>
				<br><br>
				<div style="padding: 0;" class="col-md-12" data-toggle="buttons">
				  <label class="btn th-btn-sm"><input type="radio" name="size" id="option1" autocomplete="off" checked> XS </label>
				  <label class="btn th-btn-sm"><input type="radio" name="size" id="option2" autocomplete="off"> S </label>
				  <label class="btn th-btn-sm active"><input type="radio" name="size" id="option3" autocomplete="off"> M </label>
				  <label class="btn th-btn-sm"><input type="radio" name="size" id="option3" autocomplete="off"> L </label>
				  <label class="btn th-btn-sm"><input type="radio" name="size" id="option3" autocomplete="off"> XL </label>
				  <label class="btn th-btn-sm"><input type="radio" name="size" id="option3" autocomplete="off"> XXL </label>
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
			            <button type="button" class="th-btn-inv col-md-12 col-xs-12" data-toggle="modal" data-target=".bs-example-modal-lg">Coustmize</button>
						<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
						  <div class="modal-dialog modal-lg" role="document">
						    <div class="modal-content">
						      ...
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
	<?php foreach ($query2 as $row ) {
				$category=str_replace(' ', '-', $row->category);
				$title=str_replace(' ', '-', $row->title);?>
		<div class="col-md-3 tile">
		<a href="<?php echo base_url("index.php/product/details/$category/$title"); ?>">
			<div class="col-md-12 cover-img" style="background-image: url('<?php echo base_url();?>uploads/thumb/<?php echo $row->picture;?>'); height: 300px;"></div>
			<p  class="text-center uc"><span><?php echo $row->title; ?></span><br><span class="rate">₹<?php echo $row->price;?><s>₹ 5000</s> ( 30% Off )</span></p>
		</a>
		</div>
        <?php }?>
</div>