<div class="container-fluid">
	<div class="col-md-3">
		<div class="menu">
        	<div class="mini-menu">
	            <ul>
					<li class="sub">
						<ol class="breadcrumb">
						  <li><a href="#">Home</a></li>
						  <li><a href="#">Library</a></li>
						  <li class="active">Data</li>
						</ol>
					</li>	            		
	        		<li class="sub">
		            	<a href="#">WOMAN</a>
		            	<ul>
			               <li><a href="#">Jackets</a></li>
			               <li><a href="#">Blazers</a></li>
			               <li><a href="#">Suits</a></li>
			               <li><a href="#">Trousers</a></li>
			               <li><a href="#">Jenas</a></li>
			               <li><a href="#">Shirts</a></li> 
		            	</ul>
			        </li>
			        <li class="sub">
			            <a href="#">MAN</a>
			            <ul>
			               <li><a href="#">Jackets</a></li>
			               <li><a href="#">Blazers</a></li>
			               <li><a href="#">Suits</a></li>
			               <li><a href="#">Trousers</a></li>
			               <li><a href="#">Jenas</a></li>
			               <li><a href="#">Shirts</a></li> 
			            </ul>
			        </li>
			        <li class="sub">
			            <a href="#">KIDS</a>
			            <ul>
			               <li><a href="#">Jackets</a></li>
			               <li><a href="#">Blazers</a></li>
			               <li><a href="#">Suits</a></li>
			               <li><a href="#">Trousers</a></li>
			               <li><a href="#">Jenas</a></li>
			               <li><a href="#">Shirts</a></li> 
			            </ul>
			        </li>
			        <li class="sub">
			            <a href="#">Shoes&Bags</a>
			            <ul>
			            <li><a href="#">Jackets</a></li>
			               <li><a href="#">Blazers</a></li>
			               <li><a href="#">Suits</a></li>
			               <li><a href="#">Trousers</a></li>
			               <li><a href="#">Jenas</a></li>
			               <li><a href="#">Shirts</a></li> 
			            </ul>
			        </li>
	    		</ul>
        	</div>
	        <div class="menu-colors menu-item">
	            <div class="header-item" >Colors</div>
	            <ul class="color-row1">
	                <li class="color-circle" style="background:#4286f4"></li>
	                <li class="color-circle" style="background:#2acc4b"></li>
	                <li class="color-circle" style="background:#343534"></li>
	                <li class="color-circle" style="background:#5f605f"></li>
	                <li class="color-circle" style="background:#929392"></li>
	            </ul>
	            <ul class="color-row2">
	                <li class="color-circle" style="background:#9e8045"></li>
	                <li class="color-circle" style="background:#d3d3d3"></li>
	                <li class="color-circle" style="background:#6b6666"></li>
	                <li class="color-circle" style="background:#999797"></li>
	                <li class="color-circle" style="background:#923476"></li>
	            </ul>
	        </div>
	        <div class="menu-price menu-item">
	            <div class="header-item" >Price</div>
	            <p>
	                <!--<label for="amount">Price range:</label>-->
	                <input type="text" readonly id="amount"  style="border:0; color:#f6931f; font-weight:bold;">
	            </p>
	            <div id="slider-range"></div>
	        </div>
    	</div>
	</div>
	<div class="col-md-9" style="padding-top: 10%;">
		<div class="col-md-4 tile">
			<div class="col-md-12 cover-img" style="background-image: url('<?php echo base_url();?>media/image/products/5.png'); height: 300px;"></div>
			<p  class="text-center"><span>Varkala Shirt - Olive</span><br><span class="rate">Rs.4000        <s>Rs.5000</s> ( 30% Off )</span></p>
		</div>
		<div class="col-md-4 tile">
			<div class="col-md-12 cover-img" style="background-image: url('<?php echo base_url();?>media/image/products/5.png'); height: 300px;"></div>
			<p  class="text-center"><span>Varkala Shirt - Olive</span><br><span class="rate">Rs.4000        <s>Rs.5000</s> ( 30% Off )</span></p>
		</div>
		<div class="col-md-4 tile">
			<div class="col-md-12 cover-img" style="background-image: url('<?php echo base_url();?>media/image/products/5.png'); height: 300px;"></div>
			<p  class="text-center"><span>Varkala Shirt - Olive</span><br><span class="rate">Rs.4000        <s>Rs.5000</s> ( 30% Off )</span></p>
		</div>
	</div>
</div>










<!--
<div class="container-fluid category-header">
	<h1 class="text-center"><?php echo $categoryval;?></h1>
</div>
<div class="container category-option">
	<div class="col-md-9">
		<select class="theme-select" data-placeholder="Select an option" id="tag" onchange="searchFilter()" style="border:none;">
			<option value="">All</option>  
		<?php 
		foreach ($query1 as $row) {?>
		        <option value="<?php echo $row->tag;?>" style="text-transform: capitalize;"><?php echo $row->tag;?> </option>  
		 <?php }?>
		</select>
	</div>
	<div class="col-md-3 col-xs-8">
		<input type="hidden" id="keywords" value="<?php echo $categoryval; ?>" onkeyup="searchFilter()"/>
		<select class="theme-select" data-placeholder="Select an option" id="sortBy" onchange="searchFilter()" style="border:solid 1px #ccc;">
            <option value="default">Default sorting</option>
            <option value="popular">Sort by popularity</option>
            <option value="new">Sort by newness</option>
        </select>
	</div>
	<div class="col-md-8"></div>
	<div class="col-md-1 col-xs-4">
	</div>
</div>-->
<!--<div class="container-fluid">
		<div class="post-list" id="postList">
			<?php foreach ($query as $row) {
				$category=str_replace(' ', '-', $row->category);
				$title=str_replace(' ', '-', $row->title);?>
			<div class="col-md-3 col-xs-6 product">
				<div class="row">
					<div class="product-img">
						<a href="<?php echo base_url("index.php/product/details/$category/$title"); ?>"><img src="<?php echo base_url();?>uploads/thumb/<?php echo $row->picture;?>" class="img-responsive center-block">
						</a>
					</div>
					<div class="product-details text-center">
						<h4><?php echo $row->title; ?></h4>
						<h5><b>₹<?php  
						$details=$this->user->showattribute($row->category);
						$details1=$this->user->showattributevalue($details[0]->attribute); echo $details1[0]->cost;?></b> 
						<?php if($details1[0]->scost !="0"){?>
						<sub>₹<strike><?php echo $details1[0]->scost;?><?php }?></strike></sub></h5>
					</div>
				</div>
				<a class="button1 theme-btn-circle" href="<?php echo base_url("index.php/product/details/$category/$title"); ?>"><i class="glyphicon glyphicon-shopping-cart" style= ></i></a>
			</div>
			<?php }?>

			 <div class="row col-md-12 col-xs-12 text-center ">
                <ul class="pagination center">
                    <li><?php echo $links; ?></li>
                </ul>
             </div>
		</div>
</div>-->