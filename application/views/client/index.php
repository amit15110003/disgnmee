	<div class="spacer"></div>
	<div id="startchange"></div>
	    <div class="container">
	     <div class=" col-md-12">
	        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
    	      <img class="fill" src="<?php echo base_url();?>/media/image/Home-banner_2-1720x890.jpg" alt="..." >
    	      <div class="carousel-caption col-md-4 carousel-caption-left">
    	      	<h1>Browse Amazing Art Prints</h1>
    	      	<p>Discover Now Latest Collection</p>
    	      	<a class=" btn slider-btn btn-lg" href="http://thehippogriff.com/product/category/ART-PRINTS" style="border-radius:0px">SHOP NOW</a>
    	      </div>
    	    </div>
    	    <div class="item">
    	      <img class="fill" src="<?php echo base_url();?>/media/image/Home-banner-1720x890.jpg" alt="..." >
    	      <div class="carousel-caption col-md-4 carousel-caption-left">
    	      	<h1>100% Cotton<br>T-Shirts</h1>
    	      	<p>Discover Now Latest Collection</p>
    	      	<a class=" btn slider-btn btn-lg" href="http://thehippogriff.com/product/category/T-SHIRTS" style="border-radius:0px">SHOP NOW</a>
    	      </div>
    	    </div>
    	    <div class="item">
    	      <img class="fill" src="<?php echo base_url();?>/media/image/LAPTOPSLEEVES_fINAL_-1.jpg" alt="...">
    	      <div class="carousel-caption col-md-offset-4 col-md-6 carousel-caption-right">
    	      	<h1>Artsy & Protective Laptop Sleeves</h1>
    	      	<p>Discover Now Latest Collection</p>
    	      	<a class=" btn slider-btn btn-lg" href="http://thehippogriff.com/product/category/LAPTOP-SLEEVES" style="border-radius:0px">SHOP NOW</a>
    	      </div>
    	    </div>
    	    <div class="item">
    	      <img class="fill" src="<?php echo base_url();?>/media/image/slider3-hp2_.jpg" alt="...">
    	      <div class="carousel-caption col-md-4 carousel-caption-left">
    	      	<h1>Exolore Our Collection Today</h1>
    	      	<p>Discover Now Latest Collection</p>
    	      	<a class=" btn slider-btn btn-lg" href="" style="border-radius:0px">SHOP NOW</a>
    	      </div>
    	    </div>
  </div>

  <!-- Controls -->
</div>
        
    	</div>
    	</div>
    <div class="container text-center category-home1 center-block hidden-xs">
        <div class="category-home">
         <?php 
                $details=$this->user->showcategory();
                foreach ($details as $row ) {
                  $category=str_replace(' ', '-', $row->category);?>
                <a href="<?php echo base_url("product/category/$category"); ?>"><?php echo $row->category;?></a>
            <?php }?>
        </div>
    </div>
	<div class="container">
	    <div class="row">
		<div class="col-md-6 ">
			<a class="showcase " href="http://thehippogriff.com/product/category/ART-PRINTS">
				<div class=" no-gutter">
				<div class="col-md-12 showcase-content">
					<img src="<?php echo base_url();?>media/image/Jungle Shadow_.jpg" class="img-responsive center-block">
					<div class="col-md-12 showcase-hover">
					<h3 class="text-center">Art Prints</h3><a class="showcase-link  text-center" href="http://thehippogriff.com/product/category/ART-PRINTS">Shop Now</a>
					</div>
				</div>
				</div>
			</a>
		</div>
		<div class="col-md-6">
		    <div class="row">   
				<a class="showcase " href="http://thehippogriff.com/product/category/LAPTOP-SLEEVES">
				<div class=" no-gutter">
					<div class="col-md-12 showcase-content">
						<img src="<?php echo base_url();?>media/image/IMG_9236.jpg" class="img-responsive center-block ">
					<div class="col-md-12 showcase-hover" >
						<h3 class="text-center">Laptop Sleeves</h3><a class="showcase-link  text-center" href="http://thehippogriff.com/product/category/LAPTOP-SLEEVES">Shop Now</a>
						</div>
					</div>
					</div>
				</a>	
		    </div>
		</div>
		</div>
	</div>
	<div class="gap"></div>
	<div class="container">
	    <div class="row">
		<div class="col-md-4">
			<a class="showcase" href="http://thehippogriff.com/product/category/POSTERS">
				<div class=" no-gutter">
				<div class="col-md-12 showcase-content">
					<img src="<?php echo base_url();?>media/image/ALOH.jpg" class="img-responsive center-block">
					<div class="col-md-12 showcase-hover">
					<h3 class="text-center">Posters</h3><a class="showcase-link  text-center" href="http://thehippogriff.com/product/category/POSTERS">Shop NOW</a>
					</div>
				</div>
				</div>
			</a>
		</div>
		
		<div class="col-md-4">
			<a class="showcase " href="http://thehippogriff.com/product/category/MUGS">
				<div class=" no-gutter">
				<div class="col-md-12 showcase-content">
					<img src="<?php echo base_url();?>media/image/DAMN Mug.jpg" class="img-responsive center-block">
					<div class="col-md-12 showcase-hover">
					<h3 class="text-center">Mugs</h3><a class="showcase-link  text-center" href="http://thehippogriff.com/product/category/MUGS">Shop Now</a>
					</div>
				</div>
				</div>
			</a>
		</div>
		
		<div class="col-md-4">
			<a class="showcase " href="http://thehippogriff.com/product/category/THROW-PILLOWS">
				<div class=" no-gutter">
				<div class="col-md-12 showcase-content">
					<img src="<?php echo base_url();?>media/image/DSC_0084_Final.-460x410-1.jpg" class="img-responsive center-block">
					<div class="col-md-12 showcase-hover">
					<h3 class="text-center">Throw Pillows</h3>	<a class="showcase-link  text-center" href="http://thehippogriff.com/product/category/THROW-PILLOWS">Shop Now</a>
					</div>
				</div>
				</div>
			</a>
		</div>
		</div>
	</div>
	<div class="gap"></div>
	<div class="container">
	    <div class="row">
		<div class="col-md-6">
				<div class="row ">
				<a class="showcase showcase-large" href="http://thehippogriff.com/product/category/NOTEBOOKS">
				<div class=" no-gutter">
					<div class="col-md-12 showcase-content">
						<img src="<?php echo base_url();?>media/image/DSC_0090_Final.jpg" class="img-responsive center-block">
					<div class="col-md-12 showcase-hover">
						<h3 class="text-center">Note Books</h3>
						<a class="showcase-link  text-center" href="http://thehippogriff.com/product/category/NOTEBOOKS">Shop Now</a>
						</div>
					</div>
					</div>
				</a>
				<!--<a class="showcase showcase-small" href="">
					<div class="col-md-6 showcase-content">
						<img src="<?php echo base_url();?>media/image/DSC_0084_Final.-460x410-1.jpg" class="img-responsive center-block ">
						 <h3 class="text-center">Throw Pillows</h3>
					</div>
				</a>
				<a href="" class="showcase showcase-small" >
					<div class="col-md-12 showcase-content">
						 <img src="<?php echo base_url();?>media/image/LS-banner_920x410-2.jpg" class="img-responsive center-block">
						<h3 class="text-center">Laptop Sleeves</h3>
					</div>
				</a>-->
				</div>			
		</div>
		<div class="col-md-6 ">
			<div class="row ">
			    <a class="showcase showcase-large" href="http://thehippogriff.com/product/category/TOTE-BAGS">
				<div class=" no-gutter">
				<div class="col-md-12 showcase-content">
					<img src="<?php echo base_url();?>media/image/Reasons TO be Happy.jpg" class="img-responsive center-block">
					<div class="col-md-12 showcase-hover">
				     <h3 class="text-center">Tote Bags</h3>
				     <a class="showcase-link  text-center" href="http://thehippogriff.com/product/category/TOTE-BAGS">Shop Now</a>
				    </div>
				</div>
				</div>
			    </a>
			</div>
		</div>
		</div>
	</div>
	<div class="gap"></div>
	<div class="row">
		<div class="container">
			<div class="col-md-4">
				<img src="<?php echo base_url();?>uploads/Flux-2.jpg" class="img-responsive center-block">
			</div>
			<div class="col-md-4" style="">
				<img src="<?php echo base_url();?>media/image/Tags back-3.jpg" class="img-responsive center-block">
			</div>
			<div class="col-md-4" style="">
				<img src="<?php echo base_url();?>uploads/Valkyrie-3.jpg" class="img-responsive center-block">
			</div>
		</div>
	</div>
	<div class="gap"></div>