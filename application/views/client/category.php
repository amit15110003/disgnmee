<div class="container-fluid" style="padding-top: 5%;padding-left: 5%;padding-right: 5%;">
	<div class="col-md-12">
		<ol class="breadcrumb" style="background-color: #fff;">
				  <li><a href="#"><?php echo $categoryval;?></a></li>
				  <li class="active"><?php echo $scategoryval;?></li>
		</ol>
	</div>
	<div class="col-md-3">
		<div class="menu">
			
        	<div class="mini-menu">
	            <ul>         		
	        		<li>
		            	<a href="#" class="hitem" >Ocassion</a><br><br>
		            	<label class="cont">Formal
						  <input type="checkbox" checked="checked">
						  <span class="checkmark"></span>
						</label>
						<label class="cont">Casual
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
						<label class="cont">Festive
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
			        </li>        		
	        		<li>
		            	<br><br><a href="#" class="hitem" >Fabric</a><br><br>
		            	<label class="cont">Cotton
						  <input type="checkbox" checked="checked">
						  <span class="checkmark"></span>
						</label>
						<label class="cont">Linen
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
						<label class="cont">Chambray
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
						<label class="cont">Flannel
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
			        </li>         		
	        		<li>
		            	<br><br><a href="#" class="hitem" >Pattern</a><br><br>
		            	<label class="cont">Solids
						  <input type="checkbox" checked="checked">
						  <span class="checkmark"></span>
						</label>
						<label class="cont">Stripes
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
						<label class="cont">Checks
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
						<label class="cont">Prints
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
			        </li>
			    </ul>
        	</div>
	        <div>
	            <ul>
	            	<br><br><div class="hitem" >Colour</div><br><br>
	                <li class="color-square" style="background:#00ffff"></li>
	                <li class="color-square" style="background:#ff0000"></li>
	                <li class="color-square" style="background:#ffff00"></li>
	                <li class="color-square" style="background:#00ff00"></li>
	                <li class="color-square" style="background:#ff00ff"></li>
	                <li class="color-square" style="background:#0f0f0f"></li>
	                <li class="color-square" style="background:#f0f0f0"></li>
	                <li class="color-square" style="background:#0f0f0f"></li>
	                <li class="color-square" style="background:#fff0f0"></li>
	                <li class="color-square" style="background:#f0f0f0"></li>
	            </ul>
	        </div>
    	</div>
	</div>
	<div class="col-md-9" style="padding: 5%;">
		<?php foreach($query as $row) {
				$category=str_replace(' ', '-', $row->category);
				$title=str_replace(' ', '-', $row->title);?>
		<div class="col-md-4">
			<div class="tile">
				<a href="<?php echo base_url("index.php/product/details/$category/$title"); ?>">
					<div class="col-md-12 cover-img" style="background-image: url('<?php echo base_url();?>uploads/thumb/<?php echo $row->picture;?>'); height: 300px;"></div>
					<p  class="text-center uc"><span><?php echo $row->title; ?></span><br><span class="rate">₹<?php echo $row->price;?></span></p>
				</a>
			</div>
		</div>
		<?php }?>
		<div class="row col-md-12 col-xs-12 text-center ">
                <ul class="pagination center">
                    <li><?php echo $links; ?></li>
                </ul>
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